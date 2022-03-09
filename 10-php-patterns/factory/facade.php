<?php

function __autoload($class_name)
{
    include 'classes/' . $class_name . '.php';
}

$order = new ProductOrderFacade(12);

$order->generateOrder();
