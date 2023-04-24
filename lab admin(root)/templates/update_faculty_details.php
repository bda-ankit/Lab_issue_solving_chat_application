<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];


$fac_id=$_GET["fac_id"];

?>



<div class="col-md-6">
                            <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h1><b>Update Faculty Details</b></h1>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    <form method="post">
<?php

$fac_fname="";
$fac_lname="";
$fac_mail="";
$fac_number="";
$fac_pass="";
$fac_enrol="";
$login="0";


if (isset($_POST["btn_sub"])) 
{
	$fac_fname=$_POST["fname"];
    $fac_lname=$_POST["lname"];
	$fac_mail=$_POST["email"];
    $fac_number=$_POST["number"];
    $fac_pass=$_POST["password"];
    $fac_enrol=$_POST["enrollment"];




    $qry = "update faculty_details set fac_fname='$fac_fname',fac_lname='$fac_lname',fac_mail='$fac_email',fac_number='$fac_number',fac_pass='$fac_pass',fac_enrol='$fac_enrol',login='$login' where fac_id='$fac_id'";
    // echo $qry;
    $fire=$conn->query($qry);

    
    // echo "<script>window.location.href='student_details.php';</script>";
}


$qes="Select * from faculty_details where fac_id = $fac_id;";
$qry=$conn->query($qes);
while($res=$qry->fetch_assoc())
{


$fname = $res["fac_fname"];
$lname = $res["fac_lname"];
$mail = $res["fac_mail"];
$phno = $res["fac_number"];
$pass = $res["fac_pass"];
$enrol = $res["fac_enrol"];

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
									    <label for="exampleInputEmail1">Mail ID</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email ID" name="email" value="<?php echo $mail;?>">
									  </div>
									  
									  <div class="form-group">
									    <label for="exampleInputEmail1">Mobile Number</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Mobile Number" name="number" value="<?php echo $phno;?>">
									  </div>
									  
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