
<html>

<head><title>concate string</title></head>
<script type="text/javascript">
function msgfun()
{

var msg="hi!! How are you"
var tmp=document.getElementById("ln").value;
msg +=' '+document.getElementById("ln").value + ' ' + document.getElementById("fn").value +  ' ' +document.getElementById("mn").value;
alert(msg);
document.getElementById("data").innerHTML=msg;
//document.write(msg);
return false;
}
</script>
<body>
<form onsubmit="return msgfun()">
Last Name:
<input type="text" id="ln"><br>
First Name:
<input type="text" id="fn"><br>
Middel Name:
<input type="text" id="mn"><br>

<input type="submit" value="submit">
</form>
<div id="data">
</body>
</html>