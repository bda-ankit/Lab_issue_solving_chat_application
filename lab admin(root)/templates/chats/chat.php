<?php
	include("header.php");
    $stu_id = $_GET["stuid"];


$qes_stu_name="Select * from student_details where stu_id = '$stu_id' ;";
$qry_stu_name=$conn->query($qes_stu_name);
$res_stu_name=$qry_stu_name->fetch_assoc();

$stu_fname = $res_stu_name["stu_fname"];
$stu_lname = $res_stu_name["stu_lname"];
$stu_photo = $res_stu_name["stu_photo"];
$stu_enrol = $res_stu_name["stu_enrol"];












$admin_id = $_SESSION["admin_id"];




$qes_admin_name="Select * from admin_details where admin_id = '$admin_id' ;";
$qry_admin_name=$conn->query($qes_admin_name);
$res_admin_name=$qry_admin_name->fetch_assoc();

$admin_fname = $res_admin_name["admin_fname"];
$admin_lname = $res_admin_name["admin_lname"];
$admin_photo = $res_admin_name["admin_photo"];
$admin_enrol = $res_admin_name["admin_enrol"];




?>



<script type="text/javascript">

        var full_url = document.URL; // Get current url
        var url_array = full_url.split('?stuid=') // Split the string into an array with / as separator
        var last_segment = url_array[url_array.length-1];  // Get the last part of the array (-1)

        // alert(full_url+"\n\n"+url_array+"\n\n"+last_segment);

// this is for reloading table
        function update(){
            $('#chat_reload').load("chat.php?stuid="+last_segment+" #chat_reload");
        }
        setInterval('update()',150);
// end


</script>






           

            <!-- Main Content -->
            <div class="main main-visible" data-mobile-height="">

                <!-- Chat -->
                <div id="chat-1" class="chat dropzone-form-js" data-dz-url="some.html">

                    <!-- Chat: body -->
                    <div class="chat-body">

                        <!-- Chat: Header -->
                        <div class="chat-header border-bottom py-4 py-lg-6 px-lg-8">
                            <div class="container-xxl">

                                <div class="row align-items-center">

                                    <!-- Close chat(mobile) -->
                                    <div class="col-3 d-xl-none">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a class="text-muted px-0" href="#" data-chat="open">
                                                    <i class="icon-md fe-chevron-left"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Chat photo -->
                                    <div class="col-6 col-xl-6">
                                        <div class="media text-center text-xl-left">
                                            <div class="avatar avatar-sm d-none d-xl-inline-block mr-5">
                                                <img src="../../../photo/stu/<?php echo $stu_photo;?>" class="avatar-img" alt="">
                                            </div>

                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="text-truncate mb-n1"><?php echo $stu_fname." ".$stu_lname;?></h6>
                                                <small class="text-muted">Enrollment</small>
                                                <small class="text-muted mx-2"> • </small>
                                                <small class="text-muted"><?php echo $stu_enrol;?></small>
                                            </div>
                                        </div>
                                    </div>

                                   

                                </div><!-- .row -->

                            </div>
                        </div>
                        <!-- Chat: Header -->

                

                        <!-- Chat: Content-->
                        <div class="chat-content px-lg-8">
                            <div class="container-xxl py-6 py-lg-10">










<div id="chat_reload">    <!-- this div tag will reload every second -->
<?php





$qes123="Select * from chat_stu_admin where stu_id = '$stu_id' and admin_id = '$admin_id' ";
//echo $qes123;
$qry123=$conn->query($qes123);
while($res123=$qry123->fetch_assoc())
{

    $sender = $res123["msg_sender"];
    // echo $sender;
    $chat = $res123["chat_msg"];
    // echo $chat;
    if ($sender=="s")
    {
?>
                                <!-- Message -->
                                <div class="message">
                                    <!-- Avatar -->
                                    <a class="avatar avatar-sm mr-4 mr-lg-5" data-chat-sidebar-toggle="#chat-1-user-profile">
                                        <img class="avatar-img" src="../../../photo/stu/<?php echo $stu_photo;?>" alt="">
                                    </a>

                                    <!-- Message: body -->
                                    <div class="message-body">

                                        <!-- Message: row -->
                                        <div class="message-row">
                                            <div class="d-flex align-items-center">

                                                <!-- Message: content -->
                                                <div class="message-content bg-light">
                                                    <h6 class="mb-2"><?php echo $stu_fname." ".$stu_lname;?></h6>
                                                    
                                                    <div><?php echo $chat;?></div>

                                                    <div class="mt-1">
                                                        <small class="opacity-65"><?php echo $res123["date"]." | ".$res123["time"];?></small>
                                                    </div>
                                                </div>
                                                <!-- Message: content -->

                                                <!-- Message: dropdown -->
                                                <div class="dropdown">
                                                    <a class="text-muted opacity-60 ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe-more-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item d-flex align-items-center">
                                                            Delete <span class="ml-auto fe-trash-2"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- Message: dropdown -->

                                            </div>
                                        </div>
                                        <!-- Message: row -->

                                    </div>
                                    <!-- Message: Body -->
                                </div>
                                <!-- Message -->
<?php
    }
    elseif ($sender=="a")
    {
?> 
                                <!-- Message -->
                                <div class="message message-right">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm ml-4 ml-lg-5 d-none d-lg-block">
                                        <img class="avatar-img" src="../../../photo/adm/<?php echo $admin_photo;?>" alt="">
                                    </div>

                                    <!-- Message: body -->
                                    <div class="message-body">

                                        <!-- Message: row -->
                                        <div class="message-row">
                                            <div class="d-flex align-items-center justify-content-end">

                                                <!-- Message: dropdown -->
                                                <div class="dropdown">
                                                    <a class="text-muted opacity-60 mr-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fe-more-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item d-flex align-items-center">
                                                            Delete <span class="ml-auto fe-trash-2"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- Message: dropdown -->

                                                <!-- Message: content -->
                                                <div class="message-content bg-primary text-white">
                                                    <div><?php echo $chat;?></div>

                                                    <div class="mt-1">
                                                        <small class="opacity-65"><?php echo $res123["date"]." | ".$res123["time"];?></small>
                                                    </div>
                                                </div>
                                                <!-- Message: content -->

                                            </div>
                                        </div>

                                    </div>
                                    <!-- Message: body -->
                                </div>
                                <!-- Message -->
<?php
    }
    else
    {
        echo "worng data in tables";
    }
}
?>

