<?php

include("../../db.php");

$room_master_id=$_GET["room_master_id"];



	$sql="DELETE FROM room_master WHERE room_master_id='$room_master_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		// echo "Record deleted successfully";
  		header("Location:room_master.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}

?>



