<?php

include("../../db.php");

$stu_id=$_GET["stu_id"];



	$sql="DELETE FROM student_logs WHERE stu_id='$stu_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		// echo "Record deleted successfully";
  		header("Location:student_logs.php");
	} 
	else 
	{
  		echo "Error deleting record:" . $conn->error;
	}

?>



