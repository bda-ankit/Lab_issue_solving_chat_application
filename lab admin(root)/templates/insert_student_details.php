<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>


<!--	<div class="page-inner">
		<div id="main-wrapper">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-darkblue">
                        <div class="panel-heading clearfix">
                            





							
<?php
// echo $admin_id;
?>
                                    

<br><br>

                               <div class="panel-body">
                                	<form>
                                    <table class="table table-hover">
                                    	<h4>Insert Data into Student Details</h4>
                                        <thead>
                                            <tr style="background-color: #192231;">
                                                <th>First Name</th>
                                                <th><input type="text" name="fname"></th>
                                            </tr>
                                            <tr style="background-color: #192231;">
                                                <th>Last Name</th>
                                                <th><input type="text" name="lname"></th>
                                            </tr>
                                            <tr style="background-color: #192231;">
                                                <th>Upload Photo</th>
                                                <th><input type="file" name="photo"></th>
                                            </tr>
                                            <tr style="background-color: #192231;">
                                                <th>Mobile number</th>
                                                <th><input type="text" name="number"></th>
                                            </tr>
                                            <tr style="background-color: #192231;">
                                                <th>Email ID</th>
                                                <th><input type="text" name="email"></th>
                                            </tr>
                                            <tr style="background-color: #192231;">
                                                <th>Course ID</th>
                                                <th><input type="text" name="course_id"></th>
                                            </tr>
                                            <tr style="background-color: #192231;">
                                                <th>Sem ID</th>
                                                <th><input type="text" name="sem_id"></th>
                                            </tr>
                                            <tr style="background-color: #192231;">
                                                <th>Enrollment</th>
                                                <th><input type="text" name="enroll"></th>
                                            </tr>
                                            <tr style="background-color: #192231;">
                                                <th>Password</th>
                                                <th><input type="text" name="pass"></th>
                                            </tr>
                                            <tr style="background-color: #192231;">
                                                <th>Login</th>
                                                <th><input type="text" name="login"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <button type="Submit" class="btn btn-primary dropdown-toggle"  data-toggle="dropdown" aria-expanded="false">Submit</button>
                               		</form>
                                </div>











                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->

<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Student Details Form</b></h1>
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


if (isset($_POST["btn_sub"])) {
    $stufname=$_POST["fname"];
    $stulname=$_POST["lname"];
    $stuphoto=" ";
    $stunumber=$_POST["number"];
    $stuemail=$_POST["email"];
    $courseid=$_POST["course_id"];
    $semid=$_POST["sem_id"];
    $stupass=$_POST["password"];
    $stuenrol=$_POST["enrollment"];




    $qry = "Insert into student_details (stu_fname,stu_lname,stu_photo,stu_number,stu_mail,course_id,sem_id,stu_pass,stu_enrol,login) values ('$stufname','$stulname','$stuphoto','$stunumber','$stuemail','$courseid','$semid','$stupass','$stuenrol','$login') ";
    // echo $qry;
    $fire=$conn->query($qry);

    
    echo "<script>window.location.href='student_details.php';</script>";



}


?>


									  <div class="form-group">
									    <label for="exampleInputEmail1">First Name</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First Name" name="fname">
									  </div>

									  <div class="form-group">
									    <label for="exampleInputEmail1">Last Name</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last Name" name="lname">
									  </div>

									  <!-- <div class="form-group">
									    <label for="exampleInputEmail1">Upload Photo</label>
									    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="photo" name="photo">
									  </div> -->

									  <div class="form-group">
									    <label for="exampleInputEmail1">Mobile Number</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Mobile Number" name="number">
									  </div>

									  <div class="form-group">
									    <label for="exampleInputEmail1">Mail ID</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email ID" name="email">
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



<!-- 
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Sem ID</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Sem ID" name="sem_id">
                                      </div> -->

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Password" name="password">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Enrollment No.</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enrollment No." name="enrollment">
                                      </div>

									  <input type="submit" name="btn_sub" class="btn btn-primary m-t-xs" value="submit">

									</form>
                                </div>
                            </div>
                        </div>
<?php
include("footer.php");
?>