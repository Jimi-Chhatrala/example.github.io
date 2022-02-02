<?php
	#print_r($_SERVER);
?>
<?php
	$fnm = "";
	$fullname = "";
	if(isset($_POST['txtName']) and isset($_POST['txtSurname']))
	{
	$fnm = $_POST['txtName'];
	#print $_POST['txtName'] . "  " . $_POST['txtSurname'];
	$fullname = $_POST['txtName'] . "  " . $_POST['txtSurname'];
	//echo(gettype($_POST['txtName']));
	#settype($_POST['txtName'],"integer");
	//echo(gettype($_POST['txtName']));
	//echo var_dump($_POST['txtName']);
	//print_r($_POST['txtName']);
	//var_dump((bool) ""); 
	//echo $_REQUEST['txtName'];
	}
?>
<script>
	function showPWD()
	{
		
		var x = document.getElementById("pwd");
		if(x.type == "password")
		{
			x.type = "text";
		}
		else
		{
			x.type = "password";
		}
	}

</script>
<html>
	<body>
		<H1> Day 2 Exercise </h1>
		<form name="frmReg" method="post" action="first.php">
		<table>
			<tr>
				<td>Name: </td>
				<td><Input type="text" id="txtName" name="txtName" value=<?php print $fnm ?> ></td>
			</tr>
			
			<tr>
				<td>Surname</td>
				<td><input type="text" name="txtSurname" id="txtSurname"></td>
			</tr>
			
			<tr>
				<td>Password</td>
				<td><input type="password" name="pwd" id="pwd"></td>
			</tr>
			
			<tr>
				<td>Show Password</td>
				<td><input type="checkbox" name="chkpwd" id="chkpwd" onClick="showPWD()"></td>
			</tr>
			
			<tr>
				<td><input type="Submit" name="btnSubmit" value="Submit"></td>
				<td><input type="Reset" name="btnreset" value="Clear"></td>
			</tr>
		</table>
		<div value=""><?php print $fullname ?></div>
	</body>
</html>
