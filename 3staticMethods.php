<?php

class Car
{
    private $color;
    private $weight;
    static public $availableColors = [
        'red', 'green', 'blue', 'white'
    ];
    static $counter=0;
    public $myCounter = 0;

    public function __construct()
    {
        self::$counter++;
        $this->myCounter++;
    }

    public static function getColors(){
        return self::$availableColors;
    }
}

$myCar = new Car();
echo Car::$counter." ".$myCar->myCounter.PHP_EOL;
$myCar1 = new Car();
echo Car::$counter." ".$myCar1->myCounter.PHP_EOL;
var_dump(Car::$availableColors);