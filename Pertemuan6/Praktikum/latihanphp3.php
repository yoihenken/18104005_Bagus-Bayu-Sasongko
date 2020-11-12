<?php
	date_default_timezone_set("Asia/Jakarta");  
	$t = date('H');

	if ($t < "10") {
		echo "Selamat pagi";
	} elseif ($t < "20") {
		echo "Selamat sore";
	} else {
		echo "Selamat malam";
	}

	echo "<br>";

	$favcolor = "red";
	switch ($favcolor) {
	case 'red' :
		echo "Your fav color is red";
		break;
	case 'blue' :
		echo "Your fav color is blue";
		break;
	case 'pink' :
		echo "Your fav color is pink";
		break;
	default :
		echo "You dont have fav color";	
	}
?>