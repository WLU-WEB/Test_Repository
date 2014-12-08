<?PHP
$image_00 = "<img src='_images/1x1_transparent.gif' alt='Transparent Place Holder' width='2' height='2' />";

?>

<form action="<?PHP $PHP_SELF ?>?action=alternateFormatRequestViewMyRequests&amp;subAction=alternateFormatRequestUpdate" method='post' name='user_registration_update' id="user_registration_update">
<table width="100%"  border="0" cellspacing="0" cellpadding="2" class="border_a">
  <tr align="left" valign="top">
    <td valign="top" bgcolor="#DADADA"><strong><?PHP echo "$image_01"; ?></strong></td>
    <td colspan="2" align="right" bgcolor="#DADADA"><?PHP echo "<B>$timeframe_name_fdB</B> ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)"; ?></td>
  </tr>
  <tr align="left" valign="top">
    <td valign="top">&nbsp;</td>
    <td colspan="2">
      <?PHP if($subject_1_fdB) { include ("_inc_course_1.php"); } ?>
      <?PHP if($subject_2_fdB) { echo "$image_00"; include ("_inc_course_2.php"); } ?>
      <?PHP if($subject_3_fdB) { echo "$image_00"; include ("_inc_course_3.php"); } ?>
      <?PHP if($subject_4_fdB) { echo "$image_00"; include ("_inc_course_4.php"); } ?>
      <?PHP if($subject_5_fdB) { echo "$image_00"; include ("_inc_course_5.php"); } ?>
      </td>
  </tr>
  <tr align="left" valign="top">
    <td width="4%" valign="middle" bgcolor="#EAEAEA">&nbsp;</td>
    <td width="84%" align="left" valign="bottom" bgcolor="#EAEAEA"><?php echo "Submitted: <I>$date_entered_verbose_fdB</I>"; if($date_updated_fdB!='0000-00-00 00:00:00') { echo "<BR>Edited: <I>$date_updated_verbose_fdB </I>"; } if($edit_count_fdB==1) { echo "($edit_count_fdB edit)"; } if($edit_count_fdB>1) { echo "($edit_count_fdB edits)"; } ?></td>
    <td width="12%" align="right" valign="baseline" bgcolor="#EAEAEA"><input type='hidden' name='year' value="<?PHP echo "$subActionYear"; ?>" />
      <input type='hidden' name='reqID' value="<?PHP echo "$request_id_fdB"; ?>" />
      <input type='hidden' name='inserted_in_dB' value="<?PHP echo "$inserted_in_dB"; ?>" />
      <input type="submit" name="submit_step" <?PHP echo "$button_value $button_status"; ?> /></td>
  </tr>
</table>
</form>
<br />
