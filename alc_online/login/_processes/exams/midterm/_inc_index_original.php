<form action="<?php echo "$PHP_SELF?action=midtermExams"; ?>" method="post" name="theForm" id="theForm">

<table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td align="right" valign="top" class="fieldText"><?PHP echo "$image_red_bullet"; ?></td>
          <td align="left" valign="top"><strong><?PHP echo "$first_name_fdB $last_name_fdB"; ?></strong></td>
          </tr>
        <tr>
          <td align="right" valign="top" class="fieldText"><?PHP echo "$image_red_bullet"; ?></td>
          <td align="left" valign="top"><?PHP echo "$user_name_fdB" . "@mylaurier.ca"; ?></td>
          </tr>
        <tr>
          <td align="right" valign="top" class="fieldText"><?PHP echo "$image_red_bullet"; ?></td>
          <td align="left" valign="top"><?PHP echo "$user_laurier_id_fdB"; ?></td>
          </tr>
        <tr>
          <td width="31%" align="right" valign="top" class="fieldText"><label for="Phone">Phone</label> <?PHP echo "$image_red_bullet"; ?></td>
          <td width="69%" align="left" valign="top"><input name="phone_fF" type="text" class="formText" autocomplete="off" id="Phone" value="<? echo $phone_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_phone_fF=="1") { echo "$errorColor"; } ?> />
            <?php if($error_phone_fF=="1") { echo "$errorImage"; } ?>
            </td>
          </tr>
        <tr align="left" valign="middle">
          <td width="31%" align="right" valign="top" class="fieldText"><label for="Instructor">Instructor</label> <?PHP echo "$image_red_bullet"; ?></td>
          <td valign="top"><input name="instructor_fF" type="text" class="formText" autocomplete="off" id="Instructor" value="<? echo $instructor_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_instructor_fF=="1") { echo "$errorColor"; } ?> />
            <?php if($error_instructor_fF=="1") { echo "$errorImage"; } ?>
            </td>
          </tr>
        <tr align="left" valign="middle">
          <td align="right" valign="top" class="fieldText"><label for="Course">Course</label> <?PHP echo "$image_red_bullet"; ?></td>
          <td valign="top"><input name="course_fF" type="text" class="formText" autocomplete="off" id="Course" value="<? echo $course_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_course_fF=="1") { echo "$errorColor"; } ?> />
            <?php if($error_course_fF=="1") { echo "$errorImage"; } ?></td>
          </tr>
        <tr align="left" valign="middle">
          <td align="right" valign="top" class="fieldText"><label for="Section">Section</label> <?PHP echo "$image_red_bullet"; ?></td>
          <td valign="top"><input name="section_fF" type="text" class="formText" autocomplete="off" id="Section" value="<? echo $section_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_section_fF=="1") { echo "$errorColor"; } ?> />
            <?php if($error_section_fF=="1") { echo "$errorImage"; } ?></td>
          </tr>
        <tr align="left" valign="middle">
          <td align="right" valign="top" class="fieldText"><label for="Term">Term</label> <?PHP echo "$image_red_bullet"; ?></td>
          <td valign="top"><?php 
											if($error_term_fF=='1') { echo "<SELECT NAME='term_fF' class='form' ID='Term' style='background-color: #FFFF99'>"; }
											else { echo "<SELECT NAME='term_fF' class='form' ID='Term'>"; }
                                            if($term_fF) { echo "<option value='$term_fF' SELECTED>$term_fF</option>"; }
											else { echo "<option value='' SELECTED>Term</option>"; }
											echo "<option value='Fall'>Fall</option>";
											echo "<option value='Summer'>Summer</option>";
											echo "<option value='Intersession'>Intersession</option>";
											echo "<option value='Summer'>Winter</option>";
											echo "<option value='Spring'>Spring</option>";
                                            echo "</select>";
											?> <?php if($error_term_fF=="1") { echo "$errorImage"; } ?></td>
          </tr>
        <tr align="left" valign="middle">
          <td align="right" valign="top" class="fieldText"><label for="Exam Date">Exam Date</label> <?PHP echo "$image_red_bullet"; ?></td>
          <td valign="top"><?php
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

									if($error_month_start=='1') { echo "<SELECT NAME='month_start' class='form' ID='Exam Date Month' style='background-color: #FFFF99'>"; }
									else { echo "<SELECT NAME='month_start' class='form' ID='Exam Date Month'>"; }
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
									if($error_day_start=='1') { echo "<SELECT NAME='day_start' class='form' ID='Exam Date Day' style='background-color: #FFFF99'>"; }
									else { echo "<SELECT NAME='day_start' class='form' ID='Exam Date Day'>"; }
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
											if($error_year_start=='1') { echo "<SELECT NAME='year_start' class='form' ID='Exam Date Year' style='background-color: #FFFF99'>"; }
											else { echo "<SELECT NAME='year_start' class='form' ID='Exam Date Year'>"; }
                                            if($year_start) { echo "<option value='$year_start' SELECTED>$year_start</option>"; }
											else { echo "<option value='' SELECTED>Year</option>"; }
											echo "<option value='2013'>2013</option>";
											echo "<option value='2014'>2014</option>";
                                            echo "</select>";
											?> <?php if($error_month_start=="1" || $error_day_start=="1" || $error_year_start=="1") { echo "$errorImage"; } ?></td>
          </tr>
        <tr align="left" valign="middle">
          <td align="right" valign="top" class="fieldText">Start Time <?PHP echo "$image_red_bullet"; ?></td>
          <td valign="top"><?php
									if($error_hour_fF=='1') { echo "<SELECT NAME='hour_fF' class='form' style='background-color: #FFFF99'>"; }
									else { echo "<SELECT NAME='hour_fF' class='form'>"; }
									echo "<OPTION SELECTED VALUE=''>hour</OPTION>";
									if($hour_fF) { echo "<OPTION VALUE='$hour_fF' SELECTED>$hour_fF</OPTION>"; }
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
									echo "</SELECT>";
								?>
            <?php
									if($error_minute_fF=='1') { echo "<SELECT NAME='minute_fF' class='form' style='background-color: #FFFF99'>"; }
									else { echo "<SELECT NAME='minute_fF' class='form'>"; }
									echo "<OPTION SELECTED VALUE=''>minute</OPTION>";
									if($minute_fF) { echo "<OPTION VALUE='$minute_fF' SELECTED>$minute_fF</OPTION>"; }
									echo "<OPTION VALUE='00'>00</OPTION>";
									echo "<OPTION VALUE='15'>15</OPTION>";
									echo "<OPTION VALUE='30'>30</OPTION>";
									echo "<OPTION VALUE='45'>45</OPTION>";
									echo "</SELECT>";
								?>
            <?php if($ampm_fF=='am') { echo "<INPUT TYPE='radio' NAME='ampm_fF' VALUE='am' ID='am_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='ampm_fF' VALUE='am' ID='am_selection'>"; } ?>
            
            <label for="am_selection">a.m.</label>
            <?php if($ampm_fF=='pm') { echo "<INPUT TYPE='radio' NAME='ampm_fF' VALUE='pm' ID='pm_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='ampm_fF' VALUE='pm' ID='pm_selection'>"; } ?>
  <label for="pm_selection">p.m.</label>
  <?php if($error_hour_fF=="1" || $error_minute_fF=="1" || $error_ampm_fF=="1") { echo "$errorImage"; } ?></td>
          </tr>
        <tr align="left" valign="middle">
          <td align="right" valign="top" class="fieldText">Exam Length <?PHP echo "$image_red_bullet"; ?></td>
          <td valign="top"><input name="exam_length_fF" type="text" class="formText" autocomplete="off" value="<? echo $exam_length_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_exam_length_fF=="1") { echo "$errorColor"; } ?> />
            <?php if($error_exam_length_fF=="1") { echo "$errorImage"; } ?></td>
          </tr>
        <tr align="left" valign="middle">
          <td align="right" valign="top" class="fieldText">Class Location <?PHP echo "$image_red_bullet"; ?></td>
          <td valign="top"><input name="class_location_fF" type="text" class="formText" autocomplete="off" value="<? echo $class_location_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_class_location_fF=="1") { echo "$errorColor"; } ?> />
            <?php if($error_class_location_fF=="1") { echo "$errorImage"; } ?></td>
          </tr>
        <tr align="left" valign="middle">
          <td align="right" valign="top" class="fieldText">&nbsp;</td>
          <td valign="top">&nbsp;</td>
          </tr>
        <tr align="left" valign="middle">
          <td align="right" valign="top" class="fieldText">Approved Accommodations <?PHP echo "$image_08"; ?></td>
          <td valign="top">Please indicate which of the following approved accommodations you will require for this exam. This information is important for us to know, because it may affect the location and/or format of your exam. All other approved accommodations will automatically be available to you for each exam booked.</td>
          </tr>
        <tr align="left" valign="middle">
          <td align="right" valign="top" class="fieldText">&nbsp;</td>
          <td><table border="0" cellspacing="0" cellpadding="2">
            <tr align="left" valign="middle">
              <td width="1%"><?php if($acc_01_fF=='Computer') { echo "<INPUT TYPE='checkbox' NAME='acc_01_fF' VALUE='Computer' ID='accomodation_1' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_01_fF' VALUE='Computer' ID='accomodation_1'>"; } ?></td>
              <td width="99%"><label for="accomodation_1">Computer</label></td>
              </tr>
            <tr align="left" valign="middle">
              <td><?php if($acc_02_fF=='Scribe (writing assistant)') { echo "<INPUT TYPE='checkbox' NAME='acc_02_fF' VALUE='Scribe (writing assistant)' ID='accomodation_2' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_02_fF' VALUE='Scribe (writing assistant)' ID='accomodation_2'>"; } ?></td>
              <td><label for="accomodation_2">Scribe (writing assistant)</label></td>
              </tr>
            <tr align="left" valign="middle">
              <td><?php if($acc_03_fF=='Totally separate room (private room by yourself)') { echo "<INPUT TYPE='checkbox' NAME='acc_03_fF' VALUE='Totally separate room (private room by yourself)' ID='accomodation_3' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_03_fF' VALUE='Totally separate room (private room by yourself)' ID='accomodation_3'>"; } ?></td>
              <td><label for="accomodation_3">Totally separate room (private room by yourself)</label></td>
              </tr>
            <tr align="left" valign="middle">
              <td><?php if($acc_04_fF=='Enlarged exam') { echo "<INPUT TYPE='checkbox' NAME='acc_04_fF' VALUE='Enlarged exam' ID='accomodation_4' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_04_fF' VALUE='Enlarged exam' ID='accomodation_4'>"; } ?></td>
              <td><label for="accomodation_4">Enlarged exam</label></td>
              </tr>
            <tr align="left" valign="middle">
              <td><?php if($acc_05_fF=='Orthopaedic chair') { echo "<INPUT TYPE='checkbox' NAME='acc_05_fF' VALUE='Orthopaedic chair' ID='accomodation_5' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_05_fF' VALUE='Orthopaedic chair' ID='accomodation_5'>"; } ?></td>
              <td><label for="accomodation_5">Orthopaedic chair</label></td>
              </tr>
            <tr align="left" valign="middle">
              <td><?php if($acc_06_fF=='Kurzweil') { echo "<INPUT TYPE='checkbox' NAME='acc_06_fF' VALUE='Kurzweil' ID='accomodation_6' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_06_fF' VALUE='Kurzweil' ID='accomodation_6'>"; } ?></td>
              <td><label for="accomodation_6">Kurzweil</label></td>
              </tr>
            <tr align="left" valign="middle">
              <td><?php if($acc_07_fF=='Other') { echo "<INPUT TYPE='checkbox' NAME='acc_07_fF' VALUE='Other' ID='accomodation_7' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_07_fF' VALUE='Other' ID='accomodation_7'>"; } ?></td>
              <td><label for="accomodation_7">Other</label>
                <input name="acc_07_other_fF" type="text" class="formText" autocomplete="off" value="<? echo $acc_07_other_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_acc_07_other_fF=="1") { echo "$errorColor"; } ?> />
                <?php if($error_phone_fF=="1") { echo "$errorImage"; } ?></td>
              </tr>
            </table></td>
          </tr>
        <tr align="left" valign="middle">
          <td align="right" valign="top" class="fieldText">Confirmation <?PHP echo "$image_red_bullet"; ?></td>
          <td>
            <?php if($confirmation_fF=='Yes') { echo "<INPUT TYPE='checkbox' NAME='confirmation_fF' VALUE='Yes' ID='confirmation_label' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='confirmation_fF' VALUE='Yes' ID='confirmation_label'>"; } ?>
            <label for="confirmation_label">Yes, information is correct.</label>
            </td>
          </tr>
        <tr align="left" valign="middle">
          <td align="right" valign="top" class="fieldText">&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr align="left" valign="middle">
          <td align="right" valign="top" class="fieldText">&nbsp;</td>
          <td><?PHP
      if(!$user_laurier_id_fdB) 
	  	{ 
	  	echo "<input type='submit' name='submit' value='Continue' DISABLED />";
	   	echo "<P><h1>Cannot continue due to missing Laurier Student ID. Please contact <B>alexams@wlu.ca</B></h1>";
		} 
	  else 
	  	{ 
		echo "<input type='submit' name='submit' value='Continue' />"; 
		} 
	  ?></td>
          </tr>
        <tr align="left" valign="middle">
          <td align="right" valign="top" class="fieldText">&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
      </table>
	  
	  <?PHP
echo "<INPUT TYPE=hidden NAME=timeframe VALUE='$timeframe_unique_id_fdB'>";
echo "<INPUT TYPE=hidden NAME=generated_alternative_request_id VALUE='$generated_alternative_request_id'>";
?>

</form>
