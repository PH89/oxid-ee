<?php
/**
* Shop System Plugins:
* - Terms of Use can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
* - License can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/LICENSE
*/

$sLangName = 'Korean';

$aLang = array(
    'charset' => 'UTF-8',
    'wd_accept' => 'Accept',
    'wd_account_holder_title' => '계좌 소유자',
    'wd_amount' => 'Amount',
    'wd_bic' => 'BIC:',
    'wd_birthdate_input' => '생년월일',
    'wd_cancel' => 'Cancel',
    'wd_canceled_payment_process' => '결제 프로세스를 취소하셨습니다.',
    'wd_capture' => 'Capture',
    'wd_city' => '도시',
    'wd_company_name_input' => 'Company',
    'wd_config_additional_info' => '추가 정보 전송',
    'wd_config_additional_info_desc' => '사기로부터의 보호를 위해 추가적인 데이터가 전송될 것입니다. 이 추가적인 데이터에는 청구지 / 배송지 주소, 쇼핑 장바구니 및 서술자가 있습니다.',
    'wd_config_allowed_currencies' => '허용된 통화',
    'wd_config_allowed_currencies_desc' => 'Guaranteed Invoice 결제방법은 활성 통화가 이 선택된 통화들 중 하나와 동일한 경우에만 표시됩니다.',
    'wd_config_allow_changed_shipping' => '배송지 주소 변경을 허용합니다',
    'wd_config_allow_changed_shipping_desc' => '사용 가능으로 설정하지 않으면, 배송지 주소가 이전과 다를 경우 소비자가 신용카드 정보를 다시 입력해야 합니다.',
    'wd_config_base_url' => '베이스 URL',
    'wd_config_base_url_desc' => 'Wirecard 베이스 URL. (예: https://api.wirecard.com)',
    'wd_config_billing_countries' => '허용된 청구지 국가',
    'wd_config_billing_countries_desc' => 'Guaranteed Invoice 결제방법은 소비자 배송지 국가가 이 선택된 국가들 중 하나에 동일한 경우에만 표시됩니다. \n\t\t\t\t사전 정의된 다음 국가들이 허용됩니다: AT, DE.',
    'wd_config_billing_shipping' => '청구지/배송지 주소는 동일해야 합니다',
    'wd_config_billing_shipping_desc' => '활성화하면 청구지/배송지 주소가 동일한 경우 Guaranteed Invoice만이 표시됩니다',
    'wd_config_country_code' => 'Country Code',
    'wd_config_country_code_desc' => 'Sofort. requires a valid country code to use the correct logo (i.e. en_gb).',
    'wd_config_creditor_id' => '채권자 ID',
    'wd_config_creditor_id_desc' => 'SEPA는 SEPA 자동 이체 위임을 만들기 위해서는 채권자 ID를 필요로 합니다. 채권자 ID를 얻으려면 담당 은행 기관에 신청하십시오.',
    'wd_config_delete_cancel_order' => '취소된 주문 삭제',
    'wd_config_delete_cancel_order_desc' => '결제 프로세스 취소 후 주문 자동 삭제.',
    'wd_config_delete_failure_order' => '실패한 주문 삭제',
    'wd_config_delete_failure_order_desc' => '결제 프로세스 실패 후 주문 자동 삭제.',
    'wd_config_descriptor' => '서술자',
    'wd_config_descriptor_desc' => '금융 서비스 공급자에 의해 고객에게 발행된 은행 계좌내역서에 표시된 텍스트 전송',
    'wd_config_email' => '사용자 이메일 주소',
    'wd_config_enable_bic' => 'BIC 사용 설정됨',
    'wd_config_http_password' => 'HTTP 비밀번호',
    'wd_config_http_user' => 'HTTP 사용자',
    'wd_config_logo_variant' => '로고 버전',
    'wd_config_logo_variant_desc' => '표준 로고와 서술 로고 버전 중 하나를 고객에게 보여주십시오.',
    'wd_config_merchant_account_id' => '상인 계정 ID',
    'wd_config_merchant_account_id_desc' => '상인 계정에 지정된 고유 식별자.',
    'wd_config_merchant_secret' => '비밀 키',
    'wd_config_merchant_secret_desc' => '비밀 키는 결제에 대한 디지털 서명을 계산하기 위해 필수적입니다.',
    'wd_config_message' => '사용자 메시지',
    'wd_config_payment_action' => '결제 동작',
    'wd_config_payment_action_desc' => '캡처 / 송장 발송하기 위한 \"캡처\" 또는 수동으로 캡처 / 송장 발송하기 위한 \"승인\" 중에서 선택합니다.',
    'wd_config_payolution_terms_url' => 'Payolution URL',
    'wd_config_payolution_terms_url_desc' => 'Mandatory if require consent is set to yes',
    'wd_config_reply_to' => 'Reply to (optionally)',
    'wd_config_require_consent' => 'Require consent',
    'wd_config_require_consent_desc' => 'Consumer must agree with the terms before proceeding with the checkout process.',
    'wd_config_shipping_countries' => '허용된 배송지 국가',
    'wd_config_shipping_countries_desc' => 'Guaranteed Invoice 결제방법은 소비자 청구지 국가가 이 선택된 국가들 중 하나에 동일한 경우에만 표시됩니다. Wirecard 연락처에 따라 다음 국가들이 사전 정의됩니다: AT, DE.',
    'wd_config_shopping_basket' => '쇼핑 장바구니',
    'wd_config_shopping_basket_desc' => '확인상 말씀드리자면, 이 결제 방법은 체크아웃 중에 장바구니 디스플레이를 지원합니다. 이 기능을 사용 설정하면, 장바구니가 활성화됩니다.',
    'wd_config_ssl_max_limit' => '비 3-D 보안 최대. 한계',
    'wd_config_ssl_max_limit_desc' => 'This amount forces 3-D Secure transactions. Enter "null" to disable the Non 3-D Secure Max. Limit.',
    'wd_config_three_d_merchant_account_id' => '3-D 보안 상인 계정 ID',
    'wd_config_three_d_merchant_account_id_desc' => '3D 상인 계정에 지정된 고유 식별자.',
    'wd_config_three_d_merchant_secret' => '3-D 보안 비밀 키',
    'wd_config_three_d_merchant_secret_desc' => '비밀 키는 3D 결제를 위해 디지털 서명을 계산하기 위해 필수입니다.',
    'wd_config_three_d_min_limit' => '3-D 보안 최소. 한계',
    'wd_config_three_d_min_limit_desc' => 'This amount forces 3-D Secure transactions. Enter "null" to disable the 3-D Secure Min. Limit.',
    'wd_config_vault' => '원클릭 체크아웃',
    'wd_config_vault_desc' => '신용카드는 이후 사용을 위해 저장할 수 있습니다',
    'wd_config_wpp_url' => 'Wirecard Payment Page v2 Address (URL WPP v2)',
    'wd_config_wpp_url_desc' => 'Wirecard Payment Page v2 Address (URL WPP v2) (e.g. https://wpp.wirecard.com).',
    'wd_copy_xml_text' => 'XML 복사',
    'wd_country' => '국가',
    'wd_credit' => '환불',
    'wd_creditor' => '채권자',
    'wd_creditor_mandate_id' => '위임서 ID',
    'wd_currency_config' => 'Each currency has to be configured.',
    'wd_customerId' => '고객 ID',
    'wd_date-of-birth' => '배송',
    'wd_date_format_php_code' => 'm/d/Y',
    'wd_date_format_user_hint' => 'MM/DD/YYYY',
    'wd_debtor' => '채무자',
    'wd_debtor_acc_owner' => '계좌 소유자',
    'wd_default_currency' => '기본 통화',
    'wd_descriptor' => '서술자',
    'wd_email' => '이메일',
    'wd_enter_country_code_error' => 'Please enter a valid country code.',
    'wd_enter_valid_email_error' => '유효한 이메일 주소를 입력하십시오.',
    'wd_error_credentials' => '테스트 실패함, 자격증명을 확인하십시오.',
    'wd_error_save_failed' => 'Configuration not valid. Save aborted.',
    'wd_first-name' => '이름',
    'wd_gender' => '성별',
    'wd_heading_title' => 'Wirecard',
    'wd_heading_title_alipay_crossborder' => 'Wirecard Alipay Crossborder',
    'wd_heading_title_creditcard' => 'Wirecard 신용카드',
    'wd_heading_title_eps' => 'Wirecard eps-Überweisung',
    'wd_heading_title_giropay' => 'Wirecard Giropay',
    'wd_heading_title_ideal' => 'Wirecard iDEAL',
    'wd_heading_title_payolution_b2b' => 'Wirecard Guaranteed Invoice (Payolution B2B)',
    'wd_heading_title_payolution_b2b_consumer' => 'Wirecard Invoice (Payolution B2B)',
    'wd_heading_title_payolution_invoice' => 'Wirecard Guaranteed Invoice (Payolution B2C)',
    'wd_heading_title_payolution_invoice_consumer' => 'Wirecard Invoice (Payolution B2C)',
    'wd_heading_title_paypal' => 'Wirecard PayPal',
    'wd_heading_title_pia' => 'Wirecard 사전 결제',
    'wd_heading_title_poi' => 'Wirecard 송장 결제',
    'wd_heading_title_ratepayinvoice' => 'Wirecard Guaranteed Invoice',
    'wd_heading_title_ratepayinvoice_consumer' => 'Wirecard Invoice by Wirecard',
    'wd_heading_title_sepact' => 'Wirecard SEPA Credit Transfer',
    'wd_heading_title_sepadd' => 'Wirecard SEPA Direct Debit',
    'wd_heading_title_sofortbanking' => 'Wirecard Sofort.',
    'wd_heading_title_support' => '지원',
    'wd_heading_title_transaction_details' => 'Wirecard 트랜잭션',
    'wd_house-extension' => '하우스 확장',
    'wd_iban' => 'IBAN:',
    'wd_ideal_legend' => '은행을 선택하세요',
    'wd_ip' => 'IP 주소',
    'wd_last-name' => '성',
    'wd_maid' => 'MAID',
    'wd_manipulated' => 'manipulated',
    'wd_merchant-crm-id' => '상인 CRM ID',
    'wd_message_empty_error' => 'Message cannot be empty.',
    'wd_more_info' => 'More info',
    'wd_no' => 'No',
    'wd_orderNumber' => '주문 번호',
    'wd_order_error' => '결제 프로세스 중 오류 발생. 다시 시도하십시오.',
    'wd_order_error_info' => 'An error occurred in the payment process. The order has been canceled.',
    'wd_order_status' => 'Order status',
    'wd_order_status_authorized' => '승인됨',
    'wd_order_status_cancelled' => 'Cancelled',
    'wd_order_status_failed' => 'Failed',
    'wd_order_status_pending' => 'Pending',
    'wd_order_status_purchased' => 'Paid',
    'wd_order_status_refunded' => 'Refunded',
    'wd_panel_action' => '동작',
    'wd_panel_amount' => '금액',
    'wd_panel_currency' => '통화',
    'wd_panel_details' => '정보',
    'wd_panel_order_id' => 'Order Reference',
    'wd_panel_order_number' => 'Order Number',
    'wd_panel_parent_transaction_id' => '부모 트랜잭션 ID',
    'wd_panel_payment_method' => '결제방법',
    'wd_panel_provider_transaction_id' => 'Provider Transaction ID',
    'wd_panel_transaction' => '트랜잭션',
    'wd_panel_transaction_copy' => 'XML 복사',
    'wd_panel_transaction_date' => '날짜',
    'wd_panel_transaction_state' => '트랜잭션 상태',
    'wd_panel_transcation_id' => '트랜잭션 ID',
    'wd_paymentMethod' => '결제 방법',
    'wd_payment_awaiting' => 'Wirecard의 결제를 기다리는 중',
    'wd_payment_cancelled_text' => 'Payment was cancelled.',
    'wd_payment_cost' => 'Payment cost',
    'wd_payment_failed_text' => 'Payment process failed.',
    'wd_payment_method_settings' => 'Payment method settings',
    'wd_payment_refunded_text' => 'Payment was refunded.',
    'wd_payment_success_text' => 'Payment process successful.',
    'wd_payolution_terms' => 'I agree that the data which are necessary for the liquidation of purchase on account and which are used to complete the identity and credit check are transmitted to Payolution. My <u><a href="%s" target="_blank">consent</a></u> can be revoked at any time with effect for the future.',
    'wd_phone' => '전화',
    'wd_pia_ptrid' => 'Reference',
    'wd_postal-code' => '우편번호',
    'wd_ptrid' => '제공자 트랜잭션 참조 ID',
    'wd_ratepayinvoice_fields_error' => '18세 이상이어야 합니다.',
    'wd_redirect_text' => '리디렉션 중입니다. 잠시 기다려주십시오',
    'wd_refund' => '환불',
    'wd_requestedAmount' => '금액',
    'wd_requestId' => '요청 ID',
    'wd_save_to_user_account' => 'Save data to your user account',
    'wd_secured' => 'secured',
    'wd_send_email' => '제출',
    'wd_sepa_mandate' => 'SEPA 위임서',
    'wd_sepa_text_1' => '본인은 채권자가 본인의 계좌에서',
    'wd_sepa_text_2' => '한 건의 자동 이체를 수취할 수 있도록 은행에 요청합니다. 또한, 본인은 채권자의 지시에 따라 계좌에서 금액을 인출하도록 은행에 요청합니다',
    'wd_sepa_text_2b' => '.',
    'wd_sepa_text_3' => '참고: 본인은 권리의 일부로서, 은행 이용 약관에 따라 환불받을 권리가 있습니다. 환불은 본인 계좌에서 인출된 날로부터 8주 이내에 청구되어야 합니다.',
    'wd_sepa_text_4' => '본인의 계좌에서 금액이 이체되지 않거나 계좌 이체에 이의가 제기될 경우, 은행은 채권자',
    'wd_sepa_text_5' => '에게 본인의 성명, 주소, 생년월일을 제공합니다.',
    'wd_sepa_text_6' => '본인은 SEPA 자동 이체 신청서를 확인했으며 이에 동의합니다.',
    'wd_shipping-method' => '배송 방법',
    'wd_shipping_title' => '배송',
    'SHOP_MODULE_GROUP_wd_emails' => 'Emails',
    'SHOP_MODULE_wd_email_on_pending_orders' => 'Send notification emails when order pending',
    'wd_social-security-number' => '사회보장번호',
    'wd_state_awaiting' => 'awaiting',
    'wd_state_closed' => 'closed',
    'wd_state_error' => 'error',
    'wd_state_success' => 'success',
    'wd_street1' => '거리명',
    'wd_street2' => '거리명 2',
    'wd_success_credentials' => '상인 구성이 성공적으로 테스트되었습니다.',
    'wd_success_email' => '이메일이 성공적으로 전송됨',
    'wd_support_description' => 'System information will be automatically added to your message and will be sent to',
    'wd_support_email_from' => 'From',
    'wd_support_email_modules' => 'Other modules',
    'wd_support_email_module_id' => 'Module ID',
    'wd_support_email_module_title' => 'Module Title',
    'wd_support_email_module_version' => 'Module Version',
    'wd_support_email_php' => 'PHP Version',
    'wd_support_email_reply_to' => 'Reply to',
    'wd_support_email_shop_edition' => 'OXID eShop Edition',
    'wd_support_email_shop_version' => 'OXID eShop Version',
    'wd_support_email_subject' => 'OXID eShop support request',
    'wd_support_email_system' => 'Server Info',
    'wd_support_send_error' => 'Support e-mail could not be sent.',
    'wd_test_credentials' => '테스트',
    'wd_text_article_name' => '제품명',
    'wd_text_article_number' => '제품 번호',
    'wd_text_backend_operations' => '가능한 처리 후 작업',
    'wd_text_delete' => '삭제',
    'wd_text_generic_error' => 'Action could not be performed.',
    'wd_text_generic_success' => 'Action performed successfully.',
    'wd_text_list' => '트랜잭션',
    'wd_text_logo_variant_descriptive' => '서술',
    'wd_text_logo_variant_standard' => '표준',
    'wd_text_message' => '메시지',
    'wd_text_no_data_available' => 'No data available.',
    'wd_text_no_further_operations_possible' => 'No further operations possible.',
    'wd_text_order_no_transactions' => 'There are no associated transactions for this order.',
    'wd_text_payment_action_pay' => 'Purchase',
    'wd_text_payment_action_reserve' => 'Authorization',
    'wd_text_quantity' => '수량',
    'wd_text_support' => 'Support',
    'wd_text_vault' => '원클릭 체크아웃',
    'wd_three_d_link_text' => 'Non 3-D Secure and 3-D Secure Limits',
    'wd_timeStamp' => '날짜',
    'wd_total_amount_not_in_range_text' => 'Total amount not in allowed range.',
    'wd_transactionID' => '트랜잭션 ID',
    'wd_transactionState' => '트랜잭션 상태',
    'wd_transactionType' => '트랜잭션 유형',
    'wd_transaction_details_title' => '트랜잭션 정보',
    'wd_transaction_response_details' => 'Response Details',
    'wd_transfer_notice' => '다음 데이터를 이용하여 금액을 이체하십시오:',
    'wd_unmatched' => 'unmatched',
    'wd_vault_changed_shipping_text' => '지난 번 주문할 때의 배송지 주소와 다릅니다. 보안상의 이유로 새로운 신용 카드 정보를 입력해주실 것을 요청드립니다.',
    'wd_vault_save_text' => '이후 사용을 위해 저장',
    'wd_vault_use_new_text' => '새 신용카드 사용',
    'wd_wait_for_final_status' => 'Please, wait for additional email with the final status of your payment.',
    'wd_warning_credit_card_url_mismatch' => 'Attention: Please check your credentials within the URL setting fields. You might have configured/combined a productive account with a test account.',
    'wd_yes' => 'Yes',
);
