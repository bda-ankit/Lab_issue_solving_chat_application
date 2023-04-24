<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Faculty Details Table</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>First name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Number</th>
                                                <th>Password</th>
                                                <th>Enrollment</th>
                                                <th>Online</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        

                                            	<?php
                                            	$stu="Select * from faculty_details;";
												$qry=$conn->query($stu);
												while($res=$qry->fetch_assoc())
												{
												/*	$course_id = $res["course_id"];

													$stu1="Select * from course_table where course_id = '$course_id';";
													$qry1=$conn->query($stu1);
													$res1=$qry1->fetch_assoc();
													$course_name = $res1["course_name"];



													$sem_id = $res["sem_id"];

													$stu2="Select * from sem_master where sem_id = '$sem_id';";
													$qry2=$conn->query($stu2);
													$res2=$qry2->fetch_assoc();
													//$semester = $res2["sem_number"];*/

												
                                            	?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $res["fac_fname"];?></td>
                                                <td><?php echo $res["fac_lname"];?></td>
                                                <td><?php echo $res["fac_mail"];?></td>
                                                <td><?php echo $res["fac_number"];?></td>
                                                <td><?php echo $res["fac_pass"];?></td>
                                                <td><?php echo $res["fac_enrol"];?></td>
                                                <td><?php echo $res["login"];?></td>
     
                                                <td>
<?php
$str_go = "<a  style='margin-top: -4px;' onclick='return Confirm_Delete()' href='delete_faculty_details.php?fac_id=".$res['fac_id']."' class='btn btn-danger btn-rounded m-b-xxs'><i class='far fa-trash-alt'></i></a>     <a  style='margin-top: -4px;' href='update_student_details.php?fac_id_id=".$res['fac_id']."' class='btn btn-success btn-rounded m-b-xxs'> <i class='far fa-edit'></i> </a>";
echo $str_go;
}
?>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="insert_faculty_details.php" class="btn btn-info btn-rounded m-b-xxs"><i class="fas fa-user-plus"></i></a>
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