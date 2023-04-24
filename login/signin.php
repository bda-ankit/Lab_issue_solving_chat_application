<?php
// ini_set('session.save_path',getcwd(). '/'); 
session_start();


include("../db.php");

?>

<!DOCTYPE html>
<html lang="en">

    <!-- Head -->
    
<!-- Mirrored from themes.2the.me/Messenger-1.1/demo-dark/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 18:57:53 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
        <title>LAB Issue Solving System Login</title>

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
                        <h1 class="font-bold text-center">Sign in</h1>

                        <!-- Text -->
                        <p class="text-center mb-6"></p>

                        <!-- Form -->
                        <form class="mb-6" method="post">
                            <!-- Email -->
                            <div class="form-group">
                                <label for="email" class="sr-only">Email Address</label>
                                <input type="text" class="form-control form-control-lg" name="enro" placeholder="Enrollment" required>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="Enter your password" required>
                            </div>

                            <div class="form-group d-flex justify-content-between">
                                <div class="custom-control custom-checkbox">
                                    <!-- <input type="checkbox" class="custom-control-input" checked="" id="checkbox-remember"> -->
                                    <!-- <label class="custom-control-label" for="checkbox-remember">Remember me</label> -->
                                </div>
                                <a href="password-reset.php">Reset password</a>
                            </div>

                            <!-- Submit -->
                            <!-- <a href="../student/dist/index.php" class="btn btn-lg btn-block btn-primary">Sign in</a> -->
                            <input type="submit" name="login_btn" class="btn btn-lg btn-block btn-primary" value="Sign in">
                        </form>

                        

<?php


if(isset($_POST["login_btn"]))
{

    $enro = $_POST["enro"];
    $pass = $_POST["password"];


    $stu_qry="select * from student_details where stu_enrol = '$enro' and stu_pass = '$pass'";
    $fac_qry="select * from faculty_details where fac_enrol = '$enro' and fac_pass = '$pass'";
    $admin_qry="select * from admin_details where admin_enrol = '$enro' and admin_pass = '$pass'";

    $s_fire=$conn->query($stu_qry);
    $s_cnt=mysqli_num_rows($s_fire);

    $f_fire=$conn->query($fac_qry);
    $f_cnt=mysqli_num_rows($f_fire);

    $a_fire=$conn->query($admin_qry);
    $a_cnt=mysqli_num_rows($a_fire);


    // echo $s_cnt."<br>".$f_cnt."<br>".$a_cnt;

    if ($s_cnt == 1)
    {

        $s_res=$s_fire->fetch_assoc();
        $_SESSION["stu_id"] = $s_res["stu_id"];
        $_SESSION["login"] = 1;

        header("Location:../student/dist/index.php");


    }
    elseif ($f_cnt == 1)
    {
        $f_res=$f_fire->fetch_assoc();
        $_SESSION["fac_id"] = $f_res["fac_id"];
        $_SESSION["login"] = 2;

        header("Location:../faculty/dist/index.php");

    }
    elseif ($a_cnt == 1)
    {



        $a_res=$a_fire->fetch_assoc();
        $_SESSION["admin_id"] = $a_res["admin_id"];
        
        // echo "coming";
        if ($a_res["root_admin"] == '1')
        {
            $_SESSION["login"] = 3;
            // echo "root";
            header("Location:../lab admin(root)/templates/home.php");
        }
        elseif ($a_res["root_admin"] == '0')
        {
            $_SESSION["login"] = 4;
            // echo "lab";
            header("Location:../lab admin/templates/home.php");
        }
        else
        {
            echo "Fake Data";
        }






    }


    else
    {
        echo "Enrollment or Password is worng";
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

<!-- Mirrored from themes.2the.me/Messenger-1.1/demo-dark/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 18:57:53 GMT -->
</html>