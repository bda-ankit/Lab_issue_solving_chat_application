<?php
include("../../db.php");

$room_id = $_GET["roomid"];
$fac_id = $_GET["facid"];
$week_day = $_GET["week_day"];
$date = $_GET["date"];




$e_time = date("H:i:s");
// echo $e_time;

// $j_l = 0;


$qry = "update room_master SET room_start = '0' WHERE room_master_id = '$room_id';";
// echo $qry;
$fire123=$conn->query($qry);

$qry1 = "update room_data SET end_time = '$e_time' , join_leave = '0'  WHERE room_master_id = '$room_id' and fac_id = '$fac_id' and week_day = '$week_day' and date = '$date';";
// echo $qry1;
$fire1234 = $conn->query($qry1);



$test2 = $_GET["test"];
if ($test2 == 0)
{
	$test2 = $test2+2;
	header("Location:end_meeting.php?roomid=".$room_id."&facid=".$fac_id."&week_day=".$week_day."&date=".$date."&time=".$time."&test=".$test2);
}
else
{

// echo "<br><br>"."done";


	header("Location:../dist/index.php");

}



 

?>