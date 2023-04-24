<?php
session_start();

include("../../db.php");


if($_SESSION["login"] == 1)
{
  // echo "<script>alert('Welcome Student')</script>";
}
else
{
  header("Location:../../login/signin.php");
}

$room_id=$_GET['roomid'];
$room_code=$_GET["roomcode"];


$t_day = date("l");
$t_date = date("Y-m-d");
$t_time = date("H:i:s");
$com = date("H");
$stu_id = $_SESSION["stu_id"];

// echo $fac_id;













?>

<!DOCTYPE html>
<html lang="en">

    <!-- Head -->
    
<!-- Mirrored from themes.2the.me/Messenger-1.1/demo-dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 18:57:24 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
        <title>Student</title>

        <!-- Template core CSS -->
        <link href="assets/css/template.dark.min.css" rel="stylesheet">



<script src="https://kit.fontawesome.com/7ad186a4dd.js" crossorigin="anonymous"></script>

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


// this is for reloading table
        // function update1(){
        //     $('#check_meeting_end').load("header.php?roomid="+last_segment+" #check_meeting_end");
        // }
        // setInterval('update1()',1000);
// end

</script>








    </head>
    <!-- Head -->

    <body>






<!-- relode this part every second -->

<div id="check_meeting_end">
<?php
    

    // $qes_re="Select * from room_master where room_master_id = '$room_id'";
    // $qry_re=$conn->query($qes_re);
    // $res_re=$qry_re->fetch_assoc();
    
    // $room_start = $res_re["room_start"];

    



    // $qes_rel="Select * from room_data where room_master_id = '$room_id' and stu_id = '$stu_id' and fac_id = '' and week_day = '$t_day' and date = '$t_date'";

    // $qry_rel=$conn->query($qes_rel);
    // $res_rel=$qry_rel->fetch_assoc();

    // $jl = $res_rel["join_leave"];






    // if ($room_start == '1' || $jl == '1')
    // {
        
    // }
    // elseif ($room_start == '0' || $jl == '0')
    // {
    //     echo ("<script>alert('Room End')</script>");
    //     echo ("<script>location.href='leave_meeting.php?roomid=".$room_id."&stuid=".$stu_id."&week_day=".$t_day."&date=".$t_date."'</script>");   
    // }
    // else  
    // {
    //     echo "<script>alert('something went wrong')</script>";
    // }











?>
</div>


<!-- end reload -->








        <div class="layout">

            <!-- Navbar -->
            <div class="navigation navbar navbar-light justify-content-center py-xl-7">

                <!-- Brand -->
           <!--      <a href="#" class="d-none d-xl-block mb-6">
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
<!-- Profile -->
                    <li class="nav-item mt-xl-9">
                        <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="#tab-content-user" title="User" role="tab">
                            <i class="icon-lg fe-user"></i>
                        </a>
                    </li>

                    <!-- Friend -->
                    <li class="nav-item mt-xl-9">
                        <a class="nav-link position-relative p-0 py-xl-3 active" data-toggle="tab" href="#tab-content-dialogs" title="Report Issue" role="tab">
                            <i class="fe-alert-octagon mr-4"></i>
                        </a>
                    </li>



                    <li class="nav-item mt-xl-9">
                       
<?php

                        $str_admin = "<a class='nav-link position-relative p-0 py-xl-3' href='admin_chat/home.php?roomid=".$room_id."&roomcode=".$room_code."' title='Talk With Admin' role='tab'>";
                        echo $str_admin;

?>
                            Admin
                        </a>
                    </li>



                    <li class="nav-item mt-xl-9">
<?php



                        $str = "<a class='nav-link position-relative p-0 py-xl-3' href='leave_meeting.php?roomid=".$room_id."&stuid=".$stu_id."&week_day=".$t_day."&date=".$t_date."' title='Leave Meeting'>";
                        echo $str;


                        // echo $t_time;
?>
                            Leave<br>Meeting
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
                                  <!--   <form class="mb-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                                            <div class="input-group-append">
                                                <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form> -->
                                    <!-- Search -->
<?php

