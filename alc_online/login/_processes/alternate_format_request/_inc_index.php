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
/*	
.subject_form_field { margin-left:10px; }	
.code_form_field { margin-left:10px; }	
.section_form_field { margin-left:10px; }	
.add_form_field { margin-left:10px; }	
*/

</style>

<FORM NAME="theForm" ACTION="<?php echo "$PHP_SELF?action=alternateFormatRequest"; ?>" METHOD="post">


<div id="main_container">

<div id="left_area">
<p></p>
</div>

<div id="right_area">
<?PHP
//if(count($errors)>0) { include ("_includes/missing_questions.php"); }

echo "<BR /><BR />Registering for <B>$timeframe_name_fdB</B> Timeframe<BR>Registration Period: <B>$timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose</B>"; 
echo "<BR /><BR />$image_red_bullet <h1>NAME:</h1> <STRONG>$first_name_fdB $last_name_fdB</STRONG>"; 
echo "<BR />$image_red_bullet <h1>E-MAIL:</h1> $user_name_fdB" . "@mylaurier.ca"; 
echo "<BR />$image_red_bullet <h1>STUDENT ID:</h1> $user_laurier_id_fdB"; 
echo "<BR />$image_red_bullet <h1>CAMPUS: </h1>" .ucfirst($campus_fF); 

echo "<BR /><BR /><strong>Course Information</strong> (up to 5 courses)";

?>
<BR /><BR />
<span class="subject_form_field"><B>Subject</B> <?PHP echo "$image_red_bullet"; ?></span>
<span class="code_form_field"><B>Code</B> <?PHP echo "$image_red_bullet"; ?></span>
<span class="section_form_field"><B>Section</B> <?PHP echo "$image_red_bullet"; ?></span>
<BR />

<div class="noshow">Tab twice to move to enter next course</div>

<!-- COURSE 1 -->

