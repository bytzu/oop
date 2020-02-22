<?php

class Car{

    public $color;
    public $manufacturer;
    const MY_CONSTANT = ['red','green','blue'];
    const MANUFACTURER_BMW = 'bmw';
    const MANUFACTURER_AUDI = 'Audi';
    const MANUFACTURER_VOLKSWAGEN = 'VW';

    /**
     * Car constructor.
     * @param $color
     * @param $manufacturer
     */
    public function __construct($color, $manufacturer)
    {
        $this->color = $color;
        $this->manufacturer = $manufacturer;
    }


}

$myCar = new Car('red','Mercedes');
var_dump(Car::MY_CONSTANT);
var_dump($myCar);

