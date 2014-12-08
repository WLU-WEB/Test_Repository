<?PHP
//------------------generate ID-----------------------------	
function makeProjectID() 
	{
	$salt = "abchefghjkmnpqrstuvwxyz"; 
	srand((double)microtime()*1000000); 
	$i = 0; 
	while ($i <= 3) 
		{ 
		$num = rand() % 33; 
		$tmp = substr($salt, $num, 1); 
		$pass = $pass . $tmp; 
		$i++; 
		} 
	return $pass; 
	} 
	
$part_1 = makeProjectID();

if(!$part_1 || $part_1=='')
	{
	makeProjectID();
	} 

srand ((double) microtime( )*1000000);
$part_2 = rand(0,999);

//------------------------------------------------------------------------------------------
//SUBMISSION ID
$part_3 = date("YmdHis"); //2008 02 25 24 00 59
$part_4 = '-';
$the_array = array(1 => $part_3,$part_4,$part_1,$part_2);
$generated_submission_id = join("", $the_array);
//------------------------------------------------------------------------------------------
//REGISTRATION ID
$part_5 = date("YmdHis"); //2008 02 25 24 00 59
$part_6 = 'i';
$part_7 = '.';
$the_array_2 = array(1 => $part_6,$part_5,$part_7,$part_2,$part_1);
$generated_registration_id = join("", $the_array_2);
//------------------------------------------------------------------------------------------
//CANCELATION ID
$part_8 = date("YmdHis"); //2008 02 25 24 00 59
$part_9 = 'c';
$part_10 = '.';
$the_array_3 = array(1 => $part_9,$part_8,$part_10,$part_2,$part_1);
$generated_cancelation_id = join("", $the_array_3);
//------------------------------------------------------------------------------------------


if(!$generated_submission_id || $generated_submission_id=="" || !$generated_registration_id || $generated_registration_id=="" || !$generated_cancelation_id || $generated_cancelation_id=="")
	{
	makeProjectID();
	}

//echo "generated_submission_id: [$generated_submission_id]";
//echo "<BR>generated_registration_id: [$generated_registration_id]";
//--------------------------------------------------------------------------
?>
