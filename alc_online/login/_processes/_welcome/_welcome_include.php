	  <table width="100%%" border="0" cellpadding="5">
	    <tr>
	      <td width="1%" align="left" valign="top"><img src='_images/1x1_transparent.gif' alt='Transparent Place Holder' width='128' height='1' /></td>
	      <td width="99%" align="left" valign="top"><strong>Welcome to Accessible Learning Centre! </strong></td>
        </tr>
</table>
<br/>
<table width="100%%" border="0" cellpadding="5" class="border_aaa">
	    <tr>
	      <td width="1%" align="left" valign="top"><img src="_img/_icons/express_registration.png" width="128" height="128" alt="Alternate Format Request" /></td>
	      <td width="99%" align="left" valign="top"><SPAN CLASS='menuTitle'>Express Registration for Returning Students</SPAN><br />
          <br />
          If you have registered with the ALC in the past you will be able to reregister for upcoming semesters here.<br /><br />

        <?PHP
		
					//e-Text
	$result = mysql_query("SELECT * FROM returning_students_timeframe WHERE timeframe_start <='$today_date' AND timeframe_end >='$today_date'");
	$retrieved_value = mysql_fetch_array($result);
	$timeframe_unique_id_fdB = $retrieved_value['timeframe_unique_id'];
	$timeframe_name_fdB = $retrieved_value['timeframe_name'];
	$timeframe_start_fdB = $retrieved_value['timeframe_start'];
	$timeframe_start_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value['timeframe_start']));
	$timeframe_end_fdB = $retrieved_value['timeframe_end'];
	$timeframe_end_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value['timeframe_end']));
	
	if(!$timeframe_unique_id_fdB)
		{
		//echo "[$timeframe_unique_id_fdB]";
		$result_3 = mysql_query("SELECT * FROM returning_students_timeframe WHERE timeframe_start >'$today_date'");
		$retrieved_value_3 = mysql_fetch_array($result_3);
		$timeframe_unique_id_next_fdB = $retrieved_value_3['timeframe_unique_id'];
		$timeframe_start_fdB = $retrieved_value_3['timeframe_start'];
		$timeframe_start_next_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_3['timeframe_start']));
		$timeframe_end_fdB = $retrieved_value_3['timeframe_end'];
		$timeframe_end_next_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_3['timeframe_end']));
		}
		
		
		if($timeframe_unique_id_fdB)
			{
			echo "<BR>The current registration started on <B>$timeframe_start_fdB_verbose</B> and will end on <B>$timeframe_end_fdB_verbose</B>.";
			}
		if(!$timeframe_unique_id_fdB)
			{
			echo "The registration is now <strong>closed</strong></B>.";
			if($timeframe_unique_id_next_fdB)
				{
				echo "<BR>The next registration starts on <B>$timeframe_start_next_fdB_verbose</B> and will end on <B>$timeframe_end_next_fdB_verbose</B>.";
				}
			if(!$timeframe_unique_id_next_fdB)
				{
				echo "<BR>The administrator has not yet specified when the next registration will start.";
				}
			}			
		?>	
        
          </td>
        </tr>
