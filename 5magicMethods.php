<?php

//class Person{
//    public $name = 'Jane';
//    private $phone = 12346;
//
//    public function __construct()
//    {
//        echo "<br/>I am the constructor<br/>";
//    }
//
//    public function __destruct()
//    {
//        echo "<br/>I am the destructor<br/>";
//    }
//
//    public function __toString()
//    {
//        return "The name of the person is: ".$this->name;
//    }
//
//
//}
//
//$p = new Person();
//echo $p;



//class Person1{
//    public $name = 'Jane';
//    private $phone = 12346;
//
//    //cand se apealeaza o proprietate care nu exista
//    public function __get($propName)
//    {
//        if ($propName==="username") {
//            return $this->name;
//        } else {
//            return "Property \"$propName\" does not exists.";
//        }
//    }
//
//    //cand se actualizeaza o proprietate care nu exista
//    public function __set($name, $value)
//    {
//        if ($name==="username") {
//            $this->name = $value;
//        }
//    }
//
//    //when we try to execute an not existing method
//    public function __call($name, $arguments){
//        //var_dump($name, $arguments);
//        if ($name==="getMobilePhone") {
//            return $this->phone;
//        }else if($name==="setMobilePhone"){
//            call_user_func_array([$this, 'setPhone'], $arguments);
//        }
//    }
//
//    //when we try to execute an not existing static method

//    public static function __callStatic($name, $arguments)
//    {
//        echo "Call of \"$name\" static methodod was called";
//    }
//
//    public function getPhone(): int
//    {
//        return $this->phone;
//    }
//
//
//    public function setPhone(int $phone): Person1
//    {
//        $this->phone = $phone;
//        return $this;
//    }
//}
//
//$p = new Person1();
//$p->username='Marry';
//$p->setMobilePhone(1111111);
//echo $p->getMobilePhone();
//Person1::hello();
//echo p();

//class Person3{
//    public $name = "Jane";
//    private $phone = 123456;
//
//
//
//    //use object as a function
//
//    /**
//     * Person3 constructor.
//     * @param string $name
//     * @param int $phone
//     */
//    public function __construct(string $name, int $phone)
//    {
//        $this->name = $name;
//        $this->phone = $phone;
//    }
//
//    public function __invoke()
//    {
//        return "The object was used as a function";
//    }
//
//    //called before serialization
//    public function __sleep()
//    {
//        unset($this->phone);
//        return ['name'];
//    }
//    //called after serialization
//    public function __wakeup()
//    {
//        echo "I am waking up";
//    }
//
//}
//
//$p = new Person3("Anna", 123123);
//var_dump(is_callable($p));
//echo $p();
//
//$obSerialized = serialize($p);
//
//$newObject = unserialize($obSerialized);
//
//var_dump($obSerialized, $p, $newObject);


class Person4{
    public $name;
    private $phone;

    /**
     * Person4 constructor.
     * @param $name
     * @param $phone
     */
    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }

    public function __clone()
    {
        var_dump($this);
    }

}
$p = new Person4("Johny",1212121212);
var_dump($p);
$newPerson = clone $p;
