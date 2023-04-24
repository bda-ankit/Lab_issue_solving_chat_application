<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];


$stu_id=$_GET["stu_id"];

?>



<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Update Student Details</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php

$stufname="";
$stulname="";
$stuphoto="";
$stunumber="";
$stuemail="";
$courseid="";
$semid="";
$stupass="";
$stuenrol="";
$login="0";


if (isset($_POST["btn_sub"])) 
{
    $stufname=$_POST["fname"];
    $stulname=$_POST["lname"];
    $stuphoto=" ";
    $stunumber=$_POST["number"];
    $stuemail=$_POST["email"];
    $courseid=$_POST["course_id"];
    $semid=$_POST["sem_id"];
    $stupass=$_POST["password"];
    $stuenrol=$_POST["enrollment"];




    $qry = "update student_details set  stu_fname='$stufname',stu_lname='$stulname',stu_photo='$stuphoto',stu_number='$stunumber',stu_mail='$stuemail',course_id='$courseid',sem_id='$semid',stu_pass='$stupass',stu_enrol='$stuenrol',login='$login' where stu_id='$stu_id'";
    // echo $qry;
    $fire=$conn->query($qry);

    
    // echo "<script>window.location.href='student_details.php';</script>";
}


$qes="Select * from student_details where stu_id = $stu_id;";
$qry=$conn->query($qes);
while($res=$qry->fetch_assoc())
{


$fname = $res["stu_fname"];
$lname = $res["stu_lname"];
$phno = $res["stu_number"];
$mail = $res["stu_mail"];
$course = $res["course_id"];
$sem = $res["sem_id"];
$pass = $res["stu_pass"];
$enrol = $res["stu_enrol"];




}






?>


									  <div class="form-group">
									    <label for="exampleInputEmail1">First Name</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" name="fname" value="<?php echo $fname;?>">
									  </div>

									  <div class="form-group">
									    <label for="exampleInputEmail1">Last Name</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last Name" name="lname" value="<?php echo $lname;?>">
									  </div>

									  <!-- <div class="form-group">
									    <label for="exampleInputEmail1">Upload Photo</label>
									    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="photo" name="photo">
									  </div> -->

									  <div class="form-group">
									    <label for="exampleInputEmail1">Mobile Number</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Mobile Number" name="number" value="<?php echo $phno;?>">
									  </div>

									  <div class="form-group">
									    <label for="exampleInputEmail1">Mail ID</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email ID" name="email" value="<?php echo $mail;?>">
									  </div>

									  <!-- <div class="form-group">
									    <label for="exampleInputEmail1">Course ID</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Course ID" name="course_id">
									  </div> -->





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


<!-- 
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Sem ID</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Sem ID" name="sem_id">
                                      </div> -->

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Password" name="password" value="<?php echo $pass;?>">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Enrollment No.</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enrollment No." name="enrollment" value="<?php echo $enrol;?>">
                                      </div>

                                      

									  <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit">

									</form>
                                </div>
                            </div>
                        </div>
<?php
include("footer.php");
?>