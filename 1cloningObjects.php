<?php

class Car{
    public $color = "Rosu";
    public $whells = 4;

    public function getcolor(){
        return $this->color;
    }
}
//copiere normala, ambele obiecte pointeaza catre aceiasi zona din memorie
//daca se schimba ceva intr-un obiect se va schimba si in celalalt
$car = new Car();
$car2 = $car;
var_dump($car, $car2, $car===$car2);
$car = null;
var_dump($car, $car2);


echo "-------------------------------------------";

$masina = new Car();
$masina2 = & $masina;
$masina->color = "Alb";
var_dump($masina, $masina2, $masina===$masina2);
$masina = null;
var_dump($masina, $masina2, $masina===$masina2);

echo "-------------------------------------------";

$truck = new Car();
$truck2 = clone $truck;
var_dump($truck, $truck2, $truck===$truck2);