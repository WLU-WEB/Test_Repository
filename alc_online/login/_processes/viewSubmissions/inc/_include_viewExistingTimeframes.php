<?php 
		//set the database connection variables
		$dbHost = "localhost";
		$dbUser = "bac2kxus5r";
		$dbPass = "som3p55d";
		$dbDatabase = "brantfordAcademicCurriculum";
		
		//connect to the database
		$db_viewProjects = mysql_connect("$dbHost", "$dbUser", "$dbPass") or die ("Error connecting to database.");
		mysql_select_db("$dbDatabase", $db_viewProjects) or die ("Could not select the database.");
		$result = mysql_query("SELECT * FROM timeframes ORDER BY timeframe_start ASC", $db_viewProjects);
	
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

				//include ("_include_viewSubmissions_table.php");
				//echo "<form action=\"$PHP_SELF?action=manageTimeframes\" method='post' name='delete_timeframes_form'>";
				//echo "<strong>$timeframe_name_fdB | $timeframe_start_verbose - $timeframe_end_verbose</strong> | added by: $added_by_user_name_fdB, on $date_added_fdB ";
				//echo "<input type='hidden' name='start' value='$timeframe_start_fdB' />";
				//echo "<input type='hidden' name='stop' value='$timeframe_end_fdB' />";
				//echo "<input type='checkbox' name='timeframe_confirm_delete' value='$timeframe_start_fdB' />"; if($error_timeframe_confirm_delete_fF=="1") { echo "<STRONG>Yes, confirm deletion</STRONG> "; } else { echo "Yes, confirm deletion "; }				
				//echo "<input type='submit' name='submit_step' value='Delete Timeframe' />";
				//echo "</form>";
				}
			while($retrieved_value=mysql_fetch_array($result));
			}
		else
			{ 
			echo "No timeframes have been started.";
			}
		
		mysql_close($db_viewProjects);

?>
