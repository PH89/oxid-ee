<?php
/**
 * Shop System Plugins:
 * - Terms of Use can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
 * - License can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/LICENSE
 */

namespace Wirecard\Oxid\Tests\Unit\Controller\Admin;

class TestDataHelper
{
    public static function getDemoData()
    {
        $sEncodedXml = base64_encode(file_get_contents(dirname(__FILE__) . '/../../../resources/success_response_transaction_handler.xml'));

        return [
            [
                'table' => 'oxorder',
                'columns' => ['oxid', 'oxordernr', 'oxpaymenttype', 'wdoxidee_transactionid', 'wdoxidee_sepamandate'],
                'rows' => [
                    ['oxid 1', 2, 'wdpaypal', 'transaction 1', 'SEPA mandate test text'],
                    ['oxid 2', 3, 'wdpaypal', 'transaction 1', null],
                    ['oxid 3', 4, 'wdratepay-invoice', 'transaction 1', null],
                ]
            ],
            [
                'table' => 'wdoxidee_ordertransactions',
                'columns' => ['oxid', 'orderid', 'ordernumber', 'transactionid', 'parenttransactionid', 'action', 'type', 'state', 'amount', 'currency', 'responsexml'],
                'rows' => [
                    ['transaction 1', 'oxid 1', 2, 'transaction 1', null, 'reserve', 'authorization', 'success', 100, 'EUR', $sEncodedXml],
                    ['transaction 2', 'oxid 1', 2, 'transaction 2', 'transaction 1', 'reserve', 'capture', 'awaiting', 100, 'EUR', $sEncodedXml],
                ]
            ],
        ];
    }

    public static function getSuccessXmlResponse() {
        return file_get_contents(dirname(__FILE__) . '/../../../resources/success_response.xml');
    }
}
