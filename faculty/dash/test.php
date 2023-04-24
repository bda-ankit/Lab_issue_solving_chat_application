<?php
session_start();

include("../../db.php");



$room_id=$_GET['roomid'];
$room_code = $_GET['roomcode'];

$qry = "UPDATE room_master SET room_start = '1'  where room_master_id = '$room_id'";
$fire=$conn->query($qry);


$t_day = date("l");
$t_date = date("Y-m-d");
$t_time = date("H:i:s");
$com = date("H");
$fac_id = $_SESSION["fac_id"];

// echo $fac_id;

$qes3="Select * from room_data where room_master_id = '$room_id' and fac_id = '$fac_id' and week_day = '$t_day' and date = '$t_date' ";
// echo $qes3."<br>";
$qry3=$conn->query($qes3);
$qry3_cnt=mysqli_num_rows($qry3);

if ($qry3_cnt == 1) {
    $res3=$qry3->fetch_assoc();

    $time = $res3["time"];

    $ar_time = explode(":",$time);
    $db_time = $ar_time[0];
    $db_time_int = (int)$db_time;
}
else
{

    $db_time_int = 100;
}


$com_int = (int)$com;


if($com_int == $db_time_int || ($com_int+1) == $db_time_int )
{
    
    $qry1 = " UPDATE `room_data` SET `join_leave`= '1'  WHERE room_master_id = '$room_id' and stu_id = '' and fac_id = '$fac_id' and week_day = '$t_day' and `date` = '$t_date' and join_leave = '0'  ";
    // echo $qry1."<br>";
    $fire1=$conn->query($qry1);


   

}
else
{
    $qry7 = "INSERT INTO room_data (`room_master_id`,`stu_id`,`fac_id`,`week_day`,`date`,`time`,`end_time`,`join_leave`) VALUES ('$room_id','','$fac_id','$t_day','$t_date','$t_time','','1')";
    // echo $qry7."<br>";
    $fire7=$conn->query($qry7);

   

}



 header("Location:../dash/home.php?roomid=".$room_id."&roomcode=".$room_code);






?>