<?php
/**
 * Shop System Plugins:
 * - Terms of Use can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
 * - License can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/LICENSE
 */

namespace Wirecard\Oxid\Extend;

use OxidEsales\EshopCommunity\Application\Model\State;
use \Wirecard\Oxid\Core\Payment_Method_Factory;
use \Wirecard\PaymentSdk\Entity\Amount;
use \Wirecard\PaymentSdk\Response\Response;
use \Wirecard\PaymentSdk\Response\SuccessResponse;
use \Wirecard\PaymentSdk\Transaction\Transaction;
use \Wirecard\PaymentSdk\TransactionService;
use \Wirecard\PaymentSdk\Response\FailureResponse;
use \Wirecard\PaymentSdk\Response\InteractionResponse;
use \Wirecard\PaymentSdk\Entity\Redirect;

use \OxidEsales\Eshop\Core\Registry;
use \OxidEsales\Eshop\Application\Model\Payment;
use \OxidEsales\Eshop\Application\Model\Basket;
use \OxidEsales\Eshop\Application\Model\Order;
use \OxidEsales\Eshop\Application\Model\User;



/**
 * Class BasePaymentGateway
 *
 * Base class for all payment methods
 *
 * @mixin  \OxidEsales\Eshop\Application\Model\PaymentGateway
 *
 */
class Payment_Gateway extends Payment_Gateway_parent
{
    const NAME = 'wdpaypal';

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $oLogger;

    /**
     * @var \OxidEsales\Eshop\Core\Language
     */
    private $oLang;

    /**
     * BasePaymentGateway constructor.
     *
     * @SuppressWarnings(PHPMD.Coverage)
     */
    public function __construct()
    {
        $this->oLogger = Registry::getLogger();
        $this->oLang = Registry::getLang();
    }

