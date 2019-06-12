<?php
/**
 * Shop System Plugins:
 * - Terms of Use can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
 * - License can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/LICENSE
 */

namespace Wirecard\Oxid\Tests\Acceptance;

use Wirecard\Oxid\Model\EpsPaymentMethod;

/**
 * Acceptance tests for the eps checkout flow.
 */
class EpsCheckoutTest extends CheckoutTestCase
{
    public function getPaymentMethodName()
    {
        return EpsPaymentMethod::getName(true);
    }

    public function testCheckout()
    {
        $this->goThroughCheckout();
        $this->goThroughExternalFlow();
        $this->waitForRedirectConfirmation();

        $this->assertPaymentSuccessful();
    }

    private function goThroughExternalFlow()
    {
        $this->waitForElement($this->getLocator('external.eps.bic'), 30);
        $this->type(
            $this->getLocator('external.eps.bic'),
            $this->getConfig('payments.eps.bic')
        );
        $this->clickAndWait($this->getLocator('external.eps.submitBic'), 30);
        $this->type(
            $this->getLocator('external.eps.id'),
            $this->getConfig('payments.eps.id')
        );
        $this->clickAndWait($this->getLocator('external.eps.submitLogin'), 30);
        $this->clickAndWait($this->getLocator('external.eps.submitSign'), 30);
        $this->clickAndWait($this->getLocator('external.eps.submitFinalize'), 30);
        $this->clickAndWait($this->getLocator('external.eps.submitConfirm'), 30);
        $this->click($this->getLocator('external.eps.backToShop'));
    }
}
