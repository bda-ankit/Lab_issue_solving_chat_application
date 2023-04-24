<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Chat Student Faculty Table</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Message Sender</th>
                                                <th>Faculty Name</th>
                                                <th>Student Name</th>
                                                <th>Message Type</th>
                                                <th>Chat Message</th>
                                                <th>Seen</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        

                                            	<?php
                                            	$adm="Select * from chat_stu_fac;";
												$qry=$conn->query($adm);
												while($res=$qry->fetch_assoc())
												{
													$fac_id = $res["fac_id"];

													$adm1="Select * from faculty_details where fac_id = '$fac_id';";
													$qry1=$conn->query($adm1);
													$res1=$qry1->fetch_assoc();
													$fac_name = $res1["fac_fname"]." ".$res1["fac_lname"];


													$stu_id = $res["stu_id"];

													$adm2="Select * from student_details where stu_id = '$stu_id';";
													$qry2=$conn->query($adm2);
													$res2=$qry2->fetch_assoc();
													$student_name = $res2["stu_fname"]." ".$res2["stu_lname"];

												
                                            	?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $res["msg_sender"];?></td>
                                                <td><?php echo $fac_name;?></td>
                                                <td><?php echo $student_name;?></td>
                                                <td><?php echo $res["msg_type"];?></td>
                                                <td><?php echo $res["chat_msg"];?></td>
                                                <td><?php echo $res["seen"];?></td>
                                                <td><?php echo $res["date"];?></td>
                                                <td><?php echo $res["time"]; ?></td>
                                                
												<td>
<?php
$str_go = "<a  style='margin-top: -4px;' onclick='return Confirm_Delete()' href='delete_chat_stu_fac.php?chat_a_id=".$res['chat_f_id']."' class='btn btn-danger btn-rounded m-b-xxs'><i class='far fa-trash-alt'></i></a>";
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