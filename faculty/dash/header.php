<?php
session_start();

include("../../db.php");


if($_SESSION["login"] == 2)
{
  // echo "<script>alert('Welcome Faculty')</script>";
}
else
{
  header("Location:../../login/signin.php");
}


// if (unlink("att.csv"))



$room_id=$_GET['roomid'];
$room_code = $_GET['roomcode'];
$fac_id = $_SESSION['fac_id'];

$t_day = date("l");
$t_date = date("Y-m-d");
$t_time = date("H:i:s");
$com = date("H");

?>


<!DOCTYPE html>
<html lang="en">

    <!-- Head -->
    
<!-- Mirrored from themes.2the.me/Messenger-1.1/demo-dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 18:57:24 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
        <title>Faculty</title>

        <!-- Template core CSS -->
        <link href="assets/css/template.dark.min.css" rel="stylesheet">





<script>

        var full_url = document.URL; // Get current url
        var url_array = full_url.split('?roomid=') // Split the string into an array with / as separator
        var last_segment = url_array[url_array.length-1];  // Get the last part of the array (-1)


// this is for reloading table
        function update(){
            $('#join_stu').load("header.php?roomid="+last_segment+" #join_stu");
        }
        setInterval('update()',1000);
// end


</script>


<script src="https://kit.fontawesome.com/7ad186a4dd.js" crossorigin="anonymous"></script>







    </head>
    <!-- Head -->

    <body>

        <div class="layout">

            <!-- Navbar -->
            <div class="navigation navbar navbar-light justify-content-center py-xl-7">

                <!-- Brand -->
              <!--   <a href="#" class="d-none d-xl-block mb-6">
                    <img src="assets/images/brand.svg" class="mx-auto fill-primary" data-inject-svg="" alt="" style="height: 46px;">
                </a> -->

                <!-- Menu -->
                <ul class="nav navbar-nav flex-row flex-xl-column flex-grow-1 justify-content-between justify-content-xl-center py-3 py-lg-0" role="tablist">

                    <!-- Invisible item to center nav vertically -->
                    <li class="nav-item d-none d-xl-block invisible flex-xl-grow-1">
                        <a class="nav-link position-relative p-0 py-xl-3" href="#" title="">
                            <i class="icon-lg fe-x"></i>
                        </a>
                    </li>





                    <li class="nav-item mt-xl-9">
                        <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="#tab-content-user" title="User" role="tab">
                            <i class="icon-lg fe-user"></i>
                        </a>
                    </li>



                    




                    <li class="nav-item mt-xl-9">
                        <a class="nav-link position-relative p-0 py-xl-3 active" data-toggle="tab" href="#tab-content-friends" title="Join Students" role="tab">
                            <i class="icon-lg fe-users"></i>
                        </a>
                    </li>


                    <li class="nav-item mt-xl-9">
                        <?php
                            $str_admin = "<a class='nav-link position-relative p-0 py-xl-3' href='admin_chat/home.php?roomid=".$room_id."&roomcode=".$room_code."' title='Chat with Admin' role='tab'>";
                            echo $str_admin;
                        ?>
                            Admin
                        </a>
                    </li>



                <!--     <li class="nav-item mt-xl-9">
                        <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="#tab-content-dialogs" title="Chats" role="tab">
                            <i class="icon-lg fe-message-square"></i>
                            <div class="badge badge-dot badge-primary badge-bottom-center"></div>
                        </a>
                    </li> -->

                    <li class="nav-item mt-xl-9">
<?php

    $tmp = 0;
                        $str="<a class='nav-link position-relative p-0 py-xl-3' href='end_meeting.php?roomid=".$room_id."&facid=".$fac_id."&week_day=".$t_day."&date=".$t_date."&test=".$tmp." ' title='End Meeting'>";
                        echo $str;

?>
                            Close<br>Meeting
                        </a>
                    </li>
                    

                </ul>
                <!-- Menu -->

            </div>
            <!-- Navbar -->





<div class="sidebar">
    <div class="tab-content h-100" role="tablist">
                













                    <div class="tab-pane fade h-100" id="tab-content-user" role="tabpanel">
                        <div class="d-flex flex-column h-100">
                            <div class="hide-scrollbar">
                                <div class="container-fluid py-6">

                                    <!-- Title -->
                                    <h2 class="font-bold mb-6">Profile</h2>
                                    <!-- Title -->

                                    <!-- Search -->
                                    
                                    <!-- Search -->





<?php

$qes321="Select * from faculty_details where fac_id = '$fac_id'";
$qry321=$conn->query($qes321);
$res321=$qry321->fetch_assoc();
$full_name = $res321["fac_fname"]." ".$res321["fac_lname"];
$photo = $res321["fac_photo"];
$enro = $res321["fac_enrol"];

