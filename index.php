<?php

$start = microtime(true);
require "vendor/autoload.php";

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


$db = new Database();
$user = new User($db);
$game = new Game($db);

//Application

require "app/index.php";
// print_r($user->addPlayer("nunu"));
// echo $user->removePlayer(30);

// print_r($db->select("SELECT * FROM players WHERE username = :username", ["username"=>"koma"]));

// echo $db->insert("INSERT INTO players (username, password) VALUES (:username, :password)",
//  ["username" => "Antanas- " . rand(500,5000),
//   "password" => password_hash("labas",PASSWORD_DEFAULT)]);




// spl_autoload_register(function ($class_name) {
// 	include "classes/" . $class_name . ".php";
// });


// require "classes/TransportInterface.php";
// require "classes/Car.php";
// require "classes/ElCar.php";


// $petro_automobilis = new Car(4,2,950,3.6);
// $jono_automobilis = new ElCar(6,5,2000,5.7);

// echo $petro_automobilis->getWheels();
// echo $petro_automobilis->wheelCount;
// var_dump($petro_automobilis);
// var_dump($jono_automobilis);
// //by default
// echo $petro_automobilis->doorCount."<br>";
// //change parameter
// $petro_automobilis->doorCount = 8;
// //new value
// echo $petro_automobilis->doorCount."<br>";
// //veiksmai
// $petro_automobilis->go();
// $jono_automobilis->go();
// $petro_automobilis->stop();
// $petro_automobilis->getWeight();

echo "<div style='position:absolute; right:0; top: 0; background-color: black; padding: 10px; color: yellow;'>";
echo round((microtime(true) - $start)*1000, 2) . "ms.";
echo " & " . round (memory_get_usage()/(1024*1024), 2) . "MB.";
echo "</div>";