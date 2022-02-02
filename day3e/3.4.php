<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
<form action="3.4.php" method="post" >
<input type="checkbox" name="p1" value="value1">Thumbsup
<br>
<input type="checkbox" name="p2" value="value2">Biscuit
<br>
<input type="checkbox" name="p3" value="value3">CocaCola
<br>
<input type="checkbox" name="p4" value="value4">Cheeze
<br>

<input type="submit" name="total" value="Calculate Bill"> 
</form>
</center>
<center>
<?php

$bill = 0;
$discount = 0;
if(isset($_POST['total']))
{

if(isset($_POST['p1'])){
    $bill += 500;
}
if(isset($_POST['p2'])){
    $bill += 1000;
}
if(isset($_POST['p3'])){
    $bill += 2000;
}
if(isset($_POST['p4'])){
    $bill += 3000;
}

    echo "Total Bill : " . $bill . "<br>";

    if($bill > 5000)
    {
        $billDis = ($bill - ($bill * 0.20));
    }
    else if($bill > 2000)
    {
        $billDis = ($bill - ($bill * 0.10));
    }
    else if($bill > 1000)
    {
        $billDis = ($bill - ($bill * 0.05));
    }
    else
    {
        $billDis = $bill;
    }

    echo "Bill with discount : " . $billDis;
}
?>
</center>
</body>
</html>