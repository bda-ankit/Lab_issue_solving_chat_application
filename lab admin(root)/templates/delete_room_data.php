<?php
include("../../db.php");

$room_data_id=$_SESSION["room_data_id"];


	$sql="Delete from room_data where room_data_id='$room_data_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		// echo "Record deleted successfully";
  		header("Location:room_data.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}

?>
	