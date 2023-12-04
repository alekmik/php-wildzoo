<?php

namespace App;

class Area {
    //properties
    private string $name;
    private array $animals=[];

    //méthodes
    public function __construct(string $name)
    {
        $this -> name = $name;
    }

    // public function setName() {
    //     $this -> name = $name;
    // }

    public function getName() {
        return $this -> name;
    }

    public function getAnimals() : array {
        return $this -> animals;
    }

    //prend en paramètre un objet de type Animal
    public function addAnimal(Animal $animal) : void {
        $this -> animals[] = $animal;
    }
}