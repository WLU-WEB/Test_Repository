<style type="text/css" media="screen, print, projection">
#right_area {
	float:left;
	width:600px;
	padding-left: 5px;
	}
</style>

<div id="right_area">
<form action="<?php echo "$PHP_SELF?action=alternateFormatRequest"; ?>" method="post" name="theForm" id="theForm">
  <table width="100%" border="0" cellspacing="0" cellpadding="2">
    <tr align="left" valign="middle">
      <td width="1%"><?php //$iw="64"; $ih="1"; echo "$image_00"; ?><img src='_images/1x1_transparent.gif' alt='Transparent Place Holder' width='64' height='1' /></td>
      <td width="99%"><?php if(count($errors)>0) { include ("_includes/missing_questions.php"); } ?></td>
    </tr>
    <tr align="left" valign="middle">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="left" valign="middle">
      <td>&nbsp;</td>
      <td align="left"><strong>Registrations Closed!</strong></td>
    </tr>
    <tr align="left" valign="middle">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="left" valign="middle">
      <td valign="top">&nbsp;</td>
      <td><p>At the present moment, the registration is closed. Please check again!<br />
        <?PHP
		if($timeframe_unique_id_next_fdB)
			{
			echo "<BR>The next registration starts on <B>$timeframe_start_next_fdB_verbose</B and will end on <B>$timeframe_end_next_fdB_verbose</B>.";
			}
        else
			{
			echo "<BR>The administrator has not yet specified when the next registration will start.";
			}
		?>
        <br />
          <br />
      </p></td>
    </tr>
    <tr align="left" valign="middle">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="left" valign="middle">
      <td>&nbsp;</td>
      <td>Click here to return back to the <a href="index.php">Accessible Learning Centre Online Forms Homepage</a></td>
    </tr>
  </table>
</form>
<div>
