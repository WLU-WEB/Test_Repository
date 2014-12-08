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

<FORM NAME="theForm" ACTION="<?php echo "$PHP_SELF?action=finalExams"; ?>" METHOD="post">


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

<!-- start: Deferred Exam? -->
<div class="label"><label for="deferred_exam">Deferred Exam? <?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input">
<?php if($deferred_fF=='No') { echo "<INPUT TYPE='radio' NAME='deferred_fF' VALUE='No' ID='no_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='deferred_fF' VALUE='No' ID='no_selection'>"; } ?><label for="no_selection">No</label>
<?php if($deferred_fF=='Yes') { echo "<INPUT TYPE='radio' NAME='deferred_fF' VALUE='Yes' ID='yes_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='deferred_fF' VALUE='Yes' ID='yes_selection'>"; } ?><label for="yes_selection">Yes</label>
<?php if($error_deferred_fF=="1") { echo "$errorImage"; } ?>
</div>
<!-- end: Deferred Exam? -->

<BR />

<!-- start: Approved Accommodations -->
<div class="label">Approved Accommodations <?PHP echo "$image_08"; ?></div>
<div class="label2"><?PHP echo "<INPUT TYPE=hidden NAME=placeholder VALUE=''>"; ?>Please indicate which of the following approved accommodations you will require for this exam. This information is important for us to know, because it may affect the location and/or format of your exam. All other approved accommodations will automatically be available to you for each exam booked.</div>                                     
<!-- end: Approved Accommodations -->

<BR />

<!-- start: Approved Accommodations CHECKBOXES -->
<div class="label"><p></div>
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