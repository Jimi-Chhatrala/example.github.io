<html>
<body>
<center>
<?php

$ans = '';

if(isset($_POST['sub'])){
	$a=$_POST['no1'];
	$b=$_POST['no2'];
	$c=$_POST['no3'];

if($a == $b && $b == $c&& $c == $a)
{
	$ans = "All are equal.";
}	
else if($a >= $b && $a >= $c)
{
	$ans = $a . " is greatest.";
}
else if($b >= $a && $b >= $c)
{
	$ans = $b . " is greatest.";
}
else if($c >= $a && $c >= $b)
{
	$ans = $c . " is greatest.";
}
else
{
	$ans = "Invalid Option";
}
}
?>

<form method="post" action="3.2.php">
<label>Number 1: </label>
<input type="text" name="no1">
<br>
<label>Number 2: </label>
<input type="text" name="no2">
<br>
<label>Number 3: </label>
<input type="text" name="no3">
<br>
<input type="submit" name="sub" value="compare">
</form>
<div name="ans"><?php echo $ans; ?></div>
</center>
</body>
</html>