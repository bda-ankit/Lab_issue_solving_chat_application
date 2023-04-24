<?php

	include("../db.php");

	$room_id = $_GET["roomid"];
	$room_number = $_GET["roomcode"];

	// echo $room_id."<br>".$room_number;



	$qes1="Select * from room_master where room_master_id = '$room_id'";
	$qry1=$conn->query($qes1);
	while($res1=$qry1->fetch_assoc())
	{
		$room_start = $res1["room_start"];


		if ($room_start == '1')
		{
			echo ("<script>location.href='dash/test.php?roomid=$room_id&roomcode=$room_number'</script>");
		}
		elseif ($room_start == '0')
		{
			echo ("<script>alert('Lab Not Start')</script>");
			echo ("<script>location.href='dist/index.php'</script>");	
		}
		else  
		{
			echo "something went wrong";
		}
		
	}


?>