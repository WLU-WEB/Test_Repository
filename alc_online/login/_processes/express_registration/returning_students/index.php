<?PHP
error_reporting(E_ALL);	
//$today_date = date("Y-m-d H:i:s");
$today_date = date("Y-m-d");
$today_date_verbose = date('l, F j, Y (g:i:s a T)', strtotime($today_date)); //Monday, January 1, 2000 (12:59:59 am EST)
//echo "[$today_date]<BR>";

$table = "returning_students_timeframe";

$result_form_type = mysql_query("SELECT * FROM " . $table . " WHERE timeframe_start <='$today_date' AND timeframe_end >='$today_date'");
//$result = mysql_query("SELECT * FROM timeframes WHERE timeframe_start <='$today_date' AND timeframe_end >='$today_date'	AND application_type='Midterm_Registration'");
$retrieved_value = mysql_fetch_array($result_form_type);

$timeframe_unique_id_fdB = $retrieved_value['timeframe_unique_id'];
$timeframe_name_fdB = $retrieved_value['timeframe_name'];
$timeframe_start_fdB = $retrieved_value['timeframe_start'];
	//$timeframe_start_fdB_verbose = date('l, F j, Y (g:i:s a T)', strtotime($retrieved_value['timeframe_start']));
	$timeframe_start_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value['timeframe_start']));
$timeframe_end_fdB = $retrieved_value['timeframe_end'];
	$timeframe_end_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value['timeframe_end']));

//echo "[$timeframe_unique_id_fdB|$application_type_fdB|$timeframe_id_fdB|$timeframe_name_fdB|$timeframe_start_fdB|$timeframe_end_fdB]<BR>";
//echo "generated_user_id:[$generated_user_id] | user_id_fdB:[$user_id_fdB]<BR>";





$link_to_redirect_after_submit = "/alconline/index.php?action=ExpressRegistrationReturning";

include ("/www/forms/accessible_learning/alc_online/login/includes/_include_clean_fields.php");


$search_dB = mysql_query("SELECT student_number,timeframe_unique_id FROM returning_students WHERE student_number='$user_laurier_id_fdB' AND timeframe_unique_id='$timeframe_unique_id_fdB'");	
$myrow = mysql_fetch_array($search_dB);
$user_id_check_fdB = $myrow["student_number"];
	

if (!$submit) 
	{
	//---check to see if available time exists
	if(!$timeframe_unique_id_fdB)
		{
		//echo "[$timeframe_unique_id_fdB]";
		$result_3 = mysql_query("SELECT * FROM " . $table . " WHERE timeframe_start >'$today_date'");
		$retrieved_value_3 = mysql_fetch_array($result_3);
		$timeframe_unique_id_next_fdB = $retrieved_value_3['timeframe_unique_id'];
		$timeframe_start_fdB = $retrieved_value_3['timeframe_start'];
		$timeframe_start_next_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_3['timeframe_start']));
		$timeframe_end_fdB = $retrieved_value_3['timeframe_end'];
		$timeframe_end_next_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_3['timeframe_end']));
		//echo "[$timeframe_start_fdB|$timeframe_end_fdB]";
		
		include ("_inc_registration_closed.php");
		
		}
	elseif($user_id_check_fdB){
		echo "It appears you have already registered for the <b> $timeframe_name_fdB ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)</b> time period.";
	}
	else
		{	
		include ("_inc_index_introduction.php");
		include ("_inc_generate_request_id.php");
		include ("_inc_index.php");
		}
	//mysql_close($dbcnx);
	}

