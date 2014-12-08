<?PHP
				$dbHost = "localhost";
				$dbUser = "bac2kxus5r";
				$dbPass = "som3p55d";
				$dbDatabase = "brantfordAcademicCurriculum";
				$db_action = mysql_connect("$dbHost", "$dbUser", "$dbPass") or die ("Error connecting to database.");
				mysql_select_db("$dbDatabase", $db_action) or die ("Could not select the database.");
				$result = mysql_query("SELECT * FROM programs ORDER BY program_description ASC");
				
				$valuesArray = array();
				while ($myrow = mysql_fetch_array($result)) 
					{
					//$program_description_fdB = $myrow['program_description'];
					//$program_id_fdB = $myrow['program_id'];
					$valuesArray[ $myrow['program_id'] ] = $myrow['program_description']; //creating an associative array (key & value) from mySQL results
					}
				//echo "x. program_id_fdB: [$program_id_fdB]<BR>";
				foreach ($valuesArray as $k => $v) 
					{
					//print $k . " is the key for " . $v . "<br />\n"; //prints the key and associated value
					}
				//$size = count($valuesArray);
				//echo "size: [$size]<BR>";
				//print_r($valuesArray);
				//---program_fF is collected after pressing submit button
				//---program_fF is a number (0, 1, 2, etc)
				//---storing value of key ($valuesArray[$program_fF]) from array above into $program_description_fdB 
				//---so that when the page reloads the description is visible and NOT the numerican ID from the database
				$program_description_fdB = $valuesArray[$program_fF]; 
				//$program_description_fdB = $valuesArray[$program_id_fdB]; 
				//$program_description_fdB = $program_fF;
				//echo "program_description_fdB: [$program_description_fdB]<BR>";
				//echo "1. program_id_fdB_x: [$program_id_fdB_x]<P>";
				//echo "2. program_fF: [$program_fF]<P>";

				if($error_program_fF=='1') { echo "<SELECT NAME='program_fF' class='form' style='background-color: #FFFF99'>"; } 
			  		else { echo "<SELECT NAME='program_fF' class='form'>"; }
				
				if($program_fF) { echo "<option value='$program_fF' SELECTED>$program_description_fdB</option>"; }
					else { echo "<option value='' SELECTED>please select</option>"; }
				
				$result_2 = mysql_query("SELECT * FROM programs ORDER BY program_description ASC");
				while ($myrow_2 = mysql_fetch_array($result_2)) 
					{
					$program_description_values_fdB = $myrow_2['program_description'];
					$program_id_fdB = $myrow_2['program_id'];
					echo "<option value='$program_id_fdB'>$program_description_values_fdB</option>";				
					//printf("<option value='%s'>%s</option>",$myrow["program_description"],$myrow["program_description"]);
					}
				print '</select>';
				mysql_close($db_action);	
			  ?>
