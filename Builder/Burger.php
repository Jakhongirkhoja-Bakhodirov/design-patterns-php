<?php

namespace Builder;

require 'Builder/BurgerBuilder.php';

use Builder\BurgerBuilder;

class Burger
{
    protected $size;
    protected $cheese = false;
    protected $pepperoni = false;
    protected $lettuce = false;
    protected $tomato = false;

    public function __construct(BurgerBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
        $this->lettuce = $builder->lettuce;
        $this->tomato = $builder->tomato;
    }
}


$burger = (new BurgerBuilder(14))->addPepperoni()->addCheese()->addLettuce();

var_dump($burger);
