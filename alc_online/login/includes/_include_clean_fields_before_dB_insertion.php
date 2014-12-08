<?PHP	
function clean_input_dB($data)
	{
	$data = trim($data);
	$data = addslashes($data);
	$data = htmlspecialchars($data);
	$data = strtolower($data);
	$data = ucwords($data);
	return $data;
	}

$laurierID_fF = clean_input_dB($laurierID_fF);
$department_fF = clean_input_dB($department_fF);
$extension_fF = clean_input_dB($extension_fF);
$email_fF = strtolower(clean_input_dB($email_fF));

$carONE_licence_plate_fF = strtoupper(clean_input_dB($carONE_licence_plate_fF));
$carONE_province_country_fF = clean_input_dB($carONE_province_country_fF);
$carONE_make_fF = htmlspecialchars(addslashes(trim($carONE_make_fF)));
$carONE_year_fF = clean_input_dB($carONE_year_fF);

$carTWO_licence_plate_fF = strtoupper(clean_input_dB($carTWO_licence_plate_fF));
$carTWO_province_country_fF = clean_input_dB($carTWO_province_country_fF);
$carTWO_make_fF = htmlspecialchars(addslashes(trim($carTWO_make_fF)));
$carTWO_year_fF = clean_input_dB($carTWO_year_fF);

$carTHREE_licence_plate_fF = strtoupper(clean_input_dB($carTHREE_licence_plate_fF));
$carTHREE_province_country_fF = clean_input_dB($carTHREE_province_country_fF);
$carTHREE_make_fF = htmlspecialchars(addslashes(trim($carTHREE_make_fF)));
$carTHREE_year_fF = clean_input_dB($carTHREE_year_fF);

##########################################################################################################

# Express Registration
$user_laurier_id_fdB = clean_input_dB($user_laurier_id_fdB);
$first_name_fdB = clean_input_dB($first_name_fdB);
$last_name_fdB = clean_input_dB($last_name_fdB);
$student_email = clean_input_dB($student_email);

$address_fF = clean_input_dB($address_fF);
$city_fF = clean_input_dB($city_fF);
$postal_fF = clean_input_dB($postal_fF);
$phone_fF = clean_input_dB($phone_fF);

$contacts_fF = clean_input_dB($contacts_fF);

##########################################################################################################


?>