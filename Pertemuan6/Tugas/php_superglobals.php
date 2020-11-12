<!-- Bagus Bayu Sasongko 18104005 -->

<!DOCTYPE html>
<html>
<head>
	<title>PHP Post</title>
</head>
<body>
	<!-- display form -->
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	  Name: <input type="text" name="fname">
	  <input type="submit">
	</form>

	<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  // collect value of input field
	  $name = $_POST['fname']; // method post

	  // if condition for display input
	  if (empty($name)) {
	    echo "Name is empty";
	  } else {
	    echo "<br>My Name ".$name;
	  }
	}
	?>

	<!-- Method GET -->
	<br>
	<p>Method GET</p>
	<a href="test_get.php?subject=PHP&web=kaedenoki.net">Test $GET</a>
</body>
</html>