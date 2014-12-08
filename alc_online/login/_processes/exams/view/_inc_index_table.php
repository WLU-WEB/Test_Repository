<form action="<?PHP echo "$PHP_SELF?action=viewExams"; ?>" method='post' name='student_registration_cancellation' id="student_registration_cancellation">
<table width="100%"  border="0" cellspacing="0" cellpadding="3" class="border_profile">
  <tr align="left" valign="top">
    <td width="1%" align="right" valign="middle" bgcolor="#E6E6E6"><div align="right"><?PHP echo "$image_red_bullet"; ?></div></td>
    <td width="59%" align="left" valign="top" bgcolor="#E6E6E6"><?php echo "<h1>$application_type</h1>: <B>$course_fdB $section_fdB $term_fdB </B>"; ?></td>
    <td width="40%" align="left" valign="top" bgcolor="#E6E6E6">&nbsp;</td>
  </tr>
  <tr align="left" valign="top">
    <td align="right" valign="top"><?PHP echo "$image_08"; ?></td>
    <td align="left" valign="top"><?php echo "$timeframe_start_verbose - $timeframe_end_verbose"; ?></td>
    <td width="28%" rowspan="2" align="left" valign="top"><strong><?PHP echo "$image_red_bullet"; ?></strong> Cancellation Reason:<br />
      <textarea name="cancelReason[]" cols="25" rows="2" class="formText" <?php if("$error_"."$cancel_name"=="1") { echo "style='background-color: #FFFF99';"; } ?>></textarea>
      <br />
      <?PHP 
		  echo "<INPUT TYPE='hidden' NAME='rid' VALUE='$registration_id_fdB'>"; 
		  echo "<INPUT TYPE='hidden' NAME='tid' VALUE='$timeframe_unique_id_fdB'>"; 
		  //echo "<INPUT TYPE='hidden' NAME='cid' VALUE='$cancel_name'>"; 
		  //echo "<INPUT TYPE='hidden' NAME='cid' VALUE='$cancel_name'>"; 
		  echo "<BR><input type='checkbox' name='checkbox_rid' value=$registration_id_fdB ID='$registration_id_fdB'>"; 
		  echo "<label for='$registration_id_fdB'>Yes, confirm cancellation</label>";
		   ?>
      <input type='submit' name='Submit' value='Cancel' /></td>
  </tr>
  <tr align="left" valign="top">
    <td align="right" valign="top"></td>
    <td align="left" valign="top">
      <?php 
	echo "$image_08 Course: $course_fdB $section_fdB $term_fdB"; 
	echo "<br />$image_08 Instructor: $instructor_fdB"; 
	if($date_required_fdB!="0000-00-00") {  echo "<br />$image_08 Date Required: <strong>$date_required_fdB_verbose</strong>";  }
 	echo "<br />$image_08 <I>registered on: $date_fdB</I>"; ?>
    </td>
    </tr>
</table>
</form>
<br />
