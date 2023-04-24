<?php

include("../../db.php");

$chat_a_id=$_GET["chat_f_id"];



	$sql="Delete from chat_stu_fac where chat_f_id='$chat_f_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		// echo "Record deleted successfully";
  		header("Location:chat_stu_fac.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}

?>



