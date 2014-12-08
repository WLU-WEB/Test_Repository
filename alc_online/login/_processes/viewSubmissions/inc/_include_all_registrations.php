<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Registrations</title>
<LINK REL="stylesheet" TYPE="text/css" HREF="https://www.wlu.ca/_includes/css.css">
</head>

<body>

<?php 
		$image_01="<img src='https://www.wlu.ca/hr/registration/_images/9x9_red.gif' alt='Bullet Image' width='9' height='9' />";
		$image_08="<img src='https://www.wlu.ca/hr/registration/_images/9x9_grey.gif' alt='Bullet Image' width='9' height='9' />";
		
		$dbHost = "localhost";
		$dbUser = "usrHR4reg";
		$dbPass = "some6a55w";
		$dbDatabase = "HRregistrations";
		
		//connect to the database
		$db_viewProjects = mysql_connect("$dbHost", "$dbUser", "$dbPass") or die ("Error connecting to database.");
		mysql_select_db("$dbDatabase", $db_viewProjects) or die ("Could not select the database.");
		
		//pull in workshop info
		$search_dB_01 = mysql_query("SELECT * FROM category_session WHERE cs_generated_id='$csid'", $db_viewProjects);
		$the_data_01 = mysql_fetch_array($search_dB_01);
		$category_generated_id_fdB = $the_data_01['category_generated_id'];
		$session_generated_id_fdB = $the_data_01['session_generated_id'];
		$cs_title_fdB = $the_data_01['cs_title'];
		
		$search_dB_02 = mysql_query("SELECT category_name FROM category WHERE category_generated_id='$category_generated_id_fdB'", $db_viewProjects);
		$the_data_02 = mysql_fetch_array($search_dB_02);
		$category_name_fdB = $the_data_02['category_name'];
	
		$search_dB_03 = mysql_query("SELECT session_name FROM session WHERE session_generated_id='$session_generated_id_fdB'", $db_viewProjects);
		$the_data_03 = mysql_fetch_array($search_dB_03);
		$session_name_fdB = $the_data_03['session_name'];

		echo "$category_name_fdB: $session_name_fdB<BR><STRONG>$cs_title_fdB</STRONG><BR><BR><P>";
		
		//$search_dB_01 = mysql_query("SELECT * FROM category_session LEFT JOIN registration ON category_session.cs_generated_id=registration.cs_generated_id WHERE registration.user_novell_id='$HRregistration_username' AND registration.registration_date LIKE '%$subActionYear%' AND registration.registration_active='1' ORDER BY registration.registration_date ASC", $db_viewProjects);
		//if($applicationtype=='50') { $table_to_search = "fullTime"; }
		//$search_dB_01 = mysql_query("SELECT * FROM " . $table_to_search . " WHERE timeframe_id='$timeframe' AND application_type='$applicationtype' ORDER BY date_submited DESC", $db_viewProjects);
		//$search_dB_01 = mysql_query("SELECT * FROM parkingApplications WHERE timeframe_id='$timeframe' AND application_type='$applicationtype' ORDER BY date_submited DESC", $db_viewProjects);
		//$search_dB_01 = mysql_query("SELECT * FROM registration WHERE cs_generated_id='$csid' AND registration_active='1' ORDER BY registration_date ASC", $db_viewProjects);
		$search_dB_01 = mysql_query("SELECT * FROM registration LEFT JOIN user ON registration.user_novell_id=user.user_novell_id WHERE registration.cs_generated_id='$csid' AND registration.registration_active='1' ORDER BY user.user_last_name ASC", $db_viewProjects);
		
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
				//from "registration" table
				$user_novell_id_fdB = $the_data['user_novell_id'];
				//$registration_date_fdB2 = $the_data['registration_date'];
				$registration_date_fdB_verbose = date('l, F j, Y (g:i a)', strtotime($the_data['registration_date'])); //Monday, January 1, 2000
				//from "user" table
				$user_first_name_fdB = $the_data['user_first_name'];
				$user_last_name_fdB = $the_data['user_last_name'];
				$user_email_fdB = $the_data['user_email'];
				$user_extension_fdB = $the_data['user_extension'];
				$user_employee_group_fdB = $the_data['user_employee_group'];
				$user_department_fdB = $the_data['user_department'];

				$category_generated_id_fdB = $retrieved_value['category_generated_id'];
					$search_dB_02 = mysql_query("SELECT category_name FROM category WHERE category_generated_id='$category_generated_id_fdB'", $db_viewProjects);
					$the_data_02 = mysql_fetch_array($search_dB_02);
					$category_name_fdB = $the_data_02['category_name'];

				/*
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
				*/
					//$registration_date_fdB_verbose = date('l, F j, Y', strtotime($the_data['registration_date'])); //Monday, January 1, 2000
				//get Novell email that was inserted in table initially at first login
				//$result_NovellEmail = mysql_query("SELECT email FROM users WHERE user_name='$app_username_fdB'", $db_viewProjects);
				//$result_NovellEmail_value = mysql_fetch_array($result_NovellEmail);
				//$Novellemail_value_fdB = $result_NovellEmail_value['email'];
				include ("_include_all_registrations_table.php");
				}
			while($the_data=mysql_fetch_array($search_dB_01));
			}
		else
			{ 
			echo "No submissions for this session.<P><P>";
			}
		
		$search_emails = mysql_query("SELECT user_email FROM user LEFT JOIN registration ON user.user_novell_id=registration.user_novell_id WHERE registration.cs_generated_id='$csid' AND registration.registration_active='1' ORDER BY user.user_email ASC", $db_viewProjects);
		if($the_data_two = mysql_fetch_array($search_emails))
			{
			echo "<STRONG>E-mails</STRONG><BR>";
			echo "<textarea name='textarea' cols='70' rows='10'>";
			do
				{
				$user_email_to_send_fdB = $the_data_two['user_email'];
				echo "$user_email_to_send_fdB;";
				}
			while($the_data_two=mysql_fetch_array($search_emails));
			echo "</textarea>";
			}
		
		mysql_close($db_viewProjects);

?>

</body>
</html>
