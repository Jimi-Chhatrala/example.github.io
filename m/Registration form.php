<html>
<head>
<title>Registration form </title>
<style>
#main
{
width:650px;
height:550px;
border:1px solid black;
margin:auto;
background:#F3F3F3;

}
.butn
{
background-color:blue;
color:white;
}
#row
{
width:99%;
height:40px;
border:1px solid #F3F3F3;
}
.col
{
width:32%;
height:89%;
border:1px solid #F3F3F3;
float:left;
margin-left:2px;
}

input{type=submit}
{
width:100px;
}
input:hover{border:1px solid red}

input{font-size:25px}
.r
{
width:10px;
height:15px;
font-size:10px;
}
</style>
<script type="text/javascript">
function chkblnk(eid,errid)
{
var x=document.getElementById(eid).value;
if(x=="")
{
document.getElementById(errid).innerHTML="pls fill this field";
}
else
{
document.getElementById(errid).innerHTML="";
}
}

function chkAplha(event,err)
{

var str=document.getElementById("fn").value;
//alert(str);
//document.getElementById("error").innerHTML="kkkk";
//alert(str);
var regEx = /^[A-Za-z]+$/;
 
   if(str.match(regEx))
     {
		//alert("valid");
       document.getElementById("error").innerHTML="valid ";
     }
   else
     {
	// alert("invalid");
    document.getElementById("error").innerHTML="invalid name";
     
     }
//alert("invalid");

}
function resetfun(){  

  document.getElementById("myform").reset();  
 }   
function chkeid()
{
var e=document.getElementById("e").value;
var atpos=e.indexOf("@");
var dotpos=e.lastIndexOf(".");
if(atpos<4 || dotpos<atpos+3)
{
document.getElementById("error2").innerHTML="invalid email";
}
else
{
document.getElementById("error2").innerHTML="";
}
//alert(atpos+" "+dotpos);
}
</script>
</head>
<body>
<form action="" method="post" id="myform">
<div id="main">
<h5 align="center">Registration Form</h5>
<div id="row" style="color:black">
<div class="col">Your First Name</div>
<div class="col"><input type="text" id="fn" name="fn" onkeypress="return chkAplha(event,'error')" onblur="chkblnk('fn','error')"/></div>
<div class="col" id="error" style="color:red"></div>
</div>
<div id="row" style="color:black">
<div class="col">Birth date</div>
<div class="col"><input type="date" id="bd" name="bd" /></div>

</div>
<div id="row" style="color:black">
<div class="col">Gender</div>

<input type="radio" id="gen" name="gen" value="male" />male
<input type="radio" id="gen" name="gen" value="female"/>female
</div>
<div id="row" style="color:black">
<div class="col">Your Hobby</div>
<input type="checkbox" id="s" name="h[]" value="singing"/>singing

<input type="checkbox" id="s" name="h[]" value="dancing" />Dancing

<input type="checkbox"id="s" name="h[]" value="reading"/>Reading

<input type="checkbox" id="s" name="h[]" value="writing"/>Writing
</div>

<div id="row" style="color:black">
<div class="col">Conform Pass</div>
<div class="col"><input type="password" id="cp"  onblur="chkblnk('cp','error4')"/></div>
<div class="col" style="color:red" id="error4"></div>
</div>
<div id="row" style="color:black">
<div class="col">Your Email id</div>
<div class="col">
<input type="text" id="e" name="e" onblur="chkeid()"/></div>
<div class="col" id="error2" style="color:red"></div>
</div>
<div id="row" style="color:black">
<div class="col">Your Passord</div>
<div class="col"><input type="password" id="p"  onblur="chkblnk('p','error3')"/></div>
<div class="col" id="error3" style="color:red"></div>
</div>
<div id="row" style="color:black">
<div class="col">Re-type Pass</div>
<div class="col"><input type="password" id="cp"  onblur="chkblnk('cp','error4')"/></div>
<div class="col" style="color:red" id="error4"></div>
</div>
<div id="row" style="color:black">
<div class="col"></div>
<div class="col" ><input type="button" value="Clear" class="butn" onclick="resetfun()"> <input type="submit" value="Submit" class="butn" name="submit"></div>


</div>
</form>
<?php
	if(isset($_POST['submit']))
	{
	echo "First Name: ".$_POST['fn']."<br>";
	echo "Birth date: ".$_POST['bd']."<br>";
	echo "Gender: ".$_POST['gen']."<br>";
	echo "Hobbies: ";
	print_r($_POST['h']);
	echo "<br>"."Email: ".$_POST['e']."<br>";
	}
?>
</body>
</html>