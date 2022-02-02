<?php
	echo "hello";
	//phpinfo();
?>
<script>
var strName;
var regstr
var bdt;
function validate()
{
	strName = document.frmReg.txtName;
	regstr = /^[A-Za-z]+$/ ;
	//bdt = document.frmReg.bdt.value;
	bdt = document.getElementById('bdt').value;
	alert(bdt);
	if( strName.value == '')
	{
		alert("Name must be a valid string");
		return false;
	}
	else
	{
		if((strName.value.match(regstr))== null)
		{
			alert("Name must contain only alphabets");
			return false;
		}
	}
	
	if(bdt.length == 0)
	{
		alert("Invalid Date");
		return false;
	}
	
	if(document.frmReg.gender.value == null)
	{
		alert("Invalid gender");
		return false;
	}
	if(document.frmReg.chkHobby.value == null)
	{
		alert("invalid Hobby");
		return false
	}
	return true;
}
function formValidate()
{
	if(validate())
	{
		alert("Form Submitted Successfully...");
		document.getElementById("data").innerHTML='Hi !!' + strName.value + ' ,your HBD is on ' + bdt;
		return false;
	}
}
</script>
<html>
<head>
	<style type="text/css">
		body{
			align: Center;
			background-color: lightgreen;
			font-family: Calibri;
			font-size: 26px;
		}
		form{
			align: center;
		}
		table{
			text-align: center;
			align: Center;
			font-family: Calibri;
			font-size: 26px;
			border: 4px solid red;
			color: blue;
		}
	</style>
</head>
	<body>
		<H1> Personal Information Form </h1>
		<form name="frmReg" method="post" onSubmit="return formValidate()">
		<table>
			<tr>
				<td>Name: </td>
				<td><Input type="text" id="txtName" name="txtName"></td>
			</tr>
			
			<tr>
				<td>Birthdate</td>
				<td><input type="date" name="bdt" id="bdt"></td>
			</tr>
			
			<tr>
				<td>Gender</td>
				<td><Input type="Radio" id="Male" name="gender" value="Male">Male
					<Input type="Radio" id="Female" name="gender" value="Female">Female
				</td>
			</tr>
			
			<tr>
				<td>Hobby</td>
				<td><Input type="Checkbox" name="chkHobby" value="Playing"</td>Playing
				<Input type="Checkbox" name="chkHobby" value="Singing"</td>Singing
				<Input type="Checkbox" name="chkHobby" value="Dancing"</td>Dancing
				<Input type="Checkbox" name="chkHobby" value="Painting"</td>Painting
				
			</tr>
			
			<tr>
				<td>Email:</td>
				<td><input type="email"></td>
			</tr>
			
			<tr>
				<td>Password</td>
				<td><input type="password" name="pwd"></td>
			</tr>
			
			<tr>
				<td>Re-Type Password</td>
				<td><input type="password" name="retypepwd"></td>
			</tr>
			
			<tr>
				<td><input type="Submit" name="btnSubmit" value="Submit"></td>
				<td><input type="Reset" name="btnreset" value="Clear"></td>
			</tr>
		</table>
		<div id="data">
		</form>
	</body>
</html>