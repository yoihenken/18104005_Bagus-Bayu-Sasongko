<!-- Bagus Bayu Sasongko 18104005 -->

<?php
  // Declaration about array named cars
  $cars = array("Volvo", "BMW", "Toyota");
  echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
  echo "<br>";

  // Count amount array
  echo "Qty : ".count($cars);

  echo "<br>";
  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

  // Show array with foreach
  foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
?>