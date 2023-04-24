<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];


$room_master_id=$_GET["room_master_id"];

?>



<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Update Room Master</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php

$room='';
$course="";
$semid="";
$subid="";



if (isset($_POST["btn_sub"])) 
{
$room=$_POST["room_number"];
$course = $_POST["course_id"];
$semid = $_POST["sem_id"];
$subid = $_POST["sub_id"];



$qry = "update room_master set room_number='$room',course_id='$course',sem_id='$semid',sub_id='$subid' where room_master_id='$room_master_id'";
    // echo $qry;
    $fire=$conn->query($qry);

    
    echo "<script>window.location.href='room_master.php';</script>";
}


$qes="Select * from room_master where room_master_id = $room_master_id;";
$qry=$conn->query($qes);

while($res=$qry->fetch_assoc())
{

$room_number=$res["room_number"];
$course = $res["course_id"];
$sem = $res["sem_id"];
$sub = $res["sub_id"];



}






?>

									<div class="form-group">
									    <label for="exampleInputEmail1">Room Number</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" 
										placeholder="Room Number" name="room_number" value="<?php echo $room_number;?>">
									</div>
									
									
									
									
									
									
									
									

									
									
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
				
									  
										
										
										
                                      

									  <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit">

									</form>
                                </div>
                            </div>
                        </div>
<?php
include("footer.php");
?>