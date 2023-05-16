<!-- Operators -->
<?php

//1. Arithmetic Operator
$a = 20;
$b = 10;

echo "Addition: ",$a + $b,'<br>';
echo "Subtraction: ",$a - $b,'<br>';
echo "Multiplication: ",$a * $b,'<br>';
echo "Division: ",$a / $b,'<br>';
echo "Modulus: ",$a % $b,'<br>';
echo "Exponential: ",$a ** $b,'<br><br>';

//2. Assignment Operator
$a = 20;

$b = $a;  //The left operand gets set to the value of the expression on the right
echo $b,'<br>';

$a += $b;  //Addition
echo $a,'<br>';

$a -= $b;  //Subtraction
echo $a,'<br>';

$a *= $b;  //Multiplication
echo $a,'<br>';

$a /= $b;  //Division
echo $a,'<br>';

$a %= $b;  //Modulus
echo $a,'<br><br>';

//3. Comparison Operator

$x = 100;  
$y = "100";
$z = 200;

var_dump($x === $y); // returns false because types are not equal.
echo "<br>";
var_dump($x == $y);// returns true because values are equal.
echo "<br>";
var_dump($x <> $z);  //Returns true if $x is not equal to $z.
echo "<br>";
var_dump($x != $z);  //Returns true if $x is not equal to $z.
echo "<br>";
var_dump($x !== $z);  //Returns true if $x is not equal to $z, or they are not of the same type.
echo "<br>";
var_dump($x < $z);  //Returns true if $x is less than $z.
echo "<br>";
var_dump($x > $z);  //Returns true if $x is greater than $.
echo "<br>";
var_dump($x <= $z);  //Returns true if $x is less than or equal to $z.	
echo "<br>";
var_dump($x >= $z);  //Returns true if $x is greater than or equal to $z.	
echo "<br>";
var_dump($x <=> $z);  //Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $z.
echo "<br><br>";

//4. Increment/Decrement Operators
$x = 10;  
echo ++$x,'<br>'; //pre-increment
$x = 10;  
echo --$x,'<br>'; //pre-decrement
$x = 10;  
echo $x++,'<br>'; //post-increment
$x = 10;  
echo $x--,'<br><br> '; //post-decrement

//5. Conditional Operator
$a = 50;
$b = 70;
echo $a > $b ? "$a is greater than $b!<br><br>" : "$b is greater than $a!<br><br>";

//6. Logical Operator
$x = 100;  
$y = 50;

//And Operator
if ($x == 100 and $y == 50) {
    echo "Hello world!<br>";
}

//Or Operator
if ($x == 100 or $y == 50) {
    echo "Hello world!<br>";
}

//Ex-or Operator
if ($x == 100 xor $y == 50) {
    echo "Hello world!<br><br>";
}

//7.String Operators
$txt1 = "Hello";
$txt2 = " world!";
echo"<br>",$txt1 . $txt2,'<br>';
$txt1 .= $txt2;
echo $txt1,'<br><br>';
?>