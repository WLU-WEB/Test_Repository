<?php
$today_date = date("Y-m-d");
$today_date_verbose = date('F j, Y',strtotime($today_date));

if($error_timeframe=='1')
	{
	echo "<img src='_images/warning.png' alt='Bullet Image' width='32' height='32' />";
	echo "<h1>Curriculum changes cannot be submitted at this time since no timeframe is available. Please contact <A HREF='mailto:hbouillon@wlu.ca'>Heather Bouillon</A> with any questions.</h1><BR><P>"; 
	}

if($error_timeframe!='1')
	{
?>
<TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="2">
  <TR ALIGN="LEFT" VALIGN="TOP">
    <TD WIDTH="1%" SCOPE="row">
	</TD>
	<TD>
	<TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="1">
      <TR>
        <TD WIDTH="1%" ALIGN="LEFT" VALIGN="TOP" SCOPE="row"><STRONG><FONT COLOR="#CC0000"><?php echo "$image_07"; ?></FONT></STRONG></TD>
        <TD WIDTH="99%"><TABLE WIDTH="100%"  BORDER="0" CELLSPACING="3" CELLPADDING="0">
          <TR>
            <TD><?php echo "<h1>$title_fdB</h1>"; ?>
            </TD>
          </TR>
          <TR>
            <TD BGCOLOR="#CCCCCC"><STRONG><FONT COLOR="#CC0000"><?php echo "$image_02"; ?></FONT></STRONG></TD>
          </TR>
          <TR>
            <TD WIDTH="99%"><?php echo "$image_08 Today's date is $today_date_verbose."; ?></TD>
          </TR>
          <TR>
            <TD><?php echo "$image_08 Feedback period: <strong>$start_fdB_verbose to $end_fdB_verbose</strong>."; ?></TD>
          </TR>
          <TR>
            <TD><?php echo "$image_08 All fields denoted by an <STRONG><FONT COLOR='#CC0000'> $image_01</FONT></STRONG> are required."; ?></TD>
          </TR>
          <TR>
            <TD>
			<?PHP
			if(!$error_timeframe)
				{ 
				//echo "Today's date is $today_date_verbose, and your curriculum information will be added to the <strong>$timeframe_name_fdB ($timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose)</strong> timeframe."; 
				if($action=='addProgram')
					{
					echo "$image_08 Please consult the Laurier Brantford Program Design Template, available at <STRONG><A HREF='http://www.wlu.ca/documents/31743/Program_Proposals.pdf' TARGET='_blank'>http://www.wlu.ca/documents/31743/Program_Proposals.pdf</A></STRONG> for the required elements.";
					echo " Please see Teaching Support Services Web site <a href='http://www.wlu.ca/page.php?grp_id=333&p=7693' TARGET='_blank'> http://www.wlu.ca/page.php?grp_id=333&amp;p=7693</a> for further information regarding program learning outcomes.";
					}
				if($action=='addNewCourse')
					{
					echo "$image_08 CT Program: <A HREF='http://www.wlu.ca/documents/31744/Course_Proposal_CT.pdf' TARGET='_blank'>http://www.wlu.ca/documents/31744/Course_Proposal_CT.pdf</A>";
					echo " All other Programs: <A HREF='http://www.wlu.ca/documents/31745/Course_Proposal_general.pdf' TARGET='_blank'>http://www.wlu.ca/documents/31745/Course_Proposal_general.pdf</A>";
					}
				if($action=='reviseCourse')
					{
					echo "$image_08 This form is to propose the following types of changes: title, prerequisite, course number, course description, etc.";
					}
				if($action=='changeProgramRequirements')
					{
					echo "$image_08 This form is used to add an existing/proposed course to another program, add new elements to existing programs, replace text within a program requirements, etc.";
					}
				}
			?>
			</TD>
          </TR>
          <TR>
            <TD BGCOLOR="#CCCCCC"><STRONG><FONT COLOR="#CC0000"><?php echo "$image_02"; ?></FONT></STRONG></TD>
          </TR>
          <TR>
            <TD>&nbsp;</TD>
          </TR>
        </TABLE>
		</TD>
      </TR>
    </TABLE>
  	</TD>
  </TR>
</TABLE>
<?	
	}
?>

