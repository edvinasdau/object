<?php

spl_autoload_register(function ($class_name) {
	include "classes/" . $class_name . ".php";
});


// require "classes/TransportInterface.php";
// require "classes/Car.php";
// require "classes/ElCar.php";


$petro_automobilis = new Car(4,2,950,3.6);
$jono_automobilis = new ElCar(6,5,2000,5.7);

// echo $petro_automobilis->getWheels();
// echo $petro_automobilis->wheelCount;
var_dump($petro_automobilis);
var_dump($jono_automobilis);
// //by default
// echo $petro_automobilis->doorCount."<br>";
// //change parameter
// $petro_automobilis->doorCount = 8;
// //new value
// echo $petro_automobilis->doorCount."<br>";
// //veiksmai
$petro_automobilis->go();
$jono_automobilis->go();
// $petro_automobilis->stop();
// $petro_automobilis->getWeight();