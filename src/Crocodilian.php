<?php
namespace App;

final class Crocodilian extends Reptile
{
    protected int $pawNumber = 4;
    
    public function __construct(string $name)
    {
        parent::__construct($name, $this->pawNumber);
    }
}