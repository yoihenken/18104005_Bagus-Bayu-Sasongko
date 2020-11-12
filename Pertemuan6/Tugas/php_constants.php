<!-- Bagus Bayu Sasongko 18104005 -->

<?php
  define("GREETING", "Welcome to kaedenoki.net", true); // create constant named GREETING
  echo greeting;

  echo "<br>";
  define("cars", [ //Create constant named cars
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];

  echo "<br>";
  define("GREETING", "Welcome to kaedenoki.net"); // create constant named GREETING
 
  // Function for constant
  function myTest() {
    echo GREETING;
  }
  
  myTest();
?>