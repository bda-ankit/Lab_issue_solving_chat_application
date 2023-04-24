<?php
include("header.php");
include("../../db.php");
?>


	<div class="page-inner">
		<div id="main-wrapper">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-darkblue">
                        <div class="panel-heading clearfix">
                            





							

                                    

<br><br>

                                <div class="panel-body">
                                    <table class="table table-hover">
                                    	<h4>Lab Details</h4>
                                        <thead>
                                            <tr style="background-color: #192231;">
                                                <th>Lab Name</th>
                                                <th>Sem</th>
                                                <th>Faculty Name</th>
                                                <th>Jion Students</th>
                                                <th>Selelect & Chat</th>
                                            </tr>
                                        </thead>


                                        <tbody>




<?php


$t_day = date("l");
$t_date = date("Y-m-d");





$qes2="Select * from room_master where room_start = '1'";
$qry2=$conn->query($qes2);
while($res2=$qry2->fetch_assoc())
{
    // $r_id=$res_sub_data["room_master_id"];
    $room_m_id = $res2["room_master_id"];
    $sem = $res2["sem_id"];
    $sub = $res2["sub_id"];
    $course = $res2["course_id"];



    $qes_sub_data="Select * from subject_master where sub_id = '$sub' and course_id='$course' and sem_id='$sem';";
    // echo $qes_sub_data;
    $qry_sub_data=$conn->query($qes_sub_data);
    $res_sub_data=$qry_sub_data->fetch_assoc();
    
    $lab_name=$res_sub_data["sub_name"];





    $qes_f="Select * from room_data where room_master_id = '$room_m_id' and date = '$t_date' and stu_id = '' ";
    // echo $qes_f;
    $qry_f=$conn->query($qes_f);
    $res_f=$qry_f->fetch_assoc();
    $f_id = $res_f["fac_id"];
    $join_leave = $res_f["join_leave"];
    


    $qes_f_d="Select * from faculty_details where fac_id = '$f_id' ";
    // echo $qes_f_d;
    $qry_f_d=$conn->query($qes_f_d);
    $res_f_d=$qry_f_d->fetch_assoc();
    $f_id = $res_f_d["fac_id"];
    $f_name = $res_f_d["fac_fname"]." ".$res_f_d["fac_lname"];


    $qes_s="Select count(stu_id) as stu_c from room_data where room_master_id = '$room_m_id' and week_day = '$t_day' and fac_id = '' ";
    $qry_s=$conn->query($qes_s);
    $res_s=$qry_s->fetch_assoc();
    $total_stu = $res_s["stu_c"];

    if($join_leave == '1')
    {
?>









                                            <tr>
                                                <td><?php echo $lab_name;?></td>
                                                <td><?php echo $sem;?></td>
                                                <td><?php echo "<a href='chats/chat_fac.php?facid=".$f_id."&room_id=".$room_m_id."'>".$f_name."</a>";?></td>
                                                <td><?php echo $total_stu;?></td>
                                                <td>








                                    <div class="panel-body">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"  data-toggle="dropdown" aria-expanded="false">
                                                Select Student <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
<?php
    $qes_stu_data="Select stu_id from room_data where room_master_id = '$room_m_id' and week_day = '$t_day' and fac_id = '' ";
    $qry_stu_data=$conn->query($qes_stu_data);
    while($res_stu_data=$qry_stu_data->fetch_assoc())
    {
        $stu_id = $res_stu_data["stu_id"];

        $qes_stu_data_get="Select * from student_details where stu_id='$stu_id'";
        $qry_stu_data_get=$conn->query($qes_stu_data_get);
        $res_stu_data_get=$qry_stu_data_get->fetch_assoc();

        $stu_fname = $res_stu_data_get["stu_fname"];
        $stu_lname = $res_stu_data_get["stu_lname"];

        $stu_name = $stu_fname." ".$stu_lname;

?>

                                            <li><?php echo "<a href='chats/chat.php?stuid=".$stu_id."&room_id=".$room_m_id."'>".$stu_name."</a>";?></li>
<?php
    }
?>


                                            </ul>
                                        </div>
                                    </div>








                                                </td>
                                            </tr>



<?php
    }
    elseif($join_leave == '0')
    {
?>








                                            <tr>
                                                <td><?php echo $lab_name;?></td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>




<?php
    }
    else
    {
        echo "Error";
    }

}




?>








                                        </tbody>
                                    </table>
                                </div>











                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include("footer.php");
?>