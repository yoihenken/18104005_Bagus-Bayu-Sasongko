<?php  
	function sum($a, $b) {
		return $a + $b;
	}

	function message($a) {
		echo "Hello ".$a;
	}
	
	echo message("Ajeng<br>");
	echo "Hasil 5 + 6 = ".sum(5,6);
?>