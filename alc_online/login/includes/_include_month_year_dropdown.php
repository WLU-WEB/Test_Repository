<?php
if($month_fF=="01") { $month_fF_2="January"; }
if($month_fF=="02") { $month_fF_2="February"; }
if($month_fF=="03") { $month_fF_2="March"; }
if($month_fF=="04") { $month_fF_2="April"; }
if($month_fF=="05") { $month_fF_2="May"; }
if($month_fF=="06") { $month_fF_2="June"; }
if($month_fF=="07") { $month_fF_2="July"; }
if($month_fF=="08") { $month_fF_2="August"; }
if($month_fF=="09") { $month_fF_2="September"; }
if($month_fF=="10") { $month_fF_2="October"; }
if($month_fF=="11") { $month_fF_2="November"; }
if($month_fF=="12") { $month_fF_2="December"; }

if($error_month_fF=='1') { echo "<SELECT NAME='month_fF' class='form' style='background-color: #FFFF99'>"; }
	else { echo "<SELECT NAME='month_fF' class='form'>"; }
echo "<OPTION SELECTED VALUE=''>Month</option>";
if($month_fF) { echo "<OPTION VALUE='$month_fF' SELECTED>$month_fF_2</OPTION> "; }
 
echo "<OPTION VALUE='01'>January</OPTION>";
echo "<OPTION VALUE='02'>February</OPTION>";
echo "<OPTION VALUE='03'>March</OPTION>";
echo "<OPTION VALUE='04'>April</OPTION>";
echo "<OPTION VALUE='05'>May</OPTION>";
echo "<OPTION VALUE='06'>June</OPTION>";
echo "<OPTION VALUE='07'>July</OPTION>";
echo "<OPTION VALUE='08'>August</OPTION>";
echo "<OPTION VALUE='09'>September</OPTION>";
echo "<OPTION VALUE='10'>October</OPTION>";
echo "<OPTION VALUE='11'>November</OPTION>";
echo "<OPTION VALUE='12'>December</OPTION>";
echo "</SELECT>";

echo "&nbsp;";

if($error_year_fF=='1') { echo "<SELECT NAME='year_fF' class='form' style='background-color: #FFFF99'>"; }
	else { echo "<SELECT NAME='year_fF' class='form'>"; }
if($year_fF) { echo "<option value='$year_fF' SELECTED>$year_fF</option>"; }
	else  {echo "<option value='' SELECTED>Year</option>"; }
echo "<option value='2008'>2008</option>";
echo "<option value='2009'>2009</option>";
echo "<option value='2010'>2010</option>";
echo "<option value='2011'>2011</option>";
echo "</select>";

?>

