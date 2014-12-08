<?PHP
error_reporting(E_ALL);	
//$today_date = date("Y-m-d H:i:s");
$today_date = date("Y-m-d");
$today_date_verbose = date('l, F j, Y (g:i:s a T)', strtotime($today_date)); //Monday, January 1, 2000 (12:59:59 am EST)
//echo "[$today_date]<BR>";

$table = "timeframes";

$campus_fF = $_SESSION['campus_fF'];

$result_form_type = mysql_query("SELECT * FROM " . $table . " WHERE timeframe_start <='$today_date' AND timeframe_end >='$today_date' AND application_type='MBA_Registration'");
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

include ("/www/forms/accessible_learning/alc_online/login/_processes/exams/_inc_index_introduction.php");

$link_to_redirect_after_submit = "/alconline/index.php?action=mbaExams";

include ("/www/forms/accessible_learning/alc_online/login/includes/_include_clean_fields.php");

if (!$submit) 
	{
	//---check to see if available time exists
	if(!$timeframe_unique_id_fdB)
		{
		//echo "[$timeframe_unique_id_fdB]";
		$result_3 = mysql_query("SELECT * FROM " . $table . " WHERE timeframe_start >'$today_date' AND application_type='MBA_Registration'");
		$retrieved_value_3 = mysql_fetch_array($result_3);
		$timeframe_unique_id_next_fdB = $retrieved_value_3['timeframe_unique_id'];
		$timeframe_start_fdB = $retrieved_value_3['timeframe_start'];
		$timeframe_start_next_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_3['timeframe_start']));
		$timeframe_end_fdB = $retrieved_value_3['timeframe_end'];
		$timeframe_end_next_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_3['timeframe_end']));
		//echo "[$timeframe_start_fdB|$timeframe_end_fdB]";
		include ("/www/forms/accessible_learning/alc_online/login/_processes/exams/_inc_registration_closed.php");
		}
	else
		{	
		include ("_inc_generate_request_id.php");
		include ("_inc_index.php");
		}
	//mysql_close($dbcnx);
	}

