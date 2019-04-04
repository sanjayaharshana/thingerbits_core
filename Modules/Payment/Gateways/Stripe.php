<?php

namespace Modules\Payment\Gateways;

use Omnipay\Omnipay;
use Modules\Cart\Facades\Cart;

class Stripe
{
    public $label;
    public $description;

    public function __construct()
    {
        $this->label = setting('stripe_label');
        $this->description = setting('stripe_description');
    }

    public function gateway()
    {
        return tap(Omnipay::create('Stripe'), function ($gateway) {
            $gateway->setApiKey(setting('stripe_secret_key'));
        });
    }

    public function purchase($order, $request)
    {
        return $this->gateway()
            ->purchase([
                'amount' => Cart::total()->round()->amount(),
                'currency' => setting('default_currency'),
                'token' => $request->stripe_token,
                'metadata' => ['order_id' => $order->id],
            ])
            ->send();
    }
}
