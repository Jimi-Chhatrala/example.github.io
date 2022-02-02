<?php
$total = '';
function calculate($tire,$oil,$splug)
{
	$t=2500;
	$o=700;
	$p=300;
	
	return (($t*$tire)+($o*$oil)+($p*$splug));
	
}
if(isset($_POST["submit"]))
{
	$total=0;
	$tire=$_POST["tire"];
	$oil=$_POST["oil"];
	$splug=$_POST["splug"];
	$total=calculate($tire,$oil,$splug);
	
}

?>
<html>
<body>
	<form method="post" action="5.1e.php">
	<table border="2" align="center">
		<tr>
			<th>ITEM</th>
			<th>QUANTITY</th>
		</tr>
		<tr>
			<td>Tires</td>
			<td><input type="text" name="tire"></td>
		</tr>
		<tr>
			<td>Oil</td>
			<td><input type="text" name="oil"></td>
		</tr>
		<tr>
			<td>Spark Plugs</td>
			<td><input type="text" name="splug"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Submit Order"></td>
		</tr>
		<tr>
			<td>Total Amount To Be</td>
			<td><input type="text" name="total" disabled="" value='<?php echo $total;?>'></td>
		</tr>
	</table>
	</form>
</body>
</html>
