<?php
include("../db.php");

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
                        <h1 class="font-bold text-center">Password Reset</h1>

                        <!-- Text -->
                        <p class="text-center mb-6">Enter your email address to reset password.</p>

                        <!-- Form -->
                        <form class="mb-6" method="post">

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email" class="sr-only">Email Address</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email" required>
                            </div>

                              <div class="form-group d-flex justify-content-between">
                                <div class="custom-control custom-checkbox">
                                    <!-- <input type="checkbox" class="custom-control-input" checked="" id="checkbox-remember"> -->
                                    <!-- <label class="custom-control-label" for="checkbox-remember">Remember me</label> -->
                                </div>
                                <a href="signin.php">Login |</a>
                            </div>

                            <!-- Submit -->
                            <input type="submit" class="btn btn-lg btn-block btn-primary" name="submit" value="Send OTP">
                        </form>


<?php

    if (isset($_POST["submit"]))
    {





$email=$_POST['email'] ;
       $_SESSION['email']=$email;
       

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
  






       $q=mysqli_query($conn,"select * from student_details where stu_mail='$email'");
       $count= mysqli_num_rows($q);
       $row= mysqli_fetch_array($q);
       $otp= rand(100000,900000);
       $_SESSION['otp']=$otp;
      
        if($count>0)
        {
         

            //Load Composer's autoloader
            require 'vendor/autoload.php';

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
           
            try {
                //Server settings
                $mail->SMTPDebug =0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = TRUE;                               // Enable SMTP authentication
                $mail->Username = 'lab.issue.managment@gmail.com';                 // SMTP username
                $mail->Password = 'lab issue managment 1';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom('lab.issue.managment@gmail.com', 'Lab Issue Managment');
                $mail->addAddress($email, $email);     // Add a recipient
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Forget Password';
                $mail->Body = "Hi, $email your <b>OTP IS $otp</b>";
               // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                 
                $mail->send();
                echo "<script>alert('OPT Has Been Send To Your Email');window.location='checkotp.php';</script>";
            }
            catch (Exception $e)
            {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

        }
        else
        {
            echo "<script>alert('Email Not Found');</script>";
        }






  
}
else
{
  if($faccnt==1)
  {
    




       $abc="select * from faculty_details where fac_mail='$email'";
       $q=mysqli_query($conn,"$abc");
       // echo $abc."<br><br>";
       $count= mysqli_num_rows($q);
       // echo $count;
       $row= mysqli_fetch_array($q);
       $otp= rand(100000,900000);
       $_SESSION['otp']=$otp;
      
        if($count>0)
        {
         

            //Load Composer's autoloader
            require 'vendor/autoload.php';

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
           
            try {
                //Server settings
                $mail->SMTPDebug =0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = TRUE;                               // Enable SMTP authentication
                $mail->Username = 'lab.issue.managment@gmail.com';                 // SMTP username
                $mail->Password = 'lab issue managment 1';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom('lab.issue.managment@gmail.com', 'Lab Issue Managment');
                $mail->addAddress($email, $email);     // Add a recipient
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Forget Password';
                $mail->Body = "Hi, $email your <b>OTP IS $otp</b>";
               // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                 
                $mail->send();
                echo "<script>alert('OPT Has Been Send To Your Email');window.location='checkotp.php';</script>";
            }
            catch (Exception $e)
            {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

        }
        else
        {
            echo "<script>alert('Email Not Found');</script>";
        }







  }
  else
  {
       if($admincnt==1)
      {
        




       $abc="select * from admin_details where admin_mail='$email'";
       $q=mysqli_query($conn,"$abc");
       // echo $abc."<br><br>";
       $count= mysqli_num_rows($q);
       // echo $count;
       $row= mysqli_fetch_array($q);
       $otp= rand(100000,900000);
       $_SESSION['otp']=$otp;
      
        if($count>0)
        {
         

            //Load Composer's autoloader
            require 'vendor/autoload.php';

            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
           
            try {
                //Server settings
                $mail->SMTPDebug =0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = TRUE;                               // Enable SMTP authentication
                $mail->Username = 'lab.issue.managment@gmail.com';                 // SMTP username
                $mail->Password = 'lab issue managment 1';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom('lab.issue.managment@gmail.com', 'Lab Issue Managment');
                $mail->addAddress($email, $email);     // Add a recipient
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Forget Password';
                $mail->Body = "Hi, $email your <b>OTP IS $otp</b>";
               // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                 
                $mail->send();
                echo "<script>alert('OPT Has Been Send To Your Email');window.location='checkotp.php';</script>";
            }
            catch (Exception $e)
            {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

        }
        else
        {
            echo "<script>alert('Email Not Found');</script>";
        }










      }        
      else
      {
                echo "<script>alert('Either Email Is Worng')</script>";
      }
    }
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