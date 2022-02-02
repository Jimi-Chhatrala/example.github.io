

<!DOCTYPE html>
<html>
<body>

<form method="post" action="day2.4.php">
<table border="2" align="center">
<tr>

<h1 align="center">Registration Form</h1>

</tr>

<tr>
	<td>
	  <label for="fname">First name:</label><br>
	</td>
	<td>
	  <input type="text" id="fname" name="fname">
	</td>  
</tr>

<tr>
	<td>
	  <label for="lname">Last name:</label><br>
	</td>
	<td>
	  <input type="text" id="lname" name="lname">
	</td>  
</tr>

<tr>
	<td>
	  <label for="fname">Birthdate:</label><br>
	</td>
	<td>
	  <input type="date" id="dob" name="dob">
	</td>  
</tr>

<tr>
	<td>
	  <label for="fname">Address:</label><br>
	</td>
	<td>
	  <input type="text" id="address" name="address">
	</td>  
</tr>

<tr>
	<td>
	  <label for="fname">Pincode:</label><br>
	</td>
	<td>
	  <input type="text" id="pincode" name="pincode">
	</td>  
</tr>

<tr>
	<td>
	  <label for="fname">Country:</label><br>
	</td>
	<td>
	  <input type="text" id="country" name="country">
	</td>  
</tr>

<tr>
<td>

</td>
<td>
  <input type="submit" value="Submit" name="submit">
</td>  
</tr>

</table>


</form> 
</body>
</html>

<?php

// Program 4

if (isset($_POST["submit"]))
{
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $address = $_POST['address'];
  $country = $_POST['country'];
  $pincode = $_POST['pincode'];
  $dob = $_POST['dob'];
  
  if (empty($fname) || empty($lname) || empty($address) || empty($country) || empty($pincode) || empty($dob))
  {
    echo "Fields are empty";
  } 
  else
  {?>
	<div align="center">
	<label for="fname">First name:</label><?php echo $fname; ?><br>
	<label for="fname">Last name:</label><?php echo $lname; ?><br>
	<label for="fname">Birthdate:</label><?php echo $dob; ?><br>
	<label for="fname">Address:</label><?php echo $address; ?><br>
	<label for="fname">Pincode:</label><?php echo $pincode; ?><br>
	<label for="fname">Country:</label><?php echo $country; ?><br>
	</div>
  }<?php

  }
}

?>