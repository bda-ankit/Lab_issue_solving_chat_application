<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];


$fac_sub_id=$_GET["fac_sub_id"];



?>



<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Update Faculty Sub</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php


$facid="";
$semid="";
$subid="";



if (isset($_POST["btn_sub"])) 
{
$facid = $_POST["fac_id"];
$course = $_POST["course_id"];
$subid = $_POST["sub_id"];



$qry = "update faculty_sub set fac_id='$facid',sub_id='$subid', course_id='$course' where fac_sub_id='$fac_sub_id'";
    // echo $qry;
    $fire=$conn->query($qry);

    
    echo "<script>window.location.href='faculty_sub.php';</script>";
}


$qes="Select * from faculty_sub where fac_sub_id = $fac_sub_id;";
$qry=$conn->query($qes);

while($res=$qry->fetch_assoc())
{

$facid = $res["fac_id"];
$sub = $res["sub_id"];
$course = $res["course_id"];





}






?>



									<div class="form-group">
                                        <label for="exampleInputEmail1">Fac ID</label>
                                        <select class="form-control form-select-options" name="fac_id">
<?php

$qes_sub="Select * from faculty_details;";
$qry_sub=$conn->query($qes_sub);
while($res_sub=$qry_sub->fetch_assoc())
{


if ($facid == $res_sub["fac_id"])
{
?>

<option value="<?php echo $res_sub['fac_id'];?>" selected><?php echo $res_sub['fac_fname'];?></option>

<?php
}
else
{
?>

<option value="<?php echo $res_sub['fac_id'];?>"><?php echo $res_sub['fac_fname'];?></option>

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
										
										
										
                                      

									  <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit">

									</form>
                                </div>
                            </div>
                        </div>
<?php
include("footer.php");
?>