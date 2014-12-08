<style type="text/css" media="screen, print, projection">

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
if(count($errors)>0) { include ("_includes/missing_questions.php"); }

echo "Registering for <B>$timeframe_name_fdB</B> ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)"; 
echo "<BR><BR>$image_red_bullet <h1>NAME:</h1> <STRONG>$first_name_fdB $last_name_fdB</STRONG>"; 
echo "<BR>$image_red_bullet <h1>E-MAIL:</h1> $user_name_fdB" . "@mylaurier.ca"; 
echo "<BR>$image_red_bullet <h1>STUDENT ID:</h1> $user_laurier_id_fdB"; 

echo "<BR><BR><strong>Course Information</strong> (up to 5 courses)";

?>
<BR /><BR />
<span class="subject_form_field"><B>Subject</B> <?PHP echo "$image_red_bullet"; ?></span>
<span class="code_form_field"><B>Code</B> <?PHP echo "$image_red_bullet"; ?></span>
<span class="section_form_field"><B>Section</B> <?PHP echo "$image_red_bullet"; ?></span>
<BR />

<input name="subject_1_fF" type="text" size="3" maxlength="2" class="subject_form_field" value="<? echo $subject_1_fF; ?>" <?php if($error_subject_1_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> />
<input name="code_1_fF" type="text" size="5" maxlength="4" class="code_form_field" value="<? echo $code_1_fF; ?>" <?php if($error_code_1_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> />
<input name="section_1_fF" type="text" size="3" maxlength="2" class="section_form_field" value="<? echo $section_1_fF; ?>" <?php if($error_section_1_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> />
<span class="add_form_field"><a href="#" onClick="setVisibility('twoDIV','inline'); return false;"><?php echo "$image_20"; ?></a><a href="#" onClick="setVisibility('threeDIV','inline'); return false;"></a></span>


<?PHP if($subject_2_fF) { echo "<P><DIV ID='twoDIV' style='display:inline'>";} else { echo "<P><DIV ID='twoDIV' style='display:none'>"; } ?>
<input name="subject_2_fF" type="text" size="3" maxlength="2" class="subject_form_field" id="subject_2_fF" value="<? echo $subject_2_fF; ?>" <?php if($error_subject_2_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> >
<input name="code_2_fF" type="text" size="5" maxlength="4" class="code_form_field" id="code_2_fF" value="<? echo $code_2_fF; ?>" <?php if($error_code_2_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> >
<input name="section_2_fF" type="text" size="3" maxlength="2" class="section_form_field" id="section_2_fF" value="<? echo $section_2_fF; ?>" <?php if($error_section_2_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>
<span class="add_form_field"><a href="#" onClick="setVisibility('threeDIV','inline'); return false;"><?php echo "$image_20"; ?></a> <a href="#" onClick="document.theForm.subject_2_fF.value=''; document.theForm.code_2_fF.value=''; document.theForm.section_2_fF.value=''; setVisibility('twoDIV','none'); return false;"><?php echo "$image_21"; ?></a></span>
<?PHP echo "</DIV>"; ?>


<?PHP if($subject_3_fF) { echo "<P><DIV ID='threeDIV' style='display:inline'>";} else { echo "<P><DIV ID='threeDIV' style='display:none'>"; } ?>
<input name="subject_3_fF" type="text" size="3" maxlength="2" class="subject_form_field" id="subject_3_fF" value="<? echo $subject_3_fF; ?>" <?php if($error_subject_3_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> >
<input name="code_3_fF" type="text" size="5" maxlength="4" class="code_form_field" id="code_3_fF" value="<? echo $code_3_fF; ?>" <?php if($error_code_3_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>
<input name="section_3_fF" type="text" size="3" maxlength="2" class="section_form_field" id="section_3_fF" value="<? echo $section_3_fF; ?>" <?php if($error_section_3_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>
<span class="add_form_field"><a href="#" onClick="setVisibility('fourDIV','inline'); return false;"><?php echo "$image_20"; ?></a> <a href="#" onClick="document.theForm.subject_3_fF.value=''; document.theForm.code_3_fF.value=''; document.theForm.section_3_fF.value=''; setVisibility('threeDIV','none'); return false;"><?php echo "$image_21"; ?></a></span>
<?PHP echo "</DIV>"; ?>


<?PHP if($subject_4_fF) { echo "<P><DIV ID='fourDIV' style='display:inline'>";} else { echo "<P><DIV ID='fourDIV' style='display:none'>"; } ?>
<input name="subject_4_fF" type="text" size="3" maxlength="2" class="subject_form_field" id="subject_4_fF" value="<? echo $subject_4_fF; ?>" <?php if($error_subject_4_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>
<input name="code_4_fF" type="text" size="5" maxlength="4" class="code_form_field" id="code_4_fF" value="<? echo $code_4_fF; ?>" <?php if($error_code_4_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>
<input name="section_4_fF" type="text" size="3" maxlength="2" class="section_form_field" id="section_4_fF" value="<? echo $section_4_fF; ?>" <?php if($error_section_4_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>
<span class="add_form_field"><a href="#" onClick="setVisibility('fiveDIV','inline'); return false;"><?php echo "$image_20"; ?></a> <a href="#" onClick="document.theForm.subject_4_fF.value=''; document.theForm.code_4_fF.value=''; document.theForm.section_4_fF.value=''; setVisibility('fourDIV','none'); return false;"><?php echo "$image_21"; ?></a></span>
<?PHP echo "</DIV>"; ?>


<?PHP if($subject_5_fF) { echo "<P><DIV ID='fiveDIV' style='display:inline'>";} else { echo "<P><DIV ID='fiveDIV' style='display:none'>"; } ?>
<input name="subject_5_fF" type="text" size="3" maxlength="2" class="subject_form_field" id="subject_5_fF" value="<? echo $subject_5_fF; ?>" <?php if($error_subject_5_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>
<input name="code_5_fF" type="text" size="5" maxlength="4" class="code_form_field"v id="code_5_fF" value="<? echo $code_5_fF; ?>" <?php if($error_code_5_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>
<input name="section_5_fF" type="text" size="3" maxlength="2" class="section_form_field" id="section_5_fF" value="<? echo $section_5_fF; ?>" <?php if($error_section_5_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>
<span class="add_form_field"><a href="#" onClick="document.theForm.subject_5_fF.value=''; document.theForm.code_5_fF.value=''; document.theForm.section_5_fF.value=''; setVisibility('fiveDIV','none'); return false;"><?php echo "$image_21"; ?></a></span>
<?PHP echo "</DIV>"; ?>

<?PHP
echo "<BR /><BR />";
if(!$user_laurier_id_fdB) 
  { 
  echo "<input type='submit' name='submit' value='Continue' DISABLED />";
  echo "<P><h1>Cannot continue due to missing Laurier Student ID. Please contact <B>etext@wlu.ca</B></h1>";
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