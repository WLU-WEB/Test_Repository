<?php 
$result = mysql_query("SELECT * FROM returning_students_timeframe ORDER BY timeframe_start ASC");

if($retrieved_value = mysql_fetch_array($result))
	{
	do
		{
		$timeframe_unique_id_fdB = $retrieved_value['timeframe_unique_id'];
			
		$timeframe_name_fdB = $retrieved_value['timeframe_name'];
		$timeframe_start_fdB = $retrieved_value['timeframe_start'];
		$timeframe_end_fdB = $retrieved_value['timeframe_end'];

		$timeframe_start_verbose = date('F j, Y',strtotime($timeframe_start_fdB));
		$timeframe_end_verbose = date('F j, Y',strtotime($timeframe_end_fdB));
		
		$added_by_user_name_fdB = $retrieved_value['added_by'];
		$date_added_fdB = date('F j, Y (g:i:s a)',strtotime($retrieved_value['date_added']));

		//---count ACTIVE entires of waterloo students
		$query_count_1 = "SELECT count(*) as count FROM returning_students WHERE timeframe_unique_id='$timeframe_unique_id_fdB' AND campus='waterloo'";
		$query_count_1_result = mysql_query($query_count_1);
		$row_1 = mysql_fetch_array($query_count_1_result);
		$count_1 = $row_1['count'];
		//---end count
		
		//---count ACTIVE entires of brantford students
		$query_count_2 = "SELECT count(*) as count FROM returning_students WHERE timeframe_unique_id='$timeframe_unique_id_fdB' AND campus='brantford'";
		$query_count_2_result = mysql_query($query_count_2);
		$row_2 = mysql_fetch_array($query_count_2_result);
		$count_2 = $row_2['count'];
		//---end count

		echo "<form action=\"$PHP_SELF?ExpressRegistrationTimeFrames&subAction=viewExistingTimeframes\" method='post' name='delete_timeframes_form'>";
		echo "<strong>$image_red_bullet $application_type</strong><BR>";
		echo "<strong>$image_08 $timeframe_name_fdB</strong><BR>";
		echo "<strong>$image_08 $timeframe_start_verbose - $timeframe_end_verbose</strong><BR>";
		
		echo "$image_08 <A class='links' HREF=\"https://" . $_SERVER['SERVER_NAME'] . "/alconline/export/returningStudents.php?id=$timeframe_unique_id_fdB&name=$timeframe_name_fdB&campus=waterloo\"><strong>$count_1</strong> Waterloo Registered</A>";
		
		
		
		echo " | <A class='links' HREF=\"https://" . $_SERVER['SERVER_NAME'] . "/alconline/export/returningStudents.php?id=$timeframe_unique_id_fdB&name=$timeframe_name_fdB&campus=brantford\"><strong>$count_2</strong> Brantford Registered</A>";
		
		echo "<input type='hidden' name='start' value='$timeframe_start_fdB' />";
		echo "<input type='hidden' name='stop' value='$timeframe_end_fdB' />";

		echo "</form>";
		//include ("_include_viewExistingTimeframes_table.php");
		}
	while($retrieved_value=mysql_fetch_array($result));
	}
else
	{ 
	echo "No timeframes have been started.";
	}
?>
