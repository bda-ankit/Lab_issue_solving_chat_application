<?php
include("../db.php");

session_start();


$rotp="";
$getotp="";
 
$rotp=$_SESSION['otp'];
// echo $rotp;

if(!isset($_SESSION['otp']))
{
    header("location:password-reset.php");
}




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
                        <h1 class="font-bold text-center">One Time Password</h1>

                        <!-- Text -->
                        <p class="text-center mb-6">Enter OTP to reset password.</p>

                        <!-- Form -->
                        <form class="mb-6" method="post">

                            <!-- Email -->
                            <div class="form-group">
                                <label class="sr-only">OTP</label>
                                <input type="password" class="form-control form-control-lg" name="txt_otp" placeholder="Enter your otp" required>
                            </div>

                              <div class="form-group d-flex justify-content-between">
                                <div class="custom-control custom-checkbox">
                                    <!-- <input type="checkbox" class="custom-control-input" checked="" id="checkbox-remember"> -->
                                    <!-- <label class="custom-control-label" for="checkbox-remember">Remember me</label> -->
                                </div>
                                <!-- <a href="signin.php">Login |</a> -->
                            </div>

                            <!-- Submit -->
                            <button class="btn btn-lg btn-block btn-primary" name="submit" type="submit">Check OTP</button>
                        </form>


<?php


if(isset($_POST["submit"]))
{

    $getotp=$_POST["txt_otp"];
    // echo $getotp;
    if($getotp==$rotp)
    {
        echo "<script>alert('match');</script>";
       header("location:repass.php");
    }
 else
    {
          echo "<script>alert('OTP not match ..');</script>";
    }
}


?>


                      

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