$qes321="Select * from student_details where stu_id = '$stu_id'";
$qry321=$conn->query($qes321);
$res321=$qry321->fetch_assoc();
$full_name = $res321["stu_fname"]." ".$res321["stu_lname"];
$photo = $res321["stu_photo"];
$enro = $res321["stu_enrol"];
$sem = $res321["sem_id"];

?>
                                    <!-- Card -->
                                    <div class="card mb-6">
                                        <div class="card-body">
                                            <div class="text-center py-6">
                                                <!-- Photo -->
                                                <div class="avatar avatar-xl mb-5">
                                                    <img class="avatar-img" src="../../photo/stu/<?php echo $photo;?>" alt="">
                                                </div>

                                                <h5><?php echo $full_name;?></h5>
                                                <p class="text-muted"><?php echo "You are in Sem ".$sem.".<br>Your Enrollment Number ".$enro.".";?></p>
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
                                                            <p><?php echo $res321["stu_number"];?></p>
                                                        </div>
                                                        <i class="text-muted icon-sm fe-mic"></i>
                                                    </div>
                                                </li>

                                                <li class="list-group-item px-0 py-6">
                                                    <div class="media align-items-center">
                                                        <div class="media-body">
                                                            <p class="small text-muted mb-0">Email</p>
                                                            <p><?php echo $res321["stu_mail"];?></p>
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
                                            <!-- <button type="button" class="btn btn-lg btn-block btn-basic d-flex align-items-center"> -->
                                                <!-- Settings -->
                                                <!-- <span class="fe-settings ml-auto"></span> -->
                                            <!-- </button> -->
                                        </div>

                                        <div class="col">
                                        <form action="#" method="post">
                                            <!-- Button -->
                                        <button class="btn btn-lg btn-block btn-basic d-flex align-items-center" name="btn_logout">
                                                Logout
                                                <span class="fe-log-out ml-auto"></span></button>
                                        </form>
                                        </form>


<?php



if(isset($_POST["btn_logout"]))
{

    // echo "thayu";
    echo ("<script>location.href='logout.php'</script>");

}



?>


                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>











                    <div class="tab-pane fade h-100 show active" id="tab-content-dialogs" role="tabpanel">
                        <div class="d-flex flex-column h-100">

                            <div class="hide-scrollbar">
                                <div class="container-fluid py-6">

                                    <!-- Title -->
                                    <h2 class="font-bold mb-6">Faculty</h2>
                                    <!-- Title -->

                                    


                                    <!-- Chats -->
                                    <nav class="nav d-block list-discussions-js mb-n6">
                                        <!-- Chat link -->
                                       


                                        








<div id="join_stu"><!-- This DIV tag is for refresh every second -->



<?php
$qes11="Select * from room_data where room_master_id = '$room_id' and week_day = '$t_day' and date = '$t_date' and fac_id != '' and stu_id = '' and join_leave = '1';";
$qry11=$conn->query($qes11);
while($res11=$qry11->fetch_assoc())
{

$fac_id_1 = $res11["fac_id"];


    $qes10="Select * from faculty_details where fac_id = '$fac_id_1'";
    // echo $qes10;
    $qry10=$conn->query($qes10);
    $res10=$qry10->fetch_assoc();
    
    $fac_fname = $res10["fac_fname"];
    $fac_lname = $res10["fac_lname"];
    $fac_enrol = $res10["fac_enrol"];
    $fac_photo = $res10["fac_photo"];




    $str="<a class='text-reset nav-link p-0 mb-6' href='chat.php?roomid=".$room_id."&roomcode=".$room_code."&fac_id=".$fac_id_1."'>";
    echo $str;

?>


                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        <div class="avatar avatar-online mr-5">
                                                            <img class="avatar-img" src="../../photo/fac/<?php echo $fac_photo;?>" alt="Anna Bridges">
                                                        </div>
                                                        
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto"><?php echo $fac_fname." ".$fac_lname;?></h6>
                                                            </div>
                                                            <div class="text-truncate"><?php echo $fac_enrol;?></div>
                                                        </div>
                                                    </div>

                                                </div>

                                                
                                            </div>
                                        </a>



<?php
 
}
?>



</div> 
















                                    </nav>
                                    <!-- Chats -->

                                </div>
                            </div>

                        </div>
                    </div>






    </div>
</div>




