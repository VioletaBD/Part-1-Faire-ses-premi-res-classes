<?php

require_once 'Cars.php';

$cars = new Cars("Orange");

// Moving cars
echo $cars->forward();
echo '<br> Vitesse de la voiture: ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Cars("Red");

// Instanciation d'un nouvel objet $tornado
$tornado = new Cars("Blue");




var_dump($cars);

?>