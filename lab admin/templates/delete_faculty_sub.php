<?php
include("header.php");
include("../../db.php");

$fac_sub_id=$_SESSION["fac_sub_id"];

?>

<div class="panel panel-darkblue">
	<div class="panel-heading clearfix">

	<?php

	$sql="Delete from fac_sub where fac_sub_id='$fac_sub_id';";


	if ($conn->query($sql) === TRUE) 
	{
  		echo "Record deleted successfully";
	} 
	else 
	{
  		echo "Error deleting record: " . $conn->error;
	}

	?>
	<a href="student_details.php"><button type="button" class="btn btn-info btn-rounded dashboard-activity-loadmore">Press To Go Back</button></a>
	</div>
</div>

<?php
include("footer.php");
?>