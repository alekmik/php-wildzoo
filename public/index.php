<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';
require __DIR__ . '/../src/Area.php';


// Le code de la page index possède les use pour Area et Animal
use App\Animal;
use App\Area;

$lion = new Animal('lion', 4);
$lion->setCarnivorous(true);
$lion->setSize(70);
$lion->setThreatenedLevel('VU');

$parrot = new App\Animal('parrot', 2);
$parrot->setSize(30);

$elephant = new App\Animal('elephant', 4);
$elephant->setThreatenedLevel('LC');

$animals = [$lion, $parrot, $elephant];



//Des objets de type Area sont instanciés pour la savane et la jungle, et les bons animaux sont mis dedans.
//Ajoute au moins les zones savana et jungle à ta carte.
$savana = new Area('savana');
$jungle = new Area('jungle');
$areas = [$savana, $jungle];

//Pour la zone savane, ajoute le lion et l'éléphant.
$savana -> addAnimal($lion);
$savana -> addAnimal($elephant);

//Pour la zone jungle, ajoute le perroquet.
$jungle -> addAnimal($parrot);


//code functional 

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>