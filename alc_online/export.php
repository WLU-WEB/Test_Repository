<?php
session_start();
session_register('ALC_username');

if($ALC_username=="akovacsik" || $ALC_username=="jeulenberg" || $ALC_username=="eriggin" || $ALC_username=="kgoulet" || $ALC_username=="iadebowale") 
	{ 
	error_reporting(E_ALL);
	$bullet_image = "<IMG SRC='_images/tab_right.png' WIDTH='8' HEIGHT='12' ALT='Error bullet image'>";
	
	$look = $_GET['look'];
	$instance_id = $_GET['instance_id'];
	
	require_once("mysqlArray.php");
	$connection_name = "AcademicLearningServices";
	$dbcnx = @mysqlLogin($connection_name);	
	
	if($look=="1") { $table_to_search="a_ntEvalNoteTakers"; } //Note-takers Evaluation
	if($look=="2") { $table_to_search="a_ntEvalStudents"; } //Note-receivers Evaluations 
	
	$sql = "SELECT * FROM " . $table_to_search . " WHERE instance_id='$view' ORDER BY date DESC";
	//echo "[$look|$table_to_search|$view]<BR>";
	
	//$sql = "SELECT * FROM (" . $table_to_search . " LEFT JOIN users ON " . $table_to_search . ".student_booked=users.user_name) LEFT JOIN studentID ON users.user_id=studentID.user_id WHERE " . $table_to_search . ".event_advisor='$advisor' AND " . $table_to_search . ".event_month='$month' AND " . $table_to_search . ".event_year='$year' AND " . $table_to_search . ".student_time_booked!='0000-00-00 00:00:00' ORDER BY " . $table_to_search . ".student_time_booked DESC";
	
	$rec = mysql_query($sql) or die (mysql_error());
   
	$num_fields = mysql_num_fields($rec);
   
	for($i = 0; $i < $num_fields; $i++ )
		{
		$header .= mysql_field_name($rec,$i)."\t";
		}
   
	while($row = mysql_fetch_row($rec))
	{
		$line = '';
		foreach($row as $value)
		{                                           
			if((!isset($value)) || ($value == ""))
			{
				$value = "\t";
			}
			else
			{
				$value = str_replace( '"' , '""' , $value );
				$value = '"' . $value . '"' . "\t";
			}
			$line .= $value;
		}
		$data .= trim( $line ) . "\n";
	}
   
	$data = str_replace("\r" , "" , $data);
   
	if ($data == "")
	{
		$data = "\n No Record Found!\n";                       
	}
   
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=reports.xls");
	header("Pragma: no-cache");
	header("Expires: 0");
	print "$header\n$data";
	}
else
	{
	echo "You do not have permission.";
	}			
?>
