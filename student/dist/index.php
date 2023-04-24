<?php
session_start();

if($_SESSION["login"] == 1)
{
  // echo "<script>alert('Welcome Student')</script>";
}
else
{
  header("Location:../../login/signin.php");
}




$today_day = date("l");

// echo $today_day;

$stu_id = $_SESSION["stu_id"];

// echo $today_day;


$date_t= date("d-m-Y");





?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Student</title>
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

  include("../../db.php");

  $qes="Select * from student_details where stu_id = '$stu_id';";
  $qry=$conn->query($qes);
  while($res=$qry->fetch_assoc())
  {
    
     $sem_id = $res["sem_id"];
     $course_id = $res["course_id"];

     $qes1="Select * from subject_master where course_id = '$course_id' and sem_id = '$sem_id' ;";
     // echo $qes1;
     $qry1=$conn->query($qes1);
     while($res1=$qry1->fetch_assoc())
     {

          $sub_id = $res1["sub_id"];

          $qes2="Select * from time_table where course_id = '$course_id' and sem_id = '$sem_id' and sub_id = '$sub_id' and week_day = '$today_day' ;";
          // echo $qes2;
          $qry2=$conn->query($qes2);
          while($res2=$qry2->fetch_assoc())
          {
               

               $qes3="Select * from room_master where sem_id = '$sem_id' and course_id = '$course_id' and sub_id = '$sub_id'  ";
               $qry3=$conn->query($qes3);
               $res3=$qry3->fetch_assoc();
               $room_master_id = $res3["room_master_id"];
               $room_code = $res3["room_number"];
                    
               







$str = "<a href='../config.php?roomid=".$room_master_id."&roomcode=".$room_code."'' style='color: #A39D9E;text-decoration: none;'>";
    echo $str;
?>
      <div class="event_item">
        <div class="ei_Dot dot_active"></div>
        <div class="ei_Title"><?php echo $res1["sub_name"];?></div>
        <div class="ei_Copy"><?php echo $res2["time"];?></div>
      </div>
</a>




<?php



          }



     }




  }

?>













      </div>
     
    </div>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
