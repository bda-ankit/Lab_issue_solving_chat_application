<?php
session_start();
include("../../db.php");

// echo $_SESSION["login"];

if($_SESSION["login"] == 4)
{
  // echo "<script>alert('Welcome Lab Admin')</script>";
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
        <title>Lab Admin</title>

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
                <a class="logo-box" href="home.php"><span>Lab Admin</span><i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
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
                                    <a class="logo-box" href="index.html"><span>Lab Admin</span></a>
                                </div>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <i class="fa fa-angle-down"></i>
                                </button>
                            </div>
                        
                            <!-- Collect the nav links, forms, and other content for toggling -->
                        
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <!-- <li class="collapsed-sidebar-toggle-inv"><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li> -->
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

$admin_id = $_SESSION["admin_id"];

$qes_adm_data="Select * from admin_details where admin_id = '$admin_id';";
$qry_adm_data=$conn->query($qes_adm_data);
$res_adm_data=$qry_adm_data->fetch_assoc();

$photo=$res_adm_data["admin_photo"];
// echo $photo;

?>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img height="40px" width="40px" src="<?php echo "../../photo/lb_a/".$photo;?>" alt=""  class="img-circle"></a>
                                        <ul class="dropdown-menu">
                                            <!-- <li><a href="#">Profile</a></li>
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
           


























