<?php

namespace Modules\Payment\Gateways;
use Omnipay\Omnipay;
use Modules\Cart\Facades\Cart;
use Omnipay\Common\CreditCard;
use Modules\Payment\NullResponse;

class BoondiTranfer
{
    public $label;
    public $description;

    public function __construct()
    {
        $this->label = "DirectPay® Getway";
        $this->description = "sdfsdfsdf";
    }

    public function gateway()
    {
        return tap(Omnipay::create('Stripe'), function ($gateway) {
            $gateway->setApiKey(setting('stripe_secret_key'));
        });
    }

    public function purchase($order, $request)
    {
        return new NullResponse;
    }
}
