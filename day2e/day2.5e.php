
<!DOCTYPE html>
<html>
<body>
<h2>Swapping two Numbers</h2>

<form method="post" action="day2.5.php">
  <label for="fname">Number 1:</label><br>
  <input type="text" id="fname" name="n1"><br><br>
  
  <label for="lname">Number 2:</label><br>
  <input type="text" id="lname" name="n2"><br><br>
  
  <input type="submit" value="Swap" name="swap">
</form> 

<?php
if(isset($_POST['swap']))
{
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

if (empty($n1) || empty($n2))
  {
    echo "Fields are empty";
  } 
  else 
  {
$temp = $n1;
$n1 = $n2;
$n2 = $temp;

echo "After swapping:<br><br>";  
echo "Number 1 = " . $n1 ."<br>";
echo "Number 2 = " . $n2;  
}
}
?>

</body>
</html>