
<?php

include("../../db.php");

$chat_a_id=$_GET["chat_a_id"];



	$sql="Delete from chat_stu_admin where chat_a_id='$chat_a_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		// echo "Record deleted successfully";
  		header("Location:chat_stu_admin.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}

?>



