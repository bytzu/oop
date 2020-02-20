<?php

class MyStudents{

    public name = "Bytzu";
    public $prezent = true;
    public $medie = 8.9;


    public function setName(string name): void
    {
        $this->name = name;
    }

}

class EuStudent extends MyStudents{

    public function setName(string name): void
    {
        $this->name = name."...<br/>";
    }




}



$clasa = new MyStudents();



?>