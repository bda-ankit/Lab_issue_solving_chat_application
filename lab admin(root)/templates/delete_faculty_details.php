<?php

include("../../db.php");

$fac_id=$_GET["fac_id"];



	$sql="DELETE FROM faculty_details WHERE fac_id='$fac_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		// echo "Record deleted successfully";
  		header("Location:faculty_details.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}

?>



