<?php 
$result = mysql_query("SELECT * FROM timeframes WHERE application_type='Midterm_Registration' OR application_type='Final_Registration' OR application_type='MBA_Registration' ORDER BY timeframe_start ASC");

if($retrieved_value = mysql_fetch_array($result))
	{
	do
		{
		$timeframe_unique_id_fdB = $retrieved_value['timeframe_unique_id'];
		
		$application_type_fdB = $retrieved_value['application_type'];
			if($application_type_fdB=="Midterm_Registration") { $application_type = "Midterm Exam"; }
			if($application_type_fdB=="Final_Registration") { $application_type = "Final Exam"; }
			if($application_type_fdB=="MBA_Registration") { $application_type = "MBA Exam"; }
		$timeframe_name_fdB = $retrieved_value['timeframe_name'];
		$timeframe_start_fdB = $retrieved_value['timeframe_start'];
		$timeframe_end_fdB = $retrieved_value['timeframe_end'];

		$timeframe_start_verbose = date('F j, Y',strtotime($timeframe_start_fdB));
		$timeframe_end_verbose = date('F j, Y',strtotime($timeframe_end_fdB));
		$added_by_user_name_fdB = $retrieved_value['added_by_user_name'];
		$date_added_fdB = date('F j, Y (g:i:s a)',strtotime($retrieved_value['date_added']));

		//---count ACTIVE entires - Waterloo
		$query_count_1 = "SELECT count(*) as count_1 FROM exam_registrations WHERE timeframe_unique_id='$timeframe_unique_id_fdB' AND active='1' AND campus='waterloo'";
		$query_count_1_result = mysql_query($query_count_1);
		$row_1 = mysql_fetch_array($query_count_1_result);
		$count_1 = $row_1['count_1'];
		//---end count
		
		//---count CANCELLED entires - Waterloo
		$query_count_2 = "SELECT count(*) as count_2 FROM exam_registrations WHERE timeframe_unique_id='$timeframe_unique_id_fdB' AND active='0' AND campus='waterloo'";
		$query_count_2_result = mysql_query($query_count_2);
		$row_2 = mysql_fetch_array($query_count_2_result);
		$count_2 = $row_2['count_2'];
		//---end count
		
		//---count ACTIVE entires - Brantford
		$query_count_3 = "SELECT count(*) as count_3 FROM exam_registrations WHERE timeframe_unique_id='$timeframe_unique_id_fdB' AND active='1' AND campus='brantford'";
		$query_count_3_result = mysql_query($query_count_3);
		$row_3 = mysql_fetch_array($query_count_3_result);
		$count_3 = $row_3['count_3'];
		//---end count
		
		//---count CANCELLED entires - Brantford
		$query_count_4 = "SELECT count(*) as count_4 FROM exam_registrations WHERE timeframe_unique_id='$timeframe_unique_id_fdB' AND active='0' AND campus='brantford'";
		$query_count_4_result = mysql_query($query_count_4);
		$row_4 = mysql_fetch_array($query_count_4_result);
		$count_4 = $row_4['count_4'];
		//---end count
		
		//---count ACTIVE entires - Kitchener
		$query_count_5 = "SELECT count(*) as count_5 FROM exam_registrations WHERE timeframe_unique_id='$timeframe_unique_id_fdB' AND active='1' AND campus='kitchener'";
		$query_count_5_result = mysql_query($query_count_5);
		$row_5 = mysql_fetch_array($query_count_5_result);
		$count_5 = $row_5['count_5'];
		//---end count
		
		//---count CANCELLED entires - Kitchener
		$query_count_6 = "SELECT count(*) as count_6 FROM exam_registrations WHERE timeframe_unique_id='$timeframe_unique_id_fdB' AND active='0' AND campus='kitchener'";
		$query_count_6_result = mysql_query($query_count_6);
		$row_6 = mysql_fetch_array($query_count_6_result);
		$count_6 = $row_6['count_6'];
		//---end count
		
		//---count ACTIVE entires - Toronto
		$query_count_7 = "SELECT count(*) as count_7 FROM exam_registrations WHERE timeframe_unique_id='$timeframe_unique_id_fdB' AND active='1' AND campus='toronto'";
		$query_count_7_result = mysql_query($query_count_7);
		$row_7 = mysql_fetch_array($query_count_7_result);
		$count_7 = $row_7['count_7'];
		//---end count
		
		//---count CANCELLED entires - Toronto
		$query_count_8 = "SELECT count(*) as count_8 FROM exam_registrations WHERE timeframe_unique_id='$timeframe_unique_id_fdB' AND active='0' AND campus='toronto'";
		$query_count_8_result = mysql_query($query_count_8);
		$row_8 = mysql_fetch_array($query_count_8_result);
		$count_8 = $row_8['count_8'];
		//---end count
		


		echo "<form action=\"$PHP_SELF?manageExamTimeframes&subAction=viewExistingTimeframes\" method='post' name='delete_timeframes_form'>";
		echo "<strong>$image_red_bullet $application_type</strong><BR>";
		echo "<strong>$image_08 $timeframe_name_fdB</strong><BR>";
		echo "<strong>$image_08 $timeframe_start_verbose - $timeframe_end_verbose</strong><BR>";
		
		//Show Waterloo Registrations and cancellations
		echo "$image_08 Waterloo: <A class='links' HREF=\"https://" . $_SERVER['SERVER_NAME'] . "/alconline/export/index.php?id=$timeframe_unique_id_fdB&a='1'&campus='waterloo'\"><strong>$count_1</strong> registered</A>";
		echo " | <A class='links' HREF=\"https://" . $_SERVER['SERVER_NAME'] . "/alconline/export/index.php?id=$timeframe_unique_id_fdB&a='0'&campus='waterloo'\"><strong>$count_2</strong> cancellations</A><BR>";
		//Show Brantford Registrations and cancellations
		echo "$image_08 Brantford: <A class='links' HREF=\"https://" . $_SERVER['SERVER_NAME'] . "/alconline/export/index.php?id=$timeframe_unique_id_fdB&a='1'&campus='brantford'\"><strong>$count_3</strong> registered</A>";
		echo " | <A class='links' HREF=\"https://" . $_SERVER['SERVER_NAME'] . "/alconline/export/index.php?id=$timeframe_unique_id_fdB&a='0'&campus='brantford'\"><strong>$count_4</strong> cancellations</A><BR>";
		//Show Kitchener Registrations and cancellations
		echo "$image_08 Kitchener: <A class='links' HREF=\"https://" . $_SERVER['SERVER_NAME'] ."/alconline/export/index.php?id=$timeframe_unique_id_fdB&a='1'&campus='kitchener'\"><strong>$count_5</strong> registered</A>";
		echo " | <A class='links' HREF=\"https://" . $_SERVER['SERVER_NAME'] . "/alconline/export/index.php?id=$timeframe_unique_id_fdB&a='0'&campus='kitchener'\"><strong>$count_6</strong> cancellations</A><BR>";
		//Show Toronto Registrations and cancellations
		echo "$image_08 Toronto: <A class='links' HREF=\"https://" . $_SERVER['SERVER_NAME'] . "/alconline/export/index.php?id=$timeframe_unique_id_fdB&a='1'&campus='toronto'\"><strong>$count_7</strong> registered</A>";
		echo " | <A class='links' HREF=\"https://" . $_SERVER['SERVER_NAME'] . "/alconline/export/index.php?id=$timeframe_unique_id_fdB&a='0'&campus='toronto'\"><strong>$count_8</strong> cancellations</A><BR>";
		
		echo "$image_08 added by: <B>$added_by_user_name_fdB</B> on $date_added_fdB<P>";
		echo "<input type='hidden' name='start' value='$timeframe_start_fdB' />";
		echo "<input type='hidden' name='stop' value='$timeframe_end_fdB' />";

		echo "</form>";
		}
	while($retrieved_value=mysql_fetch_array($result));
	}
else
	{ 
	echo "No timeframes have been started.";
	}
?>
