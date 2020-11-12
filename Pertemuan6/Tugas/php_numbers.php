<!-- Bagus Bayu Sasongko 18104005 -->

<?php
    $x = 5985;
    var_dump(is_numeric($x));   // Check the data type of variable x, is this numeric?

    $x = 5985.98;
    var_dump(is_float($x));     // Check the data type of variable x, is this float?

    $x = "Hello";
    var_dump(is_numeric($x));   // Check the data type of variable x, is this numeric?

    echo "<br>";

    $x = 1.9e411;
    var_dump($x);   // return INF value

    echo "<br>";
    $x = 23465.768;
    $int_cast = (int) $x; // return convertion float to integer
    echo $int_cast;

    echo "<br>";
    $x = acos(8); // return Nan value
    var_dump($x); 
?>