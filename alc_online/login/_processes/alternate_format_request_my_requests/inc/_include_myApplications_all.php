<?php 
	require_once("mysqlArray.php");
	$connection_name = "AcademicLearningServices";
	$dbcnx = @mysqlLogin($connection_name);	

if($subActionYear)
	{
	$result = mysql_query("SELECT user_id FROM a_user WHERE user_id='$user_id_fdB'");
	$retrieved_value = mysql_fetch_array($result);
	$user_id_alternate_text_view_fdB = $retrieved_value['user_id'];

	
	if($subActionYear=="all" || $subActionYear=="") //show all
		{
		//$search_dB_01 = mysql_query("SELECT * FROM category_session LEFT JOIN registration ON category_session.cs_generated_id=registration.cs_generated_id WHERE registration.user_novell_id='$H1N1registration_username' AND registration.registration_active='1' ORDER BY registration.registration_date ASC", $db_viewProjects);
		$search_dB_01 = mysql_query("SELECT * FROM a_alternate_request WHERE user_id='$user_id_alternate_text_view_fdB' ORDER BY date_entered DESC");
		}
	else //show based on selected year
		{	
		//$search_dB_01 = mysql_query("SELECT * FROM category_session LEFT JOIN registration ON category_session.cs_generated_id=registration.cs_generated_id WHERE registration.user_novell_id='$H1N1registration_username' AND registration.registration_date LIKE '%$subActionYear%' AND registration.registration_active='1' ORDER BY registration.registration_date ASC", $db_viewProjects);
		$search_dB_01 = mysql_query("SELECT * FROM a_alternate_request WHERE user_id='$user_id_alternate_text_view_fdB' AND date_entered LIKE '%$subActionYear%' ORDER BY date_entered DESC");
		}
		
	if($the_data = mysql_fetch_array($search_dB_01))
		{
		do
			{

			$timeframe_unique_id_fdB = $the_data['timeframe_unique_id'];
			$request_id_fdB = $the_data['request_id'];
			
			$date_entered_verbose_fdB = date('l, F j, Y (g:i:s a)',strtotime($the_data['date_entered']));
			$date_updated_fdB = $the_data['date_updated'];
			$date_updated_verbose_fdB = date('l, F j, Y (g:i:s a)',strtotime($the_data['date_updated']));
			
			$subject_1_fdB = $the_data['subject_1'];
			$code_1_fdB = $the_data['code_1'];
			$section_1_fdB = $the_data['section_1'];
	
			$subject_2_fdB = $the_data['subject_2'];
			$code_2_fdB = $the_data['code_2'];
			$section_2_fdB = $the_data['section_2'];
	
			$subject_3_fdB = $the_data['subject_3'];
			$code_3_fdB = $the_data['code_3'];
			$section_3_fdB = $the_data['section_3'];
	
			$subject_4_fdB = $the_data['subject_4'];
			$code_4_fdB = $the_data['code_4'];
			$section_4_fdB = $the_data['section_4'];

			$subject_5_fdB = $the_data['subject_5'];
			$code_5_fdB = $the_data['code_5'];
			$section_5_fdB = $the_data['section_5'];

			$edit_count_fdB = $the_data['edit_count'];

			//---check the start and end date for the period this registration belongs to 
			//$result = mysql_query("SELECT * FROM a_alternate_request_timeframes WHERE timeframe_start <='$today_date' AND timeframe_end >='$today_date'", $db);
			$result_button = mysql_query("SELECT * FROM a_alternate_request_timeframes WHERE timeframe_unique_id='$timeframe_unique_id_fdB'");
			$retrieved_value_button = mysql_fetch_array($result_button);
			//$timeframe_unique_id_fdB = $retrieved_value['timeframe_unique_id'];
			$timeframe_name_fdB = $retrieved_value_button['timeframe_name'];
			$timeframe_start_fdB = $retrieved_value_button['timeframe_start'];
			$timeframe_start_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_button['timeframe_start']));
			$timeframe_end_fdB = $retrieved_value_button['timeframe_end'];
			$timeframe_end_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_button['timeframe_end']));
			$date_right_now = date("Y-m-d");
			//echo "[$date_right_now|$timeframe_end_fdB|$timeframe_start_fdB|$timeframe_unique_id_fdB]";
			if($date_right_now>$timeframe_end_fdB)
				{
				$button_value = "value='EXPIRED'";
				$button_status = "DISABLED";
				$button_status_help = "";
				}
			else
				{
				$button_value = "value='Update'";
				$button_status = "";
				$button_status_help = "";
				}
			//--check end
			
			$registration_date_fdB = date('F j, Y g:i:s a',strtotime($the_data['registration_date']));
	
			include ("_include_myApplications_all_table.php");
			}
		while($the_data=mysql_fetch_array($search_dB_01));
		}
	else
		{ 
		echo "No registrations.<P><P>";
		}
	} //end if
	
//$sid = $_GET['sid'];	
	
if($subAction=="alternateFormatRequestUpdate")
	{
	$date_updated_fF = date("Y-m-d H:i:s");
	
	include ("_processes/alternate_format_request/_clean_variables_before_dB.php");
	
	$the_result = "UPDATE a_alternate_request SET subject_1='$subject_1_fF',code_1='$code_1_fF',section_1='$section_1_fF',subject_2='$subject_2_fF',code_2='$code_2_fF',section_2='$section_2_fF',subject_3='$subject_3_fF',code_3='$code_3_fF',section_3='$section_3_fF',subject_4='$subject_4_fF',code_4='$code_4_fF',section_4='$section_4_fF',subject_5='$subject_5_fF',code_5='$code_5_fF',section_5='$section_5_fF',date_updated='$date_updated_fF',ip_updated='',edit_count=edit_count+1 WHERE request_id='$reqID'";
	$result = mysql_query($the_result) or die ("Error in query: $the_result. " .mysql_error());
	
	include ("_inc_redirect_after_update.php");
	}
	


mysql_close($dbcnx);

?>
