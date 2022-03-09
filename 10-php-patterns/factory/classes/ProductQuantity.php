<?php

class ProductQuantity
{
    public function chechQuantity($productID)
    {
        //check quantity in database
        if ($productID > 0) {
            return true;
        }
        return false;
    }
}
