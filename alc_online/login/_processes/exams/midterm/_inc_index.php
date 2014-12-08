<style type="text/css" media="screen, print, projection">

.noshow {position: absolute; font-size: 0; left: -9000px}

#main_container {
	width:100%;
	margin:0 auto;
	}
	
#left_area {
	float:left;
	width:80px;
	}

#right_area {
	float:left;
	width:600px;
	padding-left: 5px;
	}	






#field_container {
	width:100%;
	margin:0 auto;
	line-height: 2.5em;
	}
.label{
	display: inline-block;
	float: left;
	clear: left;
	width: 210px;
	text-align: right;
	vertical-align:bottom;
	font-weight: bold;
	text-transform: uppercase;
}
.label2 {
  display: inline-block;
  float: left;
  text-align: left;
  width:390px;
  line-height: 1.5em;
}
.input {
  display: inline-block;
  float: left;
  vertical-align:middle;
  
}


/*	
.subject_form_field { margin-left:10px; }	
.code_form_field { margin-left:10px; }	
.section_form_field { margin-left:10px; }	
.add_form_field { margin-left:10px; }	
*/

</style>

<FORM NAME="theForm" ACTION="<?php echo "$PHP_SELF?action=midtermExams"; ?>" METHOD="post">


<div id="main_container">

<div id="left_area"><p></p></div>

<div id="right_area">



<div id="field_container">

<div class="label">&nbsp;</div>
<div class="input">&nbsp;</div>

<BR />

<div class="label">&nbsp;<?PHP echo "$image_red_bullet"; ?></div>
<div class="input"><strong><?PHP echo "$first_name_fdB $last_name_fdB"; ?></strong></div>

<BR />

<div class="label">&nbsp;<?PHP echo "$image_red_bullet"; ?></div>
<div class="input"><strong><?PHP echo "$user_name_fdB" . "@mylaurier.ca"; ?></strong></div>

<BR />

<div class="label">&nbsp;<?PHP echo "$image_red_bullet"; ?></div>
<div class="input"><strong><?PHP echo "$user_laurier_id_fdB"; ?></strong></div>

<BR />

<div class="label"><label for="Phone">Phone <?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input"><input name="phone_fF" type="text" class="formText" autocomplete="off" id="Phone" value="<? echo $phone_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_phone_fF=="1") { echo "$errorColor"; } ?> />
<?php if($error_phone_fF=="1") { echo "$errorImage"; } ?></div>

<div class="label"><label for="Instructor">Instructor <?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input"><input name="instructor_fF" type="text" class="formText" autocomplete="off" id="Instructor" value="<? echo $instructor_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_instructor_fF=="1") { echo "$errorColor"; } ?> />
<?php if($error_instructor_fF=="1") { echo "$errorImage"; } ?></div>
            
<div class="label"><label for="Course">Course <?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input"><input name="course_fF" type="text" class="formText" autocomplete="off" id="Course" value="<? echo $course_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_course_fF=="1") { echo "$errorColor"; } ?> />
<?php if($error_course_fF=="1") { echo "$errorImage"; } ?></div>

<div class="label"><label for="Section">Section <?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input"><input name="section_fF" type="text" class="formText" autocomplete="off" id="Section" value="<? echo $section_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_section_fF=="1") { echo "$errorColor"; } ?> />
<?php if($error_section_fF=="1") { echo "$errorImage"; } ?></div>

<BR />

<!-- start: Term -->
<div class="label"><label for="Term">Term <?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input">
<?php 
if($error_term_fF=='1') { echo "<SELECT NAME='term_fF' class='form' ID='Term' style='background-color: #FFFF99'>"; }
	else { echo "<SELECT NAME='term_fF' class='form' ID='Term'>"; }
if($term_fF) { echo "<option value='$term_fF' SELECTED>$term_fF</option>"; }
	else { echo "<option value='' SELECTED>Term</option>"; }
echo "<option value='Fall'>Fall</option>";
echo "<option value='Summer'>Summer</option>";
echo "<option value='Intersession'>Intersession</option>";
echo "<option value='Winter'>Winter</option>";
echo "<option value='Spring'>Spring</option>";
echo "</select>";
?> <?php if($error_term_fF=="1") { echo "$errorImage"; } ?></div>
<!-- end: Term -->

<BR />

<!-- start: Exam Date -->
<div class="label"><label for="Exam Date">Exam Date <?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input">
<?php
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
echo "<option value='2014' SELECTED>2014</option>";
echo "</select>";
?> <?php if($error_month_start=="1" || $error_day_start=="1" || $error_year_start=="1") { echo "$errorImage"; } ?>
</div> 
<!-- end: Exam Date -->

<BR />

<!-- start: Start Time -->
<div class="label"><label for="Start Time">Start Time <?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input">
<?php
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
<?php if($error_hour_fF=="1" || $error_minute_fF=="1" || $error_ampm_fF=="1") { echo "$errorImage"; } ?>
</div>
<!-- end: Start Time -->

<!-- start: Exam Length -->
<div class="label"><label for="Exam Length">Exam Length <?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input">
<input name="exam_length_fF" type="text" class="formText" autocomplete="off" id="Exam Length" value="<? echo $exam_length_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_exam_length_fF=="1") { echo "$errorColor"; } ?> />
<?php if($error_exam_length_fF=="1") { echo "$errorImage"; } ?></div>
<!-- end: Exam Length -->

