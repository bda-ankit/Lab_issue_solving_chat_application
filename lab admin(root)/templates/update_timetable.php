<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];


$time_table_id=$_GET["time_table_id"];

?>



<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Update Time Table</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php


$course="";
$semid="";
$subid="";
$week_day="";
$time="";
$duration="";



if (isset($_POST["btn_sub"])) 
{

$course = $_POST["course_id"];
$semid = $_POST["sem_id"];
$subid = $_POST["sub_id"];
$week_day = $_POST["week_day"];
$time = $_POST["time"];
$duration = $_POST["duration"];



$qry = "update time_table set  course_id='$course',sem_id='$semid',sub_id='$subid',week_day='$week_day',time='$time',duration='$duration' where time_table_id='$time_table_id'";
     //echo $qry;
    $fire=$conn->query($qry);

    
     echo "<script>window.location.href='time_table.php';</script>";
}


$qes="Select * from time_table where time_table_id = $time_table_id;";
$qry=$conn->query($qes);
while($res=$qry->fetch_assoc())
{


$course = $res["course_id"];
$sem = $res["sem_id"];
$sub = $res["sub_id"];
$week_day = $res["week_day"];
$time = $res["time"];
$duration = $res["duration"];



}






?>


									  


                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Course ID</label>
                                        <select class="form-control form-select-options" name="course_id">
<?php

$qes_course="Select * from course_table;";
$qry_course=$conn->query($qes_course);
while($res_course=$qry_course->fetch_assoc())
{


if ($course == $res_course["course_id"])
{
?>

<option value="<?php echo $res_course['course_id'];?>" selected><?php echo $res_course['course_name'];?></option>

<?php
}
else
{
?>

<option value="<?php echo $res_course['course_id'];?>"><?php echo $res_course['course_name'];?></option>

<?php
}
}
?>
                                            </select>
                </div>






                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Sem ID</label>
                                        <select class="form-control form-select-options" name="sem_id">
<?php
$qes_sem="Select * from sem_master;";
$qry_sem=$conn->query($qes_sem);
while($res_sem=$qry_sem->fetch_assoc())
{


if ($sem == $res_sem["sem_id"])
{
?>

<option value="<?php echo $res_sem['sem_id'];?>" selected><?php echo $res_sem['sem_number'];?></option>

<?php
}
else
{
?>

<option value="<?php echo $res_sem['sem_id'];?>"><?php echo $res_sem['sem_number'];?></option>

<?php
}
}
?>
                                            </select>
                                        </div>
										
										
										             <div class="form-group">
                                        <label for="exampleInputEmail1">Sub ID</label>
                                        <select class="form-control form-select-options" name="sub_id">
<?php

$qes_sub="Select * from subject_master;";
$qry_sub=$conn->query($qes_sub);
while($res_sub=$qry_sub->fetch_assoc())
{


if ($sub == $res_sub["sub_id"])
{
?>

<option value="<?php echo $res_sub['sub_id'];?>" selected><?php echo $res_sub['sub_name'];?></option>

<?php
}
else
{
?>

<option value="<?php echo $res_sub['sub_id'];?>"><?php echo $res_sub['sub_name'];?></option>

<?php
}
}
?>
                                            </select>
                </div>
										
										<div class="form-group">
                                        <label for="exampleInputEmail1">Week day</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" 
										placeholder="Week day" name="week_day" value="<?php echo $week_day;?>">
                                      </div>
										
										<div class="form-group">
                                        <label for="exampleInputEmail1">Time</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" 
										placeholder="Time" name="time" value="<?php echo $time;?>">
                                      </div>
										
										<div class="form-group">
                                        <label for="exampleInputEmail1">Duration</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" 
										placeholder="Duration" name="duration" value="<?php echo $duration;?>">
                                      </div>
										
										
										
										
										
	
										
                                      

									  <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit">

									</form>
                                </div>
                            </div>
                        </div>
<?php
include("footer.php");
?>