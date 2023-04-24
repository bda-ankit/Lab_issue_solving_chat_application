<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Faculty Subject Table</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Faculty Name</th>
                                                <th>Subject</th>
                                                <th>Course</th>
                                            </tr>
                                        </thead>
                                        

                                            	<?php
                                            	$stu="Select * from faculty_sub;";
												$qry=$conn->query($stu);
												while($res=$qry->fetch_assoc())
												{

                                                    $fac_id = $res["fac_id"];

                                                    $stu1="Select * from faculty_details where fac_id = '$fac_id';";
                                                    $qry1=$conn->query($stu1);
                                                    $res1=$qry1->fetch_assoc();
                                                    $fac_name = $res1["fac_fname"];



													$course_id = $res["course_id"];

													$stu1="Select * from course_table where course_id = '$course_id';";
													$qry1=$conn->query($stu1);
													$res1=$qry1->fetch_assoc();
													$course_name = $res1["course_name"];



                                                    $sub_id = $res["sub_id"];

                                                    $stu1="Select * from subject_master where sub_id = '$sub_id';";
                                                    $qry1=$conn->query($stu1);
                                                    $res1=$qry1->fetch_assoc();
                                                    $subject = $res1["sub_name"];

												
                                            	?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $fac_name;?></td>
                                                <td><?php echo $subject;?></td>
                                                <td><?php echo $course_name;?></td>
                                                <td><a href="delete_faculty_sub.php"><button type="button" class="btn btn-info btn-rounded dashboard-activity-loadmore">Delete Data</button></a><?php $_SESSION["fac_sub_id"]=$res["fac_sub_id"];}?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<?php
include("footer.php");
?>