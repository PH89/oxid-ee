<?php
/**
 * Shop System Plugins:
 * - Terms of Use can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
 * - License can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/LICENSE
 */

namespace Wirecard\Oxid\Model;

use \Wirecard\Oxid\Core\Helper;
use \Wirecard\PaymentSdk\Config\Config;
use \Exception;

use \OxidEsales\Eshop\Application\Model\Payment;
use \OxidEsales\Eshop\Application\Model\UserPayment;
use \OxidEsales\Eshop\Core\Registry;

use \Psr\Log\LoggerInterface;

/**
 * Class PaymentMethod
 *
 */
abstract class PaymentMethod
{
    const OXID_NAME_PREFIX = 'wd';

    /**
     * @var string
     */
    protected static $_sName = 'undefined';

    /**
     * @var LoggerInterface
     */
    protected $_oLogger;

    /**
     * PaymentMethod constructor.
     *
     * @throws Exception if payment method name is not overwritten in child class
     *
     */
    public function __construct()
    {
        $this->_oLogger = Registry::getLogger();

        if ($this::$_sName == 'undefined') {
            throw new Exception("payment method name not defined: " . get_class());
        }
    }

    /**
     * Get the payments method configuration
     *
     * @param Payment $oPayment
     *
     * @return Config
     *
     */
    public function getConfig($oPayment)
    {
        $oConfig = new Config(
            $oPayment->oxpayments__wdoxidee_apiurl->value,
            $oPayment->oxpayments__wdoxidee_httpuser->value,
            $oPayment->oxpayments__wdoxidee_httppass->value
        );

        return $oConfig;
    }

    /**
     * Get the payments method transaction configuration
     *
     * @return \Wirecard\PaymentSdk\Transaction\Transaction
     *
     */
    abstract public function getTransaction();

    /**
     * Get the payment methods name
     *
     * @param bool $bForOxid
     *
     * @return string
     *
     * @SuppressWarnings(PHPMD.BooleanArgumentFlag)
     */
    public static function getName(bool $bForOxid = false): string
    {
        $childClass = get_called_class();

        if ($bForOxid) {
            return self::OXID_NAME_PREFIX . $childClass::$_sName;
        }

        return $childClass::$_sName;
    }

    /**
     * Returns the prefixed Oxid payment method name
     *
     * @param string $sSDKName
     *
     * @return string
     *
     */
    public static function getOxidFromSDKName(string $sSDKName): string
    {
        return self::OXID_NAME_PREFIX . $sSDKName;
    }

    /**
     * Returns an array of fields to be displayed in the payment method config.
     *
     * @return array
     */
    public function getConfigFields()
    {
        return [
            'apiUrl' => [
                'type' => 'text',
                'field' => 'oxpayments__wdoxidee_apiurl',
                'title' => Helper::translate('config_base_url'),
                'description' => Helper::translate('config_base_url_desc'),
            ],
            'httpUser' => [
                'type' => 'text',
                'field' => 'oxpayments__wdoxidee_httpuser',
                'title' => Helper::translate('config_http_user'),
            ],
            'httpPassword' => [
                'type' => 'text',
                'field' => 'oxpayments__wdoxidee_httppass',
                'title' => Helper::translate('config_http_password'),
            ],
            'maid' => [
                'type' => 'text',
                'field' => 'oxpayments__wdoxidee_maid',
                'title' => Helper::translate('config_merchant_account_id'),
                'description' => Helper::translate('config_three_d_merchant_account_id_desc'),
            ],
            'secret' => [
                'type' => 'text',
                'field' => 'oxpayments__wdoxidee_secret',
                'title' => Helper::translate('config_merchant_secret'),
                'description' => Helper::translate('config_three_d_merchant_secret_desc'),
            ],
            'descriptor' => [
                'type' => 'select',
                'field' => 'oxpayments__wdoxidee_descriptor',
                'options' => [
                    '1' => Helper::translate('yes'),
                    '0' => Helper::translate('no'),
                ],
                'title' => Helper::translate('config_descriptor'),
                'description' => Helper::translate('config_descriptor_desc'),
            ],
            'additionalInfo' => [
                'type' => 'select',
                'field' => 'oxpayments__wdoxidee_additional_info',
                'options' => [
                    '1' => Helper::translate('yes'),
                    '0' => Helper::translate('no'),
                ],
                'title' => Helper::translate('config_additional_info'),
                'description' => Helper::translate('config_additional_info_desc'),
            ],
            'paymentAction' => [
                'type' => 'select',
                'field' => 'oxpayments__wdoxidee_transactionaction',
                'options' => Transaction::getTranslatedActions(),
                'title' => Helper::translate('config_payment_action'),
                'description' => Helper::translate('config_payment_action_desc'),
            ],
        ];
    }
}