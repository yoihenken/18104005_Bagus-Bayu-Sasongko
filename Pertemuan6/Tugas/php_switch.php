<!-- Bagus Bayu Sasongko 18104005 -->

<?php
  $favcolor = "pink";

  switch ($favcolor) {
    case "red":
      echo "Your favorite color is red!";   //run when value is $favcolor = red
      break;
    case "blue":
      echo "Your favorite color is blue!";  //run when value is $favcolor = blue
      break;
    case "green":
      echo "Your favorite color is green!"; //run when value is $favcolor = green
      break;
    case "pink" :
      echo "Your favorite color is pink!";  //run when value is $favcolor = pink
    default:
      echo "Your favorite color is neither red, blue, nor green!"; //run when value not fulfilled
  }
?>