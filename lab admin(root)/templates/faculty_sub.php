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
												<th>Action</th>
                                            </tr>
                                        </thead>
											
											
											

                                            	<?php
                                            	$stu="Select * from faculty_sub;";
												$qry=$conn->query($stu);
												while($res=$qry->fetch_assoc())
												{
													if($res["fac_id"]==NULL)
													{
														$fac_id=" ";
													}
													else
													{

                                                    $fac_id = $res["fac_id"];

                                                    $stu1="Select * from faculty_details where fac_id = '$fac_id';";
                                                    $qry1=$conn->query($stu1);
                                                    $res1=$qry1->fetch_assoc();
                                                    $fac_name = $res1["fac_fname"];
													}
													
													
													if($res["course_id"]==NULL)
													{
														$course_id=" ";
													}
													
													else
													{

													$course_id = $res["course_id"];

													$stu1="Select * from course_table where course_id = '$course_id';";
													$qry1=$conn->query($stu1);
													$res1=$qry1->fetch_assoc();
													$course_name = $res1["course_name"];

													}
													
													if($res["sub_id"]==NULL)
													{
														$sub_id=" ";
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
                                                <td><?php echo $fac_name;?></td>
                                                <td><?php echo $subject;?></td>
                                                <td><?php echo $course_name;?></td>
                                                <td>
												<?php
$str_go = "<a  style='margin-top: -4px;' onclick='return Confirm_Delete()' href='delete_faculty_sub.php?fac_sub_id=".$res['fac_sub_id']."' class='btn btn-danger btn-rounded m-b-xxs'><i class='far fa-trash-alt'></i></a>    
 <a  style='margin-top: -4px;' href='update_faculty_sub.php?fac_sub_id=".$res['fac_sub_id']."' class='btn btn-success btn-rounded m-b-xxs'> <i class='far fa-edit'></i> </a>";
echo $str_go;
}
?>
												</td>
                                            </tr>
                                        </tbody>
                                    </table>
									
						<a href="insert_faculty_sub.php" class="btn btn-info btn-rounded m-b-xxs"><i class="fas fa-user-plus"></i></a>			
                                </div>
                            </div>

<?php
include("footer.php");
?>