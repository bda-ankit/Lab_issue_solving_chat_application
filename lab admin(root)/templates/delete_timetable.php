<?php

include("../../db.php");

$time_table_id=$_GET["time_table_id"];



	$sql="DELETE FROM time_table WHERE time_table_id='$time_table_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		// echo "Record deleted successfully";
  		header("Location:time_table.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}

?>



