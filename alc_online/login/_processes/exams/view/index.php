<?PHP
error_reporting(E_ALL);	
//$today_date = date("Y-m-d H:i:s");
$today_date = date("Y-m-d");
$today_date_verbose = date('l, F j, Y (g:i:s a T)', strtotime($today_date)); //Monday, January 1, 2000 (12:59:59 am EST)
//echo "[$today_date]<BR>";

$table = "timeframes";

/*
$result_form_type = mysql_query("SELECT * FROM " . $table . " WHERE timeframe_start <='$today_date' AND timeframe_end >='$today_date' AND application_type='Midterm_Registration'");
//$result = mysql_query("SELECT * FROM timeframes WHERE timeframe_start <='$today_date' AND timeframe_end >='$today_date'	AND application_type='Midterm_Registration'");
$retrieved_value = mysql_fetch_array($result_form_type);

$timeframe_unique_id_fdB = $retrieved_value['timeframe_unique_id'];
$application_type_fdB = $retrieved_value['application_type'];
$timeframe_id_fdB = $retrieved_value['timeframe_id'];
$timeframe_name_fdB = $retrieved_value['timeframe_name'];
$timeframe_start_fdB = $retrieved_value['timeframe_start'];
	//$timeframe_start_fdB_verbose = date('l, F j, Y (g:i:s a T)', strtotime($retrieved_value['timeframe_start']));
	$timeframe_start_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value['timeframe_start']));
$timeframe_end_fdB = $retrieved_value['timeframe_end'];
	$timeframe_end_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value['timeframe_end']));

//echo "[$timeframe_unique_id_fdB|$application_type_fdB|$timeframe_id_fdB|$timeframe_name_fdB|$timeframe_start_fdB|$timeframe_end_fdB]<BR>";
//echo "generated_user_id:[$generated_user_id] | user_id_fdB:[$user_id_fdB]<BR>";
*/
?>


<TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="1">
<TR>
  <TD WIDTH="1%" ALIGN="LEFT" VALIGN="TOP" SCOPE="row"><?php echo "$image_25"; ?></TD>
  <TD WIDTH="99%" ALIGN="LEFT" VALIGN="TOP"><TABLE WIDTH="100%"  BORDER="0" CELLSPACING="3" CELLPADDING="0">
      <TR>
        <TD width="99%"> <h1><?php echo "View My Bookings $session_name_for_include_fdB";  if($subActionYear) { echo "($subActionYear)"; } ?></h1></TD>
      </TR>
      <TR>
        <TD BGCOLOR="#CCCCCC"><STRONG><FONT COLOR="#CC0000"><?php echo "$image_02"; ?></FONT></STRONG></TD>
      </TR>
      <TR>
        <TD><table width="100%" border="0" cellpadding="1">
          <tr>
            <td width="1%" align="left" valign="top"><?php echo "$image_08"; ?></td>
            <td width="99%" align="left" valign="top"><?php echo "Below are the registrations we have received for your exam(s)."; ?></td>
          </tr>
          <tr>
            <td align="left" valign="top"><?php echo "$image_08"; ?></td>
            <td align="left" valign="top"><?php echo "Please do not use the cancellation form if you have made an error on your form. When you submit the cancellation form you are cancelling your exam. If you have made an error on your form, please e-mail us at ";
			
			         
            if ($_SESSION[campus_fF] == 'brantford'){
                echo "<a href='mailto:lbalexams@wlu.ca'>lbalexams@wlu.ca</a>";
            }
            else{
                echo "<a href='mailto:alexams@wlu.ca'>alexams@wlu.ca</a>";
            }			
			?>
            
            </td>
          </tr>
          
		  <?PHP 
		  if($timeframe_unique_id_fdB) { ?>
        <?PHP } ?>

        </table></TD>
      </TR>
      <TR>
        <TD BGCOLOR="#CCCCCC"><STRONG><FONT COLOR="#CC0000"><?php echo "$image_02"; ?></FONT></STRONG></TD>
      </TR>
      <TR>
        <TD>&nbsp;</TD>
    </TR>
      <TR>
        <TD>&nbsp;</TD>
      </TR>
      <TR>
        <TD>&nbsp;</TD>
      </TR>
  </TABLE></TD>
</TR>
</TABLE>

<?php

$link_to_redirect_after_submit = "/alconline/index.php?action=viewExams";

//include ("/www/forms/accessible_learning/alc_online/login/includes/_include_clean_fields.php");