</div>
                            </div>

                            <!-- Scroll to end -->
                            <div class="end-of-chat"></div>
                        </div>
                        <!-- Chat: Content -->

                        <!-- Chat: DropzoneJS container -->
                        <div class="chat-files hide-scrollbar px-lg-8">
                            <div class="container-xxl">
                                <div class="dropzone-previews-js form-row py-4"></div>
                            </div>
                        </div>
                        <!-- Chat: DropzoneJS container -->

                        <!-- Chat: Footer -->
                        <div class="chat-footer border-top py-4 py-lg-6 px-lg-8">
                            <div class="container-xxl">

                                <form id="chat-id-1-form" method="post">
                                    <div class="form-row align-items-center">
                                        <div class="col">
                                            <div class="input-group">

                                                <!-- Textarea -->
                                                <!-- <textarea id="chat-id-1-input" class="form-control bg-transparent border-0" placeholder="Type your message..." rows="1" data-emoji-input="" data-autosize="true"></textarea> -->
                                                <input type="text" id="chat-id-1-input" class="form-control bg-transparent border-0" placeholder="Type your message..." rows="1" data-autosize="true" name="msg_send_textbox" required>

                                                <!-- Emoji button -->
                                                <div class="input-group-append">
                                                    <button class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0" type="button" data-emoji-btn="">
                                                        <!-- <img src="assets/images/smile.svg" data-inject-svg="" alt=""> -->
                                                    </button>
                                                </div>

                                                <!-- Upload button -->
                                                <div class="input-group-append">
                                                    <button id="chat-upload-btn-1" class="btn btn-ico btn-secondary btn-minimal bg-transparent border-0 dropzone-button-js" type="button">
                                                        <img src="assets/images/paperclip.svg" data-inject-svg="" alt="">
                                                    </button>
                                                </div>

                                            </div>

                                        </div>

                                        <!-- Submit button -->
                                    <!--     <div class="col-auto">
                                            <button class="btn btn-ico btn-primary rounded-circle" type="submit">
                                                <span class="fe-send"></span>
                                            </button>
                                        </div> -->


<?php


    if(isset($_POST["msg_send_textbox"]))
    {
        $t_date = date("Y/m/d");
        $t_time = date("H:i:s");
        $msg_f = $_POST["msg_send_textbox"];


        $qry = "Insert into chat_stu_admin (msg_sender,admin_id,stu_id,msg_type,chat_msg,seen,date,time) values ('a','$admin_id','$stu_id','m','$msg_f','0','$t_date','$t_time')";
        // echo $qry;
        $fire=$conn->query($qry);


    }


?>







                                    </div>

                                </form>

                            </div>
                        </div>
                        <!-- Chat: Footer -->
                    </div>
                    <!-- Chat: body -->


              

                </div>
                <!-- Chat -->

            </div>

         


        <!-- DropzoneJS: Template -->
        <div id="dropzone-template-js">
            <div class="col-lg-4 my-3">
                <div class="card bg-light">
                    <div class="card-body p-3">
                        <div class="media align-items-center">

                            <div class="dropzone-file-preview">
                                <div class="avatar avatar rounded bg-secondary text-basic-inverse d-block mr-5">
                                    <i class="fe-paperclip"></i>
                                </div>
                            </div>

                            <div class="dropzone-image-preview">
                                <div class="avatar avatar mr-5">
                                    <img src="#" class="avatar-img rounded" data-dz-thumbnail="" alt="">
                                </div>
                            </div>

                            <div class="media-body overflow-hidden">
                                <h6 class="text-truncate small mb-0" data-dz-name></h6>
                                <p class="extra-small" data-dz-size></p>
                            </div>

                            <div class="ml-5">
                                <a href="#" class="btn btn-sm btn-link text-decoration-none text-muted" data-dz-remove>
                                    <i class="fe-x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DropzoneJS: Template -->

   






















<?php
	include("footer.php");
?>