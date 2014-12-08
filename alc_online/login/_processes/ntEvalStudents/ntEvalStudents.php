<?php
error_reporting(E_ALL);
$bullet_image = "<IMG SRC='_images/tab_right.png' WIDTH='8' HEIGHT='12' ALT='Error bullet image'>";

$today_date = date("Y-m-d H:i:s");
$today_date_verbose = date('l, F j, Y (g:i:s a T)', strtotime($today_date)); //Monday, January 1, 2000 (12:59:59 am EST)

$form_id_fF = "2"; //all Students Evaluation are identified by "2"

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

$result_2 = mysql_query("SELECT date FROM a_ntEvalStudents WHERE user_id='$user_id_fdB' AND instance_id='$instance_id_fdB'");
$retrieved_value_2 = mysql_fetch_array($result_2);
$date_fdB = $retrieved_value_2['date'];
$date_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_2['date_fdB'])); //Monday, January 1, 2000

if($iam_fdB=="1") 
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
		include ("_include_ntEvalStudents.php");
		}
	return;
	}
	
if(!$date_fdB=="")//A - if submited to 
	{
	echo "You have already submitted this evaluation on $date_fdB_verbose.<P>";
	echo "One submission per student per term.<P>";
	if($ALC_username=="akovacsik" || $ALC_username=="jeulenberg")
		{
		echo "<BR><BR><B>NOTE: below the form visible to Jessica only</B><BR><BR>";
		include ("_include_ntEvalStudents.php");
		}
	}
