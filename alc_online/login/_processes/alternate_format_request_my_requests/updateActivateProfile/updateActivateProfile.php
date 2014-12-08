<?php
error_reporting(E_ALL);
$bullet_image = "<IMG SRC='_images/tab_right.png' WIDTH='8' HEIGHT='12' ALT='Error bullet image'>";

//---set the database connection variables
require_once("mysqlArray.php");
$connection_name = "AcademicLearningServices";
$dbcnx = @mysqlLogin($connection_name);	

$result = mysql_query("SELECT * FROM a_user WHERE user_novell_id='$ALC_username'");
$retrieved_value = mysql_fetch_array($result);

$user_id_fdB = $retrieved_value['user_id'];
$status_fdB = $retrieved_value['user_employee_group'];
$first_name_fdB = $retrieved_value['user_first_name'];
$last_name_fdB = $retrieved_value['user_last_name'];
//$user_laurier_id_fdB = $retrieved_value['user_laurier_id'];
$department_fdB = $retrieved_value['user_department'];
$extension_fdB = $retrieved_value['user_extension'];
$user_name_fdB = $retrieved_value['user_novell_id'];
$email_fdB = $retrieved_value['user_email'];
$iam_fdB = $retrieved_value['user_view_rights'];
$user_active_fdB = $retrieved_value['user_active'];

//search for Laurier ID 
$result2 = mysql_query("SELECT user_laurier_id FROM a_user_laurier_id WHERE user_id='$user_id_fdB'");
$retrieved_value2 = mysql_fetch_array($result2);
$user_laurier_id_fdB = $retrieved_value2['user_laurier_id'];

//echo "[$user_id_fdB]<BR>";
//echo "[$submit_step]<BR>";
//echo "[$user_active_fdB]<BR>";

//search for Laurier ID 
//$result2 = mysql_query("SELECT user_laurier_id FROM laurier_id WHERE user_id='$user_id_fdB'", $db);
//$retrieved_value2 = mysql_fetch_array($result2);
//$user_laurier_id_fdB = $retrieved_value2['user_laurier_id'];

if(!$submit_step) 
	{
	include ("_include_updateActivateProfile.php");
	}	

if($submit_step=='Submit Information') 
	{
	include ("includes/_include_clean_fields.php"); //clean form fields to show up without / in fields and proper format
	$errors = array();
	if(!$iam_fF) { $errors[] = ""; $error_iam_fF='1'; }
	if(!$agreement_correct_fF) { $errors[] = ""; $error_agreement_correct_fF='1'; }

	if(count($errors)>0)
		{
		include ("_include_updateActivateProfile.php");
		return;
		}
	else
		{ 
		include ("includes/_include_clean_fields_before_dB_insertion.php"); //add slashes before dB insertion
		
		$date_submission = date("Y-m-d");
		$time_submission = date("H:i:m");
		//echo "$date_submission | $time_submission<P>";
		$thearray = array($date_submission,$time_submission);
		$date_time_submitted_joined_fF = join(" ", $thearray);
		//echo "$date_time_submitted_joined_fF<P>";

		$array = array($year_fF,$month_fF,$day_fF);
		$commencing_date_joined_fF = join("-", $array);

		if($user_active_fdB=="0")
			{
			//activate account
			$query = "UPDATE a_user SET user_active='1' WHERE user_novell_id='$ALC_username'";
			$result = mysql_query($query) or die ("Error in query: $query. " .mysql_error());
			}
		
		
		$query_3 = "UPDATE a_user SET user_view_rights='$iam_fF' WHERE user_novell_id='$ALC_username'";
		$result = mysql_query($query_3) or die ("Error in query: $query_3. " .mysql_error());
		
		$action='goHome'; //---clear submit step so that if a refresh is performed no new project is inserted in the dB
		$submit_step='';
		echo "<script language=javascript>setTimeout(\"location.href='index.php?action=goHome'\",3000);</script>";
		echo "<STRONG>Success! Redirecting in 3 seconds...</STRONG><BR><BR><P>";
		//echo "<A HREF='$PHP_SELF?action=addProgram'>Click here to place another submission</A>";
		echo "<A HREF='$PHP_SELF?action=goHome'>Click here to continue</A>";
		}
	} 
	
mysql_close($dbcnx);	
?>
