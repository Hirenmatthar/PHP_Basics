<!-- Conditional Statement -->
<?php
$t = 50;

//If Statement
if ($t < 100) {
  echo "$t is less than 100!<br>";
}

//If-Else Statement
if($t<10){
    echo "$t is less than 10!<br>"; 
}
else{
    echo "$t is greater than 10!<br>";
}

//If-ElseIf-Else statement
if($t<20){
    echo "$t is less than 20!<br>";
}
elseif($t<10){
    echo "$t is less than 10!<br>";
}
else{
    echo "$t is greater than 10 and 20!<br><br>";
}

//Switch Statement
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!<br>";
    break;
  case "blue":
    echo "Your favorite color is blue!<br>";
    break;
  case "green":
    echo "Your favorite color is green!<br>";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!<br>";
}
?>