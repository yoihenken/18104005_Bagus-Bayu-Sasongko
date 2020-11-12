<!-- Bagus Bayu Sasongko 18104005 -->

<?php
    // If Else Single Condition
    $t = date("H");

    if ($t < "20") {
      echo "Have a good day!";
    }

    echo "<br>";
    $t = date("H");
    
    // If Else Double Condition
    if ($t < "20") {
      echo "Have a good day!";
    } else {
      echo "Have a good night!";
    }

    echo "<br>";
    $t = date("H");

    // If Else Multiple Condition
    if ($t < "10") {
      echo "Have a good morning!";
    } elseif ($t < "20") {
      echo "Have a good day!";
    } else {
      echo "Have a good night!";
    }
?>