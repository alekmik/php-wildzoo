<?php
namespace App;

class Fish extends Animal
{
    protected int $pawNumber = 0;
    
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}