<?php



// Program 3

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  
  if (empty($fname) || empty($mname) || empty($lname))
  {
    echo "Fields are empty";
  } 
  else 
  {
    echo "<h2> Hi!! How are you " . $fname . " " . $mname . " " . $lname . "?</h2>";
  }
}

?>

<!DOCTYPE html>
<html>
<body>

<h2>Day 2</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>"><br><br>
  
  <label for="lname">Middle name:</label><br>
  <input type="text" id="lname" name="mname" value="<?php echo $mname; ?>"><br><br>
  
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="<?php echo $lname; ?>"><br><br>
  
  <input type="submit" value="Submit">
</form> 

</body>
</html>
