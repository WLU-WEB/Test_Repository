<?PHP
//---count entires
$query_count = "SELECT count(*) as count FROM parkingApplications WHERE timeframe_id='$timeframe_id_fdB' AND application_type='$application_type_fdB'";
$query_count_result = mysql_query($query_count);
$row = mysql_fetch_array($query_count_result);
$count_1 = $row['count'];
//---end count

?>

<TABLE WIDTH="100%" BORDER="0" CELLSPACING="1" CELLPADDING="0" BGCOLOR="#CCCCCC">
  <TR>
    <TD><TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="0" BGCOLOR="#F4F4E9">
        <TR ALIGN="LEFT" VALIGN="MIDDLE">
          <TD width="99%" ALIGN="LEFT" VALIGN="TOP"><table width="100%"  border="0" cellpadding="2" cellspacing="0">
              <tr align="center" valign="middle">
                <td valign="top"><div align="left">
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr align="left" valign="top">
                        <td WIDTH="1%" ALIGN="LEFT" valign="TOP"><DIV ALIGN="LEFT"><img src="_images/tab_right.png" alt="Bullet Image" width="8" height="12" /></DIV></td>
                        <td WIDTH="40%"><?php echo "<STRONG>$application_type_fdB_text</STRONG>"; ?></td>
                        <td WIDTH="50%"><?php echo "<STRONG>$timeframe_name_fdB</STRONG>"; ?></td>
                        <td WIDTH="9%"><?PHP
						if($subActionYear)
							{
							echo "<A HREF='$PHP_SELF?action=viewSubmissions&subActionYear=$subActionYear&viewApplications=complete&timeframe=$timeframe_id_fdB&applicationtype=$application_type_fdB' ALT='Parking & Transportation Resources view' TITLE='Parking & Transportation Resources view'>$image_09</A> ";
							echo "<A HREF='$PHP_SELF?action=viewSubmissions&subActionYear=$subActionYear&viewApplications=partial&timeframe=$timeframe_id_fdB&applicationtype=$application_type_fdB' ALT='Human Resources view' TITLE='Human Resources view'>$image_10</A> ";
							}
						else
							{
							echo "<A HREF='$PHP_SELF?action=viewSubmissions&viewApplications=complete&timeframe=$timeframe_id_fdB&applicationtype=$application_type_fdB' ALT='Parking & Transportation Resources view' TITLE='Parking & Transportation Resources view'>$image_09</A> ";
							echo "<A HREF='$PHP_SELF?action=viewSubmissions&viewApplications=partial&timeframe=$timeframe_id_fdB&applicationtype=$application_type_fdB' ALT='Human Resources view' TITLE='Human Resources view'>$image_10</A> ";
							}	
						 ?>
                        <DIV ALIGN="RIGHT"></DIV></td>
                      </tr>
                      <tr align="left" valign="top">
                        <td WIDTH="4%" valign="middle">&nbsp;</td>
                        <td><?php echo "$timeframe_start_verbose - $timeframe_end_verbose"; ?></td>
                        <td><?PHP echo "<B>$count_1</B> submissions"; ?></td>
                        <td>&nbsp;</td>
                      </tr>
                    </table>
                </div></td>
              </tr>
          </table></TD>
        </TR>
    </TABLE></TD>
  </TR>
</TABLE><BR>