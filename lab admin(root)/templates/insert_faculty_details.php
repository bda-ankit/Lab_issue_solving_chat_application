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
                                    	<h4>Insert Data into faculty Details</h4>
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
                                                <th>email</th>
                                                <th><input type="file" name="gmail"></th>
                                            </tr>
                                            <tr style="background-color: #192231;">
                                                <th>Mobile number</th>
                                                <th><input type="text" name="number"></th>
                                            
                                            </tr>
                                            <tr style="background-color: #192231;">
                                                <th>Password</th>
                                                <th><input type="text" name="pass"></th>
                                            </tr>
                                            <tr style="background-color: #192231;">
                                                <th>Enrollment</th>
                                                <th><input type="text" name="enroll"></th>
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
                                    <h1><b>Faculty Details Form</b></h1>
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


if (isset($_POST["btn_sub"])) {
    $fac_fname=$_POST["fname"];
    $fac_lname=$_POST["lname"];
	$fac_mail=$_POST["email"];
    $fac_number=$_POST["number"];
    $fac_pass=$_POST["password"];
    $fac_enrol=$_POST["enrollment"];




    $qry = "Insert into faculty_details (fac_fname,fac_lname,fac_number,fac_mail,fac_pass,fac_enrol,login) values ('$fac_fname','$fac_lname','$fac_mail','$fac_number','$fac_pass','$fac_enrol','$login') ";
    // echo $qry;
    $fire=$conn->query($qry);

    
    echo "<script>window.location.href='faculty_details.php';</script>";



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
                                      <div class="form-group">
									    <label for="exampleInputEmail1">Mail ID</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email ID" name="email">
									  </div>									 

									  <div class="form-group">
									    <label for="exampleInputEmail1">Mobile Number</label>
									    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Mobile Number" name="number">
									  </div>

									  

									 





                                      

                                        
                                            


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