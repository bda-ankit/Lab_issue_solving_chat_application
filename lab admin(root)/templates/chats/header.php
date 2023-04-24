<?php
session_start();

include("../../../db.php");


if($_SESSION["login"] == 3)
{
  // echo "<script>alert('Welcome Student')</script>";
}
else
{
  header("Location:../../../login/signin.php");
}


$admin_id = $_SESSION["admin_id"];









?>

<!DOCTYPE html>
<html lang="en">

    <!-- Head -->
    
<!-- Mirrored from themes.2the.me/Messenger-1.1/demo-dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 18:57:24 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
        <title>Admin</title>

        <!-- Template core CSS -->
        <link href="assets/css/template.dark.min.css" rel="stylesheet">



<script src="https://kit.fontawesome.com/7ad186a4dd.js" crossorigin="anonymous"></script>

<script>

        var full_url = document.URL; // Get current url
        var url_array = full_url.split('?stuid=') // Split the string into an array with / as separator
        var last_segment = url_array[url_array.length-1];  // Get the last part of the array (-1)


// this is for reloading table
        function update(){
            $('#join_stu').load("header.php?stuid="+last_segment+" #join_stu");
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
                        <a class='nav-link position-relative p-0 py-xl-3' href="../labs.php" title='End Chat'>

                            End<br>Chat
                        </a>
                    </li>

                    
                    

                </ul>
                <!-- Menu -->

            </div>
            <!-- Navbar -->





<div class="sidebar">
    <div class="tab-content h-100" role="tablist">
                

















                    <div class="tab-pane fade h-100 show active" id="tab-content-dialogs" role="tabpanel">
                        <div class="d-flex flex-column h-100">

                            <div class="hide-scrollbar">
                                <div class="container-fluid py-6">

                                    <!-- Title -->
                                    <h2 class="font-bold mb-6">Students</h2>
                                    <!-- Title -->

                                    


                                    <!-- Chats -->
                                    <nav class="nav d-block list-discussions-js mb-n6">
                                        <!-- Chat link -->
                                       


                                        




<div id="join_stu"><!-- This DIV tag is for refresh every second -->







<?php
$room_id = $_GET["room_id"];
$stu_id = $_GET["stuid"];
$tday = date("l");
$tdate = date("Y-m-d");


$qes_sub="Select * from room_data where room_master_id = '$room_id' and join_leave = '1' and week_day = '$tday' and date = '$tdate' and stu_id != '' and fac_id = '' ;";
$qry_sub=$conn->query($qes_sub);
while($res_sub=$qry_sub->fetch_assoc())
{
$stu_id1 = $res_sub["stu_id"];

;


    $qes10="Select * from student_details where stu_id = '$stu_id1';";
    // echo $qes10;
    $qry10=$conn->query($qes10);
    $res10=$qry10->fetch_assoc();
    
    $stu_fname = $res10["stu_fname"];
    $stu_lname = $res10["stu_lname"];
    $stu_enrol = $res10["stu_enrol"];
    $stu_photo = $res10["stu_photo"];




    $str="<a class='text-reset nav-link p-0 mb-6' href='chat.php?stuid=".$stu_id1."&room_id=".$room_id."'>";
    echo $str;

?>


                                            <div class="card card-active-listener">
                                                <div class="card-body">

                                                    <div class="media">
                                                        
                                                        <div class="avatar avatar-online mr-5">
                                                            <img class="avatar-img" src="../../../photo/stu/<?php echo $stu_photo;?>" alt="Anna Bridges">
                                                        </div>
                                                        
                                                        
                                                        <div class="media-body overflow-hidden">
                                                            <div class="d-flex align-items-center mb-1">
                                                                <h6 class="text-truncate mb-0 mr-auto"><?php echo $stu_fname." ".$stu_lname;?></h6>
                                                            </div>
                                                            <div class="text-truncate"><?php echo $stu_enrol;?></div>
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




