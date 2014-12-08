<style>
a:link {
	text-decoration: none;
}
.myborder:hover{
	border: none; outline: solid 2px black;
	
}
.myborder:hover .menuTitle{
text-decoration:underline;	
}

</style>

<?php include ("_includes/_str_replace.php"); ?>
	  <a href="<?PHP $PHP_SELF?>?action=manageExamTimeframes&subAction=addNewTimeframes"><table width="100%%" border="0" cellpadding="5" class="border_a">
	    <tr class ="myborder" >
	      <td width="1%" align="left" valign="top"><img src="_img/_icons/alternate_format.png" width="128" height="128" alt="Alternate Format Request" /></td>
	      <td width="99%" align="left" valign="top"><p><SPAN CLASS='menuTitle'>Add New Timeframe </SPAN><br />
            <br />
	      To start a registration process you need to specify a timeframe. A timeframe has a start date and an end date. 
          Enter only real start and end dates for your timeframe (ie. February 30, 2012 is NOT a real date). Ensure your timeframe does not overlap with other timeframes. Each timeframes must have a unique start and end date from previous and future timeframes. Example: if timeframe 1: March 4, 2012 - April 5, 2012 then timeframe 2: April 6, 2012 - May 7, 2012, and timeframe 3: May 8, 2012 - June 8, 2012<br />
          <br />
	      </p></td>
        </tr>
</table></a>
	  <br />
      <a href="<?PHP $PHP_SELF?>?action=manageExamTimeframes&subAction=viewExistingTimeframes">
	  <table width="100%%" border="0" cellpadding="5" class="border_a">
	    <tr class ="myborder">
	      <td width="1%" align="left" valign="top"><img src="_img/_icons/alternate_format.png" width="128" height="128" alt="Alternate Format Request" /></td>
	      <td width="99%" align="left" valign="top"><SPAN CLASS='menuTitle'>View Timeframes</SPAN><br />
	        <br />
	        <p>View all created timeframes since the beginning.</p></td>
        </tr>
</table></a>
	  <P>&nbsp;</P>
	  