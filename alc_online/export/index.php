<?php
$id = $_GET['id'];
//$a will come across as: '1' or '0' and the query below where ( active=$a ) will have the single quotes added around the 1 or 0 since it came across that way
$a = $_GET['a'];

$campus = $_GET['campus'];

if($id && $a)
	{
	//set the database connection variables
	require_once("mysqlArray.php");
	$connection_name = "AcademicLearningServices";
	$dbcnx = @mysqlLogin($connection_name);	

	$sql = "SELECT exam_registrations.date,a_user.user_novell_id,a_user_laurier_id.user_laurier_id,a_user.user_first_name,a_user.user_last_name,a_user.user_email,exam_registrations.phone,exam_registrations.instructor,exam_registrations.course,exam_registrations.section,exam_registrations.term,exam_registrations.date_required,exam_registrations.start_time,exam_registrations.exam_length,exam_registrations.class_location,exam_registrations.approved_accomodations
				FROM (exam_registrations LEFT JOIN a_user ON exam_registrations.user_id=a_user.user_id)
				LEFT JOIN a_user_laurier_id ON a_user_laurier_id.user_id=a_user.user_id
				WHERE timeframe_unique_id='$id' AND active=$a AND campus=$campus" ;	
		
		
	$rec = mysql_query($sql) or die (mysql_error());
	$num_fields = mysql_num_fields($rec);
	
	$title = "Exam Registrations";
	$header .= $title."\n"; //Workshop Name
	//$header .= "$date ($from-$to), $loc $which"."\n\n"; //Workshop Date, Time and Location
	
	for($i = 0; $i < $num_fields; $i++ ) {
		$header .= mysql_field_name($rec,$i)."\t";
		}
		
	$header .= "\n"; //add a hard return after the row titles pulled
	
	while($row = mysql_fetch_row($rec))
		{
		$line = '';
		foreach($row as $value)
			{                                           
			if((!isset($value)) || ($value == "")) {
				$value = "\t";
				}
			else {
				$value = str_replace( '"' , '""' , $value );
				$value = '"' . $value . '"' . "\t";
				}
			$line .= $value;
			}
		$data .= trim( $line ) . "\n";
		}
	
	$data = str_replace("\r" , "" , $data);
	
	if ($data == "") {
		$data = "\n No Record Found!n";                       
		}
		
	$report_name="CleanFile";
	
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=$report_name.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
	print "$header\n$data";
	
	mysql_close($dbcnx);
	}
else
	{
	header( "Location: login.php" );
	die();
	}

?>