<html>
<head>
<title>Swap Number </title>
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

function chkdigit(eid,err)
{

var str=document.getElementById(eid).value;
//alert(str);

//document.getElementById("error").innerHTML="kkkk";
//alert(str);
var regEx = /^[0-9]+$/;
 
   if(str.match(regEx))
     {
		//alert("valid");
       document.getElementById(err).innerHTML="valid ";
     }
   else
     {
	// alert("invalid");
    document.getElementById(err).innerHTML="invalid name";
     
     }
//alert("invalid");

}
function resetfun(){  

  document.getElementById("myform").reset();  
 }   
</script>
</head>
<body>
<form action="" method="post" id="myform">
<div id="main">
<h5 align="center">Registration Form</h5>
<div id="row" style="color:black">
<div class="col"> First Number</div>
<div class="col"><input type="text" id="fn" name="fn" onfocusout="chkdigit('fn','error')" onblur="chkblnk('fn','error')"/></div>
<div class="col" id="error" style="color:red"></div>
</div>
<div id="row" style="color:black">
<div class="col">Second Number</div>
<div class="col"><input type="text" id="sn" name="sn" onfocusout="chkdigit('sn','error1')" onblur="chkblnk('fn','error')" /></div>
<div class="col" id="error1" style="color:red"></div>
</div>
<div id="row" style="color:black">
<div class="col"></div>
<div class="col" > <input type="submit" value="Swap" class="butn" name="submit"></div>


</div>
</form>
<?php
	echo "<h1> After the swap value</h1><br>";
	if(isset($_POST['submit']))
	{
	$tmp=$_POST['fn'];
	$_POST['fn']=$_POST['sn'];
	$_POST['sn']=$tmp;
	echo "First Number: ".$_POST['fn']."<br>";
	echo "Second Number: ".$_POST['sn']."<br>";
		}
?>
</body>
</html>