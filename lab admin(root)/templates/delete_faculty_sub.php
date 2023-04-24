<?php

include("../../db.php");

$fac_sub_id=$_GET["fac_sub_id"];



	$sql="DELETE FROM faculty_sub WHERE fac_sub_id='$fac_sub_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		// echo "Record deleted successfully";
  		header("Location:faculty_sub.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}

?>



