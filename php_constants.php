<!-- PHP code for Constants -->
<?php
//here we can define the constants using following code.
define("cars", [
    "Mercedes",
    "BMW",
    "Toyota"
  ]);
  echo cars[0],'<br>';
  echo cars[1],'<br>';
  echo cars[2],'<br>';

  //if we change the value of cars any element than it will flags an error.
//   cars[0] = "audi";
//   echo cars[0],'<br>';
  
?>