<?php
 
 class Car {
    // //klases atributai
    // public $wheelCount = 4; //public; private; protected.
    // private $doorCount = 4;
    // public $weight = 900;
    // public $engineVolume = 2;
     //klases atributai
     private $wheelCount; //public; private; protected.
     private $doorCount;
     public $weight;
     public $engineVolume;
 
    //magic method
    function __construct(int $wheelCount, int $doorCount, int $weight, int $engineVolume) {
        $this->wheelCount = $wheelCount;
        $this->doorCount = $doorCount;
        $this->weight = $weight;
        $this->engineVolume = $engineVolume;
        echo "A New car was created.<br>";
    }
    //getter
    function __get($parameter) {
        return $this->$parameter;
    }
    //setter
    function __set($parameter, $value) {
        echo "Someone is changing $parameter to $value";
        if ($parameter == "doorCount") {
            $this->doorCount = $value;
        }
	}


    function __toString() { 
    	return "This is the car!";
    }


	function __destruct() {
		echo "This car was destroyed. <br>";
	}   
    //metodai
 
    public function getWheels(){
        return $this->wheelCount;
    }
    public function go(){
        echo "This car is going...<br>";
    }
    public function stop(){
        echo "This car is stopped...<br>";
    }
    public function getWeight(){
        echo "Car weight is " . $this->weight;
    }
 
 }