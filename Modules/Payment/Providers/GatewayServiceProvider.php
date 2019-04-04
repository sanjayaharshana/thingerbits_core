<?php

namespace Modules\Payment\Providers;

use Modules\Payment\Gateways\COD;
use Modules\Payment\Facades\Gateway;
use Modules\Payment\Gateways\Stripe;
use Illuminate\Support\ServiceProvider;
use Modules\Payment\Gateways\BankTransfer;
use Modules\Payment\Gateways\CheckPayment;
use Modules\Payment\Gateways\PayPalExpress;

class GatewayServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! config('app.installed')) {
            return;
        }

        $this->registerPayPalExpress();
        $this->registerStripe();
        $this->registerCashOnDelivery();
        $this->registerBankTransfer();
        $this->registerCheckPayment();
    }

    private function registerPayPalExpress()
    {
        if (setting('paypal_express_enabled')) {
            Gateway::register('paypal_express', new PayPalExpress);
        }
    }

    private function registerStripe()
    {
        if (setting('stripe_enabled')) {
            Gateway::register('stripe', new Stripe);
        }
    }

    private function registerCashOnDelivery()
    {
        if (setting('cod_enabled')) {
            Gateway::register('cod', new COD);
        }
    }

    private function registerBankTransfer()
    {
        if (setting('bank_transfer_enabled')) {
            Gateway::register('bank_transfer', new BankTransfer);
        }
    }

    private function registerCheckPayment()
    {
        if (setting('check_payment_enabled')) {
            Gateway::register('check_payment', new CheckPayment);
        }
    }
}
