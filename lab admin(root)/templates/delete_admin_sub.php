<?php

include("../../db.php");

$admin_sub_id=$_GET["admin_sub_id"];

	$sql="Delete from admin_sub where admin_sub_id='$admin_sub_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		// echo "Record deleted successfully";
  		header("Location:admin_sub.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}

?>