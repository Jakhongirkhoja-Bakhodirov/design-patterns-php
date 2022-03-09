<?php

function __autoload($class_nmae)
{
    include 'classes/' . $class_nmae . '.php';
}

//Simple Checkout Process

$productID = 12;
//$_GET['productID'];

$quantity = new ProductQuantity();


if ($quantity->chechQuantity($productID) > 0) {
    // add product to Card
    $addCart = new AddToCart($productID);

    // calculate shipping Charge
    $shipping = new ShippingCharge();
    $shipping->updateCharge();

    //calculate discount
    $discount = new Discount();
    $discount->applyDiscount();

    //save to order
    $order = new Order();
    $order->generateOrder();
}
