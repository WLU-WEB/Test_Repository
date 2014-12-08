<FORM NAME="form_capture" METHOD="post" ACTION="<?php echo $PHP_SELF .'?action=ntEvalStudents'?>">
  <TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="3">
    <TR ALIGN="LEFT" VALIGN="MIDDLE">
      <TD VALIGN="TOP">
          <TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="3">
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD COLSPAN="2" VALIGN="TOP">
			    <?PHP
			  echo "";
			  include ("includes/_include_instructions.php"); 
			  ?></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD WIDTH="10%" VALIGN="TOP"><div align="right"></div></TD>
              <TD WIDTH="90%" VALIGN="TOP"><?php if(count($errors)>0) { include ("includes/_error_message.php"); } ?></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP">&nbsp;</TD>
              <TD VALIGN="TOP"> <strong>Please complete one course section for each note-taker that you had this semester. </strong></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"></div></TD>
              <TD VALIGN="TOP"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="1" CELLPADDING="0" BGCOLOR="#CCCCCC">
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
                                          <td width="50%"><div align="right"><strong></strong></div></td>
                                        </tr>
                                      </table>
                                  </div></td>
                                  <td width="40%">&nbsp;</td>
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
                                        <td><div align="right">Notes were easy to access.<strong></strong> </div></td>
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
                                        <td align="right" valign="top"><div align="right">Please expand on your ratings from above. Do you have any suggestions or compliments for this Note-taker?<strong></strong></div></td>
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
              <TD VALIGN="TOP"><div align="right"></div></TD>
              <TD VALIGN="TOP"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="1" CELLPADDING="0" BGCOLOR="#CCCCCC">
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
                                                    <td width="50%"><div align="right"><strong></strong></div></td>
                                                  </tr>
                                                </table>
                                            </div></td>
                                            <td width="40%">&nbsp;</td>
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
                                                  <td><div align="right">Notes were easy to access.<strong></strong> </div></td>
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
              </TABLE></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"></div></TD>
              <TD VALIGN="TOP"><TABLE WIDTH="100%" BORDER="0" CELLSPACING="1" CELLPADDING="0" BGCOLOR="#CCCCCC">
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
                                                    <td width="50%"><div align="right"><strong></strong></div></td>
                                                  </tr>
                                                </table>
                                            </div></td>
                                            <td width="40%">&nbsp;</td>
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
                                                  <td><div align="right">Notes were easy to access.<strong></strong> </div></td>
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
              </TABLE></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"></div></TD>
              <TD VALIGN="TOP"><table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#CCCCCC">
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
                                                    <td width="50%"><div align="right"></div></td>
                                                  </tr>
                                                </table>
                                            </div></td>
                                            <td width="40%">&nbsp;</td>
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
                                                  <td><div align="right">Notes were easy to access.<strong></strong> </div></td>
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
              <TD VALIGN="TOP"><div align="right"></div></TD>
              <TD VALIGN="TOP"><table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#CCCCCC">
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
                                                    <td width="50%"><div align="right"><strong></strong></div></td>
                                                  </tr>
                                                </table>
                                            </div></td>
                                            <td width="40%">&nbsp;</td>
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
                                                  <td><div align="right">Notes were easy to access.<strong></strong> </div></td>
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
              </table></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"></div></TD>
              <TD VALIGN="TOP"><table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="#CCCCCC">
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
                                                    <td width="50%"><div align="right"><strong></strong></div></td>
                                                  </tr>
                                                </table>
                                            </div></td>
                                            <td width="40%">&nbsp;</td>
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
                                                  <td><div align="right">Notes were easy to access.<strong></strong> </div></td>
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
                                  <td width="20%"><div align="right"><strong></strong></div></td>
                                  <td width="10%" align="center">Excellent</td>
                                  <td width="10%" align="center">Good</td>
                                  <td width="10%" align="center">Satisfactory</td>
                                  <td width="10%" align="center">Needs Improvement</td>
                                </tr>
                                <tr>
                                  <td><div align="right">Communication<strong></strong></div></td>
                                  <td align="center"><?php if($interaction_01_fF=='4') { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='4' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='4'>"; } ?></td>
                                  <td align="center"><?php if($interaction_01_fF=='3') { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='3' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='3'>"; } ?></td>
                                  <td align="center"><?php if($interaction_01_fF=='2') { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='2' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='2'>"; } ?></td>
                                  <td align="center"><?php if($interaction_01_fF=='1') { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='interaction_01_fF' VALUE='1'>"; } ?></td>
                                </tr>
                                <tr bgcolor="#FAFAF4">
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
                              </table> 
                            </DIV>
                        </DIV></td>
                      </tr>
                  </TABLE></TD>
                </TR>
              </TABLE></TD>
            </TR>
            <tr align="left" valign="middle">
              <td valign="top"><div align="right"><strong><?PHP echo " $image_01"; ?></strong></div></td>
              <td valign="top"><strong>Do you have any feedback about signing up to be a note-taker and sharing notes on MyLearningSpace?&nbsp; If none, please indicate.</strong></td>
            </tr>
            <tr align="left" valign="middle">
              <td valign="top">&nbsp;</td>
              <td valign="top"><textarea name="mylearningspace_fF" cols="35" rows="3" <?php if($error_mylearningspace_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ><? echo $mylearningspace_fF; ?></textarea></td>
            </tr>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"><STRONG><?PHP echo " $image_01"; ?></STRONG></div></TD>
              <TD VALIGN="TOP"><STRONG>Do you have any extra comments about your experience with the ALC Note-taking Program?</STRONG></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"></div></TD>
              <TD VALIGN="TOP"><textarea name="additional_comments_fF" cols="30" rows="3" <?php if($error_additional_comments_fF=="1") { echo "style='background-color: #FFFF99';"; } ?> ><? echo $additional_comments_fF; ?></textarea></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"><STRONG><?PHP echo " $image_01"; ?></STRONG></div></TD>
              <TD VALIGN="TOP"><STRONG>Do you want this information to be shared with the note-taker? Your name will not be shared.</STRONG></TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"></div></TD>
              <TD VALIGN="TOP"><?php if($shared_fF=='1') { echo "<INPUT TYPE='radio' NAME='shared_fF' VALUE='1' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='shared_fF' VALUE='1'>"; } ?>
Yes
  <?php if($shared_fF=='0') { echo "<INPUT TYPE='radio' NAME='shared_fF' VALUE='0' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='shared_fF' VALUE='0'>"; } ?>
No </TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"></div></TD>
              <TD VALIGN="TOP">&nbsp;</TD>
            </TR>
            <TR ALIGN="LEFT" VALIGN="MIDDLE">
              <TD VALIGN="TOP"><div align="right"></div></TD>
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
