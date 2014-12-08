<?PHP	
function clean_input_dB($data)
	{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	$data = str_replace("'", '', $data);
	$data = str_replace('"', '', $data);
	$data = str_replace("\\", '', $data);
	$data = str_replace("|", '', $data);
	return $data;
	}

$user_laurier_id_fdB = clean_input_dB($user_laurier_id_fdB);
$first_name_fdB = clean_input_dB($first_name_fdB);
$last_name_fdB = clean_input_dB($last_name_fdB);
$student_email = clean_input_dB($student_email);

$program_fF = clean_input_dB($program_fF);
$address_fF = clean_input_dB($address_fF);
$city_fF = clean_input_dB($city_fF);
$postal_fF = clean_input_dB($postal_fF);
$phone_fF = clean_input_dB($phone_fF);

$contacts_fF = clean_input_dB($contacts_fF);


echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';

?>