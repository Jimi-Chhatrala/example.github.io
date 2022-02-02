<?php

include ('function.php');

$c = new Customer();
$conn = $c->db_Conn();

$query = $c->display_Customer($conn);

if(isset($_POST["save"]))
{
	$c->insert_Customer($conn, $_POST['cust_name'], $_POST['city'], $_POST['state']);
}

?>


<form name="insert_Customer" method="post" align="center">
    <table border="2" align="center"> 
        <h1 align="center">CUSTOMER ENTRY FORM</h1>
    <tr>
        <td>
            <label for=""> Customer Name: </label> 
        </td>
        <td>
            <input type="text" name="cust_name">
        </td>
    </tr>
    <tr>
        <td>
            <label for=""> City: </label>
        </td>
        <td>
            <input type="text" name="city">
        </td>
    </tr>
    <tr>
        <td>
<label for=""> State: </label>
        </td>
        <td>
            <input type="text" name="state">
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            &nbsp;
            <input type="submit" name="save" value="+ ADD">
        </td>
    </tr>
    </table>
</form>
</body>
</html>

<html>
<body>
<Form name="display_Customer" method="post">
<table align="center" border="1px">
<h1 align="center"> EDIT CUSTOMER DETAILS </h1>

    <tr>
        <th><label for=""> Customer No. </label></th>
    
        <th><label for=""> Customer Name </label></th>
        <th><label for=""> City </label></th>
        <th><label for=""> State </label></th>
        <th><label for=""> Operations </label></th>
    </tr>
<?php
while($row = mysqli_fetch_array($query))
{?>
	<tr>
	<td><?php echo $row['cust_no'];?></td>
	<td><?php echo $row['cust_name'];?></td>
	<td><?php echo $row['city'];?></td>
	<td><?php echo $row['state'];?></td>
	<td>&nbsp;<a href="update.php?id=<?php echo $row['cust_no']; ?>"> Edit </a>&nbsp;
	<a href="delete.php?id=<?php echo $row['cust_no']; ?>"> Delete </a>&nbsp;</td>
<?php
}
?>
</table>
</form>
