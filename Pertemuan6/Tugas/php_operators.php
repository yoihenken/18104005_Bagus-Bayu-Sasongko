<!-- Bagus Bayu Sasongko 18104005 -->

<!DOCTYPE html>
<html>
	<head>
		<title>PHP Operators</title>
	</head>
	<body>
		<?php
			// Arithmetic Operator
			$x = 10;  
			$y = 6;

			echo $x % $y; // calculate with modulator
			echo "<br>";

			// Assignment Operator
			$x = 50;
			$x -= 30; 	// Subtraction

			echo $x; 	// Show result
			echo "<br>";

			// Comparison Operator
			$x = 100;  
			$y = "100";

			var_dump($x !== $y); // return true if not the data type is not same
			echo "<br>";

			// Increment Operator
			$x = 10;  
			echo ++$x; // increase value
			echo "<br>";

			// Logical Operator
			$x = 100;  
			$y = 50;

			if ($x == 100 && $y == 50) { // 
				echo "Hello world!";
			}
			echo "<br>";
		?> 
	</body>
</html>