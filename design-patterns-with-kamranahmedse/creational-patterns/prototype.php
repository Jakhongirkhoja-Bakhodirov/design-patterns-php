<?php

class Sheep
{
    protected $name, $category;
    public function __construct(string $name, string $category = 'Mountain sheep')
    {
        $this->name = $name;
        $this->category = $category;
    }

    public function __clone()
    {
        $this->name = clone $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCategory(string $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}

$original = new Sheep('Jolly');

echo $original->getName();
echo $original->getCategory();
echo "\n";

//Clone and modify what is required
$cloned = clone $original;

$cloned->setName('Dolly');

echo $cloned->getName();
echo $cloned->getCategory();
