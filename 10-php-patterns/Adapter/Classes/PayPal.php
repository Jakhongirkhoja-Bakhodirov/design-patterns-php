<?php

namespace Adapter\Classes;

class PayPal
{
    public function sendPayment($amount)
    {
        echo 'Payment via PayPal ' . $amount;
    }
}
