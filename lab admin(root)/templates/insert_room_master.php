<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Room Master Form</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php
$roomnum="";
$courseid="";
$sem_id="";
$sub_id="";
$login="0";


if (isset($_POST["btn_sub"])) {
    
	
	$roomnum=$_POST["room_number"];
    $courseid=$_POST["course_id"];
    $sem_id=$_POST["sem_id"];
	$sub_id=$_POST["sub_id"];



    $qry = "Insert into room_master (room_number,course_id,sem_id,sub_id,room_start) values ('$roomnum','$courseid','$sem_id','$sub_id','$login') ";
    
	//echo $qry;
    $fire=$conn->query($qry);

    
    echo "<script>window.location.href='room_master.php';</script>";

}


?>

<div class="form-group">
									    <label for="exampleInputEmail1">Room Number</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Room Number" name="room_number">
									  </div>

									  
									  
									  <div class="form-group">
                                        <label for="exampleInputEmail1">Sem ID</label>
                                        <select class="form-control form-select-options" name="sem_id">
<?php

$qes_course="Select * from sem_master;";
$qry_course=$conn->query($qes_course);
while($res_course=$qry_course->fetch_assoc())
{

?>
                                        
                                            <option value="<?php echo $res_course['sem_id'];?>"><?php echo $res_course['sem_id'];?></option>                                                                   
<?php
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

?>
                                        
                                            <option value="<?php echo $res_sub['sub_id'];?>"><?php echo $res_sub['sub_name'];?></option>                                                                   
<?php
}
?>
                                            </select>
                                        </div>



									  

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
										
										
										
										
										
										
										
										



									  <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit">

									</form>
                                </div>
                            </div>
                        </div>
<?php
include("footer.php");
?>