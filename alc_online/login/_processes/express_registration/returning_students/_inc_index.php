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
	
#right_area_special {
	float:left;
	width:600px;
	padding-left: 100px;
	}	

#consent_text {
	padding:5px;
	float:left;
	vertical-align:middle;
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
  width:350px;
  line-height: 1.5em;
  padding:5px;
}

.label3{
	display: inline-block;
	float: left;
	clear: left;
	width: 210px;
	text-align: right;
	vertical-align:bottom;
	font-weight: bold;
	text-transform: uppercase;
	line-height:150%;
}

.input {
  display: inline-block;
  float: left;
  vertical-align:middle;
}


td{
	padding-bottom:0px;
	vertical-align:middle;
}

#Contacts{
resize: none;
overflow-y: scroll;
}

#mytest{
float:left;
}

div.table {border: 1px solid black; display: table; }
div.tr {border: 1px solid black; display: table-row; }
span.td {border: 1px solid black; display: table-cell; }

#consent_container {
	position:relative;
	display:table-row
}

#consent_input {
	float:left;
	height:inherit;
	display:table-column;
	width:30px;
}

#consent_label {
	float:right;
	line-height:125%;
	display:table-column;
	width:560px;
}

.clear { clear: both;}


/*	
.subject_form_field { margin-left:10px; }	
.code_form_field { margin-left:10px; }	
.section_form_field { margin-left:10px; }	
.add_form_field { margin-left:10px; }	
*/

</style>

<FORM NAME="theForm" ACTION="<?php echo "../$PHP_SELF?action=ExpressRegistrationReturning"; ?>" METHOD="post">


<div id="main_container">

<div id="left_area"><p></p></div>

<div id="right_area">



<div id="field_container">

<div class="label">&nbsp;<?PHP echo "$image_red_bullet"; ?></div>
<div class="input"><strong><?PHP echo "$first_name_fdB $last_name_fdB"; ?></strong></div>

<BR />

<div class="label">&nbsp;<?PHP echo "$image_red_bullet"; ?></div>
<div class="input"><strong><?PHP echo "$user_name_fdB" . "@mylaurier.ca"; ?></strong></div>

<BR />

<div class="label">&nbsp;<?PHP echo "$image_red_bullet"; ?></div>
<div class="input"><strong><?PHP echo "$user_laurier_id_fdB"; ?></strong></div>

<BR />

<!-- Campus -->
<div class="label">&nbsp;<?PHP echo "$image_red_bullet"; ?></div>
<div class="input"><strong><?php echo ucfirst("$campus_fF"); ?></strong></div>


<script>
    console.log(<? echo json_encode($campus_fF); ?>);
</script>


<!--[if IE]>
<br/>
<![endif]-->

<!--Academic Program-->
<div class="label"><label for="Program">Academic Program <?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input"><input name="program_fF" type="text" class="formText" autocomplete="off" id="Program" value="<? echo $program_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_program_fF=="1") { echo "$errorColor"; } ?> />
<?php if($error_program_fF=="1") { echo "$errorImage"; } ?></div>

<!-- Enrollment -->
<div class="label"> <label for="Enrollment">Enrollment <?PHP echo "$image_red_bullet"; ?></label></div>
<div id="right_area_special">
<?php if($enrollment_fF=='fulltime') { echo "<INPUT TYPE='radio' NAME='enrollment_fF' VALUE='fulltime' ID='fulltime_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='enrollment_fF' VALUE='fulltime' ID='fulltime_selection'>"; } ?>
<label for="fulltime_selection">Full Time</label>
<?php if($enrollment_fF=='parttime') { echo "<INPUT TYPE='radio' NAME='enrollment_fF' VALUE='parttime' ID='parttime_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='enrollment_fF' VALUE='parttime' ID='parttime_selection'>"; } ?>
<label for="parttime_selection">Part Time</label>
<?php if($enrollment_fF=='probation') { echo "<INPUT TYPE='radio' NAME='enrollment_fF' VALUE='probation' ID='probation_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='enrollment_fF' VALUE='probation' ID='probation_selection'>"; } ?>
<label for="probation_selection">Probation</label>
<?php if($error_enrollment_fF=="1") { echo "$errorImage"; } ?>
</div>

