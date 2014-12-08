<table width="100%"  border="0" cellspacing="0" cellpadding="2">
  <tr align="left" valign="top">
    <td WIDTH="4%" valign="middle"><DIV ALIGN="RIGHT"><STRONG><?PHP echo "$image_01"; ?></STRONG></DIV></td>
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
  <tr align="left" valign="top">
    <td valign="middle">&nbsp;</td>
    <td><?php 
	echo "$image_08 $app_v1_licence_plate_fdB - $app_v1_province_country_fdB: ($app_v1_year_fdB $app_v1_make_model_fdB)"; 
	if($app_v2_licence_plate_fdB) { echo "<BR>$image_08 $app_v2_licence_plate_fdB - $app_v2_province_country_fdB: ($app_v2_year_fdB $app_v2_make_model_fdB)"; }
	if($app_v3_licence_plate_fdB) { echo "<BR>$image_08 $app_v3_licence_plate_fdB - $app_v3_province_country_fdB: ($app_v3_year_fdB $app_v3_make_model_fdB)"; }
	?>
	</td>
  </tr>
</table>
<BR>
