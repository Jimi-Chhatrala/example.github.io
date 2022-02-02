<?php
error_reporting(0);
?>
<center>
<form method="post" action="5.5e.php" style="background-color:yellow;">
<label for="cars">Enter a date:</label><br>
<select name="dno">
<?php
for($a = 1; $a <= 31; $a++)
{
    echo "<option value='" . $a . "'>" . $a . "</option>";
}
?>
</select>
<?php
$months = array(1 => 'Jan.', 2 => 'Feb.', 3 => 'Mar.', 4 => 'Apr.', 
5 => 'May', 6 => 'Jun.', 7 => 'Jul.', 8 => 'Aug.', 9 => 'Sep.', 10 => 
'Oct.', 11 => 'Nov.', 12 => 'Dec.');

?>

<select name="dmonth" >
<?php

foreach($months as $x => $x_value) {
  echo "<option value='" .  $x . "'>". $x_value . "</option>";
}
?>
</select>

<select name="dyear" >
<?php
for($a = 1900; $a <= 2030; $a++)
{
    echo "<option value='" . $a . "'>" . $a . "</option>";
	//echo "<option value="">" $a; "</option>";
}
?>
</select>
<?php
$d =  date("Y/m/d");
//echo $d;
?>
<?php
if(isset($_POST['submit']))
{
	$dno = $_POST['dno'];
	$dmonth = $_POST['dmonth'];
	$dyear = $_POST['dyear'];
	
	$datec = $dyear . "/". $dmonth . "/" . $dno;
	
	$res = ($d - $datec);
	if($res > 0)
	{
        $res = "Entered date is past date from today.";
	}
	else
	{
        $res = "Entered date is future date from today.";
	}	
}
?>

<input type="submit" id="lname" name="submit"><br>
<label for="cars">Output :</label><br>
<h3><?php echo $res; ?></h3>
</form>
</center>