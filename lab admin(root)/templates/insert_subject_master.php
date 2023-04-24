<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Subject Master Form</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php

$subname="";
$courseid="";
$semid="";

if (isset($_POST["btn_sub"])) {
    $subname=$_POST["name"];
    $courseid=$_POST["course_id"];
    $semid=$_POST["sem_id"];
  
    $qry = "Insert into subject_master (sub_name,course_id,sem_id) values ('$subname','$courseid','$semid') ";
    // echo $qry;
    $fire=$conn->query($qry);

    
    echo "<script>window.location.href='subject_master.php';</script>";



}


?>


									  <div class="form-group">
									    <label for="exampleInputEmail1">Subject Name</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subject Name" name="name" required>
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

									  <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="Submit">
									  <a href="subject_master.php" class="btn btn-primary m-t-xs">Cancel</a>
									</form>
                                </div>
                            </div>
                        </div>
<?php
include("footer.php");
?>