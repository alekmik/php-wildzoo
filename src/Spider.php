<?php
namespace App;

final class Spider extends Arachnide
{
    protected bool $carnivorous = true;

    public function __construct(string $name)
    {
        parent::__construct($name, $this->carnivorous);
    }
}