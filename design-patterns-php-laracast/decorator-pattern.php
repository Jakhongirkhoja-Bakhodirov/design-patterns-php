<?php

interface CorService
{
    public function getCost();
}

class BasicInpection implements CorService
{
    public function getCost()
    {
        return 7;
    }
}

class BasicInpectionAndOilChange implements CorService
{
    protected $carService;

    function __construct(CorService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 12 + $this->carService->getCost();
    }
}


class BasicInpectionAndOilChangeAndTireRotation implements CorService
{
    protected $carService;
    public function __construct(CorService $carService)
    {
        $this->carService = $carService;
    }
    public function getCost()
    {
        return 25 + $this->carService->getCost();
    }
}


echo 'price of basic-inpection-and-oil-change: '  . (new BasicInpectionAndOilChange(new BasicInpection()))->getCost();
echo "\n";
echo 'price of basic-inpection-oil-change and tire-rotation: '  . (new BasicInpectionAndOilChangeAndTireRotation((new BasicInpection())))->getCost();
