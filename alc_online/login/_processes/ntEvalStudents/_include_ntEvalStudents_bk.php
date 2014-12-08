<FORM NAME="form_capture" METHOD="post" ACTION="<?php echo $PHP_SELF .'?action=ntEvalStudents'?>">
  <TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="3">
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD VALIGN="TOP">
          <TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="3">
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD COLSPAN="2" VALIGN="TOP">
			    <?PHP
			  echo "";
			  include ("/www/forms/accessible_learning/alc_student_applications/login/includes/_include_instructions.php"); 
			  ?></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD WIDTH="60%" VALIGN="TOP">&nbsp;</TD>
              <TD WIDTH="40%" VALIGN="TOP"><?php if(count($errors)>0) { include ("_includes/_error_message.php"); } ?></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><DIV ALIGN="RIGHT"><STRONG>How many note-takers did you have this semester?<FONT COLOR="#CC0000"><?PHP echo " $image_01"; ?></FONT></STRONG></DIV></TD>
              <TD VALIGN="TOP"><?PHP
			  	if($error_notetakers_fF=='1') { echo "<SELECT NAME='notetakers_fF' class='form' style='background-color: #FFFF99'>"; }
					else { echo "<SELECT NAME='notetakers_fF' class='form'>"; }
				if($notetakers_fF) { echo "<option value='$notetakers_fF' SELECTED>$notetakers_fF</option>"; }
					else  {echo "<option value='' SELECTED>please select</option>"; }
				echo "<option value='1'>1</option>";
				echo "<option value='2'>2</option>";
				echo "<option value='3'>3</option>";
				echo "<option value='4'>4</option>";
				echo "<option value='5'>5</option>";
				echo "<option value='6'>6</option>";
				echo "</SELECT>";
			  ?>              </TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD colspan="2" VALIGN="TOP">&nbsp;</TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD colspan="2" VALIGN="TOP"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="1" CELLPADDING="0" BGCOLOR="#CCCCCC">
                <TR>
                  <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="7">
                      <tr ALIGN="LEFT" VALIGN="TOP" BGCOLOR="#F4F4E9">
                        <td bgcolor="#FFFFFF"><DIV ALIGN="LEFT">
                            <DIV>
                              <table width="100%"  border="0" cellpadding="2" cellspacing="0">
                                <tr>
                                  <td width="60%"><div align="right">
                                      <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                          <td width="50%"><strong>Course 1 <font color="#CC0000"><?PHP echo " $image_01"; ?></font></strong></td>
                                          <td width="50%"><div align="right">Note-taker name<strong></strong></div></td>
                                        </tr>
                                      </table>
                                  </div></td>
                                  <td width="40%"><input name="c1_notetakerName_fF" type="text" size="30" maxlength="100" value="<? echo $c1_notetakerName_fF; ?>" <?php if($error_c1_notetakerName_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
                                </tr>
                                <tr>
                                  <td><div align="right">Course # and section<strong></strong> </div></td>
                                  <td><input name="c1_courseSection_fF" type="text" size="30" maxlength="100" value="<? echo $c1_courseSection_fF; ?>" <?php if($error_c1_courseSection_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
                                </tr>
                                <tr>
                                  <td colspan="2"><table width="100%" border="0" cellpadding="2" cellspacing="0">
                                      <tr bgcolor="#F4F4E9">
                                        <td width="60%" align="left" valign="top"><div align="right">Please rate the notes you have received for this course.</div></td>
                                        <td width="10%" align="center">Excellent</td>
                                        <td width="10%" align="center">Good</td>
                                        <td width="10%" align="center">Satisfactory</td>
                                        <td width="10%" align="center">Needs Improvement</td>
                                      </tr>
                                      <tr>
                                        <td><div align="right">Notes include course number, title, date and page number.<strong></strong> </div></td>
                                        <td align="center"><?php if($c1_01_fF=='4') { echo "<INPUT TYPE='radio' NAME='c1_01_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_01_fF' VALUE='4'>"; } ?></td>
                                        <td align="center"><?php if($c1_01_fF=='3') { echo "<INPUT TYPE='radio' NAME='c1_01_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_01_fF' VALUE='3'>"; } ?></td>
                                        <td align="center"><?php if($c1_01_fF=='2') { echo "<INPUT TYPE='radio' NAME='c1_01_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_01_fF' VALUE='2'>"; } ?></td>
                                        <td align="center"><?php if($c1_01_fF=='1') { echo "<INPUT TYPE='radio' NAME='c1_01_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_01_fF' VALUE='1'>"; } ?></td>
                                      </tr>
                                      <tr bgcolor="#FAFAF4">
                                        <td><div align="right">Notes are provided on time with no missing notes.<strong></strong> </div></td>
                                        <td align="center"><?php if($c1_02_fF=='4') { echo "<INPUT TYPE='radio' NAME='c1_02_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_02_fF' VALUE='4'>"; } ?></td>
                                        <td align="center"><?php if($c1_02_fF=='3') { echo "<INPUT TYPE='radio' NAME='c1_02_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_02_fF' VALUE='3'>"; } ?></td>
                                        <td align="center"><?php if($c1_02_fF=='2') { echo "<INPUT TYPE='radio' NAME='c1_02_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_02_fF' VALUE='2'>"; } ?></td>
                                        <td align="center"><?php if($c1_02_fF=='1') { echo "<INPUT TYPE='radio' NAME='c1_02_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_02_fF' VALUE='1'>"; } ?></td>
                                      </tr>
                                      <tr>
                                        <td><div align="right">Notes are legible and easy to read.<strong></strong> </div></td>
                                        <td align="center"><?php if($c1_03_fF=='4') { echo "<INPUT TYPE='radio' NAME='c1_03_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_03_fF' VALUE='4'>"; } ?></td>
                                        <td align="center"><?php if($c1_03_fF=='3') { echo "<INPUT TYPE='radio' NAME='c1_03_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_03_fF' VALUE='3'>"; } ?></td>
                                        <td align="center"><?php if($c1_03_fF=='2') { echo "<INPUT TYPE='radio' NAME='c1_03_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_03_fF' VALUE='2'>"; } ?></td>
                                        <td align="center"><?php if($c1_03_fF=='1') { echo "<INPUT TYPE='radio' NAME='c1_03_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_03_fF' VALUE='1'>"; } ?></td>
                                      </tr>
                                      <tr bgcolor="#FAFAF4">
                                        <td><div align="right">Notes include important points of lectures, discussions, videos and overheads.<strong></strong> </div></td>
                                        <td align="center"><?php if($c1_04_fF=='4') { echo "<INPUT TYPE='radio' NAME='c1_04_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_04_fF' VALUE='4'>"; } ?></td>
                                        <td align="center"><?php if($c1_04_fF=='3') { echo "<INPUT TYPE='radio' NAME='c1_04_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_04_fF' VALUE='3'>"; } ?></td>
                                        <td align="center"><?php if($c1_04_fF=='2') { echo "<INPUT TYPE='radio' NAME='c1_04_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_04_fF' VALUE='2'>"; } ?></td>
                                        <td align="center"><?php if($c1_04_fF=='1') { echo "<INPUT TYPE='radio' NAME='c1_04_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_04_fF' VALUE='1'>"; } ?></td>
                                      </tr>
                                      <tr>
                                        <td><div align="right">The note-taker initiates communication and is available for clarification.<strong></strong> </div></td>
                                        <td align="center"><?php if($c1_05_fF=='4') { echo "<INPUT TYPE='radio' NAME='c1_05_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_05_fF' VALUE='4'>"; } ?></td>
                                        <td align="center"><?php if($c1_05_fF=='3') { echo "<INPUT TYPE='radio' NAME='c1_05_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_05_fF' VALUE='3'>"; } ?></td>
                                        <td align="center"><?php if($c1_05_fF=='2') { echo "<INPUT TYPE='radio' NAME='c1_05_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_05_fF' VALUE='2'>"; } ?></td>
                                        <td align="center"><?php if($c1_05_fF=='1') { echo "<INPUT TYPE='radio' NAME='c1_05_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_05_fF' VALUE='1'>"; } ?></td>
                                      </tr>
                                      <tr bgcolor="#FAFAF4">
                                        <td><div align="right">Overall rating of this note-taker&rsquo;s notes?<strong></strong> </div></td>
                                        <td align="center"><?php if($c1_06_fF=='4') { echo "<INPUT TYPE='radio' NAME='c1_06_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_06_fF' VALUE='4'>"; } ?></td>
                                        <td align="center"><?php if($c1_06_fF=='3') { echo "<INPUT TYPE='radio' NAME='c1_06_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_06_fF' VALUE='3'>"; } ?></td>
                                        <td align="center"><?php if($c1_06_fF=='2') { echo "<INPUT TYPE='radio' NAME='c1_06_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_06_fF' VALUE='2'>"; } ?></td>
                                        <td align="center"><?php if($c1_06_fF=='1') { echo "<INPUT TYPE='radio' NAME='c1_06_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c1_06_fF' VALUE='1'>"; } ?></td>
                                      </tr>
                                      <tr>
                                        <td align="right" valign="top"><div align="right">Please expand on your ratings from above.
                              Do you have any suggestions or compliments for this Note-taker?<strong></strong></div></td>
                                        <td colspan="4" align="center"><div align="left">
                                            <TEXTAREA NAME="c1_info_fF" COLS="30" ROWS="3" <?php if($error_c1_info_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ><? echo $c1_info_fF; ?></TEXTAREA>
                                        </div></td>
                                      </tr>
                                  </table></td>
                                </tr>
                              </table>
                            </DIV>
                        </DIV></td>
                      </tr>
                  </TABLE></TD>
                </TR>
              </TABLE></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD colspan="2" VALIGN="TOP">&nbsp;</TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD colspan="2" VALIGN="TOP"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="1" CELLPADDING="0" BGCOLOR="#CCCCCC">
                <TR>
                  <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="7">
                      <tr ALIGN="LEFT" VALIGN="TOP" BGCOLOR="#F4F4E9">
                        <td bgcolor="#FFFFFF"><DIV ALIGN="LEFT">
                            <DIV>
                              <TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="7">
                                <tr ALIGN="LEFT" VALIGN="TOP" BGCOLOR="#F4F4E9">
                                  <td bgcolor="#FFFFFF"><DIV ALIGN="LEFT">
                                      <DIV>
                                        <table width="100%"  border="0" cellpadding="2" cellspacing="0">
                                          <tr>
                                            <td width="60%"><div align="right">
                                                <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                                                  <tr>
                                                    <td width="50%"><strong>Course 2 <font color="#CC0000"><?PHP echo " $image_08"; ?></font></strong></td>
                                                    <td width="50%"><div align="right">Note-taker name<strong></strong></div></td>
                                                  </tr>
                                                </table>
                                            </div></td>
                                            <td width="40%"><input name="c2_notetakerName_fF" type="text" size="30" maxlength="100" value="<? echo $c2_notetakerName_fF; ?>" <?php if($error_c2_notetakerName_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right">Course # and section<strong></strong> </div></td>
                                            <td><input name="c2_courseSection_fF" type="text" size="30" maxlength="100" value="<? echo $c2_courseSection_fF; ?>" <?php if($error_c2_courseSection_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2"><table width="100%" border="0" cellpadding="2" cellspacing="0">
                                                <tr bgcolor="#F4F4E9">
                                                  <td width="60%" align="left" valign="top"><div align="right">Please rate the notes you have received for this course.</div></td>
                                                  <td width="10%" align="center">Excellent</td>
                                                  <td width="10%" align="center">Good</td>
                                                  <td width="10%" align="center">Satisfactory</td>
                                                  <td width="10%" align="center">Needs Improvement</td>
                                                </tr>
                                                <tr>
                                                  <td><div align="right">Notes include course number, title, date and page number.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c2_01_fF=='4') { echo "<INPUT TYPE='radio' NAME='c2_01_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_01_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c2_01_fF=='3') { echo "<INPUT TYPE='radio' NAME='c2_01_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_01_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c2_01_fF=='2') { echo "<INPUT TYPE='radio' NAME='c2_01_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_01_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c2_01_fF=='1') { echo "<INPUT TYPE='radio' NAME='c2_01_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_01_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr bgcolor="#FAFAF4">
                                                  <td><div align="right">Notes are provided on time with no missing notes.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c2_02_fF=='4') { echo "<INPUT TYPE='radio' NAME='c2_02_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_02_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c2_02_fF=='3') { echo "<INPUT TYPE='radio' NAME='c2_02_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_02_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c2_02_fF=='2') { echo "<INPUT TYPE='radio' NAME='c2_02_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_02_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c2_02_fF=='1') { echo "<INPUT TYPE='radio' NAME='c2_02_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_02_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="right">Notes are legible and easy to read.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c2_03_fF=='4') { echo "<INPUT TYPE='radio' NAME='c2_03_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_03_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c2_03_fF=='3') { echo "<INPUT TYPE='radio' NAME='c2_03_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_03_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c2_03_fF=='2') { echo "<INPUT TYPE='radio' NAME='c2_03_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_03_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c2_03_fF=='1') { echo "<INPUT TYPE='radio' NAME='c2_03_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_03_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr bgcolor="#FAFAF4">
                                                  <td><div align="right">Notes include important points of lectures, discussions, videos and overheads.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c2_04_fF=='4') { echo "<INPUT TYPE='radio' NAME='c2_04_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_04_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c2_04_fF=='3') { echo "<INPUT TYPE='radio' NAME='c2_04_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_04_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c2_04_fF=='2') { echo "<INPUT TYPE='radio' NAME='c2_04_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_04_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c2_04_fF=='1') { echo "<INPUT TYPE='radio' NAME='c2_04_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_04_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="right">The note-taker initiates communication and is available for clarification.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c2_05_fF=='4') { echo "<INPUT TYPE='radio' NAME='c2_05_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_05_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c2_05_fF=='3') { echo "<INPUT TYPE='radio' NAME='c2_05_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_05_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c2_05_fF=='2') { echo "<INPUT TYPE='radio' NAME='c2_05_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_05_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c2_05_fF=='1') { echo "<INPUT TYPE='radio' NAME='c2_05_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_05_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr bgcolor="#FAFAF4">
                                                  <td><div align="right">Overall rating of this note-taker&rsquo;s notes?<strong></strong> </div></td>
                                                  <td align="center"><?php if($c2_06_fF=='4') { echo "<INPUT TYPE='radio' NAME='c2_06_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_06_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c2_06_fF=='3') { echo "<INPUT TYPE='radio' NAME='c2_06_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_06_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c2_06_fF=='2') { echo "<INPUT TYPE='radio' NAME='c2_06_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_06_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c2_06_fF=='1') { echo "<INPUT TYPE='radio' NAME='c2_06_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c2_06_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr>
                                                  <td align="right" valign="top"><div align="right">Please expand on your ratings from above. Do you have any suggestions or compliments for this Note-taker?<strong></strong></div></td>
                                                  <td colspan="4" align="center"><div align="left">
                                                      <TEXTAREA NAME="c2_info_fF" COLS="30" ROWS="3" <?php if($error_c2_info_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ><? echo $c2_info_fF; ?></TEXTAREA>
                                                  </div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                        </table>
                                      </DIV>
                                  </DIV></td>
                                </tr>
                              </TABLE>
                            </DIV>
                        </DIV></td>
                      </tr>
                  </TABLE></TD>
                </TR>
              </TABLE>
              </TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD colspan="2" VALIGN="TOP">&nbsp;</TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD colspan="2" VALIGN="TOP"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="1" CELLPADDING="0" BGCOLOR="#CCCCCC">
                <TR>
                  <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="7">
                      <tr ALIGN="LEFT" VALIGN="TOP" BGCOLOR="#F4F4E9">
                        <td bgcolor="#FFFFFF"><DIV ALIGN="LEFT">
                            <DIV>
                              <TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="7">
                                <tr ALIGN="LEFT" VALIGN="TOP" BGCOLOR="#F4F4E9">
                                  <td bgcolor="#FFFFFF"><DIV ALIGN="LEFT">
                                      <DIV>
                                        <table width="100%"  border="0" cellpadding="2" cellspacing="0">
                                          <tr>
                                            <td width="60%"><div align="right">
                                                <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                                                  <tr>
                                                    <td width="50%"><strong>Course 3 <font color="#CC0000"><?PHP echo " $image_08"; ?></font></strong></td>
                                                    <td width="50%"><div align="right">Note-taker name<strong></strong></div></td>
                                                  </tr>
                                                </table>
                                            </div></td>
                                            <td width="40%"><input name="c3_notetakerName_fF" type="text" size="30" maxlength="100" value="<? echo $c3_notetakerName_fF; ?>" <?php if($error_c3_notetakerName_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right">Course # and section<strong></strong> </div></td>
                                            <td><input name="c3_courseSection_fF" type="text" size="30" maxlength="100" value="<? echo $c3_courseSection_fF; ?>" <?php if($error_c3_courseSection_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2"><table width="100%" border="0" cellpadding="2" cellspacing="0">
                                                <tr bgcolor="#F4F4E9">
                                                  <td width="60%" align="left" valign="top"><div align="right">Please rate the notes you have received for this course.</div></td>
                                                  <td width="10%" align="center">Excellent</td>
                                                  <td width="10%" align="center">Good</td>
                                                  <td width="10%" align="center">Satisfactory</td>
                                                  <td width="10%" align="center">Needs Improvement</td>
                                                </tr>
                                                <tr>
                                                  <td><div align="right">Notes include course number, title, date and page number.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c3_01_fF=='4') { echo "<INPUT TYPE='radio' NAME='c3_01_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_01_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c3_01_fF=='3') { echo "<INPUT TYPE='radio' NAME='c3_01_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_01_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c3_01_fF=='2') { echo "<INPUT TYPE='radio' NAME='c3_01_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_01_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c3_01_fF=='1') { echo "<INPUT TYPE='radio' NAME='c3_01_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_01_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr bgcolor="#FAFAF4">
                                                  <td><div align="right">Notes are provided on time with no missing notes.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c3_02_fF=='4') { echo "<INPUT TYPE='radio' NAME='c3_02_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_02_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c3_02_fF=='3') { echo "<INPUT TYPE='radio' NAME='c3_02_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_02_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c3_02_fF=='2') { echo "<INPUT TYPE='radio' NAME='c3_02_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_02_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c3_02_fF=='1') { echo "<INPUT TYPE='radio' NAME='c3_02_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_02_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="right">Notes are legible and easy to read.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c3_03_fF=='4') { echo "<INPUT TYPE='radio' NAME='c3_03_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_03_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c3_03_fF=='3') { echo "<INPUT TYPE='radio' NAME='c3_03_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_03_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c3_03_fF=='2') { echo "<INPUT TYPE='radio' NAME='c3_03_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_03_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c3_03_fF=='1') { echo "<INPUT TYPE='radio' NAME='c3_03_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_03_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr bgcolor="#FAFAF4">
                                                  <td><div align="right">Notes include important points of lectures, discussions, videos and overheads.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c3_04_fF=='4') { echo "<INPUT TYPE='radio' NAME='c3_04_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_04_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c3_04_fF=='3') { echo "<INPUT TYPE='radio' NAME='c3_04_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_04_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c3_04_fF=='2') { echo "<INPUT TYPE='radio' NAME='c3_04_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_04_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c3_04_fF=='1') { echo "<INPUT TYPE='radio' NAME='c3_04_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_04_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="right">The note-taker initiates communication and is available for clarification.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c3_05_fF=='4') { echo "<INPUT TYPE='radio' NAME='c3_05_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_05_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c3_05_fF=='3') { echo "<INPUT TYPE='radio' NAME='c3_05_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_05_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c3_05_fF=='2') { echo "<INPUT TYPE='radio' NAME='c3_05_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_05_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c3_05_fF=='1') { echo "<INPUT TYPE='radio' NAME='c3_05_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_05_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr bgcolor="#FAFAF4">
                                                  <td><div align="right">Overall rating of this note-taker&rsquo;s notes?<strong></strong> </div></td>
                                                  <td align="center"><?php if($c3_06_fF=='4') { echo "<INPUT TYPE='radio' NAME='c3_06_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_06_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c3_06_fF=='3') { echo "<INPUT TYPE='radio' NAME='c3_06_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_06_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c3_06_fF=='2') { echo "<INPUT TYPE='radio' NAME='c3_06_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_06_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c3_06_fF=='1') { echo "<INPUT TYPE='radio' NAME='c3_06_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c3_06_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr>
                                                  <td align="right" valign="top"><div align="right">Please expand on your ratings from above. Do you have any suggestions or compliments for this Note-taker?<strong></strong></div></td>
                                                  <td colspan="4" align="center"><div align="left">
                                                      <TEXTAREA NAME="c3_info_fF" COLS="30" ROWS="3" <?php if($error_c3_info_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ><? echo $c3_info_fF; ?></TEXTAREA>
                                                  </div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                        </table>
                                      </DIV>
                                  </DIV></td>
                                </tr>
                              </TABLE>
                            </DIV>
                        </DIV></td>
                      </tr>
                  </TABLE></TD>
                </TR>
              </TABLE>
              </TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD colspan="2" VALIGN="TOP"><table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#CCCCCC">
                <tr>
                  <td><table width="100%" border="0" cellspacing="0" cellpadding="7">
                      <tr align="LEFT" valign="TOP" bgcolor="#F4F4E9">
                        <td bgcolor="#FFFFFF"><div align="LEFT">
                            <div>
                              <table width="100%" border="0" cellspacing="0" cellpadding="7">
                                <tr align="LEFT" valign="TOP" bgcolor="#F4F4E9">
                                  <td bgcolor="#FFFFFF"><div align="LEFT">
                                      <div>
                                        <table width="100%"  border="0" cellpadding="2" cellspacing="0">
                                          <tr>
                                            <td width="60%"><div align="right">
                                                <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                                                  <tr>
                                                    <td width="50%"><strong>Course 4 <font color="#CC0000"><?PHP echo " $image_08"; ?></font></strong></td>
                                                    <td width="50%"><div align="right">Note-taker name<strong></strong></div></td>
                                                  </tr>
                                                </table>
                                            </div></td>
                                            <td width="40%"><input name="c4_notetakerName_fF" type="text" size="30" maxlength="100" value="<? echo $c4_notetakerName_fF; ?>" <?php if($error_c4_notetakerName_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right">Course # and section<strong></strong> </div></td>
                                            <td><input name="c4_courseSection_fF" type="text" size="30" maxlength="100" value="<? echo $c4_courseSection_fF; ?>" <?php if($error_c4_courseSection_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2"><table width="100%" border="0" cellpadding="2" cellspacing="0">
                                                <tr bgcolor="#F4F4E9">
                                                  <td width="60%" align="left" valign="top"><div align="right">Please rate the notes you have received for this course.</div></td>
                                                  <td width="10%" align="center">Excellent</td>
                                                  <td width="10%" align="center">Good</td>
                                                  <td width="10%" align="center">Satisfactory</td>
                                                  <td width="10%" align="center">Needs Improvement</td>
                                                </tr>
                                                <tr>
                                                  <td><div align="right">Notes include course number, title, date and page number.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c4_01_fF=='4') { echo "<INPUT TYPE='radio' NAME='c4_01_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_01_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c4_01_fF=='3') { echo "<INPUT TYPE='radio' NAME='c4_01_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_01_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c4_01_fF=='2') { echo "<INPUT TYPE='radio' NAME='c4_01_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_01_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c4_01_fF=='1') { echo "<INPUT TYPE='radio' NAME='c4_01_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_01_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr bgcolor="#FAFAF4">
                                                  <td><div align="right">Notes are provided on time with no missing notes.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c4_02_fF=='4') { echo "<INPUT TYPE='radio' NAME='c4_02_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_02_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c4_02_fF=='3') { echo "<INPUT TYPE='radio' NAME='c4_02_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_02_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c4_02_fF=='2') { echo "<INPUT TYPE='radio' NAME='c4_02_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_02_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c4_02_fF=='1') { echo "<INPUT TYPE='radio' NAME='c4_02_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_02_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="right">Notes are legible and easy to read.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c4_03_fF=='4') { echo "<INPUT TYPE='radio' NAME='c4_03_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_03_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c4_03_fF=='3') { echo "<INPUT TYPE='radio' NAME='c4_03_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_03_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c4_03_fF=='2') { echo "<INPUT TYPE='radio' NAME='c4_03_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_03_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c4_03_fF=='1') { echo "<INPUT TYPE='radio' NAME='c4_03_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_03_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr bgcolor="#FAFAF4">
                                                  <td><div align="right">Notes include important points of lectures, discussions, videos and overheads.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c4_04_fF=='4') { echo "<INPUT TYPE='radio' NAME='c4_04_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_04_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c4_04_fF=='3') { echo "<INPUT TYPE='radio' NAME='c4_04_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_04_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c4_04_fF=='2') { echo "<INPUT TYPE='radio' NAME='c4_04_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_04_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c4_04_fF=='1') { echo "<INPUT TYPE='radio' NAME='c4_04_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_04_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="right">The note-taker initiates communication and is available for clarification.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c4_05_fF=='4') { echo "<INPUT TYPE='radio' NAME='c4_05_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_05_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c4_05_fF=='3') { echo "<INPUT TYPE='radio' NAME='c4_05_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_05_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c4_05_fF=='2') { echo "<INPUT TYPE='radio' NAME='c4_05_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_05_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c4_05_fF=='1') { echo "<INPUT TYPE='radio' NAME='c4_05_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_05_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr bgcolor="#FAFAF4">
                                                  <td><div align="right">Overall rating of this note-taker&rsquo;s notes?<strong></strong> </div></td>
                                                  <td align="center"><?php if($c4_06_fF=='4') { echo "<INPUT TYPE='radio' NAME='c4_06_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_06_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c4_06_fF=='3') { echo "<INPUT TYPE='radio' NAME='c4_06_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_06_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c4_06_fF=='2') { echo "<INPUT TYPE='radio' NAME='c4_06_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_06_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c4_06_fF=='1') { echo "<INPUT TYPE='radio' NAME='c4_06_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c4_06_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr>
                                                  <td align="right" valign="top"><div align="right">Please expand on your ratings from above. Do you have any suggestions or compliments for this Note-taker?<strong></strong></div></td>
                                                  <td colspan="4" align="center"><div align="left">
                                                      <textarea name="c4_info_fF" cols="30" rows="3" <?php if($error_c4_info_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ><? echo $c4_info_fF; ?></textarea>
                                                  </div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                        </table>
                                      </div>
                                  </div></td>
                                </tr>
                              </table>
                            </div>
                        </div></td>
                      </tr>
                  </table></td>
                </tr>
              </table></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD colspan="2" VALIGN="TOP">&nbsp;</TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD colspan="2" VALIGN="TOP"><table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#CCCCCC">
                <tr>
                  <td><table width="100%" border="0" cellspacing="0" cellpadding="7">
                      <tr align="LEFT" valign="TOP" bgcolor="#F4F4E9">
                        <td bgcolor="#FFFFFF"><div align="LEFT">
                            <div>
                              <table width="100%" border="0" cellspacing="0" cellpadding="7">
                                <tr align="LEFT" valign="TOP" bgcolor="#F4F4E9">
                                  <td bgcolor="#FFFFFF"><div align="LEFT">
                                      <div>
                                        <table width="100%"  border="0" cellpadding="2" cellspacing="0">
                                          <tr>
                                            <td width="60%"><div align="right">
                                                <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                                                  <tr>
                                                    <td width="50%"><strong>Course 5 <font color="#CC0000"><?PHP echo " $image_08"; ?></font></strong></td>
                                                    <td width="50%"><div align="right">Note-taker name<strong></strong></div></td>
                                                  </tr>
                                                </table>
                                            </div></td>
                                            <td width="40%"><input name="c5_notetakerName_fF" type="text" size="30" maxlength="100" value="<? echo $c5_notetakerName_fF; ?>" <?php if($error_c5_notetakerName_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right">Course # and section<strong></strong> </div></td>
                                            <td><input name="c5_courseSection_fF" type="text" size="30" maxlength="100" value="<? echo $c5_courseSection_fF; ?>" <?php if($error_c5_courseSection_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2"><table width="100%" border="0" cellpadding="2" cellspacing="0">
                                                <tr bgcolor="#F4F4E9">
                                                  <td width="60%" align="left" valign="top"><div align="right">Please rate the notes you have received for this course.</div></td>
                                                  <td width="10%" align="center">Excellent</td>
                                                  <td width="10%" align="center">Good</td>
                                                  <td width="10%" align="center">Satisfactory</td>
                                                  <td width="10%" align="center">Needs Improvement</td>
                                                </tr>
                                                <tr>
                                                  <td><div align="right">Notes include course number, title, date and page number.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c5_01_fF=='4') { echo "<INPUT TYPE='radio' NAME='c5_01_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_01_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c5_01_fF=='3') { echo "<INPUT TYPE='radio' NAME='c5_01_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_01_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c5_01_fF=='2') { echo "<INPUT TYPE='radio' NAME='c5_01_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_01_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c5_01_fF=='1') { echo "<INPUT TYPE='radio' NAME='c5_01_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_01_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr bgcolor="#FAFAF4">
                                                  <td><div align="right">Notes are provided on time with no missing notes.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c5_02_fF=='4') { echo "<INPUT TYPE='radio' NAME='c5_02_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_02_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c5_02_fF=='3') { echo "<INPUT TYPE='radio' NAME='c5_02_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_02_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c5_02_fF=='2') { echo "<INPUT TYPE='radio' NAME='c5_02_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_02_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c5_02_fF=='1') { echo "<INPUT TYPE='radio' NAME='c5_02_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_02_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="right">Notes are legible and easy to read.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c5_03_fF=='4') { echo "<INPUT TYPE='radio' NAME='c5_03_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_03_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c5_03_fF=='3') { echo "<INPUT TYPE='radio' NAME='c5_03_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_03_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c5_03_fF=='2') { echo "<INPUT TYPE='radio' NAME='c5_03_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_03_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c5_03_fF=='1') { echo "<INPUT TYPE='radio' NAME='c5_03_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_03_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr bgcolor="#FAFAF4">
                                                  <td><div align="right">Notes include important points of lectures, discussions, videos and overheads.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c5_04_fF=='4') { echo "<INPUT TYPE='radio' NAME='c5_04_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_04_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c5_04_fF=='3') { echo "<INPUT TYPE='radio' NAME='c5_04_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_04_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c5_04_fF=='2') { echo "<INPUT TYPE='radio' NAME='c5_04_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_04_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c5_04_fF=='1') { echo "<INPUT TYPE='radio' NAME='c5_04_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_04_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="right">The note-taker initiates communication and is available for clarification.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c5_05_fF=='4') { echo "<INPUT TYPE='radio' NAME='c5_05_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_05_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c5_05_fF=='3') { echo "<INPUT TYPE='radio' NAME='c5_05_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_05_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c5_05_fF=='2') { echo "<INPUT TYPE='radio' NAME='c5_05_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_05_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c5_05_fF=='1') { echo "<INPUT TYPE='radio' NAME='c5_05_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_05_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr bgcolor="#FAFAF4">
                                                  <td><div align="right">Overall rating of this note-taker&rsquo;s notes?<strong></strong> </div></td>
                                                  <td align="center"><?php if($c5_06_fF=='4') { echo "<INPUT TYPE='radio' NAME='c5_06_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_06_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c5_06_fF=='3') { echo "<INPUT TYPE='radio' NAME='c5_06_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_06_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c5_06_fF=='2') { echo "<INPUT TYPE='radio' NAME='c5_06_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_06_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c5_06_fF=='1') { echo "<INPUT TYPE='radio' NAME='c5_06_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c5_06_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr>
                                                  <td align="right" valign="top"><div align="right">Please expand on your ratings from above. Do you have any suggestions or compliments for this Note-taker?<strong></strong></div></td>
                                                  <td colspan="4" align="center"><div align="left">
                                                      <textarea name="c5_info_fF" cols="30" rows="3" <?php if($error_c5_info_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ><? echo $c5_info_fF; ?></textarea>
                                                  </div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                        </table>
                                      </div>
                                  </div></td>
                                </tr>
                              </table>
                            </div>
                        </div></td>
                      </tr>
                  </table></td>
                </tr>
              </table>
              </TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD colspan="2" VALIGN="TOP">&nbsp;</TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD colspan="2" VALIGN="TOP"><table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#CCCCCC">
                <tr>
                  <td><table width="100%" border="0" cellspacing="0" cellpadding="7">
                      <tr align="LEFT" valign="TOP" bgcolor="#F4F4E9">
                        <td bgcolor="#FFFFFF"><div align="LEFT">
                            <div>
                              <table width="100%" border="0" cellspacing="0" cellpadding="7">
                                <tr align="LEFT" valign="TOP" bgcolor="#F4F4E9">
                                  <td bgcolor="#FFFFFF"><div align="LEFT">
                                      <div>
                                        <table width="100%"  border="0" cellpadding="2" cellspacing="0">
                                          <tr>
                                            <td width="60%"><div align="right">
                                                <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                                                  <tr>
                                                    <td width="50%"><strong>Course 6 <font color="#CC0000"><?PHP echo " $image_08"; ?></font></strong></td>
                                                    <td width="50%"><div align="right">Note-taker name<strong></strong></div></td>
                                                  </tr>
                                                </table>
                                            </div></td>
                                            <td width="40%"><input name="c6_notetakerName_fF" type="text" size="30" maxlength="100" value="<? echo $c6_notetakerName_fF; ?>" <?php if($error_c6_notetakerName_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
                                          </tr>
                                          <tr>
                                            <td><div align="right">Course # and section<strong></strong> </div></td>
                                            <td><input name="c6_courseSection_fF" type="text" size="30" maxlength="100" value="<? echo $c6_courseSection_fF; ?>" <?php if($error_c6_courseSection_fF=="1") { echo "style='background-color: #FFFF99';"; } ?>></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2"><table width="100%" border="0" cellpadding="2" cellspacing="0">
                                                <tr bgcolor="#F4F4E9">
                                                  <td width="60%" align="left" valign="top"><div align="right">Please rate the notes you have received for this course.</div></td>
                                                  <td width="10%" align="center">Excellent</td>
                                                  <td width="10%" align="center">Good</td>
                                                  <td width="10%" align="center">Satisfactory</td>
                                                  <td width="10%" align="center">Needs Improvement</td>
                                                </tr>
                                                <tr>
                                                  <td><div align="right">Notes include course number, title, date and page number.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c6_01_fF=='4') { echo "<INPUT TYPE='radio' NAME='c6_01_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_01_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c6_01_fF=='3') { echo "<INPUT TYPE='radio' NAME='c6_01_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_01_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c6_01_fF=='2') { echo "<INPUT TYPE='radio' NAME='c6_01_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_01_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c6_01_fF=='1') { echo "<INPUT TYPE='radio' NAME='c6_01_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_01_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr bgcolor="#FAFAF4">
                                                  <td><div align="right">Notes are provided on time with no missing notes.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c6_02_fF=='4') { echo "<INPUT TYPE='radio' NAME='c6_02_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_02_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c6_02_fF=='3') { echo "<INPUT TYPE='radio' NAME='c6_02_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_02_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c6_02_fF=='2') { echo "<INPUT TYPE='radio' NAME='c6_02_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_02_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c6_02_fF=='1') { echo "<INPUT TYPE='radio' NAME='c6_02_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_02_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="right">Notes are legible and easy to read.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c6_03_fF=='4') { echo "<INPUT TYPE='radio' NAME='c6_03_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_03_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c6_03_fF=='3') { echo "<INPUT TYPE='radio' NAME='c6_03_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_03_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c6_03_fF=='2') { echo "<INPUT TYPE='radio' NAME='c6_03_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_03_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c6_03_fF=='1') { echo "<INPUT TYPE='radio' NAME='c6_03_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_03_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr bgcolor="#FAFAF4">
                                                  <td><div align="right">Notes include important points of lectures, discussions, videos and overheads.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c6_04_fF=='4') { echo "<INPUT TYPE='radio' NAME='c6_04_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_04_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c6_04_fF=='3') { echo "<INPUT TYPE='radio' NAME='c6_04_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_04_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c6_04_fF=='2') { echo "<INPUT TYPE='radio' NAME='c6_04_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_04_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c6_04_fF=='1') { echo "<INPUT TYPE='radio' NAME='c6_04_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_04_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="right">The note-taker initiates communication and is available for clarification.<strong></strong> </div></td>
                                                  <td align="center"><?php if($c6_05_fF=='4') { echo "<INPUT TYPE='radio' NAME='c6_05_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_05_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c6_05_fF=='3') { echo "<INPUT TYPE='radio' NAME='c6_05_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_05_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c6_05_fF=='2') { echo "<INPUT TYPE='radio' NAME='c6_05_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_05_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c6_05_fF=='1') { echo "<INPUT TYPE='radio' NAME='c6_05_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_05_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr bgcolor="#FAFAF4">
                                                  <td><div align="right">Overall rating of this note-taker&rsquo;s notes?<strong></strong> </div></td>
                                                  <td align="center"><?php if($c6_06_fF=='4') { echo "<INPUT TYPE='radio' NAME='c6_06_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_06_fF' VALUE='4'>"; } ?></td>
                                                  <td align="center"><?php if($c6_06_fF=='3') { echo "<INPUT TYPE='radio' NAME='c6_06_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_06_fF' VALUE='3'>"; } ?></td>
                                                  <td align="center"><?php if($c6_06_fF=='2') { echo "<INPUT TYPE='radio' NAME='c6_06_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_06_fF' VALUE='2'>"; } ?></td>
                                                  <td align="center"><?php if($c6_06_fF=='1') { echo "<INPUT TYPE='radio' NAME='c6_06_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='c6_06_fF' VALUE='1'>"; } ?></td>
                                                </tr>
                                                <tr>
                                                  <td align="right" valign="top"><div align="right">Please expand on your ratings from above. Do you have any suggestions or compliments for this Note-taker?<strong></strong></div></td>
                                                  <td colspan="4" align="center"><div align="left">
                                                      <textarea name="c6_info_fF" cols="30" rows="3" <?php if($error_c6_info_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ><? echo $c6_info_fF; ?></textarea>
                                                  </div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                        </table>
                                      </div>
                                  </div></td>
                                </tr>
                              </table>
                            </div>
                        </div></td>
                      </tr>
                  </table></td>
                </tr>
              </table></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP">&nbsp;</TD>
              <TD VALIGN="TOP">&nbsp;</TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD colspan="2" VALIGN="TOP"><table width="100%" border="0" cellpadding="2" cellspacing="0">
                <tr>
                  <td width="60%"><div align="right"><strong>Please rate your interactions with the ALC office in the following areas:<font color="#CC0000"><?PHP echo " $image_01"; ?></font></strong></div></td>
                  <td width="10%" align="center">Excellent</td>
                  <td width="10%" align="center">Good</td>
                  <td width="10%" align="center">Satisfactory</td>
                  <td width="0%" align="center">Needs Improvement</td>
                </tr>
                <tr>
                  <td><div align="right">Communication<strong></strong></div></td>
                  <td align="center"><?php if($interaction_01_fF=='4') { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='4'>"; } ?></td>
                  <td align="center"><?php if($interaction_01_fF=='3') { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='3'>"; } ?></td>
                  <td align="center"><?php if($interaction_01_fF=='2') { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='2'>"; } ?></td>
                  <td align="center"><?php if($interaction_01_fF=='1') { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='1'>"; } ?></td>
                </tr>
                <tr>
                  <td><div align="right">Friendliness<strong></strong></div></td>
                  <td align="center"><?php if($interaction_02_fF=='4') { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='4'>"; } ?></td>
                  <td align="center"><?php if($interaction_02_fF=='3') { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='3'>"; } ?></td>
                  <td align="center"><?php if($interaction_02_fF=='2') { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='2'>"; } ?></td>
                  <td align="center"><?php if($interaction_02_fF=='1') { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_02_fF' VALUE='1'>"; } ?></td>
                </tr>
                <tr>
                  <td><div align="right">Efficiency<strong></strong></div></td>
                  <td align="center"><?php if($interaction_03_fF=='4') { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='4'>"; } ?></td>
                  <td align="center"><?php if($interaction_03_fF=='3') { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='3'>"; } ?></td>
                  <td align="center"><?php if($interaction_03_fF=='2') { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='2'>"; } ?></td>
                  <td align="center"><?php if($interaction_03_fF=='1') { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_03_fF' VALUE='1'>"; } ?></td>
                </tr>
              </table></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"><strong></strong></div></TD>
              <TD VALIGN="TOP">&nbsp;</TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><DIV ALIGN="RIGHT"><STRONG>Do you have any extra comments about your experience with the ALC Note-taking Program?<?PHP echo " $image_01"; ?></STRONG></DIV></TD>
              <TD VALIGN="TOP"><TEXTAREA NAME="additional_comments_fF" COLS="30" ROWS="3" <?php if($error_additional_comments_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ><? echo $additional_comments_fF; ?></TEXTAREA>
              </TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP">&nbsp;</TD>
              <TD VALIGN="TOP">&nbsp;</TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"><STRONG>Do you want this information to be shared with the note-taker?
              Your name will not be shared.<?PHP echo " $image_01"; ?></STRONG></div></TD>
              <TD VALIGN="TOP"><?php if($shared_fF=='1') { echo "<INPUT TYPE='radio' NAME='shared_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='shared_fF' VALUE='1'>"; } ?>
Yes
  <?php if($shared_fF=='0') { echo "<INPUT TYPE='radio' NAME='shared_fF' VALUE='0' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='shared_fF' VALUE='0'>"; } ?>
No</TD>
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
                  <td WIDTH="60%"><DIV ALIGN="LEFT"><span class="pageTitle"> </span></DIV></td>
                  <td WIDTH="40%"><DIV ALIGN="LEFT"><span class="pageTitle">
                      <INPUT TYPE='hidden' NAME='form_started' VALUE="Yes">
					  
					  <?php
					  if(!$error_timeframe) { echo "<INPUT TYPE='submit' NAME='submit_step' VALUE='Submit Information'>"; }
					  if($error_timeframe=='1') { echo "<INPUT TYPE='submit' NAME='submit_step' VALUE='Submit Information' DISABLED>"; }
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
