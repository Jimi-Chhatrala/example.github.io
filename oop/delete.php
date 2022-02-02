<?php
include ('function.php');

	$id = $_REQUEST['id'];

	$c = new Customer();
	$conn = $c->db_Conn();
	
	$c->delete_Customer($conn,$id);
?>