    /**
     * Executes payment, returns true on success.
     *
     * @param double                      $dAmount Goods amount
     * @param \Wirecard\Oxid\Extend\Order $oOrder  User ordering object
     *
     * @return Response|FailureResponse|S
     *
     * @override
     *
     * @SuppressWarnings(PHPMD.Coverage)
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function executePayment($dAmount, &$oOrder)
    {
        if (!$oOrder->isWirecardPaymentType()) {
            return parent::executePayment($dAmount, $oOrder);
        }

        $oResponse = null;

        try {
            $oResponse = self::makeTransaction($dAmount, $oOrder);
        } catch (\Exception $exc) {
            $this->oLogger->error("Error processing transaction", [$exc]);
            return false;
        }

        if ($oResponse instanceof FailureResponse) {
            $this->oLogger->error('Error processing transaction:');

            foreach ($oResponse->getStatusCollection() as $oStatus) {
                /**
                 * @var $oStatus \Wirecard\PaymentSdk\Entity\Status
                 */
                $sSeverity = ucfirst($oStatus->getSeverity());
                $sCode = $oStatus->getCode();
                $sDescription = $oStatus->getDescription();
                $this->oLogger->error("\t$sSeverity with code $sCode and message '$sDescription' occurred.");
            }
            return false;
        }
        $sPageUrl = null;
        if ($oResponse instanceof InteractionResponse) {
            $sPageUrl = $oResponse->getRedirectUrl();
        }
        Registry::getUtils()->redirect($sPageUrl);
        return true;
    }

    /**
     * Returns country code
     *
     * @param string $countryId
     *
     * @return string
     *
     * @SuppressWarnings(PHPMD.Coverage)
     */
    public function getCountryCode($countryId)
    {
        $country = oxNew(\OxidEsales\Eshop\Application\Model\Country::class);
        $country->load($countryId);
        return $country->oxcountry__oxisoalpha2->value;
    }

    /**
     * Returns a descriptor
     *
     * @param string $orderId the order ID to get the descriptor from
     *
     * @return string
     *
     * @SuppressWarnings(PHPMD.Coverage)
     */
    public function getDescriptor($orderId)
    {
        $shopId = \OxidEsales\Eshop\Core\Registry::getConfig()->getShopId();
        $shop = oxNew(\OxidEsales\Eshop\Application\Model\Shop::class);
        $shop->load($shopId);
        return $shop->oxshops__oxname->value . " " . $orderId;
    }

    /**
     * Returns a redirect object
     *
     * @param string $oSession
     *
     * @param string $sShopUrl
     *
     * @return string
     *
     * @SuppressWarnings(PHPMD.Coverage)
     */
    public function getRedirectUrls($oSession, $sShopUrl)
    {
        $sSid = $oSession->sid(true);
        if ($sSid != '') {
            $sSid = '&' . $sSid;
        }

        $sErrorText = $this->oLang->translateString('order_error');
        $oRedirect = new Redirect(
            $sShopUrl . 'index.php?cl=thankyou' . $sSid,
            $sShopUrl . 'index.php?type=cancel&cl=payment',
            $sShopUrl . 'index.php?type=error&cl=payment&errortext=' . urlencode($sErrorText)
        );
        return $oRedirect;
    }

    /**
     * Returns a "Response"
     *
     * @param float $dAmount Amount to pay
     *
     * @param Order $oOrder the actual Order object
     *
     * @return FailureResponse|InteractionResponse|Response|SuccessResponse
     *
     * @throws \Exception
     *
     * @SuppressWarnings(PHPMD.Coverage)
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ElseExpression)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function makeTransaction($dAmount, $oOrder)
    {
        $sShopUrl = $this->getConfig()->getCurrentShopUrl();
        $oSession = $this->getSession();

        $oRedirect = self::getRedirectUrls($oSession, $sShopUrl);
        $oPaymentMethod = Payment_Method_Factory::create(self::NAME);
        $oTransactionService = new TransactionService($oPaymentMethod->getConfig(), $this->oLogger);

        $oTransaction = $oPaymentMethod->getTransaction();
        $oTransaction->setRedirect($oRedirect);

        $oShopconfig = $this->getConfig();
        $oCurrency = $oShopconfig->getActShopCurrencyObject();
        $oTransaction->setAmount(new Amount($dAmount, $oCurrency->name));

        $oBasket = $oSession->getBasket();
        $oUser = $oBasket->getBasketUser();

        //TODO cgrach: use order detail from oxid's order.
        $oTransaction->setOrderDetail(sprintf(
            '%s %s %s',
            $oOrder->oxorder__oxbillemail->value,
            $oUser->oxuser__oxfname->value,
            $oUser->oxuser__oxlname->value
        ));

        $oPayment = oxNew(Payment::class);
        $oPayment->load(self::NAME);


        if ($oPayment->oxpayments__wdoxidee_additional_info->value) {
            $this->_addAdditionalInfo($oTransaction, $oOrder, $oUser);
        }

        if ($oPayment->oxpayments__wdoxidee_descriptor->value) {
            $descriptor = self::getDescriptor($oOrder->oxorder__oxid->value);
            $oTransaction->setDescriptor($descriptor);
        }

        if ($oPayment->oxpayments__wdoxidee_basket->value) { //add basket data
            $finalPrice = array();
            $contents = $oBasket->getContents();
            foreach ($contents as $content) {
                $finalPrice[$content->getProductId()] = $content->getFUnitPrice();
            }

            $oWdBasket = new \Wirecard\PaymentSdk\Entity\Basket();
            $oWdBasket->setVersion($oTransaction);
            $oArticles = $oBasket->getBasketSummary()->aArticles;
            $oCurrency = $this->getConfig()->getActShopCurrencyObject();

            foreach ($oArticles as $key => $value) {
                $oArticle = oxNew(\OxidEsales\EshopCommunity\Application\Model\Article::class);
                $oArticle->load($key);
                $item = new \Wirecard\PaymentSdk\Entity\Item(
                    $oArticle->oxarticles__oxtitle->value,
                    new Amount($finalPrice[$key], $oCurrency->name),
                    $value
                );
                $oWdBasket->add($item);
            }
            $oTransaction->setBasket($oWdBasket);
        }

        $oTransaction->setNotificationUrl($sShopUrl . 'notify.php');
        $oResponse = $oTransactionService->pay($oTransaction);
        return $oResponse;
    }

    /**
     * Add additional info to the transaction
     *
     * @param Transaction $oTransaction
     * @param Order $oOrder
     * @param User $oUser
     */
    private function _addAdditionalInfo(
        Transaction &$oTransaction,
        Order $oOrder,
        User $oUser)
    {
        $oViewConfig = oxNew('oxViewConfig');
        $ip = $oViewConfig->getRemoteAddress();
        $oTransaction->setIpAddress($ip);

        $oTransaction->setConsumerId($oUser->oxuser__oxid->value);
        $oTransaction->setOrderNumber($oOrder->oxorder__oxid->value);

        $address = new \Wirecard\PaymentSdk\Entity\Address(
            self::getCountryCode($oUser->oxuser__oxcountryid),
            $oUser->oxuser__oxcity->value,
            $oUser->oxuser__oxstreet->value . ' ' . $oUser->oxuser__oxstreetnr->value
        );
        $address->setPostalCode($oUser->oxuser__oxzip->value);
        $address->setState($oUser->getStateTitle());
        $address->setStreet2($oUser->oxuser__oxaddinfo->value);


        $oAcHolder = new \Wirecard\PaymentSdk\Entity\AccountHolder();
        $oAcHolder->setAddress($address);
        $oAcHolder->setFirstName($oUser->oxuser__oxfname->value);
        $oAcHolder->setLastName($oUser->oxuser__oxlname->value);
        $oAcHolder->setPhone($oUser->oxuser__oxfon->value);
        $oAcHolder->setEmail($oOrder->oxorder__oxbillemail->value);

        $oTransaction->setAccountHolder($oAcHolder);

        if ($oOrder->oxorder__oxdelfname->value) { //shipping address exists
            $addressShipping = new \Wirecard\PaymentSdk\Entity\Address(
                self::getCountryCode($oOrder->oxorder__oxdelcountryid),
                $oOrder->oxorder__oxdelcity->value,
                $oOrder->oxorder__oxdelstreet->value . ' ' . $oUser->oxuser__oxdelstreetnr->value
            );
            $addressShipping->setPostalCode($oOrder->oxorder__oxdelzip->value);
            $oState = oxNew(State::class);
            $addressShipping->setState($oState->getTitleById($oOrder->oxOrder__oxdelstateid->value));
            $addressShipping->setStreet2($oOrder->oxOrder__oxdeladdinfo->value);

            $shippingAccount = new \Wirecard\PaymentSdk\Entity\AccountHolder();
            $shippingAccount->setAddress($addressShipping);
            $shippingAccount->setFirstName($oOrder->oxorder__oxdelfname->value);
            $shippingAccount->setLastName($oOrder->oxorder__oxdellname->value);
            $shippingAccount->setPhone($oOrder->oxorder__oxdelfon->value);
            $oTransaction->setShipping($shippingAccount);
        } else {
            $oTransaction->setShipping($oAcHolder);
        }

        //TODO cgrach: add device info https://document-center.wirecard.com/pages/viewpage.action?pageId=3702802
    }
}
