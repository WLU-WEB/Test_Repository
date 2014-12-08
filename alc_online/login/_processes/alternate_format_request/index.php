<?php
include ("_inc_index_introduction.php");

if (!$submit) 
	{
	//---check to see if available time exists
	$today_date = date("Y-m-d H:i:s");
	$today_date_verbose = date('l, F j, Y (g:i:s a T)', strtotime($today_date)); //Monday, January 1, 2000 (12:59:59 am EST)
	
	require_once("mysqlArray.php");
	$connection_name = "AcademicLearningServices";
	$dbcnx = @mysqlLogin($connection_name);	

	$result = mysql_query("SELECT * FROM a_alternate_request_timeframes WHERE timeframe_start <='$today_date' AND timeframe_end >='$today_date'");
	$retrieved_value = mysql_fetch_array($result);
	$timeframe_unique_id_fdB = $retrieved_value['timeframe_unique_id'];
	$timeframe_name_fdB = $retrieved_value['timeframe_name'];
	$timeframe_start_fdB = $retrieved_value['timeframe_start'];
	//$timeframe_start_fdB_verbose = date('l, F j, Y (g:i:s a T)', strtotime($retrieved_value['timeframe_start']));
	$timeframe_start_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value['timeframe_start']));
	$timeframe_end_fdB = $retrieved_value['timeframe_end'];
	$timeframe_end_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value['timeframe_end']));
	if(!$timeframe_unique_id_fdB)
		{
		//echo "[$timeframe_unique_id_fdB]";
		$result_3 = mysql_query("SELECT * FROM a_alternate_request_timeframes WHERE timeframe_start >'$today_date'");
		$retrieved_value_3 = mysql_fetch_array($result_3);
		$timeframe_unique_id_next_fdB = $retrieved_value_3['timeframe_unique_id'];
		$timeframe_start_fdB = $retrieved_value_3['timeframe_start'];
		$timeframe_start_next_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_3['timeframe_start']));
		$timeframe_end_fdB = $retrieved_value_3['timeframe_end'];
		$timeframe_end_next_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_3['timeframe_end']));
		//echo "[$timeframe_start_fdB|$timeframe_end_fdB]";
		include ("_inc_registration_closed.php");
		}
	else
		{	
		include ("_inc_generate_request_id.php");
		include ("_inc_index.php");
		}
	mysql_close($dbcnx);
	}

if($submit=="Continue") 
	{
	if(!preg_match("/^([a-z0-9])+$/i", $subject_1_fF)) { $errors[] = "Subject for course 1"; $error_subject_1_fF='1'; }
	if(!preg_match("/^([a-z0-9])+$/i", $code_1_fF)) { $errors[] = "Code for course 1"; $error_code_1_fF='1'; }
	if(!preg_match("/^([a-z0-9])+$/i", $section_1_fF)) { $errors[] = "Section for course 1"; $error_section_1_fF='1'; }
	
	if($subject_2_fF || $code_2_fF || $section_2_fF)
		{
		if(!preg_match("/^([a-z0-9])+$/i", $subject_2_fF)) { $errors[] = "Subject for course 2"; $error_subject_2_fF='1'; }
		if(!preg_match("/^([a-z0-9])+$/i", $code_2_fF)) { $errors[] = "Code for course 2"; $error_code_2_fF='1'; }
		if(!preg_match("/^([a-z0-9])+$/i", $section_2_fF)) { $errors[] = "Section for course 2"; $error_section_2_fF='1'; }
		}
	if($subject_3_fF || $code_3_fF || $section_3_fF)
		{
		if(!preg_match("/^([a-z0-9])+$/i", $subject_3_fF)) { $errors[] = "Subject for course 3"; $error_subject_3_fF='1'; }
		if(!preg_match("/^([a-z0-9])+$/i", $code_3_fF)) { $errors[] = "Code for course 3"; $error_code_3_fF='1'; }
		if(!preg_match("/^([a-z0-9])+$/i", $section_3_fF)) { $errors[] = "Section for course 3"; $error_section_3_fF='1'; }
		}
	
	if($subject_4_fF || $code_4_fF || $section_4_fF)
		{
		if(!preg_match("/^([a-z0-9])+$/i", $subject_4_fF)) { $errors[] = "Subject for course 4"; $error_subject_4_fF='1'; }
		if(!preg_match("/^([a-z0-9])+$/i", $code_4_fF)) { $errors[] = "Code for course 4"; $error_code_4_fF='1'; }
		if(!preg_match("/^([a-z0-9])+$/i", $section_4_fF)) { $errors[] = "Section for course 4"; $error_section_4_fF='1'; }
		}
	
	if($subject_5_fF || $code_5_fF || $section_5_fF)
		{
		if(!preg_match("/^([a-z0-9])+$/i", $subject_5_fF)) { $errors[] = "Subject for course 5"; $error_subject_5_fF='1'; }
		if(!preg_match("/^([a-z0-9])+$/i", $code_5_fF)) { $errors[] = "Code for course 5"; $error_code_5_fF='1'; }
		if(!preg_match("/^([a-z0-9])+$/i", $section_5_fF)) { $errors[] = "Section for course 5"; $error_section_5_fF='1'; }
		}
			
//if(!$confirmation_01_fF || !$confirmation_02_fF  || !$confirmation_03_fF  || !$confirmation_04_fF  || !$confirmation_05_fF || !$confirmation_06_fF) { $errors[] = "Confirmation"; $error_confirmation_fF='1'; }

if(count($errors)>0)
			{
			//pull in the timeframe again (as it dissapears if they submit and if there are missing fields)
			$result = mysql_query("SELECT * FROM a_alternate_request_timeframes WHERE timeframe_start <='$today_date' AND timeframe_end >='$today_date'");
			$retrieved_value = mysql_fetch_array($result);
			$timeframe_unique_id_fdB = $retrieved_value['timeframe_unique_id'];
			$timeframe_name_fdB = $retrieved_value['timeframe_name'];
			$timeframe_start_fdB = $retrieved_value['timeframe_start'];
			$timeframe_start_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value['timeframe_start']));
			$timeframe_end_fdB = $retrieved_value['timeframe_end'];
			$timeframe_end_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value['timeframe_end']));
			
			include ("_inc_index.php");
			//include ("/www/forms/_includes/footer.php");
			return;
			}
		else
			{
			include ("_inc_confirmation.php");
			return;
			}
	}


