<?php
include ("header.php");
include("../../db.php");
?>

<?php
	$qry = "Insert into student_details (stu_fname,stu_lname,stu_photo,stu_number,stu_mail,course_id,sem_id,stu_pass,stu_enrol,login) values ($_POST["fname"],$_POST["lname"],$_POST["photo"],$_POST["number"],$_POST["email"],$_POST["course_id"],$_POST["sem_id"],$_POST["password"],$_POST["enrollment"],$_POST["login"]) ";
        // echo $qry;
        $fire=$conn->query($qry);
?>

<?php
include ("footer.php");
?>