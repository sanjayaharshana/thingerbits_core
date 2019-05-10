<?php

namespace Modules\Payment;

class NullResponse
{
    public function isRedirect()
    {
        echo "sdfsdf";
        return false;
    }

    public function isSuccessful()
    {
        echo "sdfsdf";
        return true;
       
    }

    public function getTransactionReference()
    {
        echo "sdfsdf";
    }
}
