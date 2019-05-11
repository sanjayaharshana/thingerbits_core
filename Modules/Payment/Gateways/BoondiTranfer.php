<?php

namespace Modules\Payment\Gateways;
use Omnipay\Omnipay;
use Modules\Cart\Facades\Cart;
use Omnipay\Common\CreditCard;
use Modules\Payment\NullResponse;
use DB;
use Illuminate\Http\Request; 

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
        $micro_payment = array(
            'order_id' => '1',
            'transaction_id'=>'1',
            'payment_method'=>'1'            
        );

       DB::table('transactions')->insert($micro_payment);
        
        return new NullResponse;
    }
}
