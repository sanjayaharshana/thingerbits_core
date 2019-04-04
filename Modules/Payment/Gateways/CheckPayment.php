<?php

namespace Modules\Payment\Gateways;

use Modules\Payment\NullResponse;

class CheckPayment
{
    public $label;
    public $description;

    public function __construct()
    {
        $this->label = setting('check_payment_label');
        $this->description = setting('check_payment_description');
    }

    public function purchase()
    {
        return new NullResponse;
    }
}
