<!-- Bagus Bayu Sasongko 18104005 -->
<!DOCTYPE html>
<html>
<head>
	<title>PHP String</title>
</head>
<body>
<?php  
	echo "Result function strln from 'Paimon Daisuki!' : ".strlen("Paimon Daisuki!"); // show length string
	echo "<br>";
	echo "Number of string characters 'Yoi Henken' : ".str_word_count("Yoi Henken"); // show the word count

	echo "<br>";
	echo "Reverse Word : ".strrev("Reverse Word"); // Reverse the word

	echo "<br>";
	echo "Word 'via' from sentence 'Study via zoom meeting' in : ".strpos("Study via zoom meeting", "via"); //locate word 'via' from string

	echo "<br>";
	echo str_replace("Barbara", "Fischl", "Hi Barbara"); //Replace word Barbara to Fischl
?>
</body>
</html>