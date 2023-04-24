<?php
include("header.php");
include("../../db.php");


$admin_sub_id=$_GET["admin_sub_id"];

?>



<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Update Admin Subject</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php

$adminid="";
$subid="";
$courseid="";
$semid="";


if (isset($_POST["btn_sub"])) 
{
    $adminid=$_POST["admin_id"];
    $subid=$_POST["sub_id"];
    $courseid=$_POST["course_id"];
    $semid=$_POST["sem_id"];




    $qry = "update admin_sub set  admin_id='$adminid',sub_id='$subid',course_id='$courseid',sem_id='$semid' where admin_sub_id='$admin_sub_id'";
    // echo $qry;
    $fire=$conn->query($qry);

    
    // echo "<script>window.location.href='admin_sub.php';</script>";
}


$qes="Select * from admin_sub where admin_sub_id = $admin_sub_id;";
$qry=$conn->query($qes);
while($res=$qry->fetch_assoc())
{


$admin = $res["admin_id"];
$sub = $res["sub_id"];
$course = $res["course_id"];
$sem = $res["sem_id"];



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


if ($admin == $res_admin["admin_id"])
{
?>

<option value="<?php echo $res_admin['admin_id'];?>" selected><?php echo $res_admin['admin_fname'];?></option>

<?php
}
else
{
?>

<option value="<?php echo $res_admin['admin_id'];?>"><?php echo $res_admin['admin_fname'];?></option>

<?php
}
}
?>
                                            </select>
                                        </div>





<div class="form-group">
                                        <label for="exampleInputEmail1">Subject ID</label>
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
 

                                      <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit">

                                    </form>
                                </div>
                            </div>
                        </div>
<?php
include("footer.php");
?>