<?php
error_reporting(E_ALL);
$bullet_image = "<IMG SRC='_images/tab_right.png' WIDTH='8' HEIGHT='12' ALT='Error bullet image'>";

$today_date = date("Y-m-d H:i:s");
$today_date_verbose = date('l, F j, Y (g:i:s a T)', strtotime($today_date)); //Monday, January 1, 2000 (12:59:59 am EST)

$form_id_fF = "1"; //all Note-taker Evaluation are identified by "1"

//set the database connection variables
require_once("mysqlArray.php");
$connection_name = "AcademicLearningServices";
$dbcnx = @mysqlLogin($connection_name);	

$result = mysql_query("SELECT * FROM a_timeframes WHERE start <='$today_date' AND end >='$today_date' AND form_id='$form_id_fF'");
$retrieved_value = mysql_fetch_array($result);
$instance_id_fdB = $retrieved_value['instance_id'];
$title_fdB = $retrieved_value['title'];
$start_fdB = $retrieved_value['start'];
$start_fdB_verbose = date('l, F j, Y (g:i:s a T)', strtotime($retrieved_value['start']));
$end_fdB = $retrieved_value['end'];
$end_fdB_verbose = date('l, F j, Y (g:i:s a T)', strtotime($retrieved_value['end']));

$result_2 = mysql_query("SELECT date FROM a_ntEvalNoteTakers WHERE user_id='$user_id_fdB' AND instance_id='$instance_id_fdB'");
$retrieved_value_2 = mysql_fetch_array($result_2);
$date_fdB = $retrieved_value_2['date'];
$date_fdB_verbose = date('l, F j, Y (g:i:s a T)', strtotime($retrieved_value_2['date_fdB'])); //Monday, January 1, 2000

if($iam_fdB=="2") 
	{
	echo "You do not have privilege to view this survey.<P>";
	return;
	}

if(!$instance_id_fdB) //if no survey is active, display message
	{
	echo "No evaluation available at this time.";
	$result_3 = mysql_query("SELECT start,end FROM a_timeframes WHERE start >'$today_date' AND form_id='$form_id_fF'");
	$retrieved_value_3 = mysql_fetch_array($result_3);
	$start_fdB_verbose = date('l, F j, Y (g:i:s a T)', strtotime($retrieved_value_3['start']));
	$end_fdB_verbose = date('l, F j, Y (g:i:s a T)', strtotime($retrieved_value_3['end']));
	if($retrieved_value_3)
		{
		echo "<BR><BR>The next survey will start on $start_fdB_verbose and will end on $end_fdB_verbose";
		}
	if($ALC_username=="akovacsik" || $ALC_username=="jeulenberg")
		{
		echo "<BR><BR><B>NOTE: below the form visible to Jessica only</B><BR><BR>";
		include ("_include_ntEvalNoteTakers.php");
		}
	return;
	}

if($date_fdB)//A
	{
	echo "You have already submitted this evaluation on $date_fdB_verbose.<P>";
	echo "One submission per student per term.<P>";
	if($ALC_username=="akovacsik" || $ALC_username=="jeulenberg")
		{
		echo "<BR><BR><B>NOTE: below the form visible to Jessica only</B><BR><BR>";
		include ("_include_ntEvalNoteTakers.php");
		}
	}
