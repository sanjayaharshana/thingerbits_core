<?php

namespace Modules\Cart;

use Modules\Support\Money;

class NullCartCoupon
{
    public function id()
    {
        //
    }

    public function code()
    {
        //
    }

    public function isFreeShipping()
    {
        return false;
    }

    public function usageLimitReached()
    {
        return false;
    }

    public function usedOnce()
    {
        //
    }

    public function value()
    {
        return Money::inDefaultCurrency(0);
    }
}
