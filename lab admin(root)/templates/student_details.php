<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Student Details Table</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Number</th>
                                                <th>Email</th>
                                                <th>Course</th>
                                                <th>Semester</th>
                                                <th>Password</th>
                                                <th>Enrollment</th>
                                                <th>Online</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        

                                            	<?php
                                            	$stu="Select * from student_details;";
												$qry=$conn->query($stu);
												while($res=$qry->fetch_assoc())
												{

                                                    if($res["course_id"]==NULL)
                                                    {
                                                        $course_name=" ";
                                                    }
                                                    else
                                                    {
                                                        $course_id = $res["course_id"];

                                                    $stu1="Select * from course_table where course_id = '$course_id';";
                                                    $qry1=$conn->query($stu1);
                                                    $res1=$qry1->fetch_assoc();
                                                    $course_name = $res1["course_name"];

                                                    }  

                                                    if($res["sem_id"]==NULL)
                                                    {
                                                        $semester=" ";
                                                    }
                                                    else
                                                    {
                                                        $sem_id = $res["sem_id"];

                                                    $stu2="Select * from sem_master where sem_id = '$sem_id';";
                                                    $qry2=$conn->query($stu2);
                                                    $res2=$qry2->fetch_assoc();
                                                    $semester = $res2["sem_number"];

                                                    }   

                                                    if($res["stu_fname"]==NULL)
                                                    {
                                                        $stu_fname=" ";
                                                    }
                                                    else
                                                    {

                                                        $stu_fname = $res["stu_fname"];

                                                    }

                                                    if($res["stu_lname"]==NULL)
                                                    {
                                                        $stu_lname=" ";
                                                    }
                                                    else
                                                    {

                                                        $stu_lname = $res["stu_lname"];

                                                    }

                                                    if($res["stu_number"]==NULL)
                                                    {
                                                        $stu_number=" ";
                                                    }
                                                    else
                                                    {

                                                        $stu_number = $res["stu_number"];

                                                    }


                                                    if($res["stu_mail"]==NULL)
                                                    {
                                                        $stu_mail=" ";
                                                    }
                                                    else
                                                    {

                                                        $stu_mail = $res["stu_mail"];

                                                    }

                                                    if($res["stu_pass"]==NULL)
                                                    {
                                                        $stu_pass=" ";
                                                    }
                                                    else
                                                    {

                                                        $stu_pass = $res["stu_pass"];

                                                    }

                                                    if($res["stu_enrol"]==NULL)
                                                    {
                                                        $stu_enrol=" ";
                                                    }
                                                    else
                                                    {

                                                        $stu_enrol = $res["stu_enrol"];

                                                    }

                                                    if($res["login"]==NULL)
                                                    {
                                                        $login=" ";
                                                    }
                                                    else
                                                    {

                                                        $login = $res["login"];

                                                    }



												
                                            	?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $stu_fname;?></td>
                                                <td><?php echo $stu_lname;?></td>
                                                <td><?php echo $stu_number;?></td>
                                                <td><?php echo $stu_mail;?></td>
                                                <td><?php echo $course_name;?></td>
                                                <td><?php echo $semester;?></td>
                                                <td><?php echo $stu_pass;?></td>
                                                <td><?php echo $stu_enrol;?></td>
                                                <td><?php echo $login;?></td>
     
                                                <td>
<?php
$str_go = "<a  style='margin-top: -4px;' onclick='return Confirm_Delete()' href='delete_student_details.php?stu_id=".$res['stu_id']."' class='btn btn-danger btn-rounded m-b-xxs'><i class='far fa-trash-alt'></i></a>     <a  style='margin-top: -4px;' href='update_student_details.php?stu_id=".$res['stu_id']."' class='btn btn-success btn-rounded m-b-xxs'> <i class='far fa-edit'></i> </a>";
echo $str_go;
}
?>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="insert_student_details.php" class="btn btn-info btn-rounded m-b-xxs"><i class="fas fa-user-plus"></i></a>
                                </div>
                            </div>

<script>
    function Confirm_Delete()
    {


    var x=confirm("Are You sure you want to delete");
    if(x)
    {
        return true;
    }
    else
    {
        return false;
    }
}
    </script>

<?php
include("footer.php");
?>