else //B
	{
	if(!$submit_step) 
		{
	
		//$result_timeframe = mysql_query("SELECT * FROM category_session WHERE cs_registration_start <='$today_date' AND cs_registration_end >='$today_date' AND session_generated_id='$sid'", $db_action);
		include ("_include_ntEvalNoteTakers.php");
		}	
	
	if($submit_step=='Submit Information') 
		{
		function clean_input($data)
			{
			$data = trim($data);
			$data = stripslashes($data);
			//$data = addslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
		
		$classes_fF = clean_input($classes_fF);
		$length_fF = clean_input($length_fF);
		$exchange_notes_04_other_fF = clean_input($exchange_notes_04_other_fF);
		$training_05_other_fF = clean_input($training_05_other_fF);
		$contribution_fF = clean_input($contribution_fF);
		$benefits_fF = clean_input($benefits_fF);
		$mylearningspace_fF = clean_input($mylearningspace_fF);
		$improve_fF = clean_input($improve_fF);
		$again_why_fF = clean_input($again_why_fF);
		$additional_comments_fF = clean_input($additional_comments_fF);
	
		$errors = array();
		if($length_fF=="" || !$length_fF) { $errors[] = "How long have you been a Note-taker with Accessible Learning?"; $error_length_fF='1'; }
		//below check disabled on February 16, 2012 - after removing and editing certain form fields 
		//if(!$exchange_notes_01_fF && !$exchange_notes_02_fF && !$exchange_notes_03_fF && !$exchange_notes_04_fF) { $errors[] = "How did you exchange your notes?"; }
		if(!$exchange_notes_01_fF && !$exchange_notes_02_fF && !$exchange_notes_04_fF) { $errors[] = "How did you share notes on MyLearningSpace?"; }
		if($exchange_notes_04_fF && ($exchange_notes_04_other_fF=="" || !$exchange_notes_04_other_fF) ) { $errors[] = "How did you share notes on MyLearningSpace?? (other)"; $error_exchange_notes_04_other_fF='1'; }
		if(!$interaction_01_fF || !$interaction_02_fF || !$interaction_03_fF || !$interaction_04_fF || !$interaction_05_fF) { $errors[] = "Rate your interactions with the ALC office"; }
		if(!$training_01_fF && !$training_02_fF && !$training_03_fF && !$training_04_fF && !$training_05_fF) { $errors[] = "What note-taker training information would be beneficial to help you as a Note-taker?"; }
		if($training_05_fF && ($training_05_other_fF=="" || !$training_05_other_fF) ) { $errors[] = "What note-taker training information would be beneficial to help you as a Note-taker? (other)"; $error_training_05_other_fF='1'; }
		if($contribution_fF=="" || !$contribution_fF) { $errors[] = "As a Note-taker, how do you feel you made a contribution to another student?"; $error_contribution_fF='1'; }
		if($benefits_fF=="" || !$benefits_fF) { $errors[] = "Please describe the benefits note-taking has had for you.  If none, please indicate"; $error_benefits_fF='1'; }
		if($mylearningspace_fF=="" || !$mylearningspace_fF) { $errors[] = "Do you have any feedback about signing up to be a note-taker and sharing notes on MyLearningSpace? If none, please indicate."; $error_mylearningspace_fF='1'; }
		if($improve_fF=="" || !$improve_fF) { $errors[] = "What can the Accessible Learning Centre do to improve the Note-taking Program?"; $error_improve_fF='1'; }
		//if(!$improve_fF) { $errors[] = ""; }
		if($again_fF=="") { $errors[] = "Would you be a Note-taker again?"; }
		if($again_fF=="0" && ($again_why_fF=="" || !$again_why_fF) ) { $errors[] = "Would you be a Note-taker again? (why No)"; $error_again_why_fF='1'; }
		
		if(count($errors)>0)
			{
			include ("_include_ntEvalNoteTakers.php");
			return;
			}
		else
			{ 
			function safe($data)
				{
				$data = trim($data);
				$data = addslashes($data);
				$data = htmlspecialchars($data);
				return $data;
				}
			/*
			function safe($value)
				{
				$value = trim($value);
				$value = stripslashes($value);
				return mysql_real_escape_string($value);
				} 
			*/
			$classes_fF = safe($classes_fF);
			$length_fF = safe($length_fF);
			$exchange_notes_04_other_fF = safe($exchange_notes_04_other_fF);
			$training_05_other_fF = safe($training_05_other_fF);
			$contribution_fF = safe($contribution_fF);
			$benefits_fF = safe($benefits_fF);
			$mylearningspace_fF = safe($mylearningspace_fF);
			$improve_fF = safe($improve_fF);
			$again_why_fF = safe($again_why_fF);
			$additional_comments_fF = safe($additional_comments_fF);
	
			//---generate submission ID for each dB submission
			//include ("/www/forms/accessible_learning/alc_student_applications/login/includes/_include_generate_submission_id.php");
			
			$date_fF = date("Y-m-d H:i:s");
			
			$db = "INSERT INTO a_ntEvalNoteTakers (entry_id,form_id,instance_id,user_id,date,length,exchange_notes_01,exchange_notes_02,exchange_notes_03,exchange_notes_04,exchange_notes_04_other,interaction_01,interaction_02,interaction_03,interaction_04,interaction_05,training_01,training_02,training_03,training_04,training_05,training_05_other,contribution,benefits,mylearningspace,improve,again,again_why,additional_comments)
						VALUES (NULL,'$form_id_fF','$instance_id_fdB','$user_id_fdB','$date_fF','$length_fF','$exchange_notes_01_fF','$exchange_notes_02_fF','$exchange_notes_03_fF','$exchange_notes_04_fF','$exchange_notes_04_other_fF','$interaction_01_fF','$interaction_02_fF','$interaction_03_fF','$interaction_04_fF','$interaction_05_fF','$training_01_fF','$training_02_fF','$training_03_fF','$training_04_fF','$training_05_fF','$training_05_other_fF','$contribution_fF','$benefits_fF','$mylearningspace_fF','$improve_fF','$again_fF','$again_why_fF','$additional_comments_fF')";
			$result_other = mysql_query($db) or die ("Error in query: $db. " .mysql_error());
			
			$action='goHome'; //---clear submit step so that if a refresh is performed no new project is inserted in the dB
			$submit_step='';
			echo "<script language=javascript>setTimeout(\"location.href='index.php?action=goHome'\",2000);</script>";
			echo "<STRONG>Success! Redirecting in 3 seconds...</STRONG><BR><BR><P>";
			//echo "<A HREF='$PHP_SELF?action=ntEvalNoteTakers'>Click here to place another submission</A>";
			//echo " | <A HREF='$PHP_SELF?action=goHome'>Click here to continue</A>";
			echo "<A HREF='$PHP_SELF?action=goHome'>Click here to continue</A>";
			}
		} 
	
	}//close the else at //B
	
mysql_close($dbcnx);
?>