if($submit=="Submit") 

	{
		
	$errors = array();
	
	if($campus_fF=="" || !$campus_fF) { $errors[] = ""; $error_campus_fF='1'; }
	
	if($program_fF=="" || !$program_fF) { $errors[] = ""; $error_program_fF='1'; }
	
	if($enrollment_fF=="" || !$enrollment_fF) { $errors[] = ""; $error_enrollment_fF='1';}
	
	if($address_fF=="" || !$address_fF) { $errors[] = ""; $error_address_fF='1';}
	
	if($city_fF=="" || !$city_fF) { $errors[] = ""; $error_city_fF='1';}
	
	if($postal_fF=="" || !$postal_fF) { $errors[] = ""; $error_postal_fF='1';}
	
	if($phone_fF=="" || !$phone_fF) { $errors[] = ""; $error_phone_fF='1';}
	
	if($osapapp_fF=="" || !$osapapp_fF) { $errors[] = ""; $error_osapapp_fF='1';}
	
	if($osapelig_fF=="" || !$osapelig_fF) { $errors[] = ""; $error_osapelig_fF='1';}
	
	if($bswd_fF=="" || !$bswd_fF) { $errors[] = ""; $error_bswd_fF='1';}
	
	if($changes_fF=="" || !$changes_fF) { $errors[] = ""; $error_changes_fF='1';}
	
	//Consent Form Values
	if($acc_01_fF=="" || !$acc_01_fF) { $errors[] = ""; $error_acc_01_fF='1';}
	if($acc_02_fF=="" || !$acc_02_fF) { $errors[] = ""; $error_acc_02_fF='1';}
	if($acc_03_fF=="" || !$acc_03_fF) { $errors[] = ""; $error_acc_03_fF='1';}
	if($acc_04_fF=="" || !$acc_04_fF) { $errors[] = ""; $error_acc_04_fF='1';}
	if($acc_05_fF=="" || !$acc_05_fF) { $errors[] = ""; $error_acc_05_fF='1';}
	if($acc_06_fF=="" || !$acc_06_fF) { $errors[] = ""; $error_acc_06_fF='1';}
	if($acc_07_fF=="" || !$acc_07_fF) { $errors[] = ""; $error_acc_07_fF='1';}
	if($campus_fF=="brantford"){
		if($acc_08_fF=="" || !$acc_08_fF) { $errors[] = ""; $error_acc_08_fF='1';}
	}
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
			
			$search_dB = mysql_query("SELECT student_number,timeframe_unique_id FROM returning_students WHERE student_number='$user_laurier_id_fdB' AND timeframe_unique_id='$timeframe_unique_id_fdB'");	
			$myrow = mysql_fetch_array($search_dB);
			$user_id_check_fdB = $myrow["student_number"];
			
			if($user_id_check_fdB) //request ID already exists in dB, do not process (ie. student has reloaded page)
				{
				echo "It appears you have already registered for this time period.";
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

				$approved_accomodations_fF = array(1 => $acc_01_fF,$acc_02_fF,$acc_03_fF,$acc_04_fF,$acc_05_fF,$acc_06_fF,$acc_07_fF,$acc_07_other_fF,$acc_08_other_fF);
				$approved_accomodations_fF = join("-", $approved_accomodations_fF);

				$student_email = "$user_name_fdB" . "@mylaurier.ca";

				//--- insert into dB
				include ("/www/forms/accessible_learning/alc_online/_inc/_get_ip_host.php");
				include ("_inc_clean_fields_before_dB_insertion.php");
				
				$sql = "INSERT INTO returning_students (student_number, first_name, last_name, email, campus, program, enrollment, local_address, city, postal_code, phone, osap_applied, osap_eligible, bswd, changes, contacts, date_registered, timeframe_unique_id)
					   VALUES ('$user_laurier_id_fdB', '$first_name_fdB', '$last_name_fdB', '$student_email', '$campus_fF', '$program_fF', '$enrollment_fF', '$address_fF', '$city_fF', '$postal_fF', '$phone_fF', '$osapapp_fF', '$osapelig_fF', '$bswd_fF', '$changes_fF', '$contacts_fF', '$today_date',  $timeframe_unique_id_fdB)";	
										   
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
				$registration_id_fdB = $myrow["registration_id"];
				$date_required_fdB_verbose = date('l, F j, Y', strtotime($myrow['date_required']));

				//--- confirmation e-mail send to user's e-mail
				//$to_student = $user_email_from_array;
				//$from_student = "Accessible Learning Services";
				//$subject_student = "Laurier ALC: Returning Student Express Registration Confirmation";
				/*$headers_student = "From: ".$from_student."\r\n";
				$headers_student .= "Reply-To: ".$from_student."\r\n";
				$headers_student .= "Return-Path: ".$from_student."\r\n";
				$headers_student .= "Content-type: text/html; charset=iso-8859-1\r\n"; */
				
				$headers = "From: Online Application<accessible_learning@wlu.ca>\n";
				$headers .= "Content-Type: text/html; charset=iso-8859-1\n";
				$mail_to = $user_email_from_array;
				$mail_subject = "Laurier ALC: Returning Student Express Registration Confirmation";
				
				$message_student = "Thank you $first_name_fdB $last_name_fdB!<P>	
				Your returning registration has been successfully received.<P>";
				
				$message_student .= "
				<B>Date Processed:</B> $date_verbose_fF<P>
				<B>Name:</B> $first_name_fdB $last_name_fdB<BR>
				<B>MyLaurier User:</B> $user_novell_id_fdB<BR>
				<B>Laurier ID:</B> $user_laurier_id_fdB<BR>
				<B>Laurier E-mail:</B> $user_email_from_array<P>
				<B>Submission Period:</B> $timeframe_name_fdB ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)<P>
				<B>Campus</B> $campus_fF<BR>
				<B>Program</B> $program_fF<BR>
				<B>Enrollment</B> $enrollment_fF<BR>
				<B>Local Address</B> $address_fF<BR>
				<B>City</B> $city_fF<BR>
				<B>Postal Code</B> $postal_fF<BR>
				<B>Phone</B> $phone_fF<BR>
				<B>OSAP Applied</B> $osapapp_fF<BR>
				<B>OSAP Eligible</B> $osapelig_fF<BR>
				<B>BSWD</B> $bswd_fF<BR>
				<B>Changes</B> $changes_fF<BR>
				<B>Contacts</B> $contacts_fF<BR>";
				
				$message_student .= "
				<h3>Consent to Gather, Use and Disclose Personal Information</h3> 
				
				<p>I, $first_name_fdB $last_name_fdB, give voluntarily consent for the Accessible Learning Centre to:</p>
				<p>Gather information for the purpose of creating my accommodation plan and, to determine access to other required assistive supports through the Accessible Learning Centre. Information will be generated from the documentation that I have provided as well as verbal information that I have shared during planning meetings with my consultant.</p>
				<p>Disclose or share information with my faculty members (or teaching assistants assigned to the course), or any authorized WLU staff. An email will be sent your faculty members at the start of each term. Information includes; confirmation of your registration with the ALC, your name, ID, exam and classroom accommodations. </p>
				<p>I understand that I may withdraw my consent at any time and that it is my responsibility to inform my consultant of any withdrawal notifications.</p>
				<p>I understand that I may include other people for whom I wish information regarding my registration and accommodations be shared. (e.g. parents, and/or a therapist/counselor).</p>
				<p>I understand that student files may be reviewed periodically by external funders or internal auditors to ensure Accessible Learning is meeting the terms of their funding contract/ mandated obligations. </p>
				<p>Should a student present to Accessible Learning staff as at risk of significant harm to self or others, confidentiality will not be maintained and steps will be taken to avert any danger in an effort to ensure the safety of everyone.</p>
				<p>This consent will remain valid for one year from the date of submission</p>
				";
				
				$message_student .= "<P>-------------------------------------------------------------------------------------";
				$message_student .= "<P><U>This is an automated reminder. Please do <B>NOT</B> reply to this e-mail.</U>";
				
				mail($mail_to,$mail_subject,$message_student,$headers);

/*				//mail($to_student,$subject_student,$message_student,$headers_student);
				require_once('wluMimeMail.php');
				//THE FUNCTION WHICH ACCEPTS: function wluMimeMail($from,$to,$subject,$txtmessage,$htmlmessage)
				$mailSent_student = wluMimeMail($from_student,$to_student,$subject_student,"",$message_student);        
	*/
				// ------------------------------------------------------------------------------------------------------------------
				
				$headers = "From: Online Application<accessible_learning@wlu.ca>\n";
				$headers .= "Content-Type: text/html; charset=iso-8859-1\n";
				

				$mail_subject = "New Full Time Application Received";


				
				// --- confirmation e-mail sent to admin
				$this_server =  $_SERVER["SERVER_NAME"];
				if($this_server=="infowebtest.wlu.ca") {
					$mail_to = "iadebowale@wlu.ca"; 
					//$to_office = "iadebowale@wlu.ca"; 
				}
				elseif($campus_fF=="waterloo") { 
					//$to_office = "accessible_learning@wlu.ca"; 
					$mail_to = "accessible_learning@wlu.ca";
				}
				elseif($campus_fF=="brantford"){
					//$to_office = "lbaccessiblelearning@wlu.ca"; 
					$mail_to = "lbaccessiblelearning@wlu.ca";
				}
				
				/*$headers_office = "From: Automated Registration Notice \r\n";
				$headers_office .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
				$subject_office = "Laurier ALC: Returning Student Express Registration Confirmation";*/
				
				$message_office .= "
				<B>Date Processed:</B> $date_verbose_fF<P>
				<B>Name:</B> $first_name_fdB $last_name_fdB<BR>
				<B>MyLaurier User:</B> $user_novell_id_fdB<BR>
				<B>Laurier ID:</B> $user_laurier_id_fdB<BR>
				<B>Laurier E-mail:</B> $user_email_from_array<P>
				<B>Submission Period:</B> $timeframe_name_fdB ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)<P>
				<B>Campus</B> $campus_fF<BR>
				<B>Program</B> $program_fF<BR>
				<B>Enrollment</B> $enrollment_fF<BR>
				<B>Local Address</B> $address_fF<BR>
				<B>City</B> $city_fF<BR>
				<B>Postal Code</B> $postal_fF<BR>
				<B>Phone</B> $phone_fF<BR>
				<B>OSAP Applied</B> $osapapp_fF<BR>
				<B>OSAP Eligible</B> $osapelig_fF<BR>
				<B>BSWD</B> $bswd_fF<BR>
				<B>Changes</B> $changes_fF<BR>
				<B>Contacts</B> $contacts_fF<BR>";
				
				$message_office .= "
				<h3>Consent to Gather, Use and Disclose Personal Information</h3> 
				
				<p>I, $first_name_fdB $last_name_fdB, give voluntarily consent for the Accessible Learning Centre to:</p>
				<p>Gather information for the purpose of creating my accommodation plan and, to determine access to other required assistive supports through the Accessible Learning Centre. Information will be generated from the documentation that I have provided as well as verbal information that I have shared during planning meetings with my consultant.</p>
				<p>Disclose or share information with my faculty members (or teaching assistants assigned to the course), or any authorized WLU staff. An email will be sent your faculty members at the start of each term. Information includes; confirmation of your registration with the ALC, your name, ID, exam and classroom accommodations. </p>
				<p>I understand that I may withdraw my consent at any time and that it is my responsibility to inform my consultant of any withdrawal notifications.</p>
				<p>I understand that I may include other people for whom I wish information regarding my registration and accommodations be shared. (e.g. parents, and/or a therapist/counselor).</p>
				<p>I understand that student files may be reviewed periodically by external funders or internal auditors to ensure Accessible Learning is meeting the terms of their funding contract/ mandated obligations. </p>
				<p>Should a student present to Accessible Learning staff as at risk of significant harm to self or others, confidentiality will not be maintained and steps will be taken to avert any danger in an effort to ensure the safety of everyone.</p>
				<p>This consent will remain valid for one year from the date of submission</p>
				";
				
				$message_office .= "<P>-------------------------------------------------------------------------------------";
				$message_office .= "<P><U>This is an automated reminder. Please do <B>NOT</B> reply to this e-mail.</U>";

	mail($mail_to,$mail_subject,$message_office,$headers);			//mail($to_office,$subject_office,$message_office,$headers_office);

				include ("/www/forms/accessible_learning/alc_online/login/includes/_inc_thankyou_express_registration.php");

				return;
				}
			return;
			}
	}
?>
