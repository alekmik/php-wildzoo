<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';
require __DIR__ . '/../src/Area.php';
require __DIR__ . '/../src/Mammal.php';
require __DIR__ . '/../src/Fish.php';
require __DIR__ . '/../src/Bird.php';
require __DIR__ . '/../src/Felid.php';
require __DIR__ . '/../src/Equid.php';
require __DIR__ . '/../src/Reptile.php';
require __DIR__ . '/../src/Snake.php';
require __DIR__ . '/../src/Crocodilian.php';
require __DIR__ . '/../src/Arthropode.php';
require __DIR__ . '/../src/Arachnide.php';
require __DIR__ . '/../src/Spider.php';
require __DIR__ . '/../src/Insect.php';






use App\Area;
use App\Animal;
use App\Arachnide;
use App\Crocodilian;
use App\Equid;
use App\Felid;
use App\Insect;
use App\Mammal;
use App\Snake;
use App\Spider;


$lion = new Felid('lion');
// $lion->setCarnivorous(true);
$lion->setSize(70);
$lion->setThreatenedLevel('VU');

$parrot = new Animal('parrot', 2);
$parrot->setSize(30);

$elephant = new Mammal('elephant');
$elephant->setThreatenedLevel('LC');

$tiger = new Felid('tiger');

$zebra = new Equid('zebra');

$alligator = new Crocodilian('alligator', 4);

$python = new Snake('python', 0);

$scorpio = new Arachnide('scorpio');

$tarantula = new Spider('tarantula');

$bee = new Insect('bee');

$animals = [$lion, $parrot, $elephant,$tiger,$zebra,$alligator,$python,$scorpio,$tarantula,$bee];

$savana = new Area('savana');
$savana->addAnimal($lion);
$savana->addAnimal($elephant);
$jungle = new Area('jungle');
$jungle->addAnimal($parrot);

$areas = [$savana, $jungle];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>