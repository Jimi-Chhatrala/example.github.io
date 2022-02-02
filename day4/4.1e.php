<?php
/*
echo "Printing an array";
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
echo "<br>";
for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
*/
?>
<hr>
<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);
echo "<br>";
echo "Printing an array in reverse order";
echo "<br><br>";
$arr1 = array_reverse($cars);
for($x = 0; $x < $arrlength; $x++) {
  echo $arr1[$x];
  echo "<br>";
}
?>