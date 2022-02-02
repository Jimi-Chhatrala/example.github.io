<?php

class Customer
{
	public $conn;

	public function db_Conn()
	{
		$conn = mysqli_connect("localhost","root","","mydb");
		if (!$conn) 
        {
			die("Connection failed: " . mysqli_connect_error());
			return false;
		}
		else
        {
			return $conn;
        }
	}
	
	public function display_Customer($conn)
	{
		$query = mysqli_query($conn,"Select * from customer_crud");
		return $query;
	}

	public function insert_Customer($conn, $cust_name,$city,$state)
	{
		$query = mysqli_query($conn,"INSERT INTO customer_crud VALUES (null,'$cust_name','$city','$state')");
		header('Location:index.php');
	}
	public function update_Customer($conn, $cust_name, $city, $state, $id)
	{
		$query = mysqli_query($conn,"update customer_crud set cust_name='".$cust_name."',city='".$city."',state='".$state."' where cust_no=".$id.""); 
		header('Location:index.php');
	}
	public function get_Data($conn, $id)
	{
		$query = mysqli_query($conn, "select * from customer_crud where cust_no = " . $id);
		return 	$query;
	}

	public function delete_Customer($conn, $id)
	{
		$query = mysqli_query($conn, "delete from customer_crud where cust_no = " . $id);
		header('Location:index.php');
	}
}
?>