else //B
	{
	if(!$submit_step) 
		{
		include ("_include_ntEvalStudents.php");
		}	
	
	if($submit_step=='Submit Information') 
		{
		function cleanInfo($data)
			{
			$data = trim($data);
			$data = stripslashes($data);
			//$data = addslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
		
			$c1_notetakerName_fF = cleanInfo($c1_notetakerName_fF);
			$c1_courseSection_fF = cleanInfo($c1_courseSection_fF);
			$c1_info_fF = cleanInfo($c1_info_fF);
			$c2_notetakerName_fF = cleanInfo($c2_notetakerName_fF);
			$c2_courseSection_fF = cleanInfo($c2_courseSection_fF);
			$c2_info_fF = cleanInfo($c2_info_fF);
			$c3_notetakerName_fF = cleanInfo($c3_notetakerName_fF);
			$c3_courseSection_fF = cleanInfo($c3_courseSection_fF);
			$c3_info_fF = cleanInfo($c3_info_fF);
			$c4_notetakerName_fF = cleanInfo($c4_notetakerName_fF);
			$c4_courseSection_fF = cleanInfo($c4_courseSection_fF);
			$c4_info_fF = cleanInfo($c4_info_fF);
			$c5_notetakerName_fF = cleanInfo($c5_notetakerName_fF);
			$c5_courseSection_fF = cleanInfo($c5_courseSection_fF);
			$c5_info_fF = cleanInfo($c5_info_fF);
			$c6_notetakerName_fF = cleanInfo($c6_notetakerName_fF);
			$c6_courseSection_fF = cleanInfo($c6_courseSection_fF);
			$c6_info_fF = cleanInfo($c6_info_fF);
			$mylearningspace_fF = cleanInfo($mylearningspace_fF);
			$additional_comments_fF = cleanInfo($additional_comments_fF);
	
		$errors = array();
		//if($c1_notetakerName_fF=="" || !$c1_notetakerName_fF) { $errors[] = "Course 1: Note-taker name"; $error_c1_notetakerName_fF='1'; }
		if($c1_courseSection_fF=="" || !$c1_courseSection_fF) { $errors[] = "Course 1: Course # and section"; $error_c1_courseSection_fF='1'; }
		if(!$c1_01_fF || !$c1_02_fF || !$c1_03_fF || !$c1_04_fF || !$c1_05_fF || !$c1_06_fF) { $errors[] = "Course 1: Rate ALL notes you have received"; $error_c1_0106='1'; }
		if($c1_info_fF=="" || !$c1_info_fF) { $errors[] = "Course 1: Expand on your ratings"; $error_c1_info_fF='1'; }
		if(!$interaction_01_fF || !$interaction_02_fF || !$interaction_03_fF) { $errors[] = "Rate your interactions with the ALC office in all areas"; $error_interaction_fF='1'; }
		if($mylearningspace_fF=="" || !$mylearningspace_fF) { $errors[] = "Do you have any feedback about signing up to be a note-taker and sharing notes on MyLearningSpace? If none, please indicate."; $error_mylearningspace_fF='1'; }
		if(!$additional_comments_fF) { $errors[] = "Do you have any extra comments?"; $error_additional_comments_fF='1'; }
		if($shared_fF=="") { $errors[] = "Do you want this information to be shared with the note-taker?"; $error_shared_fF='1'; }
		
		if(count($errors)>0)
			{
			include ("_include_ntEvalStudents.php");
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
			$c1_notetakerName_fF = safe($c1_notetakerName_fF);
			$c1_courseSection_fF = safe($c1_courseSection_fF);
			$c1_info_fF = safe($c1_info_fF);
			$c2_notetakerName_fF = safe($c2_notetakerName_fF);
			$c2_courseSection_fF = safe($c2_courseSection_fF);
			$c2_info_fF = safe($c2_info_fF);
			$c3_notetakerName_fF = safe($c3_notetakerName_fF);
			$c3_courseSection_fF = safe($c3_courseSection_fF);
			$c3_info_fF = safe($c3_info_fF);
			$c4_notetakerName_fF = safe($c4_notetakerName_fF);
			$c4_courseSection_fF = safe($c4_courseSection_fF);
			$c4_info_fF = safe($c4_info_fF);
			$c5_notetakerName_fF = safe($c5_notetakerName_fF);
			$c5_courseSection_fF = safe($c5_courseSection_fF);
			$c5_info_fF = safe($c5_info_fF);
			$c6_notetakerName_fF = safe($c6_notetakerName_fF);
			$c6_courseSection_fF = safe($c6_courseSection_fF);
			$c6_info_fF = safe($c6_info_fF);
			$mylearningspace_fF = safe($mylearningspace_fF);
			$additional_comments_fF = safe($additional_comments_fF);

			//---generate submission ID for each dB submission
			//include ("/www/forms/accessible_learning/alc_student_applications/login/includes/_include_generate_submission_id.php");
			
			$date_fF = date("Y-m-d H:i:s");
			

			$db = "INSERT INTO a_ntEvalStudents (entry_id,form_id,instance_id,user_id,date,c1_courseSection,c1_01,c1_02,c1_03,c1_04,c1_05,c1_06,c1_info,c2_courseSection,c2_01,c2_02,c2_03,c2_04,c2_05,c2_06,c2_info,c3_courseSection,c3_01,c3_02,c3_03,c3_04,c3_05,c3_06,c3_info,c4_courseSection,c4_01,c4_02,c4_03,c4_04,c4_05,c4_06,c4_info,c5_courseSection,c5_01,c5_02,c5_03,c5_04,c5_05,c5_06,c5_info,c6_courseSection,c6_01,c6_02,c6_03,c6_04,c6_05,c6_06,c6_info,interaction_01,interaction_02,interaction_03,mylearningspace,additional_comments,shared)
						VALUES (NULL,'$form_id_fF','$instance_id_fdB','$user_id_fdB','$date_fF','$c1_courseSection_fF','$c1_01_fF','$c1_02_fF','$c1_03_fF','$c1_04_fF','$c1_05_fF','$c1_06_fF','$c1_info_fF','$c2_courseSection_fF','$c2_01_fF','$c2_02_fF','$c2_03_fF','$c2_04_fF','$c2_05_fF','$c2_06_fF','$c2_info_fF','$c3_courseSection_fF','$c3_01_fF','$c3_02_fF','$c3_03_fF','$c3_04_fF','$c3_05_fF','$c3_06_fF','$c3_info_fF','$c4_courseSection_fF','$c4_01_fF','$c4_02_fF','$c4_03_fF','$c4_04_fF','$c4_05_fF','$c4_06_fF','$c4_info_fF','$c5_courseSection_fF','$c5_01_fF','$c5_02_fF','$c5_03_fF','$c5_04_fF','$c5_05_fF','$c5_06_fF','$c5_info_fF','$c6_courseSection_fF','$c6_01_fF','$c6_02_fF','$c6_03_fF','$c6_04_fF','$c6_05_fF','$c6_06_fF','$c6_info_fF','$interaction_01_fF','$interaction_02_fF','$interaction_03_fF','$mylearningspace_fF','$additional_comments_fF','$shared_fF')";
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