<!--Address-->
<div class="label"><label for="Address">Local Address <?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input"><input name="address_fF" type="text" class="formText" autocomplete="off" id="Address" value="<? echo $address_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_address_fF=="1") { echo "$errorColor"; } ?> />
<?php if($error_address_fF=="1") { echo "$errorImage"; } ?></div>

<!--City-->
<div class="label"><label for="City">City <?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input"><input name="city_fF" type="text" class="formText" autocomplete="off" id="City" value="<? echo $city_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_city_fF=="1") { echo "$errorColor"; } ?> />
<?php if($error_city_fF=="1") { echo "$errorImage"; } ?></div>

<!--Postal Code-->
<div class="label"><label for="Postal">Postal Code<?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input"><input name="postal_fF" type="text" class="formText" autocomplete="off" id="Postal" value="<? echo $postal_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_postal_fF=="1") { echo "$errorColor"; } ?> />
<?php if($error_postal_fF=="1") { echo "$errorImage"; } ?></div>

<!--Phone-->
<div class="label"><label for="Phone">Phone<?PHP echo "$image_red_bullet"; ?></label></div>
<div class="input"><input name="phone_fF" type="text" class="formText" autocomplete="off" id="Phone" value="<? echo $phone_fF; ?>" size="30" maxlength="75" data-hint="" <?php if($error_phone_fF=="1") { echo "$errorColor"; } ?> />
<?php if($error_phone_fF=="1") { echo "$errorImage"; } ?></div>

<div id="right_area"><hr /></div>

<!-- Applied for OSAP -->
<div class="label3">
  <label for="OSAPapp">Have you applied for OSAP? <strong>(excluding the 30% tuition rebate)</strong></label>
</div>
<div class="input">
<?php if($osapapp_fF=='yes') { echo "<INPUT TYPE='radio' NAME='osapapp_fF' VALUE='yes' ID='yes_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='osapapp_fF' VALUE='yes' ID='yes_selection'>"; } ?>
<label for="yes_selection">Yes</label>
<?php if($osapapp_fF=='no') { echo "<INPUT TYPE='radio' NAME='osapapp_fF' VALUE='no' ID='no_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='osapapp_fF' VALUE='no' ID='no_selection'>"; } ?>
<label for="no_selection">No</label>
<?php if($error_osapapp_fF=="1") { echo "$errorImage"; } ?>
</div>

<div id="right_area"><hr /></div>

<!-- Eligible for OSAP -->
<div class="label3"><label for="OSAPelig">Are you currently OSAP eligible? </label></div>
<div class="input">
<?php if($osapelig_fF=='yes') { echo "<INPUT TYPE='radio' NAME='osapelig_fF' VALUE='yes' ID='yes_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='osapelig_fF' VALUE='yes' ID='yes_selection'>"; } ?>
<label for="yes_selection">Yes</label>
<?php if($osapelig_fF=='no') { echo "<INPUT TYPE='radio' NAME='osapelig_fF' VALUE='no' ID='no_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='osapelig_fF' VALUE='no' ID='no_selection'>"; } ?>
<label for="no_selection">No</label>
<?php if($error_osapelig_fF=="1") { echo "$errorImage"; } ?>
</div>

<div id="right_area"><hr /></div>

<!-- BSWD -->
<div class="label3"><label for="BSWD">Will you require an application to the BSWD? </label></div>
<div class="input">
<?php if($bswd_fF=='yes') { echo "<INPUT TYPE='radio' NAME='bswd_fF' VALUE='yes' ID='yes_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='bswd_fF' VALUE='yes' ID='yes_selection'>"; } ?>
<label for="yes_selection">Yes</label>
<?php if($bswd_fF=='no') { echo "<INPUT TYPE='radio' NAME='bswd_fF' VALUE='no' ID='no_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='bswd_fF' VALUE='no' ID='no_selection'>"; } ?>
<label for="no_selection">No</label>
<?php if($error_bswd_fF=="1") { echo "$errorImage"; } ?>
</div>
<div class="label2">
<?php 
if($campus_fF=="brantford"){
	echo "If yes, please contact the ALC Consultant at 519-756-8228 ext. 5871 to set up your appointment.";
	
}
else{
	echo "If Yes, please contact the main office (1C11) or call 519-884-0710 x3086 to book an appointment with your consultant";
}
?>
</div>

<div id="right_area"><hr /></div>

