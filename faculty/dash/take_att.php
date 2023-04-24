<?php

include("../../db.php");

$r_m_id = $_GET["r_m_id"];
$t_date = date("Y-m-d");
$t_time = date("H:i:s");


$qes="select * from room_data where room_master_id='$r_m_id' and date='$t_date' and fac_id='' ;";
$qry=$conn->query($qes);
$data = "Lab,"."Student Name,"."Date"."\n\n";
while($row = $qry->fetch_assoc())
{
	$stu_id = $row["stu_id"];

	$qes_stu="Select * from student_details where stu_id='$stu_id';";
	$qry_stu=$conn->query($qes_stu);
	$res_stu=$qry_stu->fetch_assoc();
	$stu_name = $res_stu["stu_fname"]." ".$res_stu["stu_lname"];

	$data .= $r_m_id.",".$stu_name.",".$t_date."\n";


}

$filename = "att/".$r_m_id . "_" . $t_date . '.csv';


$csv_handler = fopen ($filename,'w');
fwrite ($csv_handler,$data);
fclose ($csv_handler);

$contenttype = "application/force-download";
header("Content-Type: " . $contenttype);
header("Content-Disposition: attachment; filename=\"" . basename($filename) . "\";");
readfile($filename);
exit();






?>