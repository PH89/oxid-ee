<?php
/**
 * Shop System Plugins:
 * - Terms of Use can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
 * - License can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/LICENSE
 */

namespace Wirecard\Oxid\Controller\Admin\Order;

use Wirecard\Oxid\Controller\Admin\Tab;
use Wirecard\Oxid\Core\Helper;
use Wirecard\Oxid\Core\ResponseMapper;

/**
 * Controls the view for a single order tab.
 *
 * @since 1.0.0
 */
class OrderTab extends Tab
{
    /**
     * @var ResponseMapper
     *
     * @since 1.0.0
     */
    protected $_oResponseMapper;

    /**
     * TransactionTab constructor.
     *
     * @since 1.0.0
     */
    public function __construct()
    {
        parent::__construct();

        if ($this->_isListObjectIdSet()) {
            $this->_oOrder->load($this->_sListObjectId);
            $this->_oTransaction->loadWithTransactionId($this->_oOrder->oxorder__wdoxidee_transactionid->value);

            if ($this->_oTransaction->isLoaded()) {
                $this->_oResponseMapper = new ResponseMapper($this->_oTransaction->getResponseXML());
            }
        }
    }

    /**
     * @inheritdoc
     *
     * @return string
     *
     * @since 1.0.0
     */
    public function render()
    {
        $sTemplate = parent::render();

        if ($this->_isListObjectIdSet()) {
            Helper::addToViewData($this, [
                'emptyText' => Helper::translate('wd_text_order_no_transactions'),
            ]);
        }

        return $sTemplate;
    }
}
