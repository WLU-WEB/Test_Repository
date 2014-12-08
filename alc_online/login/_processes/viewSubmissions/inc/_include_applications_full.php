<?php 
		$dbHost = "localhost";
		$dbUser = "park4memeow";
		$dbPass = "inside4zekar";
		$dbDatabase = "parking";
		
		//connect to the database
		$db_viewProjects = mysql_connect("$dbHost", "$dbUser", "$dbPass") or die ("Error connecting to database.");
		mysql_select_db("$dbDatabase", $db_viewProjects) or die ("Could not select the database.");
		
		//if($applicationtype=='50') { $table_to_search = "fullTime"; }
		//$search_dB_01 = mysql_query("SELECT * FROM " . $table_to_search . " WHERE timeframe_id='$timeframe' AND application_type='$applicationtype' ORDER BY date_submited DESC", $db_viewProjects);
		$search_dB_01 = mysql_query("SELECT * FROM parkingApplications WHERE timeframe_id='$timeframe' AND application_type='$applicationtype' ORDER BY date_submited DESC", $db_viewProjects);
		
		if($the_data = mysql_fetch_array($search_dB_01))
			{
			do
				{
				$program_id_fdB = $the_data['program_id'];
				//---search the programs table to pull the text associated with the program ID
				//$search_program_fdB = mysql_query("SELECT * FROM timeframes WHERE program_id='$program_id_fdB'", $db_viewProjects);
				//$the_data_2 = mysql_fetch_array($search_program_fdB);
				//$program_description_fdB = $the_data_2['program_description'];
				//---end
				$app_username_fdB = $the_data['username'];
				$app_first_name_fdB = $the_data['first_name'];
				$app_last_name_fdB = $the_data['last_name'];
				$app_applicant_type_fdB = $the_data['applicant_type'];
				$app_laurier_id_fdB = $the_data['laurier_id'];
				$app_department_fdB = $the_data['department'];
				$app_extension_fdB = $the_data['extension'];
				$app_email_fdB = $the_data['email'];
				$app_disabled_parking_fdB = $the_data['disabled_parking'];
				$app_deduction_fdB = $the_data['deduction'];
				$app_commencing_date_fdB = $the_data['commencing_date'];
					$app_commencing_date_fdB_verbose = date('l, F j, Y', strtotime($the_data['commencing_date'])); //Monday, January 1, 2000
				//vehicle one
				$app_v1_licence_plate_fdB = $the_data['v1_licence_plate'];
				$app_v1_province_country_fdB = $the_data['v1_province_country'];
				$app_v1_make_model_fdB = $the_data['v1_make_model'];
				$app_v1_year_fdB = $the_data['v1_year'];
				//vehicle two
				$app_v2_licence_plate_fdB = $the_data['v2_licence_plate'];
				$app_v2_province_country_fdB = $the_data['v2_province_country'];
				$app_v2_make_model_fdB = $the_data['v2_make_model'];
				$app_v2_year_fdB = $the_data['v2_year'];
				//vehicle three
				$app_v3_licence_plate_fdB = $the_data['v3_licence_plate'];
				$app_v3_province_country_fdB = $the_data['v3_province_country'];
				$app_v3_make_model_fdB = $the_data['v3_make_model'];
				$app_v3_year_fdB = $the_data['v3_year'];

				//get Novell email that was inserted in table initially at first login
				$result_NovellEmail = mysql_query("SELECT email FROM users WHERE user_name='$app_username_fdB'", $db_viewProjects);
				$result_NovellEmail_value = mysql_fetch_array($result_NovellEmail);
				$Novellemail_value_fdB = $result_NovellEmail_value['email'];

				include ("_include_applications_full_table.php");
				}
			while($the_data=mysql_fetch_array($search_dB_01));
			}
		else
			{ 
			echo "No submissions<P><P>";
			}

		mysql_close($db);

?>
