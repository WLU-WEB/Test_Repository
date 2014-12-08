<?PHP
//Exam Booking
if($action=="manageExamTimeframes")
	{ $title = "Midterm, Final, SBE Exams: Manage Timeframes"; }
	
include ("/www/forms/accessible_learning/alc_online/login/includes/_include_clean_fields.php");
?>

<?php include ("_includes/_str_replace.php"); ?>
<table width="100%"  border="0" cellspacing="0" cellpadding="1">
	    <tr>
	      <td width="1%" align="left" valign="top" scope="row"><?php echo "$image_07_large"; ?></td>
	      <td width="99%" align="left" valign="top"><table width="100%"  border="0" cellspacing="3" cellpadding="0">
	        <tr>
	          <td width="99%"><h1><?php echo "$title"; ?></h1></td>
            </tr>
	        <tr>
	          <td bgcolor="#CCCCCC"><strong><font color="#CC0000"><?php echo "$image_02"; ?></font></strong></td>
            </tr>
	        <tr>
	          <td><table width="100%" border="0" cellpadding="1">
	            <tr>
	              <td width="1%" align="left" valign="top"><?php echo "$image_08"; ?></td>
	              <td width="99%" align="left" valign="top"><?php echo "Please make a selection."; ?></td>
                </tr>
	            </table></td>
            </tr>
	        <?PHP 
     /*
      if($sid=="309897214")
        {
        echo "<TR>";
        echo "<TD WIDTH='99%'>$image_08 The Professional Communications certificate program consists of a series of workshops designed to enhance communication skills. Participants can choose among a variety of workshops and follow-up sessions to customize their certificate. The minimum hours of training required to complete the certificate is 18 (must complete 4 hours through attending workshop follow-up sessions).</TD>";
        echo "</TR>";
        }	
      */
      ?>
	        <tr>
	          <td bgcolor="#CCCCCC"><strong><font color="#CC0000"><?php echo "$image_02"; ?></font></strong></td>
            </tr>
	        <tr>
	          <td>&nbsp;</td>
            </tr>
	        </table></td>
        </tr>
</table>
<table width="100%" cellpadding="2" cellspacing="0">
<tr>
	      <td width="1%" align="left" valign="middle"><?php //$iw="64"; $ih="64"; print "$image_00"; ?>
	        <img src='_images/1x1_transparent.gif' alt='Transparent Place Holder' width='64' height='1' /></td>
	      <td width="99%" align="left" valign="top">&nbsp;</td>
  </tr>
	    <tr>
	      <td align="left" valign="top">&nbsp;</td>
	      <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="7">
	        <tr align="left" valign="top">
	          <td align="right"><a href="<?PHP $PHP_SELF?>?action=manageExamTimeframes&subAction=addNewTimeframes">Add New Timeframe</a> | <a href="<?PHP $PHP_SELF?>?action=manageExamTimeframes&subAction=viewExistingTimeframes">View  Timeframes</a></td>
            </tr>
	        <tr align="left" valign="top">
	          <td><?php 
				  error_reporting(E_ALL);
				  $bullet_image = "<IMG SRC='_images/tab_right.png' WIDTH='8' HEIGHT='12' ALT='Error bullet image'>";

				  if($action=="manageExamTimeframes" && !$subAction) 
					  { 
					  include ("inc/_include_TimeFramesInstructions.php"); 
					 // return;
					  } 

				  if($subAction=="addNewTimeframes" && $submit_step!="Insert Timeframe") 
					  { 
					  include ("inc/_include_addNewTimeframes_table.php"); 
					 // return;
					  } 
				  
				  if($subAction=="viewExistingTimeframes" && $submit_step!="Delete Timeframe") 
					  { 
					  include ("inc/_include_viewExistingTimeframes.php"); 
					  //return;
					  } 
				  
				  if($submit_step=="Insert Timeframe") 
					  {
					  $errors = array();
					  if(!$application_type_fF || $application_type_fF=="") { $errors[] = ""; $error_application_type_fF='1'; }
					  if($timeframe_name_fF=="") { $errors[] = ""; $error_timeframe_name_fF='1'; }
					  if($year_start=="") { $errors[] = ""; $error_year_start='1'; }
					  if($month_start=="") { $errors[] = ""; $error_month_start='1'; }
					  if($day_start=="") { $errors[] = ""; $error_day_start='1'; }
					  if($year_end=="") { $errors[] = ""; $error_year_end='1'; }
					  if($month_end=="") { $errors[] = ""; $error_month_end='1'; }
					  if($day_end=="") { $errors[] = ""; $error_day_end='1'; }
					  
					  if(count($errors)>0)
						  {
						  include ("inc/_include_addNewTimeframes_table.php");
						  //return;
						  }
					  else
						  { 
						  include ("login/includes/_include_generate_submission_id.php"); //---generate submission ID for each dB submission
						  
						  $date_added_fF = date("Y-m-d H:i:s");
						  
						  $timeframe_start_array = array(1 => $year_start,$month_start,$day_start);
						  $timeframe_start_fF = join("-", $timeframe_start_array);

						  $timeframe_end_array = array(1 => $year_end,$month_end,$day_end);
						  $timeframe_end_fF = join("-", $timeframe_end_array);

						  $timeframe_id_generated_array = array(1 => $year_start,$month_start,$day_start,$year_end,$month_end,$day_end);
						  $timeframe_id_generated = join("", $timeframe_id_generated_array);
						  //echo "timeframe_id_generated: [$timeframe_id_generated]<BR>";
						  
						  //set the database connection variables
						//require_once("mysqlArray.php");
						//$connection_name = "AcademicLearningServices";
						//$dbcnx = @mysqlLogin($connection_name);	

					  $sql_process = "INSERT INTO timeframes (id,timeframe_unique_id,application_type,timeframe_name,timeframe_start,timeframe_end,added_by_user_name,date_added)
									  VALUES (NULL,'$generated_submission_id','$application_type_fF','$timeframe_name_fF','$timeframe_start_fF','$timeframe_end_fF','$ALC_username','$date_added_fF')";
						  $result_createNewProject = mysql_query($sql_process) or die ("Error in query: $sql_process. " .mysql_error());
						 // mysql_close($dbcnx);	
							  
						  echo "<script language=javascript>setTimeout(\"location.href='index.php?action=manageExamTimeframes&subAction=addNewTimeframes'\",3000);</script>";
						  echo "Success! <A HREF='$PHP_SELF?action=manageExamTimeframes&subAction=addNewTimeframes'>Click here to add another timeframe.</A><P>";
						  echo "Redirecting in 3 seconds...<P>";
						  }
					  }
				  
				  if($submit_step=="Delete Timeframe") 
					  {
					  $errors = array();
					  if($start != $timeframe_confirm_delete) { $errors[] = "$bullet_image Confirm Deletion"; $error_timeframe_confirm_delete_fF='1'; }

					  if(count($errors)>0)
						  {
						  echo "<script language=javascript>setTimeout(\"location.href='index.php?action=manageExamTimeframes&subAction=viewExistingTimeframes'\",3000);</script>";
						  echo "Ensure you check the corresponding checkbox before deletion.<P>"; 
						  echo "<A HREF='$PHP_SELF?action=manageExamTimeframes&subAction=addNewTimeframes&subAction=viewExistingTimeframes'>Click here to return back.</A><P>";
						  echo "Redirecting in 3 seconds...<P>";
						  //return;
						  }
					  else
						  { 
						  //set the database connection variables
						//require_once("mysqlArray.php");
						//$connection_name = "AcademicLearningServices";
						//$dbcnx = @mysqlLogin($connection_name);	

						  $sql_deleteThis = "DELETE FROM timeframes WHERE timeframe_start='$start' AND timeframe_end='$stop'";
						  $result_deleteThis = mysql_query($sql_deleteThis) or die ("Error in query: $sql_deleteThis. " .mysql_error());
						 // mysql_close($dbcnx);	
						  $submit_step='';
						  
						  echo "<script language=javascript>setTimeout(\"location.href='index.php?action=manageExamTimeframes&subAction=viewExistingTimeframes'\",3000);</script>";
						  echo "Successfully deleted timeframe.<P>"; 
						  echo "<A HREF='$PHP_SELF?action=manageExamTimeframes&subAction=addNewTimeframes&subAction=viewExistingTimeframes'>Click here to delete another timeframe.</A><P>";
						  echo "Redirecting in 3 seconds...<P>";
						  }
					  }
						 
					  ?>
              </td>
            </tr>
	        <tr align="left" valign="top">
	          <td>&nbsp;</td>
            </tr>
          </table></td>
        </tr>
</table>
