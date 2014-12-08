<FORM NAME="theForm" ACTION="<?php echo "$PHP_SELF?action=alternateFormatRequest"; ?>" METHOD="post">
  <TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="2">
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD width="1%"><?php //$iw="64"; $ih="64"; print "$image_00"; ?><img src='_images/1x1_transparent.gif' alt='Transparent Place Holder' width='64' height='1' /></TD>
      <TD width="99%"><?php if(count($errors)>0) { include ("_includes/missing_questions.php"); } ?></TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD>&nbsp;</TD>
      <TD><?PHP echo "Registering for <B>$timeframe_name_fdB</B> ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)"; ?></TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD>&nbsp;</TD>
      <TD><table width="100%" border="0" cellspacing="0" cellpadding="3">
        <tr>
          <td width="1%" align="left" valign="middle"><strong><?PHP echo "$image_red_bullet"; ?></strong></td>
          <td width="99%" align="left" valign="middle"><h1>NAME: </h1><strong><?PHP echo "$first_name_fdB $last_name_fdB"; ?></strong></td>
        </tr>
        <tr>
          <td align="left" valign="middle"><strong><?PHP echo "$image_red_bullet"; ?></strong></td>
          <td align="left" valign="middle"><h1>E-MAIL: </h1><?PHP echo "$user_name_fdB" . "@mylaurier.ca"; ?></td>
        </tr>
        <tr>
          <td align="left" valign="middle"><strong><?PHP echo "$image_red_bullet"; ?></strong></td>
          <td align="left" valign="middle"><h1>ID: </h1><?PHP echo "$user_laurier_id_fdB"; ?></td>
        </tr>
      </table></TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD>&nbsp;</TD>
      <TD>&nbsp;</TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD>&nbsp;</TD>
      <TD><strong>Course Information</strong> (up to 5 courses)</TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD align="right" valign="top">&nbsp;</TD>
      <TD><table width="100%"  border="0" cellpadding="2" cellspacing="0">
          <tr>
            <td><strong>Subject<font color="#CC0000"> <?PHP echo "$image_red_bullet"; ?></font></strong></td>
            <td><strong>Code <font color="#CC0000"><?PHP echo "$image_red_bullet"; ?></font></strong></td>
            <td><strong>Section <font color="#CC0000"><?PHP echo "$image_red_bullet"; ?></font></strong></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="70"><input name="subject_1_fF" type="text" size="3" maxlength="2" value="<? echo $subject_1_fF; ?>" <?php if($error_subject_1_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> /></td>
            <td width="70"><input name="code_1_fF" type="text" size="5" maxlength="4" value="<? echo $code_1_fF; ?>" <?php if($error_code_1_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> /></td>
            <td width="70"><input name="section_1_fF" type="text" size="3" maxlength="2" value="<? echo $section_1_fF; ?>" <?php if($error_section_1_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> /></td>
            <td width="390"><a href="#" onClick="setVisibility('twoDIV','inline'); return false;"><?php echo "$image_20"; ?></a><a href="#" onClick="setVisibility('threeDIV','inline'); return false;"></a></td>
          </tr>
        </table>
          <?PHP if($subject_2_fF) { echo "<DIV ID='twoDIV' style='display:inline'>";} else { echo "<DIV ID='twoDIV' style='display:none'>"; } ?>
          <table width="100%"  border="0" cellpadding="2" cellspacing="0">
            <tr>
              <td width="70"><input name="subject_2_fF" type="text" size="3" maxlength="2" id="subject_2_fF" value="<? echo $subject_2_fF; ?>" <?php if($error_subject_2_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ></td>
              <td width="70"><input name="code_2_fF" type="text" size="5" maxlength="4" id="code_2_fF" value="<? echo $code_2_fF; ?>" <?php if($error_code_2_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ></td>
              <td width="70"><input name="section_2_fF" type="text" size="3" maxlength="2" id="section_2_fF" value="<? echo $section_2_fF; ?>" <?php if($error_section_2_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
              <td width="390"><a href="#" onClick="setVisibility('threeDIV','inline'); return false;"><?php echo "$image_20"; ?></a> <a href="#" onClick="document.theForm.subject_2_fF.value=''; document.theForm.code_2_fF.value=''; document.theForm.section_2_fF.value=''; setVisibility('twoDIV','none'); return false;"><?php echo "$image_21"; ?></a></td>
            </tr>
          </table>
          <?PHP if($subject_3_fF) { echo "<DIV ID='threeDIV' style='display:inline'>";} else { echo "<DIV ID='threeDIV' style='display:none'>"; } ?>
          <table width="100%"  border="0" cellpadding="2" cellspacing="0">
            <tr>
              <td width="70"><input name="subject_3_fF" type="text" size="3" maxlength="2" id="subject_3_fF" value="<? echo $subject_3_fF; ?>" <?php if($error_subject_3_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ></td>
              <td width="70"><input name="code_3_fF" type="text" size="5" maxlength="4" id="code_3_fF" value="<? echo $code_3_fF; ?>" <?php if($error_code_3_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
              <td width="70"><input name="section_3_fF" type="text" size="3" maxlength="2" id="section_3_fF" value="<? echo $section_3_fF; ?>" <?php if($error_section_3_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
              <td width="390"><a href="#" onClick="setVisibility('fourDIV','inline'); return false;"><?php echo "$image_20"; ?></a> <a href="#" onClick="document.theForm.subject_3_fF.value=''; document.theForm.code_3_fF.value=''; document.theForm.section_3_fF.value=''; setVisibility('threeDIV','none'); return false;"><?php echo "$image_21"; ?></a></td>
            </tr>
          </table>
          <?PHP if($subject_4_fF) { echo "<DIV ID='fourDIV' style='display:inline'>";} else { echo "<DIV ID='fourDIV' style='display:none'>"; } ?>
          <table width="100%"  border="0" cellpadding="2" cellspacing="0">
            <tr>
              <td width="70"><input name="subject_4_fF" type="text" size="3" maxlength="2" id="subject_4_fF" value="<? echo $subject_4_fF; ?>" <?php if($error_subject_4_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ></td>
              <td width="70"><input name="code_4_fF" type="text" size="5" maxlength="4" id="code_4_fF" value="<? echo $code_4_fF; ?>" <?php if($error_code_4_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ></td>
              <td width="70"><input name="section_4_fF" type="text" size="3" maxlength="2" id="section_4_fF" value="<? echo $section_4_fF; ?>" <?php if($error_section_4_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
              <td width="390"><a href="#" onClick="setVisibility('fiveDIV','inline'); return false;"><?php echo "$image_20"; ?></a> <a href="#" onClick="document.theForm.subject_4_fF.value=''; document.theForm.code_4_fF.value=''; document.theForm.section_4_fF.value=''; setVisibility('fourDIV','none'); return false;"><?php echo "$image_21"; ?></a></td>
            </tr>
          </table>
          <?PHP if($subject_5_fF) { echo "<DIV ID='fiveDIV' style='display:inline'>";} else { echo "<DIV ID='fiveDIV' style='display:none'>"; } ?>
          <table width="100%"  border="0" cellpadding="2" cellspacing="0">
            <tr>
              <td width="70"><input name="subject_5_fF" type="text" size="3" maxlength="2" id="subject_5_fF" value="<? echo $subject_5_fF; ?>" <?php if($error_subject_5_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ></td>
              <td width="70"><input name="code_5_fF" type="text" size="5" maxlength="4" id="code_5_fF" value="<? echo $code_5_fF; ?>" <?php if($error_code_5_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
              <td width="70"><input name="section_5_fF" type="text" size="3" maxlength="2" id="section_5_fF" value="<? echo $section_5_fF; ?>" <?php if($error_section_5_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
              <td width="390"><a href="#" onClick="document.theForm.subject_5_fF.value=''; document.theForm.code_5_fF.value=''; document.theForm.section_5_fF.value=''; setVisibility('fiveDIV','none'); return false;"><?php echo "$image_21"; ?></a></td>
            </tr>
        </table></TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD>&nbsp;</TD>
      <TD>&nbsp;</TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD>&nbsp;</TD>
      <TD>&nbsp;</TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD>&nbsp;</TD>
      <TD><?PHP
      if(!$user_laurier_id_fdB) 
	  	{ 
	  	echo "<input type='submit' name='submit' value='Continue' DISABLED />";
	   	echo "<P><h1>Cannot continue due to missing Laurier Student ID. Please contact <B>etext@wlu.ca</B></h1>";
		} 
	  else 
	  	{ 
		echo "<input type='submit' name='submit' value='Continue' />"; 
		} 
	  ?>
      </TD>
    </TR>
  </TABLE>
<?PHP
echo "<INPUT TYPE=hidden NAME=timeframe VALUE='$timeframe_unique_id_fdB'>";
echo "<INPUT TYPE=hidden NAME=generated_alternative_request_id VALUE='$generated_alternative_request_id'>";
?>
</FORM>
