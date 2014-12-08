<table width="75%"  border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td width="25%"><strong>Course 2</strong></td>
    <td width="25%"><input name="subject_2_fF" type="text" value="<?PHP if($subject_2_fdB) { echo "$subject_2_fdB"; } else { echo "$subject_2_fF"; } ?>" size="3" maxlength="2" <?PHP if($error_subject_2_fF=="1") { echo "style='background-color: #ffff99';"; } ?> /></td>
    <td width="25%"><input name="code_2_fF" type="text" value="<?PHP if($code_2_fdB) { echo "$code_2_fdB"; } else { echo "$code_2_fF"; } ?>" size="5" maxlength="4" <?PHP if($error_code_2_fF=="1") { echo "style='background-color: #ffff99';"; } ?> /></td>
    <td width="25%"><input name="section_2_fF" type="text" value="<?PHP if($section_2_fdB) { echo "$section_2_fdB"; } else { echo "$section_2_fF"; } ?>" size="3" maxlength="2" <?PHP if($error_section_2_fF=="1") { echo "style='background-color: #ffff99';"; } ?> /></td>
  </tr>
</table>
