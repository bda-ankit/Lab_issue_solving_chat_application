<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Admin Subject Table</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Admin Name</th>
                                                <th>Subject</th>
                                                <th>Course</th>
                                                <th>Semester</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        

                                            	<?php
                                            	$stu="Select * from admin_sub;";
												$qry=$conn->query($stu);
												while($res=$qry->fetch_assoc())
												{

                                                    if($res["admin_id"]==NULL)
                                                    {
                                                        $admin_name=" ";
                                                    }
                                                    else
                                                    {
                                                        $admin_id = $res["admin_id"];

                                                    $stu1="Select * from admin_details where admin_id = '$admin_id';";
                                                    $qry1=$conn->query($stu1);
                                                    $res1=$qry1->fetch_assoc();
                                                    $admin_name = $res1["admin_fname"];


                                                    }  

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

                                                    $stu1="Select * from sem_master where sem_id = '$sem_id';";
                                                    $qry1=$conn->query($stu1);
                                                    $res1=$qry1->fetch_assoc();
                                                    $semester = $res1["sem_number"];



                                                    }  

                                                    if($res["sub_id"]==NULL)
                                                    {
                                                        $subject=" ";
                                                    }
                                                    else
                                                    {
                                                        $sub_id = $res["sub_id"];

                                                    $stu1="Select * from subject_master where sub_id = '$sub_id';";
                                                    $qry1=$conn->query($stu1);
                                                    $res1=$qry1->fetch_assoc();
                                                    $subject = $res1["sub_name"];



                                                    }  

												
                                            	?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $admin_name;?></td>
                                                <td><?php echo $subject;?></td>
                                                <td><?php echo $course_name;?></td>
                                                <td><?php echo $semester;?></td>
                                                <td>
<?php
$str_go = "<a  style='margin-top: -4px;' onclick='return Confirm_Delete()' href='delete_admin_sub.php?admin_sub_id=".$res['admin_sub_id']."' class='btn btn-danger btn-rounded m-b-xxs'><i class='far fa-trash-alt'></i></a>     <a  style='margin-top: -4px;' href='update_admin_sub.php?admin_sub_id=".$res['admin_sub_id']."' class='btn btn-success btn-rounded m-b-xxs'> <i class='far fa-edit'></i> </a>";
echo $str_go;
}
?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="insert_admin_sub.php" class="btn btn-info btn-rounded m-b-xxs"><i class="fas fa-user-plus"></i></a>
                                </div>
                            </div>

<?php
include("footer.php");
?>