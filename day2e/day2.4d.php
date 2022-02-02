<!DOCTYPE html>
<html>
<body>

<form method="post" action="2.4d.php">
	  <label for="fname">Enter something:</label><br>
	  <input type="text" id="fname" name="fno">
	  
	    <input type="submit" value="Find" name="submit">
</form> 
</body>
</html>

<?php

if(isset($_POST['submit']))
{

$intNo = $_POST['fno'];
// $intNo = true;
echo $intNo . " is " . is_bool($intNo);

}

?>

