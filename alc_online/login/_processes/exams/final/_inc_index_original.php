<form action="<?php echo "$PHP_SELF?action=finalExams"; ?>" method="post" name="theForm" id="theForm">

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
          <td align="right" valign="top" class="fieldText"><label for="Term">Term</label>
            <?PHP echo "$image_red_bullet"; ?></td>
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
											?>
            <?php if($error_term_fF=="1") { echo "$errorImage"; } ?></td>
        </tr>
        <tr align="left" valign="middle">
          <td align="right" valign="top" class="fieldText">Deferred Exam? <?PHP echo "$image_red_bullet"; ?></td>
          <td valign="top"><?php if($deferred_fF=='No') { echo "<INPUT TYPE='radio' NAME='deferred_fF' VALUE='No' ID='no_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='deferred_fF' VALUE='No' ID='no_selection'>"; } ?>
            
            <label for="no_selection">No</label>
            <?php if($deferred_fF=='Yes') { echo "<INPUT TYPE='radio' NAME='deferred_fF' VALUE='Yes' ID='yes_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='deferred_fF' VALUE='Yes' ID='yes_selection'>"; } ?>
  <label for="yes_selection">Yes</label>
  <?php if($error_deferred_fF=="1") { echo "$errorImage"; } ?></td>
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
