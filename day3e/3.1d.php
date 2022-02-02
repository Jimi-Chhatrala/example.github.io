<html>
	<body>
		<form name='fno' method="post">
			<table border="2" align="center">
				<tr>
					<th colspan="2" align="center">Student Result</th>
				</tr>
				<tr>
					<td>C</td>
					<td><input type="text" name="c"></td>
				</tr>
				<tr>
				<tr>
					<td>FOC</td>
					<td><input type="text" name="foc"></td>
				</tr>
				<tr>
					<td>DM</td>
					<td><input type="text" name="dm"></td>
				</tr>
				<tr>
					<td>RDBMS</td>
					<td><input type="text" name="rdbms"></td>
				</tr>
				<tr>
					<td>PHP</td>
					<td><input type="text" name="PHP"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="sub" value="Display Result"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
if(isset($_POST["sub"]))
{
	$c=$_POST["c"];
	$foc=$_POST["foc"];
	$dm=$_POST["dm"];
	$rd=$_POST["rdbms"];
	$php=$_POST["PHP"];
	
	$total=$c+$foc+$dm+$rd+$php;
	echo "<h4 align='center'>Total Marks : ".$total."</h4>";
	
	$per=$total/5;
	echo "<h4 align='center'>Percentage : ".$per."</h4>";
	
	$grade = (($per>=60) ? "<h4 align='center'>Grade : First Class</h4>" : 
	($per>=45 && $per<=59) ? "<h4 align='center'>Grade : Second Class</h4>" : 
	($per>=33 && $per<=44) ? "<h4 align='center'>Grade : Third Class</h4>" : 
	"<h4 align='center'>Grade : Fail</h4>");
	echo $grade;
}
?>