</table>
	  <br />
	  <table width="100%%" border="0" cellpadding="5" class="border_a">
	    <tr>
	      <td width="1%" align="left" valign="top"><img src="_img/_icons/alternate_format.png" width="128" height="128" alt="Alternate Format Request" /></td>
	      <td width="99%" align="left" valign="top"><SPAN CLASS='menuTitle'>Alternate Format Request</SPAN><br />
          <br />
          You can place requests for 
          courses in which you will require alternate format material.<br />

        <?PHP
		
			//e-Text
	$result = mysql_query("SELECT * FROM a_alternate_request_timeframes WHERE timeframe_start <='$today_date' AND timeframe_end >='$today_date'");
	$retrieved_value = mysql_fetch_array($result);
	$timeframe_unique_id_fdB = $retrieved_value['timeframe_unique_id'];
	$timeframe_name_fdB = $retrieved_value['timeframe_name'];
	$timeframe_start_fdB = $retrieved_value['timeframe_start'];
	$timeframe_start_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value['timeframe_start']));
	$timeframe_end_fdB = $retrieved_value['timeframe_end'];
	$timeframe_end_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value['timeframe_end']));
	if(!$timeframe_unique_id_fdB)
		{
		//echo "[$timeframe_unique_id_fdB]";
		$result_3 = mysql_query("SELECT * FROM a_alternate_request_timeframes WHERE timeframe_start >'$today_date'");
		$retrieved_value_3 = mysql_fetch_array($result_3);
		$timeframe_unique_id_next_fdB = $retrieved_value_3['timeframe_unique_id'];
		$timeframe_start_fdB = $retrieved_value_3['timeframe_start'];
		$timeframe_start_next_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_3['timeframe_start']));
		$timeframe_end_fdB = $retrieved_value_3['timeframe_end'];
		$timeframe_end_next_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_3['timeframe_end']));
		}
		
		if($timeframe_unique_id_fdB)
			{
			echo "<BR>The current registration started on <B>$timeframe_start_fdB_verbose</B> and will end on <B>$timeframe_end_fdB_verbose</B>.";
			echo "<BR><BR><a href='$PHP_SELF?action=alternateFormatRequest'>Returning Students</a>";
			}
		if(!$timeframe_unique_id_fdB)
			{
			echo "The registration is now <strong>closed</strong></B>.";
			if($timeframe_unique_id_next_fdB)
				{
				echo "<BR>The next registration starts on <B>$timeframe_start_next_fdB_verbose</B> and will end on <B>$timeframe_end_next_fdB_verbose</B>.";
				}
			if(!$timeframe_unique_id_next_fdB)
				{
				echo "<BR>The administrator has not yet specified when the next registration will start.";
				}
			echo "<BR><BR><a href='$PHP_SELF?action=alternateFormatRequest'>Returning Students</a>";
			}
		
                	//---perform check to ensure that the first-time user is not used more than once (after the first/initial submission)
                        
                        //set the database connection variables
                        require_once("mysqlArray.php");
                        $connection_name = "AcademicLearningServices";
                        $dbcnx = @mysqlLogin($connection_name);	
						//AcademicLearningServices
                        //echo "ALC_username: [$ALC_username]<P>";
                        $result = mysql_query("SELECT * FROM a_user WHERE user_novell_id='$ALC_username'");

                        $retrieved_value = mysql_fetch_array($result);
                        $user_id_fdB = $retrieved_value['user_id']; //assigned user id in the table
                        
                        //echo "user_id: [$user_id_fdB]";
	
			$search_dB = mysql_query("SELECT request_id FROM a_alternate_request WHERE user_id='$user_id_fdB'");	
			$myrow = mysql_fetch_array($search_dB);
			$request_id_fdB = $myrow["request_id"];
            //echo "request_id: [$request_id_fdB]";
			
			if($request_id_fdB) //request ID already exists in dB, do not process (ie. the student has already submitted an alternate format request) another request from this user
				{
				echo "<BR><BR><B>First-Time E-text User</B>";
				}
			else
				{
		        echo "<BR><BR><B><a href='$PHP_SELF?action=alternateFormatRequestFirstTime'>First-Time E-text User</a></B>";
                }
		?>	
          </td>
        </tr>
