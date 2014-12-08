<?php include ("_includes/_str_replace.php"); ?>

	  <TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="3">
		<TR ALIGN="LEFT" VALIGN="MIDDLE">
		  <TD VALIGN="TOP">
			  <TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="3">
				<TR ALIGN="LEFT" VALIGN="MIDDLE">
				  <TD WIDTH="100%" VALIGN="TOP">
				    <TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="2">
                      <TR ALIGN="LEFT" VALIGN="TOP">
                        <TD><TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="1">
                            <TR>
                              <TD WIDTH="1%" ALIGN="LEFT" VALIGN="TOP" SCOPE="row"><?php echo "$image_06_large"; ?></TD>
                              <TD WIDTH="99%" ALIGN="LEFT" VALIGN="TOP"><TABLE WIDTH="100%"  BORDER="0" CELLSPACING="3" CELLPADDING="0">
                                  <TR>
                                    <TD> <h1> View Submissions (as Excel files) <?php if($subActionYear) { echo "($subActionYear)"; } ?></h1></TD>
                                  </TR>
                                  <TR>
                                    <TD BGCOLOR="#CCCCCC"><STRONG><FONT COLOR="#CC0000"><?php echo "$image_02"; ?></FONT></STRONG></TD>
                                  </TR>
                                  <TR>
                                    <TD WIDTH="99%"><?php echo "$image_08 To view submissions for a certain period, click on the appropriate link below."; ?></TD>
                                  </TR>
                                  <TR>
                                    <TD BGCOLOR="#CCCCCC"><STRONG><FONT COLOR="#CC0000"><?php echo "$image_02"; ?></FONT></STRONG></TD>
                                  </TR>
                              </TABLE></TD>
                            </TR>
                        </TABLE></TD>
                      </TR>
                    </TABLE>
			      </TD>
				</TR>
			  </TABLE>
	      </TD>
		</TR>
		<TR ALIGN="LEFT" VALIGN="MIDDLE">
		  <TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="1" CELLPADDING="0" BGCOLOR="#CCCCCC">
			  <TR>
				<TD><TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="7">
                  <tr ALIGN="LEFT" VALIGN="TOP" BGCOLOR="#F4F4E9">
                    <td>&nbsp; </td>
                  </tr>
                  <tr ALIGN="LEFT" VALIGN="TOP" BGCOLOR="#F4F4E9">
                    <td BGCOLOR="#FAFAF4"><DIV ALIGN="LEFT">
                        <?php 
						if($action==viewSubmissions && ($ALC_username=="akovacsik" || $ALC_username=="kgoulet" || $ALC_username=="jeulenberg" || $ALC_username=="eriggin") )
							{
							error_reporting(E_ALL);
							$bullet_image = "<IMG SRC='_images/tab_right.png' WIDTH='8' HEIGHT='12' ALT='Error bullet image'>";
							
							//---set the database connection variables
							require_once("mysqlArray.php");
							$connection_name = "AcademicLearningServices";
							$dbcnx = @mysqlLogin($connection_name);	
							
							//---select current time frame
							$today_date = date("Y-m-d");
							$result_timeframe = mysql_query("SELECT * FROM a_timeframes ORDER BY start DESC");
							if($retrieved_value = mysql_fetch_array($result_timeframe))
								{
								do
									{
									$start_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value['start'])); //Monday, January 1, 2000
									$end_fdB_verbose = date('l, F j, Y', strtotime($retrieved_value['end'])); //Monday, January 1, 2000
									$title_fdB = $retrieved_value['title'];
									$instance_id_fdB = $retrieved_value['instance_id'];
									$form_id_fdB = $retrieved_value['form_id'];
									
									echo "<B><A HREF='export.php?action=generateData&view=$instance_id_fdB&look=$form_id_fdB' TARGET='_blank'>$title_fdB</A></B> ($start_fdB_verbose - $end_fdB_verbose)<BR><BR>";
									}
								while($retrieved_value=mysql_fetch_array($result_timeframe));
								}
							
							mysql_close($dbcnx);
							}
						  ?>
                    </DIV></td>
                  </tr>
                  <tr ALIGN="LEFT" VALIGN="TOP" BGCOLOR="#F4F4E9">
                    <td BGCOLOR="#FAFAF4">
					</td>
                  </tr>
                </TABLE></TD>
			  </TR>
		  </TABLE></TD>
		</TR>
		<TR ALIGN="LEFT" VALIGN="MIDDLE">
		  <TD>&nbsp;</TD>
	    </TR>
	  </TABLE>
  
  
  
  
