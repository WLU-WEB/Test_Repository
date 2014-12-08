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
      <TD align="left"><strong>Confirmation<font color="#CC0000"><?PHP echo "$image_red_bullet"; ?></font></strong></TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD>&nbsp;</TD>
      <TD>&nbsp;</TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD valign="top">&nbsp;</TD>
      <TD><TABLE width="100%" BORDER="0" CELLPADDING="2" CELLSPACING="0">
          <TR ALIGN="LEFT" VALIGN="MIDDLE">
            <TD valign="baseline"><INPUT TYPE="checkbox" NAME="confirmation_01_fF" VALUE="Yes"></TD>
            <TD> You agree to not share the alternate format material with anyone else. Due to copyright laws, the materials transcribed are for your use only. It is illegal for you to share these documents. Any failure to meet this obligation will be subject to disciplinary action by Laurier and may be subject to further legal action by the publisher.</TD>
          </TR>
          <TR ALIGN="LEFT" VALIGN="MIDDLE">
            <TD valign="baseline"><INPUT TYPE="checkbox" NAME="confirmation_02_fF" VALUE="Yes"></TD>
            <TD>If the professor announces changes to your required material, you agree to notify Accessible Learning by sending details of the change to <a href="mailto:etext@wlu.ca">etext@wlu.ca</a> within one week to update your request.</TD>
          </TR>
          <TR ALIGN="LEFT" VALIGN="MIDDLE">
            <TD valign="baseline"><INPUT TYPE="checkbox" NAME="confirmation_03_fF" VALUE="Yes"></TD>
            <TD> If for any reason you no longer require alternate formatted materials, e.g. dropped courses, you agree to notify Douglas at <a href="mailto:etext@wlu.ca">etext@wlu.ca</a> within one week to cancel your request.</TD>
          </TR>
          <TR ALIGN="LEFT" VALIGN="MIDDLE">
            <TD valign="baseline"><INPUT TYPE="checkbox" NAME="confirmation_04_fF" VALUE="Yes"></TD>
            <TD> Some text may be difficult to transcribe due to the nature of its content, e.g. graphics, equations or symbols. If your text has many formulas or symbols that are not on a regular keyboard, please see the Transcription Technologist to discuss options for alternate format.</TD>
          </TR>
          <TR ALIGN="LEFT" VALIGN="MIDDLE">
            <TD valign="baseline"><INPUT TYPE="checkbox" NAME="confirmation_05_fF" VALUE="Yes"></TD>
            <TD> Scanning Options: In some cases, books will need to be scanned by ALC if they are not available from the publishers. You will receive an e-mail notification if this is necessary. You may choose to scan your books yourself.</TD>
          </TR>
          <TR ALIGN="LEFT" VALIGN="MIDDLE">
            <TD width="1%" valign="baseline"><INPUT TYPE="checkbox" NAME="confirmation_06_fF" VALUE="Yes"></TD>
            <TD width="99%">Yes, information is correct. </TD>
          </TR>
          <TR ALIGN="LEFT" VALIGN="MIDDLE">
            <TD valign="baseline">&nbsp;</TD>
            <TD>&nbsp;</TD>
          </TR>
          <TR ALIGN="LEFT" VALIGN="MIDDLE">
            <TD valign="baseline">&nbsp;</TD>
            <TD>&nbsp;</TD>
          </TR>
      </TABLE></TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD>&nbsp;</TD>
      <TD><input type="button" value="< Go Back" onclick="history.go(-1)" /> 
          <input type="submit" name="submit" value="Submit" /></TD>
    </TR>
  </TABLE>
<?PHP
echo "<INPUT TYPE=hidden NAME=timeframe VALUE='$timeframe'>"; //note how this changed from the previous HIDDEN page (_inc_index.php): here, timeframe holds the value of "$timeframe" as pulled from the previous step
echo "<INPUT TYPE=hidden NAME=generated_alternative_request_id VALUE='$generated_alternative_request_id'>";
echo "<INPUT TYPE=hidden NAME=subject_1_fF VALUE='$subject_1_fF'>";
echo "<INPUT TYPE=hidden NAME=code_1_fF VALUE='$code_1_fF'>";
echo "<INPUT TYPE=hidden NAME=section_1_fF VALUE='$section_1_fF'>";
echo "<INPUT TYPE=hidden NAME=subject_2_fF VALUE='$subject_2_fF'>";
echo "<INPUT TYPE=hidden NAME=code_2_fF VALUE='$code_2_fF'>";
echo "<INPUT TYPE=hidden NAME=section_2_fF VALUE='$section_2_fF'>";
echo "<INPUT TYPE=hidden NAME=subject_3_fF VALUE='$subject_3_fF'>";
echo "<INPUT TYPE=hidden NAME=code_3_fF VALUE='$code_3_fF'>";
echo "<INPUT TYPE=hidden NAME=section_3_fF VALUE='$section_3_fF'>";
echo "<INPUT TYPE=hidden NAME=subject_4_fF VALUE='$subject_4_fF'>";
echo "<INPUT TYPE=hidden NAME=code_4_fF VALUE='$code_4_fF'>";
echo "<INPUT TYPE=hidden NAME=section_4_fF VALUE='$section_4_fF'>";
echo "<INPUT TYPE=hidden NAME=subject_5_fF VALUE='$subject_5_fF'>";
echo "<INPUT TYPE=hidden NAME=code_5_fF VALUE='$code_5_fF'>";
echo "<INPUT TYPE=hidden NAME=section_5_fF VALUE='$section_5_fF'>";
?>
</FORM>
