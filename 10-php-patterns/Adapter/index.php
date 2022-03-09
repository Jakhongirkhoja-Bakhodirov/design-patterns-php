<?php

namespace Adapter;

require 'Adapter/Classes/PaymentAdapter.php';

use Adapter\Classes\PaymentAdapter;

// function __autoload($class_name)
// {
//     include 'classes/' . $class_name . '.php';
// }

// $paypal = new PayPal();
// $paypal->sendPayment(1500);

$paypal = new PaymentAdapter();
$paypal->pay(1200);