<label for="subject_1" class="noshow">Course one subject</label>
<input name="subject_1_fF" type="text" size="3" maxlength="2" title="Subject 1" id="subject_1" class="subject_form_field" value="<? echo $subject_1_fF; ?>" <?php if($error_subject_1_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> />

<label for="code_1" class="noshow">Course one code</label>
<input name="code_1_fF" type="text" size="5" maxlength="4" title="Code 1" id="code_1" class="code_form_field" value="<? echo $code_1_fF; ?>" <?php if($error_code_1_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> />

<label for="section_1" class="noshow">Course one section</label>
<input name="section_1_fF" type="text" size="3" maxlength="2" title="Section 1" id="section_1" class="section_form_field" value="<? echo $section_1_fF; ?>" <?php if($error_section_1_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> />
<span class="add_form_field"><a href="#" onClick="setVisibility('twoDIV','inline'); return false;"><?php echo "$image_20"; ?></a><a href="#" onClick="setVisibility('threeDIV','inline'); return false;"></a></span>


<!-- COURSE 2 -->

<?PHP if($subject_2_fF) { echo "<P><DIV ID='twoDIV' style='display:inline'>";} else { echo "<P><DIV ID='twoDIV' style='display:none'>"; } ?>
<label for="subject_2" class="noshow">Course two subject</label>
<input name="subject_2_fF" type="text" size="3" maxlength="2" title="Subject 2" id="subject_2" class="subject_form_field" value="<? echo $subject_2_fF; ?>" <?php if($error_subject_2_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> >

<label for="code_2" class="noshow">Course two code</label>
<input name="code_2_fF" type="text" size="5" maxlength="4" title="Code 2" id="code_2" class="code_form_field" value="<? echo $code_2_fF; ?>" <?php if($error_code_2_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> >

<label for="section_2" class="noshow">Course two section</label>
<input name="section_2_fF" type="text" size="3" maxlength="2" title="Section 2" id="section_2" class="section_form_field" value="<? echo $section_2_fF; ?>" <?php if($error_section_2_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>
<span class="add_form_field">
<a href="#" onClick="setVisibility('threeDIV','inline'); return false;"><?php echo "$image_20"; ?></a> 
<a href="#" onClick="document.theForm.subject_2_fF.value=''; document.theForm.code_2_fF.value=''; document.theForm.section_2_fF.value=''; setVisibility('twoDIV','none'); return false;"><?php echo "$image_21"; ?></a>
</span>
<?PHP echo "</DIV>"; ?>


<!-- COURSE 3 -->

<?PHP if($subject_3_fF) { echo "<P><DIV ID='threeDIV' style='display:inline'>";} else { echo "<P><DIV ID='threeDIV' style='display:none'>"; } ?>
<label for="subject_3" class="noshow">Course three subject</label>
<input name="subject_3_fF" type="text" size="3" maxlength="2" title="Subject 3" id="subject_3" class="subject_form_field" value="<? echo $subject_3_fF; ?>" <?php if($error_subject_3_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> >

<label for="code_3" class="noshow">Course three code</label>
<input name="code_3_fF" type="text" size="5" maxlength="4" title="Code 3" id="code_3" class="code_form_field" value="<? echo $code_3_fF; ?>" <?php if($error_code_3_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>

<label for="section_3" class="noshow">Course three section</label>
<input name="section_3_fF" type="text" size="3" maxlength="2" title="Section 3" id="section_3" class="section_form_field" value="<? echo $section_3_fF; ?>" <?php if($error_section_3_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>
<span class="add_form_field"><a href="#" onClick="setVisibility('fourDIV','inline'); return false;"><?php echo "$image_20"; ?></a> <a href="#" onClick="document.theForm.subject_3_fF.value=''; document.theForm.code_3_fF.value=''; document.theForm.section_3_fF.value=''; setVisibility('threeDIV','none'); return false;"><?php echo "$image_21"; ?></a></span>
<?PHP echo "</DIV>"; ?>


<!-- COURSE 4 -->

<?PHP if($subject_4_fF) { echo "<P><DIV ID='fourDIV' style='display:inline'>";} else { echo "<P><DIV ID='fourDIV' style='display:none'>"; } ?>
<label for="subject_4" class="noshow">Course four subject</label>
<input name="subject_4_fF" type="text" size="3" maxlength="2" title="Subject 4" id="subject_4" class="subject_form_field" value="<? echo $subject_4_fF; ?>" <?php if($error_subject_4_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>

<label for="code_4" class="noshow">Course four code</label>
<input name="code_4_fF" type="text" size="5" maxlength="4" title="Code 4" id="code_4" class="code_form_field" value="<? echo $code_4_fF; ?>" <?php if($error_code_4_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>

<label for="section_4" class="noshow">Course four section</label>
<input name="section_4_fF" type="text" size="3" maxlength="2" title="Section 4" id="section_4" class="section_form_field" value="<? echo $section_4_fF; ?>" <?php if($error_section_4_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>
<span class="add_form_field"><a href="#" onClick="setVisibility('fiveDIV','inline'); return false;"><?php echo "$image_20"; ?></a> <a href="#" onClick="document.theForm.subject_4_fF.value=''; document.theForm.code_4_fF.value=''; document.theForm.section_4_fF.value=''; setVisibility('fourDIV','none'); return false;"><?php echo "$image_21"; ?></a></span>
<?PHP echo "</DIV>"; ?>


<!-- COURSE 5 -->

<?PHP if($subject_5_fF) { echo "<P><DIV ID='fiveDIV' style='display:inline'>";} else { echo "<P><DIV ID='fiveDIV' style='display:none'>"; } ?>
<label for="subject_5" class="noshow">Course five subject</label>
<input name="subject_5_fF" type="text" size="3" maxlength="2" title="Subject 5" id="subject_5" class="subject_form_field" value="<? echo $subject_5_fF; ?>" <?php if($error_subject_5_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>

<label for="code_5" class="noshow">Course five code</label>
<input name="code_5_fF" type="text" size="5" maxlength="4" title="Code 5" id="code_5" class="code_form_field" value="<? echo $code_5_fF; ?>" <?php if($error_code_5_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>

<label for="section_5" class="noshow">Course five section</label>
<input name="section_5_fF" type="text" size="3" maxlength="2" title="Section 5" id="section_5" class="section_form_field" value="<? echo $section_5_fF; ?>" <?php if($error_section_5_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>
<span class="add_form_field"><a href="#" onClick="document.theForm.subject_5_fF.value=''; document.theForm.code_5_fF.value=''; document.theForm.section_5_fF.value=''; setVisibility('fiveDIV','none'); return false;"><?php echo "$image_21"; ?></a></span>
<?PHP echo "</DIV>"; ?>

<?PHP
echo "<BR /><BR />";
if(!$user_laurier_id_fdB) 
  { 
  echo "<input type='submit' name='submit' value='Continue' DISABLED />";
  echo "<P><h1>Cannot continue due to missing Laurier Student ID. Please contact ";

	if($_SESSION['campus_fF']=='brantford') {
		echo '<a href="mailto:lbetext@wlu.ca">lbetext@wlu.ca</a>';
	}
	else{
		echo '<a href="mailto:etext@wlu.ca">etext@wlu.ca</a>';
	}

  } 
else 
  { 
  echo "<input type='submit' name='submit' value='Continue' />"; 
  } 
?>

<?PHP
echo "<INPUT TYPE=hidden NAME=timeframe VALUE='$timeframe_unique_id_fdB'>";
echo "<INPUT TYPE=hidden NAME=generated_alternative_request_id VALUE='$generated_alternative_request_id'>";
?>
      
</div>

</div>


</FORM>