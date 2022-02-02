<?php
include ('function.php');

	$id = $_REQUEST['id'];

	$c = new Customer();

	$conn = $c->db_Conn();
	
    $query = $c->get_Data($conn, $id);
	
	$row = mysqli_fetch_array($query);
	
	if(isset($_POST['update']))
	{
		$c->update_Customer($conn, $_POST['cust_name'], $_POST['city'], $_POST['state'], $id);
	}
	
?>

<html>
<body>
    <form action="#" method="post">
    <table align="center" border="2">
<h1 align="center"> UPDATE CUSTOMER DETAILS </h1>

    <input type="hidden" name="cust_no" value="<?php echo $cust_no; ?>">
    <tr>
        <td>
            <label for=""> Customer Name: </label>
        </td>
        <td>
            <input type="text" name="cust_name" value="<?php echo $row['cust_name']; ?>">
        </td>
    </tr>
    <tr>
        <td>
            <label for=""> City: </label>
        </td>
        <td>
            <input type="text" name="city" value="<?php echo $row['city']; ?>">
        </td>
    </tr>
    <tr>
        <td>
            <label for=""> State: </label>
        </td>
        <td>
            <input type="text" name="state" value="<?php echo $row['state']; ?>">
        </td>
    </tr>
    <tr>
        <td></td>
        &nbsp;
        <td>
            <input type="submit" value="Update" name="update">
        </td>
    </tr>

    </table>
</form>
</body>
</html>