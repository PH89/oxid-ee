[{$smarty.block.parent}]

[{if $order->isCustomPaymentMethod() }]

  [{if $order->isPaymentPending() }]
    [{oxmultilang ident="wd_payment_awaiting"}]
  [{elseif $order->isPaymentSuccess() }]
    [{oxmultilang ident="wd_payment_success_text"}]
  [{else}]
    [{oxmultilang ident="wd_order_error_info"}]
  [{/if}]

[{/if}]