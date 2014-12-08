<?PHP	
function clean_input_2($data)
	{
	$data = trim($data);
	//$data = stripslashes($data);
	$data = addslashes($data);
	$data = htmlspecialchars($data);
	$data = strtolower($data);
	$data = ucwords($data);
	return $data;
	}

$first_name_fF = clean_input_2($first_name_fF);
$last_name_fF = clean_input_2($last_name_fF);
$laurierID_fF = clean_input_2($laurierID_fF);
$email_fF = strtolower(clean_input_2($email_fF));

$subject_1_fF = strtoupper(clean_input_2($subject_1_fF));
$code_1_fF = strtoupper(clean_input_2($code_1_fF));
$section_1_fF = strtoupper(clean_input_2($section_1_fF));

$subject_2_fF = strtoupper(clean_input_2($subject_2_fF));
$code_2_fF = strtoupper(clean_input_2($code_2_fF));
$section_2_fF = strtoupper(clean_input_2($section_2_fF));

$subject_3_fF = strtoupper(clean_input_2($subject_3_fF));
$code_3_fF = strtoupper(clean_input_2($code_3_fF));
$section_3_fF = strtoupper(clean_input_2($section_3_fF));

$subject_4_fF = strtoupper(clean_input_2($subject_4_fF));
$code_4_fF = strtoupper(clean_input_2($code_4_fF));
$section_4_fF = strtoupper(clean_input_2($section_4_fF));

$subject_5_fF = strtoupper(clean_input_2($subject_5_fF));
$code_5_fF = strtoupper(clean_input_2($code_5_fF));
$section_5_fF = strtoupper(clean_input_2($section_5_fF));
?>