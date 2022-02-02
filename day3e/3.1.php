<?php

$result = '';
if(isset($_POST["sub"]))
{
	$fno=$_POST["fno"];
	$sno=$_POST["sno"];
	$opr=$_POST["calculator"];
	switch($opr)
	{
		case "+":
		$result=$fno+$sno;
		break;
		
		case "-":
		$result=$fno-$sno;
		break;
		case "*":
		$result=$fno*$sno;
		break;
		
		case "/":
		$result=$fno/$sno;
		break;
	}
}
?>

<html>
	<body>
		<form name='fno' method="post">
			<table border="2" align="center">
				<tr>
					<th colspan="2" align="center">Calculator</th>
				</tr>
				<tr>
					<td>Enter First Number</td>
					<td><input type="text" name="fno"></td>
				</tr>
				<tr>
					<td>Select Operator</td>
					<td colspan="2" align="center"><select name="calculator">
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="*">*</option>
						<option value="/">/</option>
					</select></td>
				</tr>
				<tr>
					<td>Enter Second Number</td>
					<td><input type="text" name="sno"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="sub" value="calculate"></td>
				</tr>
                <tr>
					<td>Output = </td>
					<td><input type="text" name="ans" value="<?php echo $result; ?>"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
