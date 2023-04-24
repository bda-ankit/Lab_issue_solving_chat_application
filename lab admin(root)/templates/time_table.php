<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Time Table</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Course</th>
                                                <th>Semester</th>
                                                <th>Subject</th>
                                                <th>Day</th>
                                                <th>Time</th>
                                                <th>Duration</th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        

                                            	<?php
                                            	$stu="Select * from time_table;";
												$qry=$conn->query($stu);
												while($res=$qry->fetch_assoc())
												{
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
													
													if($res["sem_id"]==NULL)
													{
														$sem_id=" ";
													}
													
													else
													{

													$sem_id = $res["sem_id"];

													$stu2="Select * from sem_master where sem_id = '$sem_id';";
													$qry2=$conn->query($stu2);
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
                                                <td><?php echo $course_name;?></td>
                                                <td><?php echo $semester;?></td>
                                                <td><?php echo $sub;?></td>
												<td><?php echo $res["week_day"]?></td>
												<td><?php echo $res["time"];?></td>
												<td><?php echo $res["duration"];?></td>
											
												
												
												<td>
<?php
$str_go = "<a  style='margin-top: -4px;' onclick='return Confirm_Delete()' href='delete_timetable.php?time_table_id=".$res['time_table_id']."' class='btn btn-danger btn-rounded m-b-xxs'><i class='far fa-trash-alt'></i></a>     

<a  style='margin-top: -4px;' href='update_timetable.php?time_table_id=".$res['time_table_id']."' class='btn btn-success btn-rounded m-b-xxs'> <i class='far fa-edit'></i> </a>";

echo $str_go;
}
?>
                                                </td>
												
												
                                            </tr>
                                        </tbody>
										
                                    </table>
									
									
									
                                </div>
								<a href="insert_timetable.php" class="btn btn-info btn-rounded m-b-xxs"><i class="fas fa-user-plus"></i></a>
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