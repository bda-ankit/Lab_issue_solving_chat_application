<?php

include("../../db.php");

$admin_id=$_GET["admin_id"];


	$sql="DELETE FROM chat_fac_admin WHERE admin_id='$admin_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		header("Location:chat_fac_admin.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}


?>