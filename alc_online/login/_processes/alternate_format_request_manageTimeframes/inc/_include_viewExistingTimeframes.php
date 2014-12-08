<?php 
require_once("mysqlArray.php");
$connection_name = "AcademicLearningServices";
$dbcnx = @mysqlLogin($connection_name);	

$result = mysql_query("SELECT * FROM a_alternate_request_timeframes ORDER BY timeframe_start ASC");

if($retrieved_value = mysql_fetch_array($result))
	{
	do
		{
		$timeframe_name_fdB = $retrieved_value['timeframe_name'];
		$timeframe_start_fdB = $retrieved_value['timeframe_start'];
		$timeframe_end_fdB = $retrieved_value['timeframe_end'];

		$timeframe_start_verbose = date('F j, Y',strtotime($timeframe_start_fdB));
		$timeframe_end_verbose = date('F j, Y',strtotime($timeframe_end_fdB));
		$added_by_user_name_fdB = $retrieved_value['added_by_user_name'];
		$date_added_fdB = date('F j, Y (g:i:s a)',strtotime($retrieved_value['date_added']));

		echo "<form action=\"$PHP_SELF?action=manageTimeframes\" method='post' name='delete_timeframes_form'>";
		echo "<strong>$timeframe_name_fdB | $timeframe_start_verbose - $timeframe_end_verbose</strong> | added by: $added_by_user_name_fdB, on $date_added_fdB ";
		echo "<input type='hidden' name='start' value='$timeframe_start_fdB' />";
		echo "<input type='hidden' name='stop' value='$timeframe_end_fdB' />";
		//echo "<input type='submit' name='submit_step' value='Delete Timeframe' />";
		echo "</form>";
		echo "<br>";
		//include ("_include_viewExistingTimeframes_table.php");
		}
	while($retrieved_value=mysql_fetch_array($result));
	}
else
	{ 
	echo "No timeframes have been started.";
	}
	
	mysql_close($dbcnx);

?>
