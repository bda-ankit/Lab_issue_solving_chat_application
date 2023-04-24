<?php 

$room_id = $_GET["roomid"];
$stu_id = $_GET["stuid"];
$week_day = $_GET["week_day"];
$date = $_GET["date"];




include("../../db.php");

echo "<br>";


$e_time = date("H:i:s");
// echo $e_time;

$j_l = 0;
$qry1 = "UPDATE `room_data` SET end_time = '$e_time' , join_leave = '$j_l'  WHERE room_master_id = '$room_id' and stu_id = '$stu_id' and week_day = '$week_day' and `date` = '$date' ";
// echo "<br>".$qry1;
$fire1=$conn->query($qry1);




header("Location:../dist/index.php");
?>