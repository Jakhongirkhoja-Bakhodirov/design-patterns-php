<?php

interface NewDoor
{
    public function getDescription();
}

class NewWoodenDoor implements NewDoor
{
    public function getDescription()
    {
        echo 'I am a wooden door';
    }
}

class IronDoor implements NewDoor
{
    public function getDescription()
    {
        echo 'I am a iron door';
    }
}

interface DoorFittingExpert
{
    public function getDescription();
}

class Welder implements DoorFittingExpert
{
    public function getDescription()
    {
        echo 'I can only fit iron doors';
    }
}

class Carpenter implements DoorFittingExpert
{
    public function getDescription()
    {
        echo 'I can only fit wooden doors';
    }
}


interface DoorFactory
{
    public function makeOrder(): NewDoor;
    public function makeFittingExpert(): DoorFittingExpert;
}


//Wooden factory to return carpenter and wooden door
class WoodenDoorFactory implements DoorFactory
{
    public function makeOrder(): NewDoor
    {
        return new NewWoodenDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Carpenter();
    }
}


//Iron door factory to get iron door and the relevant fitting expert
class IronDoorFactory implements DoorFactory
{
    public function makeOrder(): NewDoor
    {
        return new IronDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Welder();
    }
}


$woodenFactory = new WoodenDoorFactory();

$door = $woodenFactory->makeOrder();
$expert = $woodenFactory->makeFittingExpert();

$door->getDescription();
$expert->getDescription();


$ironFactory = new IronDoorFactory();

$ironDoor = $ironFactory->makeOrder();
$expert = $ironFactory->makeFittingExpert();

