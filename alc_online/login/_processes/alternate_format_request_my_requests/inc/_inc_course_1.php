<table width="75%"  border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td width="25%">&nbsp;</td>
    <td width="25%"><strong>Subject<font color="#CC0000"><?PHP echo "$image_red_bullet"; ?></font></strong></td>
    <td width="25%"><strong>Code<font color="#CC0000"><?PHP echo "$image_red_bullet"; ?></font></strong></td>
    <td width="25%"><strong>Section<font color="#CC0000"><?PHP echo "$image_red_bullet"; ?></font></strong></td>
  </tr>
  <tr>
    <td><strong>Course 1</strong></td>
    <td><input name="subject_1_fF" type="text" value="<?PHP if($subject_1_fdB) { echo "$subject_1_fdB"; } else { echo "$subject_1_fF"; } ?>" size="3" maxlength="2" <?PHP if($error_subject_1_fF=="1") { echo "style='background-color: #ffff99';"; } ?> /></td>
    <td><input name="code_1_fF" type="text" value="<?PHP if($code_1_fdB) { echo "$code_1_fdB"; } else { echo "$code_1_fF"; } ?>" size="5" maxlength="4" <?PHP if($error_code_1_fF=="1") { echo "style='background-color: #ffff99';"; } ?> /></td>
    <td><input name="section_1_fF" type="text" value="<?PHP if($section_1_fdB) { echo "$section_1_fdB"; } else { echo "$section_1_fF"; } ?>" size="3" maxlength="2" <?PHP if($error_section_1_fF=="1") { echo "style='background-color: #ffff99';"; } ?> /></td>
  </tr>
</table>
