<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';

$lion = new Animal();
$parrot = new Animal();
$python = new Animal();

//déclaration de la variable lion
$lion->name = 'lion';
$lion->pawNumber = 4;
$lion->carnivorous = true;
$lion->size = 50;


//declaration new parrot
$parrot->name = 'parrot';
$parrot->pawNumber = 2;
$parrot->carnivorous = false;
$parrot->size = 10;

//declaration new python
$python->name = 'python';
$python->pawNumber = 0;
$python->carnivorous = false;
$python->size = 15;

$lion -> threatenedLevel = 'VU';
$parrot -> threatenedLevel = 'LC';
$python -> threatenedLevel = 'LC';


$animals = [$lion, $parrot,$python];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>