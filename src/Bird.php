<?php
namespace App;

class Bird extends Animal
{
    protected int $pawNumber = 2;
    
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}