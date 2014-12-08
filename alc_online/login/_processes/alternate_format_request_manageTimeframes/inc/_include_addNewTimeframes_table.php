<form action="<?php echo $PHP_SELF .'?action=alternateFormatRequestTimeFrames&subAction=addNewTimeframes'?>" method="post" name="form_capture" id="form_capture">
  <table width="100%"  border="0" cellspacing="0" cellpadding="3">
    <tr align="left" valign="middle">
      <td colspan="2" valign="top"><h1>Add Timeframe Range </h1></td>
    </tr>
    <tr align="left" valign="middle">
      <td valign="top">&nbsp;</td>
      <td valign="top">All fields denoted by an <strong><font color="#CC0000"><b>*</b></font></strong> are required.</td>
    </tr>
    <tr align="left" valign="middle">
      <td width="22%" valign="top">&nbsp;</td>
      <td width="78%" valign="top"><?php if(count($errors)>0) { include ("_includes/_error_message.php"); } ?></td>
    </tr>
    <tr align="left" valign="middle">
      <td valign="top"><div align="right"><strong>Timeframe Name <font color="#CC0000"><b>*</b></font></strong></div></td>
      <td><input name="timeframe_name_fF" type="text" size="45" maxlength="30" value="<? echo $timeframe_name_fF; ?>" <?php if($error_timeframe_name_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> /></td>
    </tr>
    <tr align="left" valign="middle">
      <td valign="top"><div align="right"><strong>Timeframe Start <font color="#CC0000"><b>*</b></font></strong></div></td>
      <td><?php
									//$month_start = date("m");
									//echo "<BR>present_month: [$month_start]";
									if($month_start=="01") { $month_start_2="January"; }
									if($month_start=="02") { $month_start_2="February"; }
									if($month_start=="03") { $month_start_2="March"; }
									if($month_start=="04") { $month_start_2="April"; }
									if($month_start=="05") { $month_start_2="May"; }
									if($month_start=="06") { $month_start_2="June"; }
									if($month_start=="07") { $month_start_2="July"; }
									if($month_start=="08") { $month_start_2="August"; }
									if($month_start=="09") { $month_start_2="September"; }
									if($month_start=="10") { $month_start_2="October"; }
									if($month_start=="11") { $month_start_2="November"; }
									if($month_start=="12") { $month_start_2="December"; }

									if($error_month_start=='1') { echo "<SELECT NAME='month_start' class='form' style='background-color: #FFFF99'>"; }
									else { echo "<SELECT NAME='month_start' class='form'>"; }
									echo "<OPTION SELECTED VALUE=''>Month</option>";
 									if($month_start) { echo "<OPTION VALUE='$month_start' SELECTED>$month_start_2</OPTION> "; }
 									//echo "<option SELECTED value=$month_start>$month_start_2</option>";
									echo "<OPTION VALUE='01'>January</OPTION>";
									echo "<OPTION VALUE='02'>February</OPTION>";
									echo "<OPTION VALUE='03'>March</OPTION>";
									echo "<OPTION VALUE='04'>Apr</OPTION>";
									echo "<OPTION VALUE='05'>May</OPTION>";
									echo "<OPTION VALUE='06'>June</OPTION>";
									echo "<OPTION VALUE='07'>July</OPTION>";
									echo "<OPTION VALUE='08'>August</OPTION>";
									echo "<OPTION VALUE='09'>September</OPTION>";
									echo "<OPTION VALUE='10'>October</OPTION>";
									echo "<OPTION VALUE='11'>November</OPTION>";
									echo "<OPTION VALUE='12'>December</OPTION>";
									echo "</SELECT>";
								?>
        <?php
									if($error_day_start=='1') { echo "<SELECT NAME='day_start' class='form' style='background-color: #FFFF99'>"; }
									else { echo "<SELECT NAME='day_start' class='form'>"; }
									echo "<OPTION SELECTED VALUE=''>Day</OPTION>";
									if($day_start) { echo "<OPTION VALUE='$day_start' SELECTED>$day_start</OPTION>"; }
									//echo "<option SELECTED value=$month_start>$month_start_2</option>";
									echo "<OPTION VALUE='01'>01</OPTION>";
									echo "<OPTION VALUE='02'>02</OPTION>";
									echo "<OPTION VALUE='03'>03</OPTION>";
									echo "<OPTION VALUE='04'>04</OPTION>";
									echo "<OPTION VALUE='05'>05</OPTION>";
									echo "<OPTION VALUE='06'>06</OPTION>";
									echo "<OPTION VALUE='07'>07</OPTION>";
									echo "<OPTION VALUE='08'>08</OPTION>";
									echo "<OPTION VALUE='09'>09</OPTION>";
									echo "<OPTION VALUE='10'>10</OPTION>";
									echo "<OPTION VALUE='11'>11</OPTION>";
									echo "<OPTION VALUE='12'>12</OPTION>";
									echo "<OPTION VALUE='13'>13</OPTION>";
									echo "<OPTION VALUE='14'>14</OPTION>";
									echo "<OPTION VALUE='15'>15</OPTION>";
									echo "<OPTION VALUE='16'>16</OPTION>";
									echo "<OPTION VALUE='17'>17</OPTION>";
									echo "<OPTION VALUE='18'>18</OPTION>";
									echo "<OPTION VALUE='19'>19</OPTION>";
									echo "<OPTION VALUE='20'>20</OPTION>";
									echo "<OPTION VALUE='21'>21</OPTION>";
									echo "<OPTION VALUE='22'>22</OPTION>";
									echo "<OPTION VALUE='23'>23</OPTION>";
									echo "<OPTION VALUE='24'>24</OPTION>";
									echo "<OPTION VALUE='25'>25</OPTION>";
									echo "<OPTION VALUE='26'>26</OPTION>";
									echo "<OPTION VALUE='27'>27</OPTION>";
									echo "<OPTION VALUE='28'>28</OPTION>";
									echo "<OPTION VALUE='29'>29</OPTION>";
									echo "<OPTION VALUE='30'>30</OPTION>";
									echo "<OPTION VALUE='31'>31</OPTION>";
									echo "</SELECT>";
								?>
        <?php 
											if($error_year_start=='1') { echo "<SELECT NAME='year_start' class='form' style='background-color: #FFFF99'>"; }
											else { echo "<SELECT NAME='year_start' class='form'>"; }
                                            if($year_start) { echo "<option value='$year_start' SELECTED>$year_start</option>"; }
											else { echo "<option value='' SELECTED>Year</option>"; }
											echo "<option value='2014'>2014</option>";
                                            echo "<option value='2015'>2015</option>";
                                            echo "</select>";
											?></td>
    </tr>
    <tr align="left" valign="middle">
      <td><div align="right"><strong>Timeframe End <font color="#CC0000"><b>*</b></font></strong></div></td>
      <td><?php
									//$month_end = date("m");
									//echo "<BR>present_month: [$month_end]";
									if($month_end=="01") { $month_end_2="January"; }
									if($month_end=="02") { $month_end_2="February"; }
									if($month_end=="03") { $month_end_2="March"; }
									if($month_end=="04") { $month_end_2="April"; }
									if($month_end=="05") { $month_end_2="May"; }
									if($month_end=="06") { $month_end_2="June"; }
									if($month_end=="07") { $month_end_2="July"; }
									if($month_end=="08") { $month_end_2="August"; }
									if($month_end=="09") { $month_end_2="September"; }
									if($month_end=="10") { $month_end_2="October"; }
									if($month_end=="11") { $month_end_2="November"; }
									if($month_end=="12") { $month_end_2="December"; }

									if($error_month_end=='1') { echo "<SELECT NAME='month_end' class='form' style='background-color: #FFFF99'>"; }
									else { echo "<SELECT NAME='month_end' class='form'>"; }
									echo "<OPTION SELECTED VALUE=''>Month</option>";
 									//if($month_available) { echo "<OPTION VALUE='$month_end' SELECTED>$month_end_2</OPTION> "; }
 									//echo "<option SELECTED value=$month_end>$month_end_2</option>";
									echo "<OPTION VALUE='01'>January</OPTION>";
									echo "<OPTION VALUE='02'>February</OPTION>";
									echo "<OPTION VALUE='03'>March</OPTION>";
									echo "<OPTION VALUE='04'>Apr</OPTION>";
									echo "<OPTION VALUE='05'>May</OPTION>";
									echo "<OPTION VALUE='06'>June</OPTION>";
									echo "<OPTION VALUE='07'>July</OPTION>";
									echo "<OPTION VALUE='08'>August</OPTION>";
									echo "<OPTION VALUE='09'>September</OPTION>";
									echo "<OPTION VALUE='10'>October</OPTION>";
									echo "<OPTION VALUE='11'>November</OPTION>";
									echo "<OPTION VALUE='12'>December</OPTION>";
									echo "</SELECT>";
								?>
        <?php
									if($error_day_end=='1') { echo "<SELECT NAME='day_end' class='form' style='background-color: #FFFF99'>"; }
									else { echo "<SELECT NAME='day_end' class='form'>"; }
									echo "<OPTION SELECTED VALUE=''>Day</OPTION>";
									if($day_end) { echo "<OPTION VALUE='$day_end' SELECTED>$day_end</OPTION>"; }
									//echo "<option SELECTED value=$month_end>$month_end_2</option>";
									echo "<OPTION VALUE='01'>01</OPTION>";
									echo "<OPTION VALUE='02'>02</OPTION>";
									echo "<OPTION VALUE='03'>03</OPTION>";
									echo "<OPTION VALUE='04'>04</OPTION>";
									echo "<OPTION VALUE='05'>05</OPTION>";
									echo "<OPTION VALUE='06'>06</OPTION>";
									echo "<OPTION VALUE='07'>07</OPTION>";
									echo "<OPTION VALUE='08'>08</OPTION>";
									echo "<OPTION VALUE='09'>09</OPTION>";
									echo "<OPTION VALUE='10'>10</OPTION>";
									echo "<OPTION VALUE='11'>11</OPTION>";
									echo "<OPTION VALUE='12'>12</OPTION>";
									echo "<OPTION VALUE='13'>13</OPTION>";
									echo "<OPTION VALUE='14'>14</OPTION>";
									echo "<OPTION VALUE='15'>15</OPTION>";
									echo "<OPTION VALUE='16'>16</OPTION>";
									echo "<OPTION VALUE='17'>17</OPTION>";
									echo "<OPTION VALUE='18'>18</OPTION>";
									echo "<OPTION VALUE='19'>19</OPTION>";
									echo "<OPTION VALUE='20'>20</OPTION>";
									echo "<OPTION VALUE='21'>21</OPTION>";
									echo "<OPTION VALUE='22'>22</OPTION>";
									echo "<OPTION VALUE='23'>23</OPTION>";
									echo "<OPTION VALUE='24'>24</OPTION>";
									echo "<OPTION VALUE='25'>25</OPTION>";
									echo "<OPTION VALUE='26'>26</OPTION>";
									echo "<OPTION VALUE='27'>27</OPTION>";
									echo "<OPTION VALUE='28'>28</OPTION>";
									echo "<OPTION VALUE='29'>29</OPTION>";
									echo "<OPTION VALUE='30'>30</OPTION>";
									echo "<OPTION VALUE='31'>31</OPTION>";
									echo "</SELECT>";
								?>
        <?php 
											if($error_year_end=='1') { echo "<SELECT NAME='year_end' class='form' style='background-color: #FFFF99'>"; }
											else { echo "<SELECT NAME='year_end' class='form'>"; }
                                            if($year_end) { echo "<option value='$year_end' SELECTED>$year_end</option>"; }
											else { echo "<option value='' SELECTED>Year</option>"; }
											echo "<option value='2014'>2014</option>";
                                            echo "<option value='2015'>2015</option>";
											echo "</select>";
											?></td>
    </tr>
    <tr align="left" valign="middle">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr align="left" valign="middle">
      <td>&nbsp;</td>
      <td><span class="pageTitle">
        <input type='hidden' name='inserted_in_dB' value="<?PHP echo "$inserted_in_dB"; ?>" />
        <input type="submit" name="submit_step" value="Insert Timeframe" />
      </span></td>
    </tr>
  </table>
</form>
