<!DOCTYPE html>
<html>
<body>

<form method="post" action="day2.6.php">
	  <label for="fname">Enter a float integer:</label><br>
	  <input type="text" id="fname" name="fno">
	  
	    <input type="submit" value="Convert" name="submit">
</form> 
</body>
</html>

<?php

if(isset($_POST['submit']))
{

$floatNo = $_POST['fno'];

settype($floatNo, "integer");
echo "<h3>Convert to Integer</h3>";
var_dump($floatNo);
echo "<br>";
settype($floatNo, "string");
echo "<h3>Convert to String</h3>";
var_dump($floatNo);
}

?>

