<FORM NAME="form_capture" METHOD="post" ACTION="<?php echo $PHP_SELF .'?action=updateActivateProfile'?>">
  <TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="3">
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD VALIGN="TOP">
          <TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="3">
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD COLSPAN="2" VALIGN="TOP">
			    <?PHP
			 // echo "";
			 //include ("/www/forms/parking_services/forms/login/includes/_include_instructions.php"); 
			  ?>			  </TD>
            </TR>
            <tr align="left" valign="middle">
              <td width="40%" valign="top"><div align="right"><strong><span class="copy">
                  <?php if($error_first_name_fF=="1") { echo "<FONT COLOR='#C12222'><B>First Name</B></FONT>"; } else { echo "First Name"; } ?>
              </span><?PHP echo " $image_08"; ?></strong></div></td>
              <td width="60%"><input name="first_name_fF" type="text" size="45" maxlength="50" DISABLED onkeyup='if(this.value.length&gt;50){this.value=(this.value).substr(0,50);}this.form.first_name_fF_charactersleft.value=50-this.value.length;' value="<? if($first_name_fdB) { echo "$first_name_fdB"; } else { echo "$first_name_fF"; } ?>" <?php if($error_first_name_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> />
                  <strong><b>
                  <input name='first_name_fF_charactersleft' type='text' value='50' size='2' maxlength='2' readonly="readonly" />
                </b></strong></td>
            </tr>
            <tr align="left" valign="middle">
              <td valign="top"><div align="right"><strong><span class="copy">
                  <?php if($error_last_name_fF=="1") { echo "<FONT COLOR='#C12222'><B>Last Name</B></FONT>"; } else { echo "Last Name"; } ?>
              </span><?PHP echo " $image_08"; ?></strong></div></td>
              <td><input name="last_name_fF" type="text" size="45" maxlength="50" DISABLED onkeyup='if(this.value.length&gt;50){this.value=(this.value).substr(0,50);}this.form.last_name_fF_charactersleft.value=50-this.value.length;' value="<? if($last_name_fdB) { echo "$last_name_fdB"; } else { echo "$last_name_fF"; } ?>" <?php if($error_last_name_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> />
                  <strong><b>
                  <input name='last_name_fF_charactersleft' type='text' value='50' size='2' maxlength='2' readonly="readonly" />
                </b></strong></td>
            </tr>
           <!--
		    <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><DIV ALIGN="RIGHT"><STRONG><SPAN CLASS="copy">
                <?php if($error_laurierID_fF=="1") { echo "<FONT COLOR='#C12222'><B>Laurier ID</B></FONT>"; } else { echo "Laurier ID"; } ?>
              </SPAN><?PHP echo " $image_01"; ?></STRONG></DIV></TD>
              <TD><input name="laurierID_fF" type="text" size="45" maxlength="9" onKeyUp='if(this.value.length>9){this.value=(this.value).substr(0,9);}this.form.laurierID_fF_charactersleft.value=9-this.value.length;' value="<? if($user_laurier_id_fdB) { echo "$user_laurier_id_fdB"; } else { echo "$laurierID_fF"; } ?>" <?php if($error_laurierID_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>                
                <STRONG><b>
              <input name='laurierID_fF_charactersleft' type='text' value='9' size='2' MAXLENGTH='2' readonly>
              </b></STRONG></TD></TR>
			 //--> 
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><DIV ALIGN="RIGHT"><STRONG><SPAN CLASS="copy">
                <?php if($error_laurierID_fF=="1") { echo "<FONT COLOR='#C12222'><B>Laurier ID</B></FONT>"; } else { echo "Laurier ID"; } ?>
              </SPAN><?PHP echo " $image_08"; ?></STRONG></DIV></TD>
              <TD><input name="laurierID_fF" type="text" size="45" maxlength="9" DISABLED onkeyup='if(this.value.length&gt;9){this.value=(this.value).substr(0,9);}this.form.laurierID_fF_charactersleft.value=9-this.value.length;' value="<? if($user_laurier_id_fdB) { echo "$user_laurier_id_fdB"; } else { echo "$laurierID_fF"; } ?>" <?php if($error_laurierID_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> />
                <STRONG><b>
                <input name='laurierID_fF_charactersleft' type='text' value='9' size='2' MAXLENGTH='2' readonly>
              </b></STRONG></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><DIV ALIGN="RIGHT"><STRONG><SPAN CLASS="copy">
                  <?php if($error_novell_email_fF=="1") { echo "<FONT COLOR='#C12222'><B>Laurier E-mail</B></FONT>"; } else { echo "Laurier E-mail"; } ?>
              </SPAN> <?PHP echo " $image_08"; ?></STRONG></DIV></TD>
              <TD><input name="email_fF" type="text" size="45" maxlength="50" DISABLED onKeyUp='if(this.value.length>50){this.value=(this.value).substr(0,50);}this.form.email_fF_charactersleft.value=50-this.value.length;' value="<? if($email_fdB) { echo "$email_fdB"; } else { echo "$email_fF"; } ?>" <?php if($error_email_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>>
                  <STRONG><b>
                  <input name='email_fF_charactersleft' type='text' value='50' size='2' MAXLENGTH='2' readonly>
              </b></STRONG></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD height="56" VALIGN="TOP"><div align="right"><STRONG><SPAN CLASS="copy">
                  <?php if($error_iam_fF=="1") { echo "<FONT COLOR='#C12222'><B>I am</B></FONT>"; } else { echo "I am"; } ?>
              </SPAN> <?PHP echo " $image_01"; ?></STRONG></div></TD>
              <TD><?php if($iam_fF=='1') { echo "<INPUT TYPE='radio' NAME='iam_fF' VALUE='1' CHECKED>"; } elseif($iam_fdB=='1') { echo "<INPUT TYPE='radio' NAME='iam_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='iam_fF' VALUE='1'>"; } ?>
A note-taker<br>
<?php if($iam_fF=='2') { echo "<INPUT TYPE='radio' NAME='iam_fF' VALUE='2' CHECKED>"; } elseif($iam_fdB=='2') { echo "<INPUT TYPE='radio' NAME='iam_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='iam_fF' VALUE='2'>"; } ?>
A student receiving notes<br>
<?php if($iam_fF=='3') { echo "<INPUT TYPE='radio' NAME='iam_fF' VALUE='3' CHECKED>"; } elseif($iam_fdB=='3') { echo "<INPUT TYPE='radio' NAME='iam_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='iam_fF' VALUE='3'>"; } ?>
Both a note-taker and student receiving notes</TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><DIV ALIGN="RIGHT"><STRONG><SPAN CLASS="copy">
                <?php if($error_agreement_correct_fF=="1") { echo "<FONT COLOR='#C12222'><B>Information</B></FONT>"; } else { echo "Information"; } ?>
              </SPAN><?PHP echo " $image_01"; ?></STRONG></DIV></TD>
              <TD><?php if($agreement_correct_fF=='1') { echo "<INPUT TYPE='checkbox' NAME='agreement_correct_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='checkbox' NAME='agreement_correct_fF' VALUE='1'>"; } ?>                Yes - 
              I  hereby certify that all information presented on this application is correct and complete.</TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD COLSPAN="2" VALIGN="TOP">&nbsp;</TD>
            </TR>
      </TABLE>           </TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="1" CELLPADDING="0" BGCOLOR="#CCCCCC">
          <TR>
            <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="7">
                <tr ALIGN="LEFT" VALIGN="TOP" BGCOLOR="#F4F4E9">
                  <td WIDTH="40%" BGCOLOR="#F4F4E9"><DIV ALIGN="LEFT"><span class="pageTitle"> </span></DIV></td>
                  <td WIDTH="60%" BGCOLOR="#F4F4E9"><DIV ALIGN="LEFT"><span class="pageTitle">
                      <INPUT TYPE='hidden' NAME='form_started' VALUE="Yes">
					  
					  <?php
					  //if(!$error_timeframe) { echo "<INPUT TYPE='submit' NAME='submit_step' VALUE='Submit Information'>"; }
					  //if($error_timeframe=='1') { echo "<INPUT TYPE='submit' NAME='submit_step' VALUE='Submit Information' DISABLED>"; }
					  echo "<INPUT TYPE='submit' NAME='submit_step' VALUE='Submit Information'>";
                 	  ?>
                  </span></DIV></td>
                </tr>
            </TABLE></TD>
          </TR>
      </TABLE></TD>
    </TR>
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD>&nbsp;</TD>
    </TR>
  </TABLE>
</form>
