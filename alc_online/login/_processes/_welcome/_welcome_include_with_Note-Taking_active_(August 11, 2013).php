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
?>

	  <table width="100%%" border="0" cellpadding="5">
	    <tr>
	      <td width="1%" align="left" valign="top"><img src='_images/1x1_transparent.gif' alt='Transparent Place Holder' width='128' height='1' /></td>
	      <td width="99%" align="left" valign="top"><strong>Welcome to Accessible Learning Centre! </strong></td>
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
          <br />
        <?PHP
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
				echo "<BR>The next registration starts on <B>$timeframe_start_next_fdB_verbose</B and will end on <B>$timeframe_end_next_fdB_verbose</B>.";
				}
			if(!$timeframe_unique_id_next_fdB)
				{
				echo "<BR>The administrator has not yet specified when the next registration will start.";
				}
			echo "<BR><BR><a href='$PHP_SELF?action=alternateFormatRequest'>Returning Students</a>";
			}
		
		echo "<BR><BR><B><a href='$PHP_SELF?action=alternateFormatRequestFirstTime'>First-Time E-text User</a></B>";
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
			$result_exams = mysql_query("SELECT * FROM timeframes WHERE application_type LIKE '%_Registration' AND timeframe_start <='$today_date' AND timeframe_end >='$today_date' ORDER BY timeframe_start ASC");
			if($retrieved_value_exams = mysql_fetch_array($result_exams))
				{
				do
					{
					$timeframe_unique_id_exams_fdB = $retrieved_value_exams['timeframe_unique_id'];
					//echo "[$timeframe_unique_id_exams_fdB]<BR>";
					$application_type_fdB = $retrieved_value_exams['application_type'];
						if($application_type_fdB=="Midterm_Registration") { $application_type = "Midterm Exam"; $url = "$PHP_SELF?action=midtermExams"; }
						if($application_type_fdB=="Final_Registration") { $application_type = "Final Exam"; $url = "$PHP_SELF?action=finalExams";}
					$timeframe_name_exams_fdB = $retrieved_value_exams['timeframe_name'];
					$timeframe_start_exams_fdB = $retrieved_value_exams['timeframe_start'];
					$timeframe_start_exams_fdB_verbose = date('F j, Y', strtotime($retrieved_value_exams['timeframe_start']));
					$timeframe_end_exams_fdB = $retrieved_value_exams['timeframe_end'];
					$timeframe_end_exams_fdB_verbose = date('F j, Y', strtotime($retrieved_value_exams['timeframe_end']));
					if($timeframe_unique_id_exams_fdB)
						{
						echo "<BR><BR>$image_red_bullet <B>$application_type ($timeframe_name_exams_fdB)</B> registration <A HREF='$url'>NOW available</A>!";
						echo "<BR>Registration period: <B>$timeframe_start_exams_fdB_verbose</B> - <B>$timeframe_end_exams_fdB_verbose</B>";
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
			else
				{
				echo "<BR><BR>No exam timeframes available at this time.";
				}
		
		
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
	  <br />
	  <table width="100%%" border="0" cellpadding="5" class="border_a">
	    <tr>
	      <td width="1%" align="left" valign="top"><img src="_img/_icons/note_takers_2.png" width="128" height="128" alt="Note-taking Program Evaluation" /></td>
	      <td width="99%" align="left" valign="top"><SPAN CLASS='menuTitle'>Note-taking Program Evaluation</SPAN><br />
	        <br />
	        <p>The Accessible Learning Centre requests your constructive feedback on our note-taking program. Your feedback is important to making our program a success. The evaluation form should take approximately five to ten minutes to complete. Your participation is voluntary and anonymous and all forms will be securely stored and reviewed only by staff in the Accessible Learning Centre. The information gathered will be included in a summary report on the Note-taking Program, following which, the information will be destroyed.<br />
	          <br />
	          <strong>NOTE: </strong>Your Network login will not be connected to your responses in any way. <br />
	          <br />
	          The forms have been reviewed and approved by Shereen Rowe, University Secretary and General Counsel, to ensure adherence to ethical principles in the collection of information from human subjects. If you have any questions or concerns you may contact Shereen Rowe at <a href="mailto:srowe@wlu.ca">srowe@wlu.ca</a>, or (519) 884-0710, ext. 2037. </p>
            <p>By completing the form you are confirming that you have read and understood the purpose of this evaluation and consent to your participation. If you have any questions you may contact <strong>Erin Riggin</strong> at <a href="mailto:eriggin@wlu.ca">eriggin@wlu.ca</a> or (519) 884-0710, ext. 2715.</p>
            <p>Thank you for participating in this evaluation. We appreciate your feedback!<br />
              <br />
              <?PHP 
				if($user_active_fdB=="0")
					{
					include ("_firstTime_include.php"); 
					}
				else
					{
					include ("_other_include.php");
					}	
				?>
            </p></td>
        </tr>
</table>
	  <P>&nbsp;</P>      