if($submit=="Submit") 
	{
	if(!$confirmation_01_fF ||  !$confirmation_02_fF  || !$confirmation_03_fF  || !$confirmation_04_fF  || !$confirmation_05_fF || !$confirmation_06_fF) { $errors[] = "Confirmation"; $error_confirmation_fF='1'; }

	if(count($errors)>0)
			{
			include ("_inc_confirmation.php");
			//include ("/www/forms/_includes/footer.php");
			return;
			}
		else
			{
			//---perform check to ensure that data is not submitted multiple times if they reload the page (after the first/initial submission)
			require_once("mysqlArray.php");
			$connection_name = "AcademicLearningServices";
			$dbcnx = @mysqlLogin($connection_name);	
	
			$search_dB = mysql_query("SELECT request_id FROM a_alternate_request WHERE request_id='$generated_alternative_request_id'");	
			$myrow = mysql_fetch_array($search_dB);
			$request_id_fdB = $myrow["request_id"];
			mysql_close($dbcnx);
			
			if($request_id_fdB) //request ID already exists in dB, do not process (ie. student has reloaded page)
				{
				//echo "click here to submit another request";
				include ("_inc_ID_already_exists.php");
				return;
				}
			
			else
				{
				//echo "<BR>$subject_1_fF $code_1_fF $section_1_fF";
				//echo "<BR>$subject_2_fF $code_2_fF $section_2_fF";
				
				$date_verbose_fF = date("l, F j, Y g:i:s a");
				$date_for_dB_fF = date("Y-m-d H:i:s");
				$student_lastname_for_email = $_SESSION['surname_fromLDAP'];
				$student_firstname_for_email = $_SESSION['givenname_fromLDAP'];
				$student_ID_for_email = $_SESSION['studentID_fromLDAP'];
				$student_email_for_email = $_SESSION['email_fromLDAP'];
				
				//--- insert into dB
				include ("_clean_variables_before_dB.php");

				require_once("mysqlArray.php");
				$connection_name = "AcademicLearningServices";
				$dbcnx = @mysqlLogin($connection_name);	
				
				$sql = "INSERT INTO a_alternate_request (entry_id,timeframe_unique_id,request_id,user_id,subject_1,code_1,section_1,subject_2,code_2,section_2,subject_3,code_3,section_3,subject_4,code_4,section_4,subject_5,code_5,section_5,campus,date_entered,ip_entered)
					   VALUES (NULL,'$timeframe','$generated_alternative_request_id','$user_id_fdB','$subject_1_fF','$code_1_fF','$section_1_fF','$subject_2_fF','$code_2_fF','$section_2_fF','$subject_3_fF','$code_3_fF','$section_3_fF','$subject_4_fF','$code_4_fF','$section_4_fF','$subject_5_fF','$code_5_fF','$section_5_fF','$campus_fF','$date_for_dB_fF','$ip')";	
				$result_one = mysql_query($sql) or die ("Error in query: $db3 " . mysql_error() );
				
				//--- obtain timeframe details to include them in the e-mail 
				$result_get_for_email = mysql_query("SELECT * FROM a_alternate_request_timeframes WHERE timeframe_unique_id='$timeframe'");
				$retrieved_value_x = mysql_fetch_array($result_get_for_email);
				$timeframe_unique_id_fdB = $retrieved_value_x['timeframe_unique_id'];
				$timeframe_name_fdB = $retrieved_value_x['timeframe_name'];
				$timeframe_start_fdB = $retrieved_value_x['timeframe_start'];
				$timeframe_start_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_x['timeframe_start']));
				$timeframe_end_fdB = $retrieved_value_x['timeframe_end'];
				$timeframe_end_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_x['timeframe_end']));

				//--- confirmation e-mail send to user's e-mail
				$message = "Thank you $first_name_fdB!<P>	
				Your information for the Alternate Format Request has been successfully received.<P>
				Below are the form details:<P>
				<B>Submission Period:</B> $timeframe_name_fdB ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)<P>
				<br/>
				<B>Campus: </B>". ucfirst($campus_fF)."<P>";
				if($subject_1_fF) { $message .=  "<BR><B>Course 1 (Subject/Code/Section):</B> $subject_1_fF $code_1_fF $section_1_fF"; }
				if($subject_2_fF) { $message .=  "<BR><B>Course 2 (Subject/Code/Section):</B> $subject_2_fF $code_2_fF $section_2_fF"; }
				if($subject_3_fF) { $message .=  "<BR><B>Course 3 (Subject/Code/Section):</B> $subject_3_fF $code_3_fF $section_3_fF"; }
				if($subject_4_fF) { $message .=  "<BR><B>Course 4 (Subject/Code/Section):</B> $subject_4_fF $code_4_fF $section_4_fF"; }
				if($subject_5_fF) { $message .=  "<BR><B>Course 5 (Subject/Code/Section):</B> $subject_5_fF $code_5_fF $section_5_fF"; }
				$message .= "<P><A HREF='https://web.wlu.ca/alcforms/refshare'>Click here to view RefShare e-text availability</A> or visit <A HREF='https://web.wlu.ca/alcforms/refshare'>https://web.wlu.ca/alcforms/refshare</A><P>
				Date Processed: $date_verbose_fF<BR>
				---------------------------------------------------------<BR>
				Please retain your receipt as proof-of-purchase in order to pick up your material.<BR>
				This is an automated confirmation, please do NOT reply to this e-mail.<BR>
				";
				//$headers .= "From: Accessible Learning Services <etext@wlu.ca>\n";
				$headers .= "Content-Type: text/html; charset=iso-8859-1\n";
				$mail_to = $student_email_for_email;
				$mail_subject = "Laurier ALC: Alternate Format Request Registration Confirmation";
				require_once('wluMimeMail.php');
				$from = "Accessible Learning Services <etext@wlu.ca>";
				$mailSent = wluMimeMail($from,$mail_to,$mail_subject,"",$message);
	
				//--- confirmation e-mail sent to admin
				$message = "
				New Alternate Format Request submitted!<P>
				<B>Date Processed:</B> $date_verbose_fF<P>
				<B>Name:</B> $first_name_fdB $last_name_fdB<BR>
				<B>Username:</B> $ALC_username<BR>
				<B>Laurier ID:</B> $user_laurier_id_fdB<P>
				<B>Submission Period:</B> $timeframe_name_fdB ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)<P>
				<br/>
				<B>Campus: </B>". ucfirst($campus_fF)."<P>";
				
				if($subject_1_fF) { $message .=  "<BR><B>Course 1 (Subject/Code/Section):</B> $subject_1_fF $code_1_fF $section_1_fF"; }
				if($subject_2_fF) { $message .=  "<BR><B>Course 2 (Subject/Code/Section):</B> $subject_2_fF $code_2_fF $section_2_fF"; }
				if($subject_3_fF) { $message .=  "<BR><B>Course 3 (Subject/Code/Section):</B> $subject_3_fF $code_3_fF $section_3_fF"; }
				if($subject_4_fF) { $message .=  "<BR><B>Course 4 (Subject/Code/Section):</B> $subject_4_fF $code_4_fF $section_4_fF"; }
				if($subject_5_fF) { $message .=  "<BR><B>Course 5 (Subject/Code/Section):</B> $subject_5_fF $code_5_fF $section_5_fF"; }
				$message .= "<P><A HREF='https://web.wlu.ca/alcforms/refshare'>Click here to view RefShare e-text availability</A> or visit <A HREF='https://web.wlu.ca/alcforms/refshare'>https://web.wlu.ca/alcforms/refshare</A><P>";
				$headers .= "Content-Type: text/html; charset=iso-8859-1\n";
				
				
				$this_server =  $_SERVER["SERVER_NAME"];
				if($this_server=="infowebtest.wlu.ca") { 
					$mail_to = "iadebowale@wlu.ca"; 
				}
				elseif($campus_fF=="waterloo") { 
					$mail_to = "etext@wlu.ca"; 
				}
				elseif($campus_fF=="brantford"){
					$mail_to = "lbetext@wlu.ca"; 
				}
				
				
				
				$mail_subject = "$timeframe_name_fdB ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)";
				require_once('wluMimeMail.php');
				$from = "Automated Online Notice <etext@wlu.ca>";
				$mailSent = wluMimeMail($from,$mail_to,$mail_subject,"",$message);
	
				mysql_close($db3);
	
				include ("_inc_thankyou.php");
				
				return;
				}
			}
	}
?>
