[{oxstyle include=$oViewConf->getPaymentGatewayUrl("out/css/wirecard_wdoxidee_modal.css")}]
[{oxscript include=$oViewConf->getPaymentGatewayUrl('out/js/wirecard_wdoxidee_sepadd.js') priority=9}]

<style>
  .wd-modal {
    display: none;
  }
</style>

[{assign var="payment" value=$oView->getPayment()}]
[{assign var="isConsentNeeded" value=$oView->isConsentNeeded()}]
[{if $payment->oxpayments__oxid->value == "wdsepadd"}]
  <div class="well well-sm cart-buttons">
    <button id="openMandateModal" class="btn btn-lg btn-primary pull-right submitButton nextStep largeButton">
      [{oxmultilang ident="SUBMIT_ORDER"}]
    </button>
    <div class="clearfix"></div>
  </div>
  [{include file="sepa_mandate_modal.tpl"}]
[{elseif $isConsentNeeded}]
  <form action="[{$oViewConf->getSslSelfLink()}]" method="post" id="orderConfirmAgbBottom" class="form-horizontal">

    <div class="hidden">
      [{$oViewConf->getHiddenSid()}]
      [{$oViewConf->getNavFormParams()}]
      <input type="hidden" name="cl" value="order">
      <input type="hidden" name="fnc" value="[{$oView->getExecuteFnc()}]">
      <input type="hidden" name="challenge" value="[{$challenge}]">
      <input type="hidden" name="sDeliveryAddressMD5" value="[{$oView->getDeliveryAddressMD5()}]">

    [{if $oView->isActive('PsLogin') || !$oView->isConfirmAGBActive()}]
    <input type="hidden" name="ord_agb" value="1">
    [{else}]
    <input type="hidden" name="ord_agb" value="0">
    [{/if}]
      <input type="hidden" name="oxdownloadableproductsagreement" value="0">
      <input type="hidden" name="oxserviceproductsagreement" value="0">
    </div>

    <div class="well well-sm cart-buttons">
      <div>
        <input type="checkbox" name="terms_checkbox" id="terms-checkbox"/>
        <label for="terms-checkbox" style="display: inline">
          [{oxmultilang ident="wd_payolution_terms" args=$payment->oxpayments__payolution_terms_url->value}]
        </label>
      </div>
      [{block name="checkout_order_btn_submit_bottom"}]
      <button type="submit" disabled id="payolution-inv-order-button"
              class="btn btn-lg btn-primary pull-right submitButton nextStep largeButton">
        <i class="fa fa-check"></i> [{oxmultilang ident="SUBMIT_ORDER"}]
      </button>
      [{/block}]

      <div class="clearfix"></div>
    </div>
  </form>
[{else}]
  [{$smarty.block.parent}]
[{/if}]

[{if $isConsentNeeded}]
  <script>
    var checkbox = document.getElementById("terms-checkbox");
    var button = document.getElementById("payolution-inv-order-button");

    checkbox.onclick = function () {
      button.disabled = !checkbox.checked;
    };
  </script>
[{/if}]
