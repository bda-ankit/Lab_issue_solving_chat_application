<?php
session_start();

if($_SESSION["login"] == 3)
{
  // echo "<script>alert('Welcome Root Admin')</script>";
}
else
{
  header("Location:../../login/signin.php");
}

?>


<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from phantom-themes.com/flatify/theme/templates/admin1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jan 2021 09:34:07 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="phantom-themes">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Admin</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Gudea:400,700" rel="stylesheet">
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../assets/plugins/icomoon/style.css" rel="stylesheet">
        <link href="../assets/plugins/waves/waves.min.css" rel="stylesheet">
        <link href="../assets/plugins/uniform/css/default.css" rel="stylesheet">
        <link href="../assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>
        <link href="../assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">  

      
<script src="https://kit.fontawesome.com/7ad186a4dd.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />



        <!-- Theme Styles -->
        <link href="../assets/css/flatifytheme.min.css" rel="stylesheet">
        <link href="../assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar">
                <a class="logo-box" href="home.php"><span>LIS</span><i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
                    <i class="icon-close" id="sidebar-toggle-button-close"></i></a>
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-menu">
                        <ul class="accordion-menu">
                            <li class="active-page">
                                <a href="home.php">
                                    <i class="menu-icon icon-home4 logo-menu-dashboard"></i><span>Dashboard</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="labs.php">
                                    <i class="menu-icon icon-show_chart"></i><span>Lab Details</span>
                                </a>
                            </li>


                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-format_list_bulleted"></i><span>Tables</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="student_details.php">Student Details</a></li>
                                   
                                    <li><a href="faculty_details.php">Faculty Deatails</a></li>
                                    <li><a href="faculty_sub.php">Faculty Subject</a></li>
                                   
                                    <!-- <li><a href="#">Admin Detail</a></li> -->
                                    <li><a href="admin_sub.php">Admin Subject</a></li>
                                    
                                    <!-- <li><a href="#">Course</a></li> -->
                                    <!-- <li><a href="#">Sem Master</a></li> -->
                                    <li><a href="subject_master.php">Subject Master</a></li>
                                    <li><a href="time_table.php">Time Table</a></li>
                                    <li><a href="room_master.php">Room Master</a></li>
                                    <li><a href="room_data.php">Room Data</a></li>
                                    <li><a href="chat_fac_admin.php">Chats(Faculty & Lab Admin)</a></li>
                                    <li><a href="chat_stu_admin.php">Chats(Student & Lab Admin)</a></li>
                                    <li><a href="chat_stu_fac.php">Chats(Student & Faculty)</a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>
                                    <li><a href="#"></a></li>

                                </ul>
                            </li>
                            
                            
                        </ul>
                    </div>
                </div>
            </div><!-- /Page Sidebar -->
            
            <!-- Page Content -->
            <div class="page-content">
            
                <!-- Page Header -->
                <div class="page-header">
                    <div class="search-form">
                        <form action="#" method="GET">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <div class="logo-sm">
                                    <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                    <a class="logo-box" href="index.html"><span>LIS</span></a>
                                </div>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <i class="fa fa-angle-down"></i>
                                </button>
                            </div>
                        
                            <!-- Collect the nav links, forms, and other content for toggling -->
                        
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="collapsed-sidebar-toggle-inv"><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                                    <!-- <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a></li> -->
                                    <!-- <li><a href="javascript:void(0)" id="search-button"><i class="fa fa-search"></i></a></li> -->
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <!-- <li><a href="javascript:void(0)" class="right-sidebar-toggle" data-sidebar-id="main-right-sidebar"><i class="fa fa-envelope-open-o"></i></a></li> -->
                                    <!-- <li class="dropdown">
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell-o"></i></a>
                                        <ul class="dropdown-menu dropdown-lg dropdown-content">
                                            <li class="slimscroll dropdown-notifications">
                                                <ul class="list-unstyled dropdown-oc">
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-info"><i class="fa fa-at"></i></span>
                                                            <span class="notification-info">
                                                                <span class="notification-info"><b>John Doe</b> mentioned you in a post "Update v1.5"</span>
                                                                <small class="notification-date">06:07</small>
                                                            </span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-danger"><i class="fa fa-bolt"></i></span>
                                                            <span class="notification-info">
                                                                <span class="notification-info">4 new special offers from the apps you follow!</span>
                                                                <small class="notification-date">Yesterday</small>
                                                            </span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-success"><i class="fa fa-bullhorn"></i></span>
                                                            <span class="notification-info">
                                                                <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes!</span>
                                                                <small class="notification-date">Yesterday</small>
                                                            </span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->

<?php
include("../../db.php");
$admin_id = $_SESSION["admin_id"];

$qes="Select * from admin_details where admin_id='$admin_id';";
// echo $qes;
$qry=$conn->query($qes);
$res=$qry->fetch_assoc();
$photo = $res["admin_photo"];
// echo $photo;
?>


                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="../../photo/adm/<?php echo $photo;?>" alt="" class="img-circle"></a>
                                        <ul class="dropdown-menu">
                                           <!--  <li><a href="#">Profile</a></li>
                                            <li><a href="#">Calendar</a></li>
                                            <li><a href="#"><span class="badge pull-right badge-info">64</span>Messages</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Account Settings</a></li> -->
                                            <li><a href="logout.php">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div><!-- /Page Header -->
           


























