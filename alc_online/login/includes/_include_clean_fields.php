<?PHP	
function clean_input($data)
	{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	//$data = strtolower($data);
	//$data = ucwords($data);
	$data = str_replace("'", '', $data);
	$data = str_replace('"', '', $data);
	$data = str_replace("\\", '', $data);
	$data = str_replace("|", '', $data);
	return $data;
	}

##########################################################################################################

# Midterm Exam Cancellation (Waterloo)
$firstName_fF = clean_input($firstName_fF);
$lastName_fF = clean_input($lastName_fF);

$phone_fF = clean_input($phone_fF);
$instructor_fF = clean_input($instructor_fF);
$course_fF = clean_input($course_fF);
$section_fF = strtoupper(clean_input($section_fF));
$exam_length_fF = clean_input($exam_length_fF);
$class_location_fF = clean_input($class_location_fF);

$acc_06_other_fF = str_replace("-", '', $acc_06_other_fF);
$acc_06_other_fF = clean_input($acc_06_other_fF);

##########################################################################################################

# Express Registration
$user_laurier_id_fdB = clean_input($user_laurier_id_fdB);
$first_name_fdB = clean_input($first_name_fdB);
$last_name_fdB = clean_input($last_name_fdB);
$student_email = clean_input($student_email);

$address_fF = clean_input($address_fF);
$city_fF = clean_input($city_fF);
$postal_fF = clean_input($postal_fF);
$phone_fF = clean_input($phone_fF);

$contacts_fF = clean_input($contacts_fF);

##########################################################################################################

# Manage Timeframes (ALC Exams) (Waterloo)
$timeframe_name_fF = clean_input($timeframe_name_fF);


?>