<!-- Changes -->
<div class="label3"><label for="Changes">Have there been changes that will impact your current accommodation plan?</label></div>
<div class="input">
<?php if($changes_fF=='yes') { echo "<INPUT TYPE='radio' NAME='changes_fF' VALUE='yes' ID='yes_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='changes_fF' VALUE='yes' ID='yes_selection'>"; } ?>
<label for="yes_selection">Yes</label>
<?php if($changes_fF=='no') { echo "<INPUT TYPE='radio' NAME='changes_fF' VALUE='no' ID='no_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='changes_fF' VALUE='no' ID='no_selection'>"; } ?>
<label for="no_selection">No</label>
<?php if($error_changes_fF=="1") { echo "$errorImage"; } ?>
</div>
<div class="label2">
<?php 
if($campus_fF=="brantford"){
	echo "If yes, please contact the ALC Consultant at 519-756-8228 ext. 5871 to set up your appointment.";
	
}
else{
	echo "If Yes, please contact the main office (1C11) or call 519-884-0710 x3086 to book an appointment with your consultant";
}
?>
</div>

<div id="right_area"><br />
<h1>Consent to Gather, Use and Disclose Personal Information</h1>
<p>Pursuant to Section 39(2) of the Freedom of Information and Protection of Privacy Act, R.S.O. 1990, and S.O. 2004 c.3, Sch. A. of the Personal Health Information Protection Act (PHIPA), information is collected under the legal authority of the Wilfrid Laurier University Act to administer the university student relationship. This information will be used for administrative and statistical purposes, and to determine access to academic support services.</p>
<p><b>Please check and complete the following (you must tick all boxes to complete your registration):</b></p>

<p>I, <b><?PHP echo "$first_name_fdB $last_name_fdB"; ?></b>, give voluntarily consent for the Accessible
Learning Centre to:</p>
<p><?php if($error_acc_01_fF=="1" || $error_acc_02_fF=="1" || $error_acc_03_fF=="1" || $error_acc_04_fF=="1" || $error_acc_05_fF=="1" || $error_acc_06_fF=="1" || $error_acc_07_fF=="1" || $error_acc_08_fF=="1") { echo "<p style='color:red;'> $errorImage <i>You must agree to all elements of the consent gather disclosure in order to register.</i> </p>"; } ?></p>

<div id="consent_container">
  <div id="consent_input">
    <?php if($acc_01_fF=='Consent1') { echo "<INPUT TYPE='checkbox' NAME='acc_01_fF' VALUE='Consent1' ID='consent_1' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_01_fF' VALUE='Consent1' ID='consent_1'>"; } ?>
  </div>
<div id="consent_label">
<label for="consent_1">Gather information for the purpose of creating my accommodation plan and, to determine access to other required assistive supports through the Accessible Learning Centre. Information will be generated from the documentation that I have provided as well as verbal information that I have shared during planning meetings with my consultant.</label>
</div>
</div>

<br/>
<!--[if IE]>
<br/><br/>
<![endif]-->

<div id="consent_container">
  <div id="consent_input">
    <?php if($acc_02_fF=='Consent2') { echo "<INPUT TYPE='checkbox' NAME='acc_02_fF' VALUE='Consent2' ID='consent_2' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_02_fF' VALUE='Consent2' ID='consent_2'>"; } ?>
  </div>
<div id="consent_label">Disclose or share information with my faculty members (or teaching assistants assigned to the course), or any authorized WLU staff. An email will be sent your faculty members at the start of each term. Information includes; confirmation of your registration with the ALC, your name, ID, exam and classroom accommodations. </div>
</div>

<br/>
<!--[if IE]>
<br/><br/>
<![endif]-->

<div id="consent_container">
  <div id="consent_input">
    <?php if($acc_03_fF=='Consent3') { echo "<INPUT TYPE='checkbox' NAME='acc_03_fF' VALUE='Consent3' ID='consent_3' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_03_fF' VALUE='Consent3' ID='consent_3'>"; } ?>
  </div>
<div id="consent_label">I understand that I may withdraw my consent at any time and that it is my responsibility to inform my consultant of any withdrawal notifications.</div>
</div>

<br/>
<!--[if IE]>
<br/>
<![endif]-->

