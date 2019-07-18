<?php
/**
* Shop System Plugins:
* - Terms of Use can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
* - License can be found under:
* https://github.com/wirecard/oxid-ee/blob/master/LICENSE
*/

$sLangName = '中文';

$aLang = array(
    'charset' => 'UTF-8',
    'wd_accept' => 'Accept',
    'wd_account_holder_title' => '账户所有者',
    'wd_amount' => 'Amount',
    'wd_bic' => 'BIC:',
    'wd_birthdate_input' => '出生日期',
    'wd_cancel' => 'Cancel',
    'wd_canceled_payment_process' => '您已取消付款过程。',
    'wd_capture' => 'Capture',
    'wd_city' => '城市',
    'wd_company_name_input' => 'Company',
    'wd_config_additional_info' => '发送附加信息',
    'wd_config_additional_info_desc' => '将发送附加数据用于欺诈保护。这些附加数据包括账单/收货地址、购物篮和描述符。',
    'wd_config_allowed_currencies' => '允许货币',
    'wd_config_allowed_currencies_desc' => '仅当有效货币属于任一选定货币时，才会显示保证发票付款方式。',
    'wd_config_allow_changed_shipping' => '允许修改运送地址',
    'wd_config_allow_changed_shipping_desc' => '若禁用，如果两个订单的运送地址发生变化，则消费者需重新输入信用卡详细信息',
    'wd_config_base_url' => '基准 URL',
    'wd_config_base_url_desc' => 'Wirecard 基准 URL。（例如 https://api.wirecard.com）',
    'wd_config_billing_countries' => '可开票国家',
    'wd_config_billing_countries_desc' => '仅当消费者配送国家属于任一选定国家时，才会显示保证发票付款方式。\n\t\t\t\t预先确定了以下允许国家：奥地利、德国。',
    'wd_config_billing_shipping' => '账单/收货地址必须相同',
    'wd_config_billing_shipping_desc' => '如已激活，则仅在账单/收货地址相同时才会显示保证发票付款方式',
    'wd_config_country_code' => 'Country Code',
    'wd_config_country_code_desc' => 'Sofort. requires a valid country code to use the correct logo (i.e. en_gb).',
    'wd_config_creditor_id' => '债权人 ID',
    'wd_config_creditor_id_desc' => 'SEPA 需要债权人 ID 才能创建 SEPA 直接借记授权。请在负责的银行机构申请债权人 ID。',
    'wd_config_delete_cancel_order' => '删除已取消订单',
    'wd_config_delete_cancel_order_desc' => '取消订单后自动删除。',
    'wd_config_delete_failure_order' => '删除支付失败的订单',
    'wd_config_delete_failure_order_desc' => '支付失败后自动删除订单。',
    'wd_config_descriptor' => '描述符',
    'wd_config_descriptor_desc' => '发送由金融服务供应商签发给消费者的银行对账单上显示的文本',
    'wd_config_email' => '您的电子邮件地址',
    'wd_config_enable_bic' => '银行识别码已启用',
    'wd_config_http_password' => 'HTTP 密码',
    'wd_config_http_user' => 'HTTP 用户',
    'wd_config_logo_variant' => '商标版本',
    'wd_config_logo_variant_desc' => '向客户展示标准或描述性商标。',
    'wd_config_merchant_account_id' => '商家账户 ID',
    'wd_config_merchant_account_id_desc' => '为您的商家账户分配的唯一标识符。',
    'wd_config_merchant_secret' => '密钥',
    'wd_config_merchant_secret_desc' => '必须使用密钥以计算付款的数字签名。',
    'wd_config_message' => '您的消息',
    'wd_config_payment_action' => '付款操作',
    'wd_config_payment_action_desc' => '选择“获取”以自动获取您的订单/为您的订单开具发票或“授权”以手动获取/开具发票。',
    'wd_config_payolution_terms_url' => 'Payolution URL',
    'wd_config_payolution_terms_url_desc' => 'Mandatory if require consent is set to yes',
    'wd_config_reply_to' => 'Reply to (optionally)',
    'wd_config_require_consent' => 'Require consent',
    'wd_config_require_consent_desc' => 'Consumer must agree with the terms before proceeding with the checkout process.',
    'wd_config_shipping_countries' => '可配送国家',
    'wd_config_shipping_countries_desc' => '仅当消费者开票国家属于任一选定国家时，才会显示保证发票付款方式。根据您的 Wirecard 合同，预先确定了以下允许国家：奥地利、德国。',
    'wd_config_shopping_basket' => '购物篮',
    'wd_config_shopping_basket_desc' => '为了进行确认，该支付方式支持支付时显示购物车。为启用该特性，激活购物车。',
    'wd_config_ssl_max_limit' => '非 3-D 安全最大限制',
    'wd_config_ssl_max_limit_desc' => 'This amount forces 3-D Secure transactions. Enter "null" to disable the Non 3-D Secure Max. Limit.',
    'wd_config_three_d_merchant_account_id' => '3-D 安全商家账户 ID',
    'wd_config_three_d_merchant_account_id_desc' => '为您的 3D 商家账户分配的唯一标识符。',
    'wd_config_three_d_merchant_secret' => '3-D 安全密钥',
    'wd_config_three_d_merchant_secret_desc' => '必须使用密钥以计算 3D 付款的数字签名。',
    'wd_config_three_d_min_limit' => '3-D 安全最小限制',
    'wd_config_three_d_min_limit_desc' => 'This amount forces 3-D Secure transactions. Enter "null" to disable the 3-D Secure Min. Limit.',
    'wd_config_vault' => '一键支付',
    'wd_config_vault_desc' => '可以保存信用卡以备后用',
    'wd_config_wpp_url' => 'Wirecard Payment Page v2 Address (URL WPP v2)',
    'wd_config_wpp_url_desc' => 'Wirecard Payment Page v2 Address (URL WPP v2) (e.g. https://wpp.wirecard.com).',
    'wd_copy_xml_text' => '复制XML',
    'wd_country' => '国籍',
    'wd_credit' => '退款',
    'wd_creditor' => '贷方',
    'wd_creditor_mandate_id' => '授权 ID',
    'wd_currency_config' => 'Each currency has to be configured.',
    'wd_customerId' => '客户 ID',
    'wd_date-of-birth' => '运输',
    'wd_date_format_php_code' => 'm/d/Y',
    'wd_date_format_user_hint' => 'MM/DD/YYYY',
    'wd_debtor' => '借方',
    'wd_debtor_acc_owner' => '账户所有人',
    'wd_default_currency' => '默认货币',
    'wd_descriptor' => '描述符',
    'wd_email' => '邮箱',
    'wd_enter_country_code_error' => 'Please enter a valid country code.',
    'wd_enter_valid_email_error' => '请输入有效的邮箱地址。',
    'wd_error_credentials' => '测试失败，请检查您的凭证。',
    'wd_error_save_failed' => 'Configuration not valid. Save aborted.',
    'wd_first-name' => '名',
    'wd_gender' => '性别',
    'wd_heading_title' => 'Wirecard',
    'wd_heading_title_alipay_crossborder' => 'Wirecard 支付宝跨境',
    'wd_heading_title_creditcard' => 'Wirecard 信用卡',
    'wd_heading_title_eps' => 'Wirecard eps-Überweisung',
    'wd_heading_title_giropay' => 'Wirecard giropay',
    'wd_heading_title_ideal' => 'Wirecard iDEAL',
    'wd_heading_title_payolution_b2b' => 'Wirecard Guaranteed Invoice (Payolution B2B)',
    'wd_heading_title_payolution_b2b_customer' => 'Wirecard Invoice (Payolution B2B)',
    'wd_heading_title_payolution_invoice' => 'Wirecard Guaranteed Invoice (Payolution B2C)',
    'wd_heading_title_payolution_invoice_customer' => 'Wirecard Invoice (Payolution B2C)',
    'wd_heading_title_paypal' => 'Wirecard PayPal',
    'wd_heading_title_pia' => 'Wirecard 预付方式',
    'wd_heading_title_poi' => 'Wirecard 发票付款方式',
    'wd_heading_title_ratepayinvoice' => 'Wirecard 保证发票',
    'wd_heading_title_ratepayinvoice_customer' => 'Wirecard Invoice by Wirecard',
    'wd_heading_title_sepact' => 'Wirecard SEPA Credit Transfer',
    'wd_heading_title_sepadd' => 'Wirecard SEPA Direct Debit',
    'wd_heading_title_sofortbanking' => 'Wirecard Sofort。',
    'wd_heading_title_support' => '支持',
    'wd_heading_title_transaction_details' => 'Wirecard 交易',
    'wd_house-extension' => '住宅号码',
    'wd_iban' => 'IBAN:',
    'wd_ideal_legend' => '选择您的银行',
    'wd_ip' => 'IP 地址',
    'wd_last-name' => '姓',
    'wd_maid' => 'MAID',
    'wd_manipulated' => 'manipulated',
    'wd_merchant-crm-id' => '商家CRM ID',
    'wd_message_empty_error' => 'Message cannot be empty.',
    'wd_more_info' => 'More info',
    'wd_no' => 'No',
    'wd_orderNumber' => '订单号',
    'wd_order_error' => '付款过程发生错误。请重试。',
    'wd_order_error_info' => 'An error occurred in the payment process. The order has been canceled.',
    'wd_order_status' => 'Order status',
    'wd_order_status_authorized' => '已授权',
    'wd_order_status_cancelled' => 'Cancelled',
    'wd_order_status_failed' => 'Failed',
    'wd_order_status_pending' => 'Pending',
    'wd_order_status_purchased' => 'Paid',
    'wd_order_status_refunded' => 'Refunded',
    'wd_panel_action' => '操作',
    'wd_panel_amount' => '金额',
    'wd_panel_currency' => '货币',
    'wd_panel_details' => '细节',
    'wd_panel_order_id' => 'Order Reference',
    'wd_panel_order_number' => 'Order Number',
    'wd_panel_parent_transaction_id' => '父交易 ID',
    'wd_panel_payment_method' => '付款方式',
    'wd_panel_provider_transaction_id' => 'Provider Transaction ID',
    'wd_panel_transaction' => '交易',
    'wd_panel_transaction_copy' => '复制 XML',
    'wd_panel_transaction_date' => '日期',
    'wd_panel_transaction_state' => '交易状态',
    'wd_panel_transcation_id' => '交易 ID',
    'wd_paymentMethod' => '支付方式',
    'wd_payment_awaiting' => '等待 Wirecard 付款',
    'wd_payment_cancelled_text' => 'Payment was cancelled.',
    'wd_payment_cost' => 'Payment cost',
    'wd_payment_failed_text' => 'Payment process failed.',
    'wd_payment_method_settings' => 'Payment method settings',
    'wd_payment_refunded_text' => 'Payment was refunded.',
    'wd_payment_success_text' => 'Payment process successful.',
    'wd_payolution_terms' => 'I agree that the data which are necessary for the liquidation of purchase on account and which are used to complete the identity and credit check are transmitted to Payolution. My <u><a href="%s" target="_blank">consent</a></u> can be revoked at any time with effect for the future.',
    'wd_phone' => '联系电话',
    'wd_pia_ptrid' => 'Reference',
    'wd_postal-code' => '邮编',
    'wd_ptrid' => '供应商交易参考 ID',
    'wd_ratepayinvoice_fields_error' => '您必须年满 18 周岁才能订购。',
    'wd_redirect_text' => '您正在重定向。请稍候',
    'wd_refund' => '退款',
    'wd_requestedAmount' => '金额',
    'wd_requestId' => '请求 ID',
    'wd_save_to_user_account' => 'Save data to your user account',
    'wd_secured' => 'secured',
    'wd_send_email' => '提交',
    'wd_sepa_mandate' => 'SEPA 授权',
    'wd_sepa_text_1' => '我授权该贷方',
    'wd_sepa_text_2' => '向我的银行发送指示，以便从我的账户中直接收取一笔账目。与此同时，我指派我的银行根据贷方的指示在我的账户上记录相应的债务。',
    'wd_sepa_text_2b' => '。',
    'wd_sepa_text_3' => '备注：作为我权力的一部分，根据我与银行之间协议的使用条款，我应当获得退款。该退款必须在我账户计入债务起的 8 周内索取。',
    'wd_sepa_text_4' => '我不可撤销地同意，当无法如期执行直接扣款或是直接扣款受到阻碍时，我的银行可以向贷方',
    'wd_sepa_text_5' => '公布我的全名、地址以及出生日期。',
    'wd_sepa_text_6' => '我已经阅读并接受 SEPA 直接扣款授权令的信息。',
    'wd_shipping-method' => '运输方式',
    'wd_shipping_title' => '运输',
    'SHOP_MODULE_GROUP_wd_emails' => 'Emails',
    'SHOP_MODULE_wd_email_on_pending_orders' => 'Send notification emails when order pending',
    'wd_social-security-number' => '社保编号',
    'wd_state_awaiting' => 'awaiting',
    'wd_state_closed' => 'closed',
    'wd_state_error' => 'error',
    'wd_state_success' => 'success',
    'wd_street1' => '街道',
    'wd_street2' => '街道 2',
    'wd_success_credentials' => '商家配置已成功通过测试。',
    'wd_success_email' => '电子邮件已发送成功',
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
    'wd_test_credentials' => '测试',
    'wd_text_article_name' => '产品编号',
    'wd_text_article_number' => '商品编号',
    'wd_text_backend_operations' => '可能的后续处理',
    'wd_text_delete' => '删除',
    'wd_text_generic_error' => 'Action could not be performed.',
    'wd_text_generic_success' => 'Action performed successfully.',
    'wd_text_list' => '交易',
    'wd_text_logo_variant_descriptive' => '描述性',
    'wd_text_logo_variant_standard' => '标准的',
    'wd_text_message' => '消息',
    'wd_text_no_data_available' => 'No data available.',
    'wd_text_no_further_operations_possible' => 'No further operations possible.',
    'wd_text_order_no_transactions' => 'There are no associated transactions for this order.',
    'wd_text_payment_action_pay' => 'Purchase',
    'wd_text_payment_action_reserve' => 'Authorization',
    'wd_text_quantity' => '数量',
    'wd_text_support' => 'Support',
    'wd_text_vault' => '一键支付',
    'wd_three_d_link_text' => 'Non 3-D Secure and 3-D Secure Limits',
    'wd_timeStamp' => '日期',
    'wd_total_amount_not_in_range_text' => 'Total amount not in allowed range.',
    'wd_transactionID' => '交易 ID',
    'wd_transactionState' => '交易状态',
    'wd_transactionType' => '交易类型',
    'wd_transaction_details_title' => '交易细节',
    'wd_transaction_response_details' => 'Response Details',
    'wd_transfer_notice' => '请使用以下数据转账：',
    'wd_unmatched' => 'unmatched',
    'wd_vault_changed_shipping_text' => '与上个订单相比，您的发货地址发生了变动。出于安全，您需要输入新的信用卡详细信息。',
    'wd_vault_save_text' => '保存以备后用。',
    'wd_vault_use_new_text' => '使用新信用卡',
    'wd_wait_for_final_status' => 'Please, wait for additional email with the final status of your payment.',
    'wd_yes' => 'Yes',
);