<!-- start: Class Location -->
<div class="label"><label for="Class Location">Class Location <?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input">
<input name="class_location_fF" type="text" class="formText" autocomplete="off" id="Class Location" value="<? echo $class_location_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_class_location_fF=="1") { echo "$errorColor"; } ?> />
<?php if($error_class_location_fF=="1") { echo "$errorImage"; } ?></div>
<!-- end: Class Location -->

<!-- start: Approved Accommodations -->
<div class="label">Approved Accommodations <?PHP echo "$image_08"; ?></div>
<div class="label2"><?PHP echo "<INPUT TYPE=hidden NAME=placeholder VALUE=''>"; ?>Please indicate which of the following approved accommodations you will require for this exam. This information is important for us to know, because it may affect the location and/or format of your exam. All other approved accommodations will automatically be available to you for each exam booked.</div>                                     
<!-- end: Approved Accommodations -->

<!-- start: Approved Accommodations CHECKBOXES -->
<div class="label">&nbsp;</div>
<div class="input">
<?php if($acc_01_fF=='Computer') { echo "<INPUT TYPE='checkbox' NAME='acc_01_fF' VALUE='Computer' ID='accomodation_1' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_01_fF' VALUE='Computer' ID='accomodation_1'>"; } ?><label for="accomodation_1">Computer</label>
<BR />
<?php if($acc_02_fF=='Scribe (writing assistant)') { echo "<INPUT TYPE='checkbox' NAME='acc_02_fF' VALUE='Scribe (writing assistant)' ID='accomodation_2' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_02_fF' VALUE='Scribe (writing assistant)' ID='accomodation_2'>"; } ?><label for="accomodation_2">Scribe (writing assistant)</label>
<BR />
<?php if($acc_03_fF=='Totally separate room (private room by yourself)') { echo "<INPUT TYPE='checkbox' NAME='acc_03_fF' VALUE='Totally separate room (private room by yourself)' ID='accomodation_3' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_03_fF' VALUE='Totally separate room (private room by yourself)' ID='accomodation_3'>"; } ?><label for="accomodation_3">Totally separate room (private room by yourself)</label>
<BR />
<?php if($acc_04_fF=='Enlarged exam') { echo "<INPUT TYPE='checkbox' NAME='acc_04_fF' VALUE='Enlarged exam' ID='accomodation_4' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_04_fF' VALUE='Enlarged exam' ID='accomodation_4'>"; } ?><label for="accomodation_4">Enlarged exam</label>
<BR />

<?php 

if ($_SESSION['campus_fF']=='brantford'){
	if($acc_05_fF=='Audio Exam') { 
		echo "<INPUT TYPE='checkbox' NAME='acc_05_fF' VALUE='Audio Exam' ID='accomodation_5' CHECKED>"; 
	} 
	else { 
		echo "<INPUT TYPE='checkbox' NAME='acc_05_fF' VALUE='Audio Exam' ID='accomodation_5'>"; 
	} 
	echo "<label for='accomodation_5'>Audio Exam</label><BR />";
}
else{
	if($acc_05_fF=='Orthopaedic chair') { 
		echo "<INPUT TYPE='checkbox' NAME='acc_05_fF' VALUE='Orthopaedic chair' ID='accomodation_5' CHECKED>"; 
	} 
	else { 
		echo "<INPUT TYPE='checkbox' NAME='acc_05_fF' VALUE='Orthopaedic chair' ID='accomodation_5'>"; 
	} 
	echo "<label for='accomodation_5'>Orthopaedic chair</label><BR />";
}
?>

<?php if($acc_06_fF=='Kurzweil') { echo "<INPUT TYPE='checkbox' NAME='acc_06_fF' VALUE='Kurzweil' ID='accomodation_6' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_06_fF' VALUE='Kurzweil' ID='accomodation_6'>"; } ?><label for="accomodation_6">Kurzweil</label>
<BR />
<?php if($acc_07_fF=='Other') { echo "<INPUT TYPE='checkbox' NAME='acc_07_fF' VALUE='Other' ID='accomodation_7' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_07_fF' VALUE='Other' ID='accomodation_7'>"; } ?><label for="accomodation_7">Other </label><input name="acc_07_other_fF" type="text" class="formText" autocomplete="off" value="<? echo $acc_07_other_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_acc_07_other_fF=="1") { echo "$errorColor"; } ?> /><?php if($error_phone_fF=="1") { echo "$errorImage"; } ?>
</div>
<!-- end: Approved Accommodations CHECKBOXES -->

<BR />

<!-- start: Confirmation -->
<div class="label"><label for="Confirmation">Confirmation <?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input">
<?php if($confirmation_fF=='Yes') { echo "<INPUT TYPE='checkbox' NAME='confirmation_fF' VALUE='Yes' ID='confirmation_label' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='confirmation_fF' VALUE='Yes' ID='confirmation_label'>"; } ?>
<label for="confirmation_label">Yes, information is correct.</label></div>
<!-- end: Confirmation -->

<BR />

<!-- start: Submit -->
<div class="label">&nbsp;</div>
<div class="input">
<?PHP
if(!$user_laurier_id_fdB) 
  { 
  echo "<input type='submit' name='submit' value='Continue' DISABLED />";
  echo "<P><h1>Cannot continue due to missing Laurier Student ID. Please contact <B>etext@wlu.ca</B></h1>";
  } 
else 
  { 
  echo "<input type='submit' name='submit' value='Continue' />"; 
  } 

echo "<INPUT TYPE=hidden NAME=timeframe VALUE='$timeframe_unique_id_fdB'>";
echo "<INPUT TYPE=hidden NAME=generated_alternative_request_id VALUE='$generated_alternative_request_id'>";
?></div>
<!-- end: Submit -->


</div>

      
</div>

</div>


</FORM>