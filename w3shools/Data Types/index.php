<?php
// A função var_dump() informa o data type (tipo) da variável

/*
O PHP suporta essas Data Types:
    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource
    */

//STRING

$text = "Hello World!";
var_dump($text);

//INTEGER

$x = 6422;
var_dump($x);

//Float
$y = 10.365;
var_dump($y);

//Boolean
$is_light_on = true;
var_dump($is_light_on);

//ARRAY
$colors = array("red", "green", "blue", "yellow");
var_dump($colors);

//OBJECT
class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);

?>