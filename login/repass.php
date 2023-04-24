<?php
include("../db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Head -->
    
<!-- Mirrored from themes.2the.me/Messenger-1.1/demo-dark/password-reset.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 18:57:53 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
        <title>Messenger - Responsive Bootstrap Application</title>

        <!-- Template core CSS -->
        <link href="assets/css/template.dark.min.css" rel="stylesheet">
    </head>
    <!-- Head -->

    <body>

        <div class="layout">

            <div class="container d-flex flex-column">
                <div class="row align-items-center justify-content-center no-gutters min-vh-100">

                    <div class="col-12 col-md-5 col-lg-4 py-8 py-md-11">

                        <!-- Heading -->
                        <h1 class="font-bold text-center">Reset Your Password</h1>

                        <!-- Text -->
                        <p class="text-center mb-6">Enter new password.</p>

                        <!-- Form -->
                        <form class="mb-6" method="post">

                            <!-- Email -->
                            <div class="form-group">
                                <!-- <label for="email" class="sr-only">Email Address</label> -->
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="New Password" required>
                            </div>

                            <div class="form-group">
                                <!-- <label for="email" class="sr-only">Email Address</label> -->
                                <input type="password" class="form-control form-control-lg" name="repassword" placeholder="Re - Password" required>
                            </div>

                              <div class="form-group d-flex justify-content-between">
                                <div class="custom-control custom-checkbox">
                                    <!-- <input type="checkbox" class="custom-control-input" checked="" id="checkbox-remember"> -->
                                    <!-- <label class="custom-control-label" for="checkbox-remember">Remember me</label> -->
                                </div>
                                <!-- <a href="signin.php">Login |</a> -->
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-lg btn-block btn-primary" name="btn" type="submit">Reset</button>
                        </form>


<!-- php start -->
<?php

$pass="";
$repass="";
$email="";

if(isset($_POST["btn"]))
{

    $pass=$_POST["password"];
    $repass=$_POST["repassword"];
    $email=$_SESSION["email"];

if($pass == $repass)
{
    $pass = $pass;

    

// check email from table

$stu="Select * from student_details where stu_mail='$email'";
$admin="Select * from admin_details where admin_mail='$email'";
$fac="Select * from faculty_details where fac_mail='$email'";


$sturesult=$conn->query($stu);
$stucnt=mysqli_num_rows($sturesult);

$adminresult=$conn->query($admin);
$admincnt=mysqli_num_rows($adminresult);

$facresult=$conn->query($fac);
$faccnt=mysqli_num_rows($facresult);





if($stucnt==1)
{
    $table="student_details";
    $qry="update $table set stu_pass='$pass' where stu_mail='$email'";
    $fire=$conn->query($qry);
    // echo "<script>alert('Your Password Sucessfully Updated');</script>";
    header("location:signin.php");
}
else
{
    if($faccnt==1)
    {
        $table="faculty_details";
        $qry="update $table set fac_pass='$pass' where fac_mail='$email'";
        $fire=$conn->query($qry);
        // echo "<script>alert('Your Password Sucessfully Updated');</script>";
        header("location:signin.php");
    }
    else
    {
        if($admincnt==1)
        {
            $table="admin_details";
            $qry="update $table set admin_pass='$pass' where admin_mail='$email'";
            $fire=$conn->query($qry);
            // echo "<script>alert('Your Password Sucessfully Updated');</script>";
            header("location:signin.php");
        }       
        else
        {
            echo "<script>alert('Email is Wrong');</script>";       
        }
    }
}

                                
}
else
{
    echo "<script>alert('Password and Re-Password is wrong');</script>";
    $pass = "";
}
}


?>
<!-- php end -->



                      

                    </div>
                </div> <!-- / .row -->
            </div>

        </div><!-- .layout -->

        <!-- Scripts -->
        <script src="assets/js/libs/jquery.min.js"></script>
        <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="assets/js/plugins/plugins.bundle.js"></script>
        <script src="assets/js/template.js"></script>
        <!-- Scripts -->

    </body>

<!-- Mirrored from themes.2the.me/Messenger-1.1/demo-dark/password-reset.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 18:57:53 GMT -->
</html>