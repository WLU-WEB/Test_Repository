<form action="<?PHP $PHP_SELF ?>?action=viewSubmissions&subActionYear=$subActionYear" method='post' name='view_the_submissions'>
<table width="100%"  border="0" cellspacing="0" cellpadding="2">
  <tr align="left" valign="top">
    <td width="4%" valign="middle"><DIV ALIGN="RIGHT"><STRONG><?PHP echo "$image_01"; ?></STRONG></DIV></td>
    <td><?php echo "<B>$cs_title_fdB</B> (<B>$category_name_fdB</B>: $session_name_fdB)"; ?></td>
  </tr>
  <tr align="left" valign="top">
    <td valign="middle"></td>
    <td><?PHP if($cs_date_fdB=="0000-00-00") { echo "$image_08 Date: TBD"; } else { echo "$image_08 Date: $cs_date_fdB_verbose"; } ?></td>
  </tr>
  <tr align="left" valign="top">
    <td valign="middle"></td>
    <td><?php echo "$image_08 Location & Time: $cs_location_fdB ($cs_time_fdB - $cs_time_end_fdB)"; ?></td>
  </tr>
    <?PHP
	if($cs_description_fdB)
		{
		echo "<tr align='left' valign='top'>";
		echo "<td valign='middle'>&nbsp;</td>";
		echo "<td>$image_08 Description: $cs_description_fdB</td>";
		echo "</tr>";
		}
	if($cs_followup_fdB)
		{
		echo "<tr align='left' valign='top'>";
		echo "<td valign='middle'>&nbsp;</td>";
		echo "<td>$image_08 Follow-Up Session: $cs_followup_fdB</td>";
		echo "</tr>";
		}
	if($cs_presenter_fdB)
		{
		echo "<tr align='left' valign='top'>";
		echo "<td valign='middle'>&nbsp;</td>";
		echo "<td>$image_08 Presenter: $cs_presenter_fdB</td>";
		echo "</tr>";
		}
  ?>
  <tr align="left" valign="top">
    <td valign="middle"></td>
    <td><?php echo "$image_08 Registration Period: <strong>$cs_registration_start_fdB_verbose - $cs_registration_end_fdB_verbose</strong>"; ?></td>
  </tr>
  <tr align="left" valign="top">
    <td valign="middle"><div align="right"></div></td>
    <td><?php echo "$image_08 Registered Seats: <A HREF=\"javascript:poptastic('https://www.wlu.ca/hr/registration/login/_processes/viewSubmissions/inc/_include_all_registrations.php?csid=$cs_generated_id_fdB');\"><B>$count_1</B></A> | Available Seats: $remaining_seats | Maximum Seats: $cs_maximum_seats_fdB"; ?></td>
  </tr>
  <tr align="left" valign="top">
    <td valign="middle">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
