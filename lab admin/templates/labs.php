<?php
include("header.php");
$admin_id = $_SESSION["admin_id"];
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
                                                <th>Faculty Name</th>
                                                <th>Join Students</th>
                                                <th>Selelect & Chat</th>
                                            </tr>
                                        </thead>
                                        <tbody>


<?php

$stu_id = '';
$t_day = date('l');
$sub_name = "N/A";
$fac_id = "";
$room_id = "";
$fac_name = "N/A";
$total_stu = "N/A";


$qes_a_sub="Select * from admin_sub;";
$qry_a_sub=$conn->query($qes_a_sub);
while($res_a_sub=$qry_a_sub->fetch_assoc())
{
	$sub_id1 = $res_a_sub["sub_id"];

	$qes_s_room="Select * from room_master where sub_id = '$sub_id1' and room_start = '1' ;";
	$qry_s_room=$conn->query($qes_s_room);
	$qry_s_room_cnt=mysqli_num_rows($qry_s_room);
	$res_s_room=$qry_s_room->fetch_assoc();

	if ($qry_s_room_cnt == 0)
	{
	
	}
	else
	{
		$sub_id = $res_s_room["sub_id"];
		$room_id = $res_s_room["room_master_id"];


		$qes_s_name="Select * from subject_master where sub_id = '$sub_id' ;";
		$qry_s_name=$conn->query($qes_s_name);
		$qry_s_name_cnt=mysqli_num_rows($qry_s_name);
		$res_s_name=$qry_s_name->fetch_assoc();
	
		if ($qry_s_name_cnt == 0)
		{
		
		}
		else
		{
			$sub_name = $res_s_name["sub_name"];



			$qes_r_data_s="Select * from room_data where week_day = '$t_day' and join_leave = '1' and stu_id != '' and fac_id = '' ;";
			$qry_r_data_s=$conn->query($qes_r_data_s);
			$qry_r_data_s_cnt=mysqli_num_rows($qry_r_data_s);
			$res_r_data_s=$qry_r_data_s->fetch_assoc();

			if ($qry_r_data_s_cnt == 0)
			{
				
			}
			else
			{
				$stu_id = $res_r_data_s["stu_id"];


				$qes_r_data_f="Select * from room_data where week_day = '$t_day' and join_leave = '1' and stu_id = '' and fac_id != '' ;";
				$qry_r_data_f=$conn->query($qes_r_data_f);
				$qry_r_data_f_cnt=mysqli_num_rows($qry_r_data_f);
				$res_r_data_f=$qry_r_data_f->fetch_assoc();


				if ($qry_r_data_f_cnt == 0)
				{
				
				}
				else
				{
					$fac_id = $res_r_data_f["fac_id"];


					$qes_r_name_f="Select * from faculty_details where fac_id = '$fac_id' ;";
					$qry_r_name_f=$conn->query($qes_r_name_f);
					$qry_r_name_f_cnt=mysqli_num_rows($qry_r_name_f);
					$res_r_name_f=$qry_r_name_f->fetch_assoc();



					if ($qry_r_name_f_cnt == 0)
					{
					
					}
					else
					{
						$fac_name = $res_r_name_f["fac_fname"]." ".$res_r_name_f["fac_fname"];



						$qes_r_count_s="Select count(*) as total_stu from room_data where week_day = '$t_day' and join_leave = '1' and stu_id != '' and fac_id = '' ;";
						// echo $qes_r_count_s;
						$qry_r_count_s=$conn->query($qes_r_count_s);
						$qry_r_count_s_cnt=mysqli_num_rows($qry_r_count_s);
						$res_r_count_s=$qry_r_count_s->fetch_assoc();


						if ($qry_r_count_s_cnt == 0)
						{
						
						}
						else
						{
							$total_stu = $res_r_count_s["total_stu"];
						}

					}

				}

			}

		}

	}
	



?>





                                            <tr>
                                                <td><?php echo $sub_name;?></td>
                                                <td>
                                                <?php 

if ($fac_id == '')
{
	echo "N/A";
}
else
{

            $str_fac_chat = "<a href='chats/chat_fac.php?facid=".$fac_id."&room_id=".$room_id."'>".$fac_name."</a>";
                                                echo $str_fac_chat;
}




                                                ?>
                                                	


                                                </td>
                                                <td><?php echo $total_stu;?></td>
                                                <td>

                                    <div class="panel-body">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle"  data-toggle="dropdown" aria-expanded="false">
                                                Students <span class="caret"></span>
                                            </button>
<ul class="dropdown-menu" role="menu">
<?php
if ($stu_id == '')
{
	$stu_name = "N/A";
	$go = "#";
}
else
{

	

	$qes_r_id_s="Select * from room_data where week_day = '$t_day' and join_leave = '1' and stu_id != '' and fac_id = '' ;";
	$qry_r_id_s=$conn->query($qes_r_id_s);
	$qry_r_id_s_cnt=mysqli_num_rows($qry_r_id_s);
	while($res_r_id_s=$qry_r_id_s->fetch_assoc())
	{
		if ($qry_r_id_s_cnt == 0)
		{
		
		}
		else
		{
			$stu_id = $res_r_id_s["stu_id"];
			$room_id_1 =  $res_r_id_s["room_master_id"];
	 
	
			$qes_r_name_s="Select * from student_details where stu_id = '$stu_id' ;";
			$qry_r_name_s=$conn->query($qes_r_name_s);
			$qry_r_name_s_cnt=mysqli_num_rows($qry_r_name_s);
			$res_r_name_s=$qry_r_name_s->fetch_assoc();
	
	
			$stu_name = $res_r_name_s["stu_fname"]." ".$res_r_name_s["stu_lname"];
			$go = "chats/chat.php?stuid=".$stu_id."&room_id=".$room_id_1;
	
		}
	


?>





                                            
                                                <li><?php
                                                	$str_go = "<a href='".$go."'>".$stu_name."</a>";
                                                	echo $str_go;
                                                ?></li>
                                           
<?php
}
}

?>

 </ul>








                                        </div>
                                    </div>



                                                </td>
                                            </tr>
                                        
                                        



<?php
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