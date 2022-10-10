<?php

require_once 'Bicycle.php';

$bike = new Bicycle("Orange");

var_dump($bike);
var_dump($bike); 


// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle("Red");

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle("Blue");

$tornado->forward();


var_dump($bike);
$bike->dump();


?>