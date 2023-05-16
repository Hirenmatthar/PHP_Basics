<!-- PHP Loops -->
<?php
$x = 1;

//While Loop
echo "<br>While Loop <br>";

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

//Do-while Loop
$x = 1;

echo "<br>Do While Loop <br>";
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

//For Loop
echo "<br>For Loop <br>";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

//For-Each Loop
echo "<br>For Each Loop <br>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>
