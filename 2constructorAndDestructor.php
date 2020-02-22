<?php

class Car{

    private $color;
    private $weight;

    public function __construct($color, $weight)
    {

        $this->color = $color;
        $this->weight = $weight;
        echo 'I am created'.PHP_EOL;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function __destruct()
    {
        echo "I am destroyed"." ".$this->color.PHP_EOL;
    }

}

$mycar = new Car('blue', 4000);
$mycar2 = new Car('white', 24500);


var_dump($mycar,$mycar2);

unset($mycar);
sleep(2);