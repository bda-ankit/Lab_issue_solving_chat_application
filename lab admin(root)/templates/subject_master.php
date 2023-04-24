<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Subject Master Table</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Subject Name</th>
                                                <th>Course</th>
                                                <th>Semester</th>
												<th>Actions</th>
                                            </tr>
                                        </thead>
                                        

                                            	<?php
                                            	$stu="Select * from subject_master;";
												$qry=$conn->query($stu);
												while($res=$qry->fetch_assoc())
												{
													$course_id = $res["course_id"];

													$stu1="Select * from course_table where course_id = '$course_id';";
													$qry1=$conn->query($stu1);
													$res1=$qry1->fetch_assoc();
													$course_name = $res1["course_name"];



													$sem_id = $res["sem_id"];

													$stu2="Select * from sem_master where sem_id = '$sem_id';";
													$qry2=$conn->query($stu2);
													$res2=$qry2->fetch_assoc();
													$semester = $res2["sem_number"];

												
                                            	?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $res["sub_name"];?></td>
                                                <td><?php echo $course_name;?></td>
                                                <td><?php echo $semester; ?></td>
												
												<td>
<?php
$str_go = "<a  style='margin-top: -4px;' onclick='return Confirm_Delete()' href='delete_subject_master.php?sub_id=".$res['sub_id']."' class='btn btn-danger btn-rounded m-b-xxs'><i class='far fa-trash-alt'></i></a>     
<a  style='margin-top: -4px;' href='update_subject_master.php?sub_id=".$res['sub_id']."' class='btn btn-success btn-rounded m-b-xxs'> <i class='far fa-edit'></i> </a>";
echo $str_go;
}
?>
                                                </td>
												
												</tr>
                                        </tbody>
                                    </table>
									<a href="insert_subject_master.php" class="btn btn-info btn-rounded m-b-xxs"><i class="fas fa-user-plus"></i></a>                              
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