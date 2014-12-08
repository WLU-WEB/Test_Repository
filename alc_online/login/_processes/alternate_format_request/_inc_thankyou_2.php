<FORM NAME="theForm" ACTION="<?php echo "$PHP_SELF?action=alternateFormatRequest"; ?>" METHOD="post">
  <TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="2">
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD width="1%"><?php //$iw="64"; $ih="1"; echo "$image_00"; ?><img src='_images/1x1_transparent.gif' alt='Transparent Place Holder' width='64' height='1' /></TD>
      <TD width="99%"><?php if(count($errors)>0) { include ("_includes/missing_questions.php"); } ?></TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD>&nbsp;</TD>
      <TD>&nbsp;</TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD>&nbsp;</TD>
      <TD align="left"><strong>Thank you <?PHP echo "$first_name_fdB"; ?>!</strong></TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD>&nbsp;</TD>
      <TD>&nbsp;</TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD valign="top">&nbsp;</TD>
      <TD><p>Your information for the Alternate Format Request has been successfully received.<br />
        <br />
        An confirmation e-mail has been sent to <?PHP echo "<B><I>$student_email_for_email</I></B>"; ?>.<br />
        <br />
        Please check your e-mail and retain your receipt as proof-of-purchase in order to pick up your material.</p>
        <p>Click here to return back to the <a href="index.php">Accessible Learning Centre Online Forms Homepage</a><br />
          <br />
      </p></TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD>&nbsp;</TD>
      <TD>&nbsp;</TD>
    </TR>
  </TABLE>
</FORM>
