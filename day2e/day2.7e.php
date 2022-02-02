<!DOCTYPE html>
<html>
<body>

<h2>Values Type Identifier</h2>

<form method="post" action="day2.7.php">

	  <label for="fname">Enter a value 1:</label>
	  <input type="text" id="fname" name="val1"><br>
	
	  <label for="fname">Enter a value 2:</label>
	  <input type="number" id="fname" name="val2"><br>
	
	  <label for="fname">Enter a value 3:</label>
	  <input type="date" id="fname" name="val3"><br>
	
	  <label for="fname">Enter a value 4:</label>
	  <input type="email" id="fname" name="val4"><br>
	
	  <label for="fname">Enter a value 5:</label>
	  <input type="time" id="fname" name="val5"><br>
	
	  <label for="fname">Enter a value 6:</label>
	  <input type="password" id="fname" name="val6"><br>
	  
	    <input type="submit" value="Get Type" name="submit">
</form> 
</body>
</html>

<?php

if(isset($_POST['submit']))
{

$val1 = $_POST['val1'];
$val2 = $_POST['val2'];
$val3 = $_POST['val3'];
$val4 = $_POST['val4'];
$val5 = $_POST['val5'];
$val6 = $_POST['val6'];

echo "<h3>Type of value 1</h3>";
echo gettype($val1) . "<br>";
echo "<h3>Type of value 2</h3>";
echo gettype($val2) . "<br>";
echo "<h3>Type of value 3</h3>";
echo gettype($val3) . "<br>";
echo "<h3>Type of value 4</h3>";
echo gettype($val4) . "<br>";
echo "<h3>Type of value 5</h3>";
echo gettype($val5) . "<br>";
echo "<h3>Type of value 6</h3>";
echo gettype($val6) . "<br>";
}

?>



<?php
/*$a = 3;
echo gettype($a) . "<br>";

$b = 3.2;
echo gettype($b) . "<br>";

$c = "Hello";
echo gettype($c) . "<br>";

$d = array();
echo gettype($d) . "<br>";

$e = array("red", "green", "blue");
echo gettype($e) . "<br>";

$f = NULL;
echo gettype($f) . "<br>";

$g = false;
echo gettype($g) . "<br>";

*/
?>
</body>
</html>
