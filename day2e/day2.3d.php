<!DOCTYPE html>
<html>
<body>

<form method="post" action="2.3d.php">
	  <label for="fname">Enter a integer:</label><br>
	  <input type="text" id="fname" name="fno">
	  
	    <input type="submit" value="Convert" name="submit">
</form> 
</body>
</html>

<?php

if(isset($_POST['submit']))
{

$intNo = $_POST['fno'];

settype($intNo, "integer");
echo "<h3>Convert to Integer</h3>";
var_dump($intNo);

echo "<br>";
settype($intNo, "double");
echo "<h3>Convert to Double</h3>";
var_dump($intNo);
}

?>

