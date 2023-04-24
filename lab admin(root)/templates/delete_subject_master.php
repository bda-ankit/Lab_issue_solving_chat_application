<?php

include("../../db.php");

$sub_id=$_GET["sub_id"];



	$sql="DELETE FROM subject_master WHERE sub_id='$sub_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		// echo "Record deleted successfully";
  		header("Location:subject_master.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}

?>



