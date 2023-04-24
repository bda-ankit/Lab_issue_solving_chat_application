<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Room Master Table</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Room Number</th>
                                                <th>Course</th>
                                                <th>Semester</th>
                                                <th>Subject</th>
                                                <th>Room Status</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        

                                            	<?php
                                            	$room="Select * from room_master;";
												$qry=$conn->query($room);
												while($res=$qry->fetch_assoc())
												{
													
													if($res["course_id"]==NULL)
													{
														$course_id=" ";
													}
													
													else
													{
													$course_id = $res["course_id"];

													$room1="Select * from course_table where course_id = '$course_id';";
													$qry1=$conn->query($room1);
													$res1=$qry1->fetch_assoc();
													$course_name = $res1["course_name"];

													}
													
													if($res["sem_id"]==NULL)
													{
														$sem_id=" ";
													}
													
													else
													
													{

													$sem_id = $res["sem_id"];

													$room2="Select * from sem_master where sem_id = '$sem_id';";
													$qry2=$conn->query($room2);
													$res2=$qry2->fetch_assoc();
													$semester = $res2["sem_number"];
													}
													
													if($res["sub_id"]==NULL)
													{
														$sub_id=" ";
													}
													
													else
													{
													$sub_id = $res["sub_id"];
													
													$room3="Select * from subject_master where sub_id = '$sub_id';";
													$qry3=$conn->query($room3);
													$res3=$qry3->fetch_assoc();
													$sub=$res3["sub_name"];
													}
                                            	?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $res["room_number"];?></td>                                           
                                                <td><?php echo $course_name;?></td>
                                                <td><?php echo $semester;?></td>
												<td><?php echo $sub;?></td>
												<td><?php echo $res["room_start"];?></td>
										<td>		
							<?php
$str_go = "<a  style='margin-top: -2px;' onclick='return Confirm_Delete()' href='delete_room_master.php?room_master_id=".$res['room_master_id']."' class='btn btn-danger btn-rounded m-b-xxs'><i class='far fa-trash-alt'></i></a>     
<a  style='margin-top: -2px;' href='update_room_master.php?room_master_id=".$res['room_master_id']."' class='btn btn-success btn-rounded m-b-xxs'> <i class='far fa-edit'></i> </a>";
echo $str_go;
}
?>
                                                </td>
												
											</tr>
                                        </tbody>
										
										
										
										
                                    </table>
									<a href="insert_room_master.php" class="btn btn-info btn-rounded m-b-xxs"><i class="fas fa-user-plus"></i></a>
                                </div>
                            </div>

<?php
include("footer.php");
?>