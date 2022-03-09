<?php

namespace Adapter\Classes;


use Adapter\Classes\PayPal;
use PaymentInterface;

class PaymentAdapter implements PaymentInterface
{
    private $paypal;

    public function __construct()
    {
        $this->paypal = new PayPal();
    }

    public function pay($amount)
    {
        $this->paypal->sendPayment($amount);
    }
}
