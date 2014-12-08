<?php 
//echo "user_id_fdB: [$user_id_fdB]<BR>";

//$result = mysql_query("SELECT * FROM exam_registrations WHERE user_id='$user_id_fdB' ORDER BY date DESC");
$result = mysql_query("SELECT * FROM exam_registrations LEFT JOIN timeframes ON exam_registrations.timeframe_unique_id=timeframes.timeframe_unique_id WHERE user_id='$user_id_fdB' AND active='1' ORDER BY date DESC");

if($retrieved_value = mysql_fetch_array($result))
	{
	do
		{ 
		//$date_fdB = date('F j, Y (g:i:s a)',strtotime($retrieved_value['date']));
		$date_fdB = date('F j, Y (g:i a)',strtotime($retrieved_value['date']));
		$registration_id_fdB = $retrieved_value['registration_id'];
		
		$timeframe_unique_id_fdB = $retrieved_value['timeframe_unique_id'];
		
		$course_fdB = $retrieved_value['course'];
		$section_fdB = $retrieved_value['section'];
		$term_fdB = $retrieved_value['term'];
		$instructor_fdB = $retrieved_value['instructor'];
		
		$date_required_fdB = $retrieved_value['date_required'];
		$date_required_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value['date_required']));

		$application_type_fdB = $retrieved_value['application_type'];
			if($application_type_fdB=="Midterm_Registration") { $application_type = "Midterm Exam"; $table_to_querry = "midtermExams"; }
			if($application_type_fdB=="Final_Registration") { $application_type = "Final Exam"; $table_to_querry = "finalExams"; }
			if($application_type_fdB=="MBA_Registration") { $application_type = "MBA Exam"; $table_to_querry = "mbaExams"; }

		$timeframe_name_fdB = $retrieved_value['timeframe_name'];
		$timeframe_start_fdB = $retrieved_value['timeframe_start'];
		$timeframe_end_fdB = $retrieved_value['timeframe_end'];

		$timeframe_start_verbose = date('F j, Y',strtotime($timeframe_start_fdB));
		$timeframe_end_verbose = date('F j, Y',strtotime($timeframe_end_fdB));
		//$added_by_user_name_fdB = $retrieved_value['added_by_user_name'];
		//$date_added_fdB = date('F j, Y (g:i:s a)',strtotime($retrieved_value['date_added']));

		//---count entires
		$query_count = "SELECT count(*) as count FROM exam_registrations WHERE timeframe_unique_id='$timeframe_unique_id_fdB'";
		$query_count_result = mysql_query($query_count);
		$row = mysql_fetch_array($query_count_result);
		$count_1 = $row['count'];
		//---end count
		
		//cancellation reason ID
		$cancel_array = array('cancel', $registration_id_fdB);
		$cancel_name = implode("_", $cancel_array);
		//echo "b. cancel_name: [ $cancel_name ]";

		include ("_inc_index_table.php");

		}
	while($retrieved_value=mysql_fetch_array($result));
	}
else
	{ 
	echo "No registrations as of this time.";
	}
?>