if($submit=="Continue") 
	{
	$errors = array();
	if($phone_fF=="" || !$phone_fF) { $errors[] = ""; $error_phone_fF='1'; }
	if($instructor_fF=="" || !$instructor_fF) { $errors[] = ""; $error_instructor_fF='1'; }
	if($course_fF=="" || !$course_fF) { $errors[] = ""; $error_course_fF='1'; }
	if($section_fF=="" || !$section_fF) { $errors[] = ""; $error_section_fF='1'; }
	if($deferred_fF=="" || !$deferred_fF) { $errors[] = ""; $error_deferred_fF='1'; }
	if($term_fF=="" || !$term_fF) { $errors[] = ""; $error_term_fF='1'; }
	if($program_fF=="" || !$program_fF) { $errors[] = ""; $error_program_fF='1'; }
	if($writing_location_fF=="" || !$writing_location_fF) { $errors[] = ""; $error_writing_location_fF='1'; }

	if($month_start=="" || !$month_start) { $errors[] = ""; $error_month_start='1'; }
	if($day_start=="" || !$day_start) { $errors[] = ""; $error_day_start='1'; }
	if($year_start=="" || !$year_start) { $errors[] = ""; $error_year_start='1'; }
	
	if($hour_fF=="" || !$hour_fF) { $errors[] = ""; $error_hour_fF='1'; }
	if($minute_fF=="" || !$minute_fF) { $errors[] = ""; $error_minute_fF='1'; }
	if($ampm_fF=="" || !$ampm_fF) { $errors[] = ""; $error_ampm_fF='1'; }
	
	if($exam_length_fF=="" || !$exam_length_fF) { $errors[] = ""; $error_exam_length_fF='1'; }
	if($class_location_fF=="" || !$class_location_fF) { $errors[] = ""; $error_class_location_fF='1'; }
	

	if(!$confirmation_fF || $confirmation_fF==NULL ) { $errors[] = ""; $error_confirmation_fF='1'; }

	if(count($errors)>0)
			{
			include ("_inc_index.php");
			//include ("/www/forms/_includes/footer.php");
			return;
			}
		else
			{
			//include ("login/includes/_include_generate_registration_id.php"); //---generate registration ID for each dB submission
			include ("login/includes/_inc_generate_ID.php"); //---generate registration ID for each dB submission
			//---perform check to ensure that data is not submitted multiple times if they reload the page (after the first/initial submission)
			//$search_dB = mysql_query("SELECT * FROM exam_registrations WHERE user_id='$user_id_fdB' AND course='$course_fF'");	
			$search_dB = mysql_query("SELECT user_id,registration_id FROM exam_registrations WHERE user_id='$user_id_fdB' AND registration_id='$generated_registration_id'");	
			$myrow = mysql_fetch_array($search_dB);
			$user_id_check_fdB = $myrow["user_id"];
			
			if($user_id_check_fdB) //request ID already exists in dB, do not process (ie. student has reloaded page)
				{
				echo "It appears you have already submitted an identical request.";
				//include ("_inc_ID_already_exists.php");
				return;
				}
			
			else
				{
				//echo "<BR>$subject_1_fF $code_1_fF $section_1_fF";
				//echo "<BR>$subject_2_fF $code_2_fF $section_2_fF";
				
				$date_verbose_fF = date("l, F j, Y g:i:s a");
				$date_fF = date("Y-m-d H:i:s");
				$student_lastname_for_email = $_SESSION['surname_fromLDAP'];
				$student_firstname_for_email = $_SESSION['givenname_fromLDAP'];
				$student_ID_for_email = $_SESSION['studentID_fromLDAP'];
				$student_email_for_email = $_SESSION['email_fromLDAP'];
				
				$date_required_array = array($year_start,$month_start,$day_start);
				$date_required_concatenated = implode("-", $date_required_array);				
	
				$exam_time_array = array($hour_fF,$minute_fF,$ampm_fF);
				$exam_time_concatenated = implode("-", $exam_time_array);				

				$approved_accomodations_fF = array(1 => $acc_01_fF,$acc_02_fF,$acc_03_fF,$acc_04_fF,$acc_05_fF,$acc_06_fF,$acc_07_fF,$acc_07_other_fF);
				$approved_accomodations_fF = join("-", $approved_accomodations_fF);

				//--- insert into dB
				include ("/www/forms/accessible_learning/alc_online/_inc/_get_ip_host.php");
				include ("_clean_variables_before_dB.php");
				
				$sql = "INSERT INTO exam_registrations (entry_id,date,user_id,registration_id,timeframe_unique_id,phone,instructor,course,section,term,date_required,start_time,exam_length,class_location,deferred,program,writing_location,approved_accomodations,ip,host,campus)
					   VALUES (NULL,'$date_fF','$user_id_fdB','$generated_registration_id','$timeframe_unique_id_fdB','$phone_fF','$instructor_fF','$course_fF','$section_fF','$term_fF','$date_required_concatenated','$exam_time_concatenated','$exam_length_fF','$class_location_fF','$deferred_fF','$program_fF','$writing_location_fF','$approved_accomodations_fF','$ip','$host','$campus_fF')";	
					   
				$result_one = mysql_query($sql) or die ("Error in query: $sql " . mysql_error() );
				
				//--- obtain timeframe details to include them in the e-mail 
				$result_get_for_email = mysql_query("SELECT * FROM " . $table . " WHERE timeframe_unique_id='$timeframe'");
				$retrieved_value_x = mysql_fetch_array($result_get_for_email);
				$timeframe_unique_id_fdB = $retrieved_value_x['timeframe_unique_id'];
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
				$search_dB = mysql_query("SELECT * FROM exam_registrations WHERE user_id='$user_id_fdB' AND registration_id='$generated_registration_id'");	
				$myrow = mysql_fetch_array($search_dB);
				$entry_id_fdB = $myrow['entry_id'];
				$registration_id_fdB = $myrow["registration_id"];
				$date_required_fdB_verbose = date('l, F j, Y', strtotime($myrow['date_required']));

				//--- confirmation e-mail send to user's e-mail
				$to_student = $user_email_from_array;
				$from_student = "Accessible Learning Services <alexams@wlu.ca>";
				$subject_student = "Laurier ALC: MBA Exam Registration Confirmation";
				$headers_student = "From: ".$from_student."\r\n";
				//$headers_student .= "Cc: akovacsik@wlu.ca,alexams@wlu.ca" . "\r\n";
				$headers_student .= "Reply-To: ".$from_student."\r\n";
				$headers_student .= "Return-Path: ".$from_student."\r\n";
				$headers_student .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
				$message_student = "Thank you $first_name_fdB $last_name_fdB!<P>	
				Your information for MBA Exam has been successfully received.<P>";
				$message_student .= "
				<B>Registration #:</B> $entry_id_fdB<P>
				<B>Date Processed:</B> $date_verbose_fF<P>
				<B>Name:</B> $first_name_fdB $last_name_fdB<BR>
				<B>MyLaurier User:</B> $user_novell_id_fdB<BR>
				<B>Laurier ID:</B> $user_laurier_id_fdB<BR>
				<B>Laurier E-mail:</B> $user_email_from_array<BR>
				<B>Campus:</B> $campus_fF<P>
				<B>Submission Period:</B> $timeframe_name_fdB ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)<P>
				<B>Phone</B> $phone_fF<BR>
				<B>Instructor</B> $instructor_fF<BR>
				<B>Course</B> $course_fF<BR>
				<B>Section</B> $section_fF<BR>
				<B>Term</B> $term_fF<BR>
				<B>Deferrer</B> $deferred_fF<BR>
				<B>Program</B> $program_fF<BR>
				<B>Writing Location</B> $writing_location_fF<BR>
				<B>Exam Date</B> $date_required_fdB_verbose ($month_start/$day_start/$year_start)<BR>
				<B>Start Time</B> $hour_fF $minute_fF $ampm_fF<BR>
				<B>Exam Length</B> $exam_length_fF<BR>";
				$message_student .= "
				<B>Class Location</B> $class_location_fF<BR>
				<B>Approved Accommodations</B><BR>";
				if($acc_01_fF) { $message_student .=  "$acc_01_fF<BR>"; }
				if($acc_02_fF) { $message_student .=  "$acc_02_fF<BR>"; }
				if($acc_03_fF) { $message_student .=  "$acc_03_fF<BR>"; }
				if($acc_04_fF) { $message_student .=  "$acc_04_fF<BR>"; }
				if($acc_05_fF) { $message_student .=  "$acc_05_fF<BR>"; }
				if($acc_06_fF) { $message_student .=  "$acc_06_fF<BR>"; }
				if($acc_07_fF) { $message_student .=  "$acc_07_fF $acc_07_other_fF<BR>"; }
				$message_student .= "<P>-------------------------------------------------------------------------------------";
				$message_student .= "<P><U>This is an automated reminder. Please do <B>NOT</B> reply to this e-mail.</U>";
				$message_student .= "<P>Registration ID: $registration_id_fdB<BR>";
				//mail($to_student,$subject_student,$message_student,$headers_student);
				require_once('wluMimeMail.php');
				//THE FUNCTION WHICH ACCEPTS: function wluMimeMail($from,$to,$subject,$txtmessage,$htmlmessage)
				$mailSent_student = wluMimeMail($from_student,$to_student,$subject_student,"",$message_student);        
	
				// ------------------------------------------------------------------------------------------------------------------
				// --- confirmation e-mail sent to admin
				$this_server =  $_SERVER["SERVER_NAME"];
				if($this_server=="infowebtest.wlu.ca") { $to_office = "iadebowale@wlu.ca"; }
					else { $to_office = "alexams@wlu.ca"; }
				$headers_office = "From: Automated MBA Exam Online Notice <alexams@wlu.ca>\r\n";
				$headers_office .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
				$subject_office = "ALC: MBA Exam Registration - $timeframe_name_fdB ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)";
				$message_office = "
				New MBA Exam Registration submitted!<P>
				<B>Registration #:</B> $entry_id_fdB<P>
				<B>Date Processed:</B> $date_verbose_fF<P>
				<B>Name:</B> $first_name_fdB $last_name_fdB<BR>
				<B>MyLaurier User:</B> $user_novell_id_fdB<BR>
				<B>Laurier ID:</B> $user_laurier_id_fdB<BR>
				<B>Laurier E-mail:</B> $user_email_from_array<BR>
				<B>Campus:</B> $campus_fF<P>
				<B>Submission Period:</B> $timeframe_name_fdB ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)<P>
				<B>Phone</B> $phone_fF<BR>
				<B>Instructor</B> $instructor_fF<BR>
				<B>Course</B> $course_fF<BR>
				<B>Section</B> $section_fF<BR>
				<B>Term</B> $term_fF<BR>
				<B>Deferrer</B> $deferred_fF<BR>
				<B>Program</B> $program_fF<BR>
				<B>Writing Location</B> $writing_location_fF<BR>
				<B>Exam Date</B> $date_required_fdB_verbose ($month_start/$day_start/$year_start)<BR>
				<B>Start Time</B> $hour_fF $minute_fF $ampm_fF<BR>
				<B>Exam Length</B> $exam_length_fF<BR>"; 
				$message_office .= "
				<B>Class Location</B> $class_location_fF<BR>
				<B>Approved Accommodations</B><BR>";
				if($acc_01_fF) { $message_office .=  "$acc_01_fF<BR>"; }
				if($acc_02_fF) { $message_office .=  "$acc_02_fF<BR>"; }
				if($acc_03_fF) { $message_office .=  "$acc_03_fF<BR>"; }
				if($acc_04_fF) { $message_office .=  "$acc_04_fF<BR>"; }
				if($acc_05_fF) { $message_office .=  "$acc_05_fF<BR>"; }
				if($acc_06_fF) { $message_office .=  "$acc_06_fF<BR>"; }
				if($acc_07_fF) { $message_office .=  "$acc_07_fF $acc_07_other_fF<BR>"; }
				$message_office .= "<P>-------------------------------------------------------------------------------------";
				$message_office .= "<P><U>This is an automated reminder. Please do <B>NOT</B> reply to this e-mail.</U>";
				$message_office .= "<P>Registration ID: $registration_id_fdB<BR>";
				mail($to_office,$subject_office,$message_office,$headers_office);

				include ("/www/forms/accessible_learning/alc_online/login/includes/_inc_thankyou_exam_registration_after_submit.php");

				return;
				}
			return;
			}
	}
?>
