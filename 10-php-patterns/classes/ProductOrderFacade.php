<?php

class ProductOrderFacade
{
    public int $productID;
    public function __construct($productID)
    {
        $this->productID = $productID;
    }

    public function generateOrder()
    {
        if ($this->quantityCheck($this->productID)) {
            //Add product to cart
            $this->addToCart($this->productID);

            //calculate shipping charge
            $this->calculateShippingCharge();

            //calculate discount
            $this->applyDiscount();

            //save order
            $this->placeOrder();
        }
    }

    public function quantityCheck($productID)
    {
        //check quantity in database
        if ($productID > 0) {
            return true;
        }
        return false;
    }

    public function addToCart()
    {
        $addToCart = new AddToCart();
    }

    public function calculateShippingCharge()
    {
        $shipping = new ShippingCharge();
        $shipping->updateCharge();
    }

    public function applyDiscount()
    {
        $discount = new Discount();
        $discount->applyDiscount();
    }

    public function placeOrder()
    {
        $order = new Order();
        $order->generateOrder();
    }
}