<div id="consent_container">
  <div id="consent_input">
    <?php if($acc_04_fF=='Consent4') { echo "<INPUT TYPE='checkbox' NAME='acc_04_fF' VALUE='Consent4' ID='consent_4' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_04_fF' VALUE='Consent4' ID='consent_4'>"; } ?>
  </div>
<div id="consent_label">I understand  that I may include other people for whom I wish information regarding my registration and accommodations be shared. (e.g. therapist or counselor). If so, please indicate:</div>
</div>

<br/>


<div id="consent_container">
  <div id="consent_input"></div>
<div id="consent_label">
<textarea name="contacts_fF" cols="50" rows="5" maxlength="250" class="formText" autocomplete="off" id="Contacts" value="<? echo $contacts_fF; ?>" data-hint="" <?php if($error_contacts_fF=="1") { echo "$errorColor"; } ?>><? echo $contacts_fF; ?></textarea></div>
<!--[if IE]>
<br/>
<![endif]-->
</div>


<br/>
<!--[if IE]>
<br/><br/>
<![endif]-->

<div id="consent_container">
  <div id="consent_input">
    <?php if($acc_05_fF=='Consent5') { echo "<INPUT TYPE='checkbox' NAME='acc_05_fF' VALUE='Consent5' ID='consent_5' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_05_fF' VALUE='Consent5' ID='consent_5'>"; } ?>
  </div>
<div id="consent_label">I understand that student files may be reviewed periodically by external funders or internal auditors to ensure Accessible Learning is meeting the terms of their funding contract/ mandated obligations. </div>
</div>

<br/>
<!--[if IE]>
<br/>
<![endif]-->

<div id="consent_container">
  <div id="consent_input">
    <?php if($acc_06_fF=='Consent6') { echo "<INPUT TYPE='checkbox' NAME='acc_06_fF' VALUE='Consent6' ID='consent_6' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_06_fF' VALUE='Consent6' ID='consent_6'>"; } ?>
  </div>
<div id="consent_label">Should a student present to Accessible Learning staff as at risk of significant harm to self or others, confidentiality will not be maintained and steps will be taken to avert any danger in an effort to ensure the safety of everyone.</div>
</div>

<br/>
<!--[if IE]>
<br/>
<![endif]-->



<?php 
if($campus_fF=="brantford"){

	echo"<div id='consent_container'>";
    echo"<div id='consent_input'>";
    
	if($acc_08_fF=='Consent8') { echo "<INPUT TYPE='checkbox' NAME='acc_08_fF' VALUE='Consent8' ID='consent_8' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_08_fF' VALUE='Consent8' ID='consent_8'>"; }
	
	echo"
  </div>
<div id='consent_label'>I understand that if I am taking courses with one of Laurier's institutional partners (i.e. Nipissing or Conestoga, for example)  this information will also be shared with the faculty of that institution.</div>
</div>

<br/>
<!--[if IE]>
<br/>
<![endif]-->";
	
}
?>



<div id="consent_container">
  <div id="consent_input">
    <?php if($acc_07_fF=='Consent7') { echo "<INPUT TYPE='checkbox' NAME='acc_07_fF' VALUE='Consent7' ID='consent_7' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='acc_07_fF' VALUE='Consent7' ID='consent_7'>"; } ?>
  </div>
<div id="consent_label">I have read, understand and give my approval on <b><?php echo date("F j, Y");?></b>. This consent will remain valid for one year from the date of submission. </div>
</div>

<br/>
<!--[if IE]>
<br/>
<![endif]-->

<div id="consent_container">
  <div id="consent_input"></div>
<div id="consent_label"><span class="input">
  <?PHP
if(!$user_laurier_id_fdB) 
  { 
  echo "<input type='submit' name='submit' value='Submit' DISABLED />";
  echo "<P><h1>Cannot continue due to missing Laurier Student ID. Please contact <B>accessible_learning@wlu.ca</B></h1>";
  } 
else 
  { 
  echo "<input type='submit' name='submit' value='Submit' />"; 
  } 

echo "<INPUT TYPE=hidden NAME=timeframe VALUE='$timeframe_unique_id_fdB'>";
echo "<INPUT TYPE=hidden NAME=generated_alternative_request_id VALUE='$generated_alternative_request_id'>";
?>
</span></div>
</div>
<BR />

</div>

      
</div>

</div>


</FORM>