?>



                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <div class="card-body">
                                            <div class="text-center py-6">
                                                <!-- Photo -->
                                                <div class="avatar avatar-xl mb-5">
                                                    <img class="avatar-img" src="../../photo/fac/<?php echo $photo;?>" alt="">
                                                </div>

                                                <h5><?php echo $full_name;?></h5>
                                                <p class="text-muted"><?php echo "Your Enrolment Number is ".$enro?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                

                                                <li class="list-group-item px-0 py-6">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Phone</p>
                                                            <p><?php echo $res321["fac_number"];?></p>
                                                        </div>
                                                        <i class="text-muted icon-sm fe-mic"></i>
                                                    </div>
                                                </li>

                                                <li class="list-group-item px-0 py-6">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Email</p>
                                                            <p><?php echo $res321["fac_mail"];?></p>
                                                        </div>
                                                        <i class="text-muted icon-sm fe-mail"></i>
                                                    </div>
                                                </li>

                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Card -->

                                  

                                    <div class="form-row">
                                        <div class="col">
                                            <!-- Button -->
                                            <!-- <button type="button" class="btn btn-lg btn-block btn-basic d-flex align-items-center">
                                                Settings
                                                <span class="fe-settings ml-auto"></span>
                                            </button> -->
                                        </div>

                                        <div class="col">
                                            <form action="#" method="post">
                                            <!-- Button -->
                                            <button class="btn btn-lg btn-block btn-basic d-flex align-items-center" name="btn_logout">
                                                Logout
                                                <span class="fe-log-out ml-auto"></span></button>
                                            </form>
                                            <!-- <input type="submit" class="btn btn-lg btn-block btn-basic d-flex align-items-center" name="btn_logout" value="Logout"> -->


<?php



if(isset($_POST["btn_logout"]))
{


    echo ("<script>location.href='logout.php'</script>");

}



?>


                                                
                                            <!-- </button> -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>







<style type="text/css">

    .btn_remove{
        margin-bottom: 10px;
        border: 0px;
        border-radius: 8px;
        background-color: #D2D2D2;
    }

    .btn_remove:hover{
        margin-bottom: 10px;
        border: 0px;
        border-radius: 8px;
        background-color: #505050;
        color: white;
    }

</style>



<?php
$take_att="<a href='take_att.php?r_m_id=".$room_id."' style='float: right; font-size: 11px;margin-top: 6px;'>Take Attendance</a>";
$remove="<a href='remove_all.php' style='float: right; font-size: 11px;margin-top: 23px;margin-right: -60px;'>Remove All</a>"; 
?>




					<div class="tab-pane fade h-100 show active" id="tab-content-friends" role="tabpanel">
                        <div class="d-flex flex-column h-100">

                            <div class="hide-scrollbar">
                                <div class="container-fluid py-6">

                                    <!-- Title -->
                                    <h2 class="font-bold mb-6">Join Student 
                                        <?php echo $take_att; //echo $remove;?>
                                        
                                    </h2>
                                    <form method="post">
                                        <!-- <input type="submit" class="btn_remove" name="btn_remove" value="Remove All"> -->
                                    </form>
                                    <!-- Title -->

                                    

                                    
                                    <!-- Friends -->
                                    <nav class="mb-n6">

                                        














<div id="join_stu"><!-- This DIV tag is for refresh every second -->



<?php
$qes11="Select * from room_data where room_master_id = '$room_id' and week_day = '$t_day' and date = '$t_date' and fac_id = '' and stu_id != '' and join_leave = '1';";
// echo $qes11."<br>";
$qry11=$conn->query($qes11);
while($res11=$qry11->fetch_assoc())
{

$stu_id_1 = $res11["stu_id"];


    $qes10="Select * from student_details where stu_id = '$stu_id_1'";
    // echo $qes10;
    $qry10=$conn->query($qes10);
    $res10=$qry10->fetch_assoc();
    
    $stu_fname = $res10["stu_fname"];
    $stu_lname = $res10["stu_lname"];
    $stu_enrol = $res10["stu_enrol"];
    $stu_photo = $res10["stu_photo"];

// echo $room_id;
// echo $room_code;
// echo "chat.php?roomid=".$room_id."&roomcode=".$room_code;
    // $str = "<a class='text-reset nav-link p-0 mb-0' href='chat.php?roomid=".$room_id."&roomcode=".$room_code."'>";
    // echo $str;

?>



                                        <!-- Friend -->
                 <!-- <a class="text-reset nav-link p-0 mb-0" href="chat.php?roomid=1&roomcode=php_123">              -->
                                        <div class="card mb-6">
                                            <div class="card-body">

                                                <div class="media">
                                                    
                                                    <div class="avatar avatar-online mr-5">
                                                        <img class="avatar-img" src="../../photo/stu/<?php echo $stu_photo;?>" alt="Anna Bridges">
                                                    </div>
                                                    
                                                    
                                                    <div class="media-body align-self-center">
                                                        <h6 class="mb-0"><?php echo $stu_fname." ".$stu_lname;?></h6>
                                                        <small class="text-muted"><?php echo $stu_enrol;?></small>
                                                    </div>

                                                    
                                                </div>

                                                <!-- Link -->
<?php


                                                $str12="<a href='chat.php?roomid=".$room_id."&roomcode=".$room_code."&stuid=".$stu_id_1."' class='stretched-link'></a>";
                                                echo $str12;


?>

                                            </div>
                                        </div>
                                        <!-- Friend -->
                                    <!-- </a> -->


<?php
 
}
?>



</div> 






                                        
                                 
                                       

                                    </nav>
                                    <!-- Friends -->

                                </div>
                            </div>

                        </div>
                    </div>






    </div>
</div>




