<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Student logs Table</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
												<th>First Name</th>
                                                <th>Loging date</th>
                                                <th>Loging time</th>
												<th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        

                                            	<?php
                                            	$stu="Select * from student_logs;";
												$qry=$conn->query($stu);
												while($res=$qry->fetch_assoc())
												{
													
												$stu_id = $res["stu_id"];

													$stu1="Select * from student_details where stu_id = '$stu_id';";
													$qry1=$conn->query($stu1);
													$res1=$qry1->fetch_assoc();
													$stu_fname = $res1["stu_fname"];

												
                                            	?>
                                        <tbody>
                                            <tr>
											
											     <td><?php echo $stu_fname;?></td>
											
											
											
                                                <td><?php echo $res["stu_loging_date"];?></td>
                                                
                                                <td><?php echo $res["stu_loging_time"]; ?></td>
												<td>
<?php
$str_go = "<a  style='margin-top: -4px;' onclick='return Confirm_Delete()' href='delete_student_logs.php?stu_id=".$res['stu_id']."' class='btn btn-danger btn-rounded m-b-xxs'><i class='far fa-trash-alt'></i></a>";
echo $str_go;
}
?>
                                                </td>
												

                                            </tr>
                                        </tbody>
                                    </table>
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