<?php
namespace App;


class Mammal extends Animal
{
    protected int $pawNumber = 4;
    
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}