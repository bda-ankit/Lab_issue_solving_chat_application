<?php
session_start();

include("../../db.php");

if($_SESSION["login"] == 2)
{
  // echo "<script>alert('Welcome Faculty')</script>";
}
else
{
  header("Location:../../login/signin.php");
}



$today_day = date("l");

// echo $today_day;

$fac_id = $_SESSION["fac_id"];

// echo $today_day;


$date_t= date("d-m-Y");
// $time_t = date("H-i-s");
// echo $time_t;






?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Faculty</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">
<script src="https://kit.fontawesome.com/7ad186a4dd.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: #2f2a30;">
<!-- partial:index.partial.html -->
<div class="container" style="padding-left: 11%; padding-top: -1px;">
 




<div class="calendar dark">
    <div class="calendar_header">
      <a href="../dash/logout.php"><button>Logout</button></a>
      <h1 class = "header_title"><center>Lab List</center></h1>
      <p class="header_copy"><?php echo $date_t;?></p>
    </div>



    <div class="calendar_events">
      <p class="ce_title">Upcoming Labs</p>



<?php



$qes="Select * from faculty_sub where fac_id = '$fac_id'";
$qry=$conn->query($qes);

while($res=$qry->fetch_assoc())
{
$sub_id = $res["sub_id"];
// echo $sub_id;

$course_id = $res["course_id"];




$qes3="Select * from subject_master where sub_id = '$sub_id'";
$qry3=$conn->query($qes3);

// echo $qes3."<br>"."<br>";


$res3=$qry3->fetch_assoc();

// echo $res3["sub_name"];

$sub_name = $res3["sub_name"];
$sem_id = $res3["sem_id"];



$qes1="Select * from time_table where course_id = '$course_id' and sub_id='$sub_id' and week_day = '$today_day' ;";
$qry1=$conn->query($qes1);

while($res1=$qry1->fetch_assoc())
{



$qes5="Select * from room_master where course_id = '$course_id' and sub_id='$sub_id' and sem_id = '$sem_id' ;";
$qry5=$conn->query($qes5);

while($res5=$qry5->fetch_assoc())
{
$room_code = $res5["room_number"];
$room_master_id = $res5["room_master_id"];

// echo $room_code."<br>".$room_master_id;

// echo "<br>";
  


    $str = "<a href='../dash/test.php?roomid=".$room_master_id."&roomcode=".$room_code."' style='color: #A39D9E;text-decoration: none;'>";
    echo $str;
    ?>
    
 
      <div class="event_item">
        <div class="ei_Dot dot_active"></div>
        <div class="ei_Title"><?php echo $sub_name; ?></div>
        <div class="ei_Copy"><?php echo $res1["time"]; ?></div>
      </div>
    </a>

<?php 
}
  }
} 
?>

<!-- 
<div class="event_item">

        <a href="../dash/home.php" style="color: #A39D9E;text-decoration: none;">

        <div class="ei_Dot"></div>
        <div class="ei_Title">12:00 pm</div>
        <div class="ei_Copy">Lunch for with the besties</div>
</a>
 -->
      </div>
     
    </div>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
