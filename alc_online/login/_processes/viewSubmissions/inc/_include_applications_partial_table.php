<table width="100%"  border="0" cellspacing="0" cellpadding="2">
  <tr align="left" valign="top">
    <td WIDTH="4%" valign="middle"><div align="left"></div></td>
    <td><?php echo "<STRONG>$app_first_name_fdB $app_last_name_fdB</STRONG> - $app_applicant_type_fdB ($app_department_fdB)"; ?></td>
  </tr>
  <tr align="left" valign="top">
    <td WIDTH="4%" valign="middle">&nbsp;</td>
    <td><?php echo "ID: $app_laurier_id_fdB | ext: $app_extension_fdB | Laurier e-mail: $Novellemail_value_fdB | User e-mail: $app_email_fdB"; ?>    </td>
  </tr>
  <tr align="left" valign="top">
    <td valign="middle">&nbsp;</td>
    <td><?php echo "$app_deduction_fdB "; if($app_disabled_parking_fdB=='1') { echo " (Disabled Parking) "; } echo "| Commencing: $app_commencing_date_fdB ($app_commencing_date_fdB_verbose)"; ?> </td>
  </tr>
</table>
<BR>
