<form action="<?php echo "$PHP_SELF?action=alternateFormatRequest"; ?>" method="post" name="theForm" id="theForm">
  <table width="100%" border="0" cellspacing="0" cellpadding="2">
    <tr align="left" valign="middle">
      <td width="1%"><?php //$iw="64"; $ih="1"; echo "$image_00"; ?><img src='_images/1x1_transparent.gif' alt='Transparent Place Holder' width='64' height='1' /></td>
      <td width="99%"><?php if(count($errors)>0) { include ("_includes/missing_questions.php"); } ?></td>
    </tr>
    <tr align="left" valign="middle">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="left" valign="middle">
      <td>&nbsp;</td>
      <td align="left"><strong>Registrations Closed!</strong></td>
    </tr>
    <tr align="left" valign="middle">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="left" valign="middle">
      <td valign="top">&nbsp;</td>
      <td><p>At the present moment, the registration for Alternative Text is closed. Please check again!<br />
        <?PHP
		if($timeframe_unique_id_next_fdB)
			{
			echo "<BR>The next registration starts on <B>$timeframe_start_next_fdB_verbose</B and will end on <B>$timeframe_end_next_fdB_verbose</B>.";
			}
        else
			{
			echo "<BR>The administrator has not yet specified when the next registration will start.";
			}
		?>
        <br />
          <br />
      </p></td>
    </tr>
    <tr align="left" valign="middle">
      <td>&nbsp;</td>
      <td><strong>Steps to follow:</strong><br />
          <ol>
        <li>Textbooks must be purchased before any order will be executed--Keep your receipts!</li>
           <li>Your request will be considered in order of receipt following after requests that have been submitted on time</li>       
          <li><a href="Alt-FormatMissedDeadlineForm.pdf" target="_blank">Download and complete the following form with ALL information</a> (PDF form will open in a new window or tab)</li>
          <li>Bring form and receipts to 1C10A to initiate request</li>
          <li>Book a &quot;Material Pick-up Time&quot; to pick up your e-text (please note that the later the request, the deeper into the term for appointment availability)</li>
          <li>Diligently follow the additional steps for receiving your e-text (i.e., check RefShare frequently, and react to communications from the Transcription Technologist)</li>
          <li>All late requests will be referred to the consultant, and outcomes may lead to suspension or termination of the service</li>
      </ol></td>
    </tr>
    <tr align="left" valign="middle">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="left" valign="middle">
      <td>&nbsp;</td>
      <td>Click here to return back to the <a href="index.php">Accessible Learning Centre Online Forms Homepage</a></td>
    </tr>
  </table>
</form>
