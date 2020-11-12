<!-- Bagus Bayu Sasongko 18104005 -->

<!DOCTYPE html>
<html>
<head>
	<title>PHP Data Types</title>
</head>
<body>
<?php 
	$int = 3; // Data Type of Integer
	$string = "Color : "; //Data Type of String
	$array = ['Red','White','Blue']; //declaration for array with element
	$bool = true; //Data Type of Boolean

	echo "Qty : ".$int; //show variable int
	echo "<br>";
	echo $string.$array[2]; //show variable string and variable array
	echo "<br>";
	echo $bool; //show variable bool

	echo "<br><br> Data Type : <br>";
	var_dump($int); //show data type of variable int
	echo "<br>";
	var_dump($string); //show data type of variable string
	echo "<br>";
	var_dump($array); //show data type of variable array
	echo "<br>";
?>
</body>
</html>