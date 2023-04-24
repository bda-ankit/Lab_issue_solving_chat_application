<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Time Table Form</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php


$courseid="";
$semid="";
$subid="";
$week_day="";
$time="";
$duration="";


if (isset($_POST["btn_sub"])) {
    
    $courseid=$_POST["course_id"];
    $semid=$_POST["sem_id"];
	$subid=$_POST["sub_id"];
    $week_day=$_POST["week_day"];
	$time=$_POST["time"];
	$duration=$_POST["duration"];


	
	$qry="INSERT INTO time_table (course_id,sem_id,sub_id,week_day,time,duration) VALUES 
	('$courseid','$semid','$subid','$week_day','$time','$duration')";
	//echo $qry;
    $fire=$conn->query($qry);

    
    echo "<script>window.location.href='time_table.php';</script>";
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

?>
                                        
                                            <option value="<?php echo $res_course['course_id'];?>"><?php echo $res_course['course_name'];?></option>                                                                   
<?php
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

?>
                                        
                                            <option value="<?php echo $res_sem['sem_id'];?>"><?php echo $res_sem['sem_number'];?></option>                                                                   
<?php
}
?>
                                            </select>
                                        </div>

									  
									  
									  
									  
									  <div class="form-group">
                                        <label for="exampleInputEmail1">Sub ID</label>
                                        <select class="form-control form-select-options" name="sub_id">
<?php

$qes_sem="Select * from subject_master;";
$qry_sem=$conn->query($qes_sem);
while($res_sem=$qry_sem->fetch_assoc())
{

?>
                                        
                                            <option value="<?php echo $res_sem['sub_id'];?>"><?php echo $res_sem['sub_name'];?></option>                                                                   
<?php
}
?>
                                            </select>
                                        </div>


                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Week Day</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Week Day" name="week_day">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Time</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Time" name="time">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Duration</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Duration" name="duration">
                                      </div>

									  <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit">

									</form>
                                </div>
                            </div>
                        </div>

<?php
include("footer.php");
?>