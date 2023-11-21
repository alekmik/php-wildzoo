<?php

class Animal
{
    private string $name;
    private float $size;    
    private bool $carnivorous = false;
    private int $pawNumber;
    private string $threatenedLevel = 'NE';
    
    //constructeur
    public function __construct(string $name, int $pawNumber)
    {
        $this->name = $name;
        $this->setPawNumber($pawNumber);
    }

    public function getName(): string
    {
        return $this->name;
    }
    //function getSize retourner la valeur
    public function getSize(): float
    {
        return $this->size;
    }
    //function setSize pour attribuer une valeur à la propriété privée size
    public function setSize(int $size): void
    {
        //minimum size at 1
        if($size < 1) {
            $size = 1;
        }
        $this->size = $size;
    }
    public function isCarnivorous():bool
    {
        return $this->carnivorous;
    }
    public function setCarnivorous(int $carnivorous): void
    {
        $this->carnivorous = $carnivorous;
    }

    public function getPawNumber(): int
    {
        return $this->pawNumber;
    }
    //
    public function setPawNumber(int $pawNumber): void
    {
        if($pawNumber < 0) {
            $pawNumber = 0;
        }
        $this->pawNumber = $pawNumber;
    }

    public function getThreatenedLevel() : string
    {
        return $this -> threatenedLevel;
    }
    public function setThreatenedLevel($threatenedLevel) : void
    {
        $this -> threatenedLevel = $threatenedLevel;
    }

    public function speak(string $lang = 'fr'): string
    {
        if ($lang === 'fr') {
            $message = 'Bienvenue au zoo, je suis un ';
        } else {
            $message = 'Welcome to the zoo, I\'am a ';
        }

        return $message . $this->name;
    }

    public function isDangerous(): bool
    {
        return $this->size > 50 && $this->carnivorous === true;
    }
}
