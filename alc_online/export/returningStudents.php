<?php

	$id = $_GET['id'];
	$doc_name = $_GET['name'];
	$campus = $_GET['campus'];

	//set the database connection variables
	require_once("mysqlArray.php");
	$connection_name = "AcademicLearningServices";
	$dbcnx = @mysqlLogin($connection_name);	

	$sql = "SELECT first_name, last_name, student_number, email, program, enrollment, local_address, city, postal_code, phone, osap_applied, osap_eligible, bswd, changes, contacts, date_registered, timeframe_unique_id
				FROM returning_students
				WHERE timeframe_unique_id='$id' AND campus='$campus'";	
		
		
	$rec = mysql_query($sql) or die (mysql_error());
	$num_fields = mysql_num_fields($rec);
	
	$title = "Returning Students";
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
	
	$report_name=str_replace(' ', '_', $doc_name).".xls";
	
	header("Content-type: application/ms-excel");
	header("Content-Disposition: attachment; filename=$report_name");
	header("Pragma: no-cache");
	header("Expires: 0");
	print "$header\n$data";
	
	mysql_close($dbcnx);


?>