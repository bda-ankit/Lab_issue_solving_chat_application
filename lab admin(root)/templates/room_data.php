<?php
include("header.php");
include("../../db.php");
$admin_id = $_SESSION["admin_id"];
?>

 <div class="panel panel-darkblue">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Room Data Table</h4>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Room Number</th>
                                                <th>Student Name</th>
                                                <th>Faculty Name</th>
                                                <th>Week Day</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>End Time</th>
                                                <th>Join/Leave</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                            	<?php
                                            	$stu="Select * from room_data;";
												$qry=$conn->query($stu);
												while($res=$qry->fetch_assoc())
												{

													if($res["room_master_id"]==NULL)
                                                    {
                                                        $room_master_id=" ";
                                                    }
                                                    else
                                                    {
                                                    	$room_master_id = $res["room_master_id"];

                                                    $stu1="Select * from room_master where room_master_id = '$room_master_id';";
                                                    	$qry1=$conn->query($stu1);
                                                    	$res1=$qry1->fetch_assoc();
                                                   		$room_number = $res1["room_number"];
                                                    }	

                                                    
                                                    if($res["stu_id"]==NULL)
                                                    {
                                                        $student_name=" ";
                                                    }
                                                    else
                                                    {

													   $stu_id = $res["stu_id"];

													   $stu2="Select * from student_details where stu_id = '$stu_id';";
													   $qry2=$conn->query($stu2);
													   $res2=$qry2->fetch_assoc();
													   $student_name = $res2["stu_fname"];

                                                    }


                                                    if($res["fac_id"]==NULL)
                                                    {
                                                        $faculty_name=" ";
                                                    }
                                                    else
                                                    {

													   $fac_id = $res["fac_id"];

                                                        $stu3="Select * from faculty_details where fac_id = '$fac_id';";
                                                        $qry3=$conn->query($stu3);
                                                        $res3=$qry3->fetch_assoc();
                                                        $faculty_name = $res3["fac_fname"];

                                                    }

                                                    if($res["week_day"]==NULL)
                                                    {
                                                        $week_day=" ";
                                                    }
                                                    else
                                                    {

                                                        $week_day = $res["week_day"];

                                                    }

                                                    if($res["date"]==NULL)
                                                    {
                                                        $date=" ";
                                                    }
                                                    else
                                                    {

                                                        $date = $res["date"];

                                                    }

                                                    if($res["time"]==NULL)
                                                    {
                                                        $time=" ";
                                                    }
                                                    else
                                                    {

                                                        $time = $res["time"];

                                                    }

                                                    if($res["end_time"]==NULL)
                                                    {
                                                        $end_time=" ";
                                                    }
                                                    else
                                                    {

                                                        $end_time = $res["end_time"];

                                                    }

                                                    if($res["join_leave"]==NULL)
                                                    {
                                                        $join_leave=" ";
                                                    }
                                                    else
                                                    {

                                                        $join_leave = $res["join_leave"];

                                                    }


												
                                            	?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $room_number;?></td>
                                                <td><?php echo $student_name;?></td>
                                                <td><?php echo $faculty_name;?></td>
                                                <td><?php echo $week_day;?></td>
                                                <td><?php echo $date;?></td>
                                                <td><?php echo $time;?></td>
                                                <td><?php echo $end_time;?></td>
                                                <td><?php echo $join_leave;?></td>
                                                <td>
<?php
$str_go = "<a  style='margin-top: -4px;' onclick='return Confirm_Delete()' href='delete_room_data.php?room_data_id=".$res['room_data_id']."' class='btn btn-danger btn-rounded m-b-xxs'><i class='far fa-trash-alt'></i></a>  ";

echo $str_go;
}
?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<?php
include("footer.php");
?>