//echo "Submit: [$Submit]<BR>";

if (!$Submit) 
	{
	include("_inc_index.php");
	}

//if($Submit=="Cancel Registration") 
if($Submit=="Cancel") 
	{
	$rid_from_post = $_POST['rid'];
	$tid_from_post = $_POST['tid'];
	//$cid_from_post = $_POST['cid'];
	$checkbox_rid_from_post = $_POST['checkbox_rid'];
	//echo "[$rid_from_post|$tid_from_post|$cid_from_post|$checkbox_rid_from_post|]<BR>";
	//echo "[$rid_from_post|$cid_from_post|$checkbox_rid_from_post]<BR>";
	//echo "[ $cancel_name| $cancelReason[0] ]<BR>";
	
	//only one cancelReason array value is sent when the "Cancel" button is pressed since only one value exists in the form, thus element 0 
	//store that value into another variable for convenience
	$cancel_reason_array_value_fF = $cancelReason[0]; 
	//call include, then clean variable
	include ("/www/forms/accessible_learning/alc_online/login/includes/_include_clean_fields.php");
	$cancel_reason_array_value_fF = clean_input($cancel_reason_array_value_fF);
	
	if($rid_from_post != $checkbox_rid_from_post) //to make sure the checkbox is for the right registration when and the cancellation button is clicked
		{
		include("_inc_error.php");
		include("_inc_index.php");
		}
	elseif(!$cancel_reason_array_value_fF || $cancel_reason_array_value_fF=="") //to make sure comment has been inserted in the proper text area (and no for another registration)
	//elseif($cancel_ID[1] != $rid_from_post) //to make sure comment has been inserted in the proper text area (and no for another registration)
		{
		include("_inc_error_cancellation.php");
		include("_inc_index.php");
		}
	else
		{
		//check if course is active
		$check_active_status = mysql_query("SELECT active FROM exam_registrations WHERE registration_id='$rid_from_post'");
		$check_active_status_value = mysql_fetch_array($check_active_status);
		$active_check_fdB = $check_active_status_value['active'];

		if($active_check_fdB=="0")
			{
			echo "Course already deactive.<BR><BR>";
			}
		
		if($active_check_fdB=="1")
			{
			include("login/includes/_inc_generate_ID.php");
			include("_inc/_get_ip_host.php");
			  
			$cancellation_date = date("Y-m-d H:i:s");
			  
			$sql_cancel = "UPDATE exam_registrations SET active='0',cancel_user_id='$user_id_fdB',cancel_id='$generated_cancelation_id',cancel_date='$cancellation_date',cancel_reason='$cancel_reason_array_value_fF',cancel_ip='$ip',cancel_host='$host' WHERE registration_id='$rid_from_post' AND active='1' AND user_id='$user_id_fdB'";
			$result_cancelRegistration = mysql_query($sql_cancel) or die ("Error in query: $sql_cancel. " .mysql_error());
			
			//--- obtain timeframe details to include them in the e-mail 
			$result_get_for_email = mysql_query("SELECT * FROM " . $table . " WHERE timeframe_unique_id='$tid_from_post'");
			$retrieved_value_x = mysql_fetch_array($result_get_for_email);
			$timeframe_unique_id_fdB = $retrieved_value_x['timeframe_unique_id'];
			$application_type_fdB = $retrieved_value_x['application_type'];
				if($application_type_fdB=="Midterm_Registration") { $application_type = "Midterm Exam"; }
				if($application_type_fdB=="Final_Registration") { $application_type = "Final Exam"; }
				if($application_type_fdB=="MBA_Registration") { $application_type = "MBA Exam"; }
			$timeframe_name_fdB = $retrieved_value_x['timeframe_name'];
			$timeframe_start_fdB = $retrieved_value_x['timeframe_start'];
			$timeframe_start_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_x['timeframe_start']));
			$timeframe_end_fdB = $retrieved_value_x['timeframe_end'];
			$timeframe_end_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_x['timeframe_end']));

			//get student ID
			$pull_all_student_info = mysql_query("SELECT * FROM a_user LEFT JOIN a_user_laurier_id ON a_user.user_id=a_user_laurier_id.user_id WHERE a_user.user_id='$user_id_fdB'", $dbcnx);
			$info = mysql_fetch_array($pull_all_student_info);
			$user_laurier_id_fdB = $info['user_laurier_id'];
			$user_novell_id_fdB = $info['user_novell_id'];
				$email_array = array($user_novell_id_fdB,'@mylaurier.ca');
				$user_email_from_array = implode("", $email_array);
			$user_first_name_fdB = $info['user_first_name'];
			$user_last_name_fdB = $info['user_last_name'];
			$user_email_fdB = $info['user_email'];

			//get date student requires the exam 
			$search_dB = mysql_query("SELECT * FROM exam_registrations WHERE user_id='$user_id_fdB' AND registration_id='$rid_from_post'");	
			$myrow = mysql_fetch_array($search_dB);
			
			$date_originally_requested_fdB = $myrow["date"];
			$date_originally_requested_verbose_fdB = date('l, F j, Y', strtotime($myrow['date']));
			
			$cancel_date_fdB = $myrow["cancel_date"];
			$cancel_date_verbose_fdB = date('l, F j, Y', strtotime($myrow['cancel_date']));
			
			$cancel_reason_fdB = $myrow["cancel_reason"];
			
			$registration_id_fdB = $myrow["registration_id"];
		
			$phone_fdB = $myrow['phone'];
			$instructor_fdB = $myrow['instructor'];
			$course_fdB = $myrow['course'];
			$section_fdB = $myrow['section'];
			$term_fdB = $myrow['term'];
			$date_required_fdB_verbose = date('l, F j, Y', strtotime($myrow['date_required']));
			$start_time_fdB = $myrow['start_time'];
			$exam_length_fdB = $myrow['exam_length'];
			$class_location_fdB = $myrow['class_location'];
			$deferred_fdB = $myrow['deferred'];
			$program_fdB = $myrow['program'];
			$writing_location_fdB = $myrow['writing_location'];
			$approved_accomodations_fdB = $myrow['approved_accomodations'];
				$approved_accomodations_array = explode("-", $approved_accomodations_fdB);
				$approved_accomodations_joined_array = implode(" ", $approved_accomodations_array);
			
			if($application_type_fdB=="Midterm_Registration")
				{ $exam_type = "Midterm"; }
			if($application_type_fdB=="Final_Registration")
				{ $exam_type = "Final"; }
			if($application_type_fdB=="MBA_Registration")
				{ $exam_type = "MBA"; }

			//--- confirmation e-mail send to user's e-mail
			$to_student = $user_email_from_array;
			
			if ($_SESSION[campus_fF] == 'brantford'){
                $from_student = "Accessible Learning Services <lbalexams@wlu.ca>";
            }
            else{
                $from_student = "Accessible Learning Services <alexams@wlu.ca>";
            }	
			
			$subject_student = "Laurier ALC: $exam_type Exam Cancellation Confirmation";
			$headers_student = "From: ".$from_student."\r\n";
			//$headers_student .= "Cc: akovacsik@wlu.ca,alexams@wlu.ca" . "\r\n";
			$headers_student .= "Reply-To: ".$from_student."\r\n";
			$headers_student .= "Return-Path: ".$from_student."\r\n";
			$headers_student .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
			$message_student = "Thank you $first_name_fdB $last_name_fdB!<P>	
			Your $exam_type Exam Cancellation was submitted and your request has been successfully received.<P>";
			$message_student .= "
			<B>Date Originally Requested:</B> $date_originally_requested_verbose_fdB ($date_originally_requested_fdB)<BR>
			<B>Date Cancelled:</B> $cancel_date_verbose_fdB ($cancel_date_fdB)<BR>
			<B>Cancellation Reason:</B> $cancel_reason_fdB<BR>
			------------------------------------------------------------------<BR>
			<B>Name:</B> $first_name_fdB $last_name_fdB<BR>
			<B>MyLaurier User:</B> $user_novell_id_fdB<BR>
			<B>Laurier ID:</B> $user_laurier_id_fdB<BR>
			<B>Laurier E-mail:</B> $user_email_fdB<P>
			<B>Submission Period:</B> $timeframe_name_fdB ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)<P>
			<B>Phone</B> $phone_fdB<BR>
			<B>Instructor</B> $instructor_fdB<BR>
			<B>Course</B> $course_fdB<BR>
			<B>Section</B> $section_fdB<BR>
			<B>Term</B> $term_fdB<BR>";
			if($application_type_fdB=="MBA_Registration") 
				{ 
				$message_student .=  "
				<B>Program</B> $program_fdB<BR>
				<B>Writing Location</B> $writing_location_fdB<BR>";
				}
			if($application_type_fdB=="Midterm_Registration") 
				{ 
				$message_student .=  "
				<B>Exam Date</B> $date_required_fdB_verbose<BR>
				<B>Start Time</B> $start_time_fdB<BR>
				<B>Exam Length</B> $exam_length_fdB<BR>
				<B>Class Location</B> $class_location_fdB<BR>";
				}
			if($application_type_fdB=="Final_Registration") 
				{ 
				$message_student .=  " 
				<B>Deferred Exam?</B> $deferred_fdB<BR>";
				}
			$message_student .= "
			<B>Approved Accommodations</B> $approved_accomodations_joined_array<BR>";
			$message_student .= "<P>-------------------------------------------------------------------------------------";
			$message_student .= "<P><U>This is an automated reminder. Please do <B>NOT</B> reply to this e-mail.</U>";
			$message_student .= "<P>Cancellation ID: $generated_cancelation_id<BR>";
			//mail($to_student,$subject_student,$message_student,$headers_student);
			require_once('wluMimeMail.php');
			//THE FUNCTION WHICH ACCEPTS: function wluMimeMail($from,$to,$subject,$txtmessage,$htmlmessage)
			$mailSent_student = wluMimeMail($from_student,$to_student,$subject_student,"",$message_student);        

			// ------------------------------------------------------------------------------------------------------------------
			// --- confirmation e-mail sent to admin
			$this_server =  $_SERVER["SERVER_NAME"];
			if($this_server=="infowebtest.wlu.ca") { $to_office = "iadebowale@wlu.ca"; }
				else { $to_office = "alexams@wlu.ca"; 
				
					if ($_SESSION[campus_fF] == 'brantford'){
                		$to_office = "lbalexams@wlu.ca";
            		}
            		else{
                		$to_office = "alexams@wlu.ca";
            		}	
				}
			$headers_office = "From: Automated $exam_type Exam Cancellation Notice <alexams@wlu.ca>\r\n";
			$headers_office .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
			$subject_office = "ALC: $exam_type Exam Cancellation - $cancel_date_fdB - $timeframe_name_fdB ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)";
			$message_office = "
			New $exam_type Exam Cancellation submitted!<P>
			<B>Date Originally Requested:</B> $date_originally_requested_verbose_fdB ($date_originally_requested_fdB)<BR>
			<B>Date Cancelled:</B> $cancel_date_verbose_fdB ($cancel_date_fdB)<BR>
			<B>Cancellation Reason:</B> $cancel_reason_fdB<BR>
			------------------------------------------------------------------<BR>
			<B>Name:</B> $first_name_fdB $last_name_fdB<BR>
			<B>MyLaurier User:</B> $user_novell_id_fdB<BR>
			<B>Laurier ID:</B> $user_laurier_id_fdB<BR>
			<B>Laurier E-mail:</B> $user_email_fdB<P>
			<B>Submission Period:</B> $timeframe_name_fdB ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)<P>
			<B>Phone</B> $phone_fdB<BR>
			<B>Instructor</B> $instructor_fdB<BR>
			<B>Course</B> $course_fdB<BR>
			<B>Section</B> $section_fdB<BR>
			<B>Term</B> $term_fdB<BR>";
			if($application_type_fdB=="MBA_Registration") 
				{ 
				$message_office .=  "
				<B>Program</B> $program_fdB<BR>
				<B>Writing Location</B> $writing_location_fdB<BR>";
				}
			if($application_type_fdB=="Midterm_Registration") 
				{ 
				$message_office .=  "
				<B>Exam Date</B> $date_required_fdB_verbose<BR>
				<B>Start Time</B> $start_time_fdB<BR>
				<B>Exam Length</B> $exam_length_fdB<BR>
				<B>Class Location</B> $class_location_fdB<BR>";
				}
			if($application_type_fdB=="Final_Registration") 
				{ 
				$message_office .=  " 
				<B>Deferred Exam?</B> $deferred_fdB<BR>";
				}
			$message_office .= "
			<B>Approved Accommodations</B> $approved_accomodations_joined_array<BR>";
			$message_office .= "<P>-------------------------------------------------------------------------------------";
			$message_office .= "<P><U>This is an automated reminder. Please do <B>NOT</B> reply to this e-mail.</U>";
			$message_office .= "<P>Cancellation ID: $generated_cancelation_id<BR>";
			mail($to_office,$subject_office,$message_office,$headers_office);
				
			include ("/www/forms/accessible_learning/alc_online/login/includes/_inc_thankyou_exam_cancellation_after_submit.php");

			return;
			}
		}
		
	}
?>