</table>
	  <br />
	  <table width="100%%" border="0" cellpadding="5" class="border_aa">
	    <tr>
	      <td width="1%" align="left" valign="top"><img src="_img/_icons/calendar_128x128.png" width="128" height="128" alt="Exam Booking" /></td>
	      <td width="99%" align="left" valign="top"><span class='menuTitle'>Exam Booking</span><br />
	        <?PHP
			//Exam Registrations
			//echo "$today_date<BR>";
			$result_exams = mysql_query("SELECT * FROM timeframes WHERE application_type LIKE '%_Registration' AND timeframe_start <='$today_date' AND timeframe_end >='$today_date' ORDER BY timeframe_start ASC");
			
			//$result_form_type = mysql_query("SELECT * FROM " . $table . " WHERE timeframe_start <='$today_date' AND timeframe_end >='$today_date' AND application_type='Midterm_Registration'");
			//$retrieved_value = mysql_fetch_array($result_form_type);
			//$timeframe_unique_id_fdB = $retrieved_value['timeframe_unique_id'];
			
			//$result_exams = mysql_query("SELECT * FROM timeframes WHERE timeframe_unique_id='20130830143507-fngq961'");
			if($retrieved_value_exams = mysql_fetch_array($result_exams))
				{
				//echo "data: [$result_exams]";
				do
					{
					//echo "[yes]";
					$timeframe_unique_id_exams_fdB = $retrieved_value_exams['timeframe_unique_id'];
					//echo "[$timeframe_unique_id_exams_fdB]<BR>";
					$application_type_fdB = $retrieved_value_exams['application_type'];
						if($application_type_fdB=="Midterm_Registration") { $application_type = "Midterm Exam"; $url = "$PHP_SELF?action=midtermExams"; }
						if($application_type_fdB=="Final_Registration") { $application_type = "Final Exam"; $url = "$PHP_SELF?action=finalExams";}
						if($application_type_fdB=="MBA_Registration") { $application_type = "MBA Exam"; $url = "$PHP_SELF?action=mbaExams";}
					$timeframe_name_exams_fdB = $retrieved_value_exams['timeframe_name'];
					$timeframe_start_exams_fdB = $retrieved_value_exams['timeframe_start'];
					$timeframe_start_exams_fdB_verbose = date('F j, Y', strtotime($retrieved_value_exams['timeframe_start']));
					$timeframe_end_exams_fdB = $retrieved_value_exams['timeframe_end'];
					$timeframe_end_exams_fdB_verbose = date('F j, Y', strtotime($retrieved_value_exams['timeframe_end']));
					if($timeframe_unique_id_exams_fdB)
						{
							if($_SESSION['campus_fF']=="brantford" && $application_type=="MBA Exam"){
								//Do nothing
							}
							else{
								echo "<BR><BR>$image_red_bullet <B>$application_type ($timeframe_name_exams_fdB)</B> registration <A HREF='$url'>NOW available</A>!";
								echo "<BR>Registration period: <B>$timeframe_start_exams_fdB_verbose</B> - <B>$timeframe_end_exams_fdB_verbose</B>";
							}
						}
					if(!$timeframe_unique_id_exams_fdB)
						{
						$result_exams_2 = mysql_query("SELECT * FROM timeframes WHERE timeframe_start >'$today_date' ORDER BY timeframe_start ASC");
						$retrieved_value_exams_2 = mysql_fetch_array($result_exams_2);
						$timeframe_unique_id_next_exams_fdB = $retrieved_value_exams_2['timeframe_unique_id'];
						$timeframe_start_exams_fdB = $retrieved_value_exams_2['timeframe_start'];
						$timeframe_start_next_exams_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_exams_2['timeframe_start']));
						$timeframe_end_exams_fdB = $retrieved_value_exams_2['timeframe_end'];
						$timeframe_end_next_exams_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value_exams_2['timeframe_end']));

						echo "<B>Midterm</B> registrations are now <strong>closed</strong></B>.";
						if($timeframe_unique_id_next_exams_fdB)
							{
							echo "<P>The next <B>Midterm</B> registration starts on <B>$timeframe_start_next_exams_fdB_verbose</B> and will end on <B>$timeframe_end_next_exams_fdB_verbose</B> at 11:59 pm.";
							}
						if(!$timeframe_unique_id_next_exams_fdB)
							{
							echo "<P>The administrator has not yet specified when the next <B>Midterm</B> registration will start.";
							}
						}
			
					}
				while($retrieved_value_exams=mysql_fetch_array($result_exams));
				}

			//FUTURE EXAMS		
			$result_exams_future = mysql_query("SELECT * FROM timeframes WHERE application_type LIKE '%_Registration' AND timeframe_start > '$today_date' ORDER BY timeframe_start ASC");
			if($retrieved_value_exams_future = mysql_fetch_array($result_exams_future))
				{
				echo "<BR><BR><B><U>FUTURE EXAMS:</U></B>";
				do
					{
					$timeframe_unique_id_exams_future_fdB = $retrieved_value_exams_future['timeframe_unique_id'];
					$application_type_fdB = $retrieved_value_exams_future['application_type'];
						if($application_type_fdB=="Midterm_Registration") { $application_type = "Midterm Exam"; }
						if($application_type_fdB=="Final_Registration") { $application_type = "Final Exam"; }
							if($application_type_fdB=="MBA_Registration") { $application_type = "MBA Exam"; $url = "$PHP_SELF?action=mbaExams";}
					$timeframe_name_exams_future_fdB = $retrieved_value_exams_future['timeframe_name'];
					$timeframe_start_exams_future_fdB = $retrieved_value_exams_future['timeframe_start'];
					$timeframe_start_exams_future_fdB_verbose = date('F j, Y', strtotime($retrieved_value_exams_future['timeframe_start']));
					$timeframe_end_exams_future_fdB = $retrieved_value_exams_future['timeframe_end'];
					$timeframe_end_exams_future_fdB_verbose = date('F j, Y', strtotime($retrieved_value_exams_future['timeframe_end']));
					if($timeframe_unique_id_exams_future_fdB)
						{
						echo "<BR><BR>$image_08 <B>$application_type ($timeframe_name_exams_future_fdB)</B>";
						echo "<BR>Available from: <B>$timeframe_start_exams_future_fdB_verbose</B> - <B>$timeframe_end_exams_future_fdB_verbose</B>";
						}
					}
				while($retrieved_value_exams_future=mysql_fetch_array($result_exams_future));
				}
			//else
				//{
				//echo "<BR><BR>No exam timeframes available at this time.";
				//}
		
		
		//echo "[$application_type_fdB]<BR>";
		
		//if($application_type_fdB=="Midterm_Registration")
			//{
			
			/*
			if($timeframe_unique_id_exams_fdB)
				{
				echo "The current <B>Midterm</B> registration started on <B>$timeframe_start_exams_fdB_verbose</B> and will end on <B>$timeframe_end_exams_fdB_verbose</B> at 11:59 pm.";
				}
			*/
			
			//}
		?>
        
        
        </td>
        </tr>
</table>

