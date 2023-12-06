<?php
namespace App;

final class Felid extends Mammal
{
    protected bool $carnivorous = true;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->carnivorous);
    }
}