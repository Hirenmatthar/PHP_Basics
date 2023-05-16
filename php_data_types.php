<!-- PHP Data Types -->
<?php

//1.Integer
$x = 5985;
var_dump($x);
echo '<br>';
echo '<br>';

//2.Float
$x = 10.365;
var_dump($x);
echo '<br>';
echo '<br>';

//3.Boolean
$x = true;
$y = false;

//4.Arrays
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo '<br>';
echo $cars[0],'<br>';
echo '<br>';

//5.Object
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();
  echo '<br>';
  echo var_dump($myCar);
  echo '<br>';
  echo '<br>';
  
  
//6.PHP Null values
$x = "Hello world!";
$x = null;
var_dump($x);
echo '<br>';
echo '<br>';
?>