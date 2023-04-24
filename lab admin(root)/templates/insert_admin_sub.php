<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Admin Subject Form</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php

$adminid="";
$subid="";
$courseid="";
$semid="";


if (isset($_POST["btn_sub"])) {
    
    $adminid=$_POST["admin_id"];
    $subid=$_POST["sub_id"];
    $courseid=$_POST["course_id"];
    $semid=$_POST["sem_id"];



    $qry = "Insert into admin_sub (admin_id,sub_id,course_id,sem_id) values ('$adminid','$subid','$courseid','$semid') ";
    //echo $qry;
    $fire=$conn->query($qry);

    
    echo "<script>window.location.href='admin_sub.php';</script>";



}


?>

<div class="form-group">
                                        <label for="exampleInputEmail1">Admin ID</label>
                                        <select class="form-control form-select-options" name="admin_id">
<?php

$qes_admin="Select * from admin_details;";
$qry_admin=$conn->query($qes_admin);
while($res_admin=$qry_admin->fetch_assoc())
{

?>
                                        
                                            <option value="<?php echo $res_admin['admin_id'];?>"><?php echo $res_admin['admin_fname'];?></option>                                                                   
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


									  <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit">

									</form>
                                </div>
                            </div>
                        </div>
<?php
include("footer.php");
?>