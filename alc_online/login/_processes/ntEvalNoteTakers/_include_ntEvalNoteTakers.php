<FORM NAME="form_capture" METHOD="post" ACTION="<?php echo $PHP_SELF .'?action=ntEvalNoteTakers'?>">
  <TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="3">
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD VALIGN="TOP">
          <TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="3">
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD colspan="2" VALIGN="TOP"><?PHP
			  echo "";
			  include ("includes/_include_instructions.php"); 
			  ?></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD WIDTH="10%" VALIGN="TOP">&nbsp;</TD>
              <TD WIDTH="90%" VALIGN="TOP"><?php if(count($errors)>0) { include ("includes/_error_message.php"); } ?></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"><strong><font color="#CC0000"><?PHP echo " $image_01"; ?></font></strong></div></TD>
              <TD VALIGN="TOP"><strong>How long have you been a Note-taker with Accessible Learning?</strong></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP">&nbsp;</TD>
              <TD VALIGN="TOP"><input name="length_fF" type="text" size="35" maxlength="100" value="<? echo $length_fF; ?>" <?php if($error_length_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"><strong><font color="#CC0000"><?PHP echo " $image_01"; ?></font></strong></div></TD>
              <TD VALIGN="TOP"><strong>How did you share notes on MyLearningSpace?</strong></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP">&nbsp;</TD>
              <TD VALIGN="TOP"><?php if($exchange_notes_01_fF=='1') { echo "<INPUT TYPE='checkbox' NAME='exchange_notes_01_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='exchange_notes_01_fF' VALUE='1'>"; } ?>                Type<br />
              <?php if($exchange_notes_02_fF=='1') { echo "<INPUT TYPE='checkbox' NAME='exchange_notes_02_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='exchange_notes_02_fF' VALUE='1'>"; } ?> Scan<br />
              <?php if($exchange_notes_04_fF=='1') { echo "<INPUT TYPE='checkbox' NAME='exchange_notes_04_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='exchange_notes_04_fF' VALUE='1'>"; } ?> 
              Other, please specify 
<input name="exchange_notes_04_other_fF" type="text" size="35" maxlength="100" value="<? echo $exchange_notes_04_other_fF; ?>" <?php if($error_exchange_notes_04_other_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> /></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"><strong><font color="#CC0000"><?PHP echo " $image_01"; ?></font></strong></div></TD>
              <TD VALIGN="TOP"><strong>Please rate your interactions with the ALC office in the following areas:</strong></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP">&nbsp;</TD>
              <TD VALIGN="TOP"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="1" CELLPADDING="0" BGCOLOR="#CCCCCC">
                <TR>
                  <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="7">
                      <tr ALIGN="LEFT" VALIGN="TOP" BGCOLOR="#F4F4E9">
                        <td bgcolor="#FFFFFF"><DIV ALIGN="LEFT">
                            <DIV>
                              <table width="100%" border="0" cellpadding="2" cellspacing="0">
                                <tr bgcolor="#F4F4E9">
                                  <td width="20%">&nbsp;</td>
                                  <td width="10%" align="center">Excellent</td>
                                  <td width="10%" align="center">Good</td>
                                  <td width="10%" align="center">Satisfactory</td>
                                  <td width="10%" align="center">Needs Improvement</td>
                                </tr>
                                <tr>
                                  <td><div align="right">Communication</div></td>
                                  <td align="center"><?php if($interaction_01_fF=='4') { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='4'>"; } ?></td>
                                  <td align="center"><?php if($interaction_01_fF=='3') { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='3'>"; } ?></td>
                                  <td align="center"><?php if($interaction_01_fF=='2') { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='2'>"; } ?></td>
                                  <td align="center"><?php if($interaction_01_fF=='1') { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='1'>"; } ?></td>
                                </tr>
                                <tr bgcolor="#FAFAF4">
                                  <td><div align="right">Support</div></td>
                                  <td align="center"><?php if($interaction_02_fF=='4') { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='4'>"; } ?></td>
                                  <td align="center"><?php if($interaction_02_fF=='3') { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='3'>"; } ?></td>
                                  <td align="center"><?php if($interaction_02_fF=='2') { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='2'>"; } ?></td>
                                  <td align="center"><?php if($interaction_02_fF=='1') { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='1'>"; } ?></td>
                                </tr>
                                <tr>
                                  <td><div align="right">Training</div></td>
                                  <td align="center"><?php if($interaction_03_fF=='4') { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='4'>"; } ?></td>
                                  <td align="center"><?php if($interaction_03_fF=='3') { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='3'>"; } ?></td>
                                  <td align="center"><?php if($interaction_03_fF=='2') { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='2'>"; } ?></td>
                                  <td align="center"><?php if($interaction_03_fF=='1') { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='1'>"; } ?></td>
                                </tr>
                                <tr bgcolor="#FAFAF4">
                                  <td><div align="right">Friendliness</div></td>
                                  <td align="center"><?php if($interaction_04_fF=='4') { echo "<INPUT TYPE='radio' NAME='interaction_04_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_04_fF' VALUE='4'>"; } ?></td>
                                  <td align="center"><?php if($interaction_04_fF=='3') { echo "<INPUT TYPE='radio' NAME='interaction_04_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_04_fF' VALUE='3'>"; } ?></td>
                                  <td align="center"><?php if($interaction_04_fF=='2') { echo "<INPUT TYPE='radio' NAME='interaction_04_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_04_fF' VALUE='2'>"; } ?></td>
                                  <td align="center"><?php if($interaction_04_fF=='1') { echo "<INPUT TYPE='radio' NAME='interaction_04_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_04_fF' VALUE='1'>"; } ?></td>
                                </tr>
                                <tr>
                                  <td><div align="right">Efficiency</div></td>
                                  <td align="center"><?php if($interaction_05_fF=='4') { echo "<INPUT TYPE='radio' NAME='interaction_05_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_05_fF' VALUE='4'>"; } ?></td>
                                  <td align="center"><?php if($interaction_05_fF=='3') { echo "<INPUT TYPE='radio' NAME='interaction_05_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_05_fF' VALUE='3'>"; } ?></td>
                                  <td align="center"><?php if($interaction_05_fF=='2') { echo "<INPUT TYPE='radio' NAME='interaction_05_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_05_fF' VALUE='2'>"; } ?></td>
                                  <td align="center"><?php if($interaction_05_fF=='1') { echo "<INPUT TYPE='radio' NAME='interaction_05_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_05_fF' VALUE='1'>"; } ?></td>
                                </tr>
                              </table>
                            </DIV>
                        </DIV></td>
                      </tr>
                  </TABLE></TD>
                </TR>
              </TABLE></TD>
            </TR>
            <tr align="left" valign="middle">
              <td valign="top"><div align="right"><strong><font color="#CC0000"><?PHP echo " $image_01"; ?></font></strong></div></td>
              <td valign="top"><strong>What note-taker training information would be beneficial to help you as a Note-taker?</strong></td>
            </tr>
            <tr align="left" valign="middle">
              <td valign="top"><div align="right">
                <p>                
              </div></td>
              <td valign="top"><?php if($training_01_fF=='1') { echo "<INPUT TYPE='checkbox' NAME='training_01_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='training_01_fF' VALUE='1'>"; } ?> In-person session when  you sign up<br />
                <?php if($training_02_fF=='1') { echo "<INPUT TYPE='checkbox' NAME='training_02_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='training_02_fF' VALUE='1'>"; } ?>
                Note-taker handbook<br />
                <?php if($training_03_fF=='1') { echo "<INPUT TYPE='checkbox' NAME='training_03_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='training_03_fF' VALUE='1'>"; } ?>
                Training session<br />
                <?php if($training_04_fF=='1') { echo "<INPUT TYPE='checkbox' NAME='training_04_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='training_04_fF' VALUE='1'>"; } ?>
                Weekly tips<br />
                <?php if($training_05_fF=='1') { echo "<INPUT TYPE='checkbox' NAME='training_05_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='training_05_fF' VALUE='1'>"; } ?>
                Other, please specify
                <input name="training_05_other_fF" type="text" size="35" maxlength="100" value="<? echo $training_05_other_fF; ?>" <?php if($error_training_05_other_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> /></td>
            </tr>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"><strong><?PHP echo " $image_01"; ?></strong></div></TD>
              <TD VALIGN="TOP"><STRONG>As a Note-taker, how do you feel you made a contribution to another student?</STRONG></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP">&nbsp;</TD>
              <TD VALIGN="TOP"><TEXTAREA NAME="contribution_fF" COLS="35" ROWS="3" <?php if($error_contribution_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ><? echo $contribution_fF; ?></TEXTAREA></TD>
            </TR>
            <tr align="left" valign="middle">
              <td valign="top"><div align="right"><strong><?PHP echo " $image_01"; ?></strong></div></td>
              <td valign="top"><strong>Please describe the benefits note-taking has had for you.&nbsp; If none, please indicate.</strong></td>
            </tr>
            <tr align="left" valign="middle">
              <td valign="top">&nbsp;</td>
              <td valign="top"><textarea name="benefits_fF" COLS="35" rows="3" <?php if($error_benefits_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ><? echo $benefits_fF; ?></textarea></td>
            </tr>
            <tr align="left" valign="middle">
              <td valign="top"><div align="right"><strong><?PHP echo " $image_01"; ?></strong></div></td>
              <td valign="top"><strong>Do you have any feedback about signing up to be a note-taker and sharing notes on MyLearningSpace?&nbsp; If none, please indicate.</strong></td>
            </tr>
            <tr align="left" valign="middle">
              <td valign="top">&nbsp;</td>
              <td valign="top"><textarea name="mylearningspace_fF" cols="35" rows="3" <?php if($error_mylearningspace_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ><? echo $mylearningspace_fF; ?></textarea></td>
            </tr>
            <tr align="left" valign="middle">
              <td valign="top"><div align="right"><strong><?PHP echo " $image_01"; ?></strong></div></td>
              <td valign="top"><strong>What can the Accessible Learning Centre do to improve the Note-taking Program?</strong></td>
            </tr>
            <tr align="left" valign="middle">
              <td valign="top">&nbsp;</td>
              <td valign="top"><textarea name="improve_fF" COLS="35" rows="3" <?php if($error_improve_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ><? echo $improve_fF; ?></textarea></td>
            </tr>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"><strong><?PHP echo " $image_01"; ?></strong></div></TD>
              <TD VALIGN="TOP"><strong>Would you be a Note-taker again?</strong></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP">&nbsp;</TD>
              <TD VALIGN="TOP"><?php if($again_fF=='1') { echo "<INPUT TYPE='radio' NAME='again_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='again_fF' VALUE='1'>"; } ?>
Yes
  <?php if($again_fF=='0') { echo "<INPUT TYPE='radio' NAME='again_fF' VALUE='0' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='again_fF' VALUE='0'>"; } ?>
No, please indicate why:
<input name="again_why_fF" type="text" size="35" maxlength="100" value="<? echo $again_why_fF; ?>" <?php if($error_again_why_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> /></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"><STRONG><font color="#CC0000"><?PHP echo " $image_08"; ?></font></STRONG></div></TD>
              <TD VALIGN="TOP"><STRONG>Please expand on any of the areas above. Do you have additional comments?</STRONG></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP">&nbsp;</TD>
              <TD VALIGN="TOP"><TEXTAREA NAME="additional_comments_fF" COLS="35" ROWS="3" <?php if($error_additional_comments_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ><? echo $additional_comments_fF; ?></TEXTAREA>
              </TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP">&nbsp;</TD>
              <TD VALIGN="TOP">&nbsp;</TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP">&nbsp;</TD>
              <TD VALIGN="TOP"><span class="pageTitle">
                <input type='hidden' name='form_started' value="Yes">
                <?php
					  if(!$error_timeframe) { echo "<INPUT TYPE='submit' NAME='submit_step' VALUE='Submit Information'>"; }
					  if($error_timeframe=='1') { echo "<INPUT TYPE='submit' NAME='submit_step' VALUE='Submit Information' DISABLED>"; }
                 	  ?>
              </span></TD>
            </TR>
          </TABLE>           </TD>
    </TR>
  </TABLE>
</form>
