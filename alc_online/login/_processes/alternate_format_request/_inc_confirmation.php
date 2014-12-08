<style type="text/css" media="screen, print, projection">

.noshow {position: absolute; left: -9000px}

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
ul {
    margin: 0 0 0 -25px;
    line-height: 1.5em
	}	
.no_bullet {
	list-style-type: none;
	}	

	
</style>




<FORM NAME="theForm" ACTION="<?php echo "$PHP_SELF?action=alternateFormatRequest"; ?>" METHOD="post">


<div id="main_container">

<div id="left_area"><p></p></div>

<div id="right_area">
<?PHP
echo "<BR /><BR />$image_red_bullet <h1>Confirmation</h1>"; 
?>
<P>
<ul>
<li class="no_bullet"><INPUT TYPE="checkbox" NAME="confirmation_01_fF" VALUE="Yes" ID="agreement_1"><label for="agreement_1"> You agree to not share the alternate format material with anyone else. Due to copyright laws, the materials transcribed are for your use only. It is illegal for you to share these documents. Any failure to meet this obligation will be subject to disciplinary action by Laurier and may be subject to further legal action by the publisher.</label></li>
<li class="no_bullet"><INPUT TYPE="checkbox" NAME="confirmation_02_fF" VALUE="Yes" ID="agreement_2"><label for="agreement_2"> If the professor announces changes to your required material, you agree to notify Accessible Learning by sending details of the change to 
</label>
<?php
if($_SESSION['campus_fF']=='brantford') {
	echo '<a href="mailto:lbetext@wlu.ca">lbetext@wlu.ca</a>';
}
else{
	echo '<a href="mailto:etext@wlu.ca">etext@wlu.ca</a>';
}
?>

 within one week to update your request.</label></li>
<li class="no_bullet"><INPUT TYPE="checkbox" NAME="confirmation_03_fF" VALUE="Yes" ID="agreement_3"><label for="agreement_3"> If for any reason you no longer require alternate formatted materials, e.g. dropped courses, you agree to notify Douglas at 

<?php
if($_SESSION['campus_fF']=='brantford') {
	echo '<a href="mailto:lbetext@wlu.ca">lbetext@wlu.ca</a>';
}
else{
	echo '<a href="mailto:etext@wlu.ca">etext@wlu.ca</a>';
}
?>

 within one week to cancel your request.</label></li>
<li class="no_bullet"><INPUT TYPE="checkbox" NAME="confirmation_04_fF" VALUE="Yes" ID="agreement_4"><label for="agreement_4"> Some text may be difficult to transcribe due to the nature of its content, e.g. graphics, equations or symbols. If your text has many formulas or symbols that are not on a regular keyboard, please see the Transcription Technologist to discuss options for alternate format.</label></li>
<li class="no_bullet"><INPUT TYPE="checkbox" NAME="confirmation_05_fF" VALUE="Yes" ID="agreement_5"><label for="agreement_5"> Scanning Options: In some cases, books will need to be scanned by ALC if they are not available from the publishers. You will receive an e-mail notification if this is necessary. You may choose to scan your books yourself.</label></li>
<li class="no_bullet"><INPUT TYPE="checkbox" NAME="confirmation_06_fF" VALUE="Yes" ID="agreement_6"><label for="agreement_6"> Yes, information is correct.</label></li>
</ul>

<?PHP
echo "<INPUT TYPE=hidden NAME=timeframe VALUE='$timeframe'>"; //note how this changed from the previous HIDDEN page (_inc_index.php): here, timeframe holds the value of "$timeframe" as pulled from the previous step
echo "<INPUT TYPE=hidden NAME=generated_alternative_request_id VALUE='$generated_alternative_request_id'>";
echo "<INPUT TYPE=hidden NAME=subject_1_fF VALUE='$subject_1_fF'>";
echo "<INPUT TYPE=hidden NAME=code_1_fF VALUE='$code_1_fF'>";
echo "<INPUT TYPE=hidden NAME=section_1_fF VALUE='$section_1_fF'>";
echo "<INPUT TYPE=hidden NAME=subject_2_fF VALUE='$subject_2_fF'>";
echo "<INPUT TYPE=hidden NAME=code_2_fF VALUE='$code_2_fF'>";
echo "<INPUT TYPE=hidden NAME=section_2_fF VALUE='$section_2_fF'>";
echo "<INPUT TYPE=hidden NAME=subject_3_fF VALUE='$subject_3_fF'>";
echo "<INPUT TYPE=hidden NAME=code_3_fF VALUE='$code_3_fF'>";
echo "<INPUT TYPE=hidden NAME=section_3_fF VALUE='$section_3_fF'>";
echo "<INPUT TYPE=hidden NAME=subject_4_fF VALUE='$subject_4_fF'>";
echo "<INPUT TYPE=hidden NAME=code_4_fF VALUE='$code_4_fF'>";
echo "<INPUT TYPE=hidden NAME=section_4_fF VALUE='$section_4_fF'>";
echo "<INPUT TYPE=hidden NAME=subject_5_fF VALUE='$subject_5_fF'>";
echo "<INPUT TYPE=hidden NAME=code_5_fF VALUE='$code_5_fF'>";
echo "<INPUT TYPE=hidden NAME=section_5_fF VALUE='$section_5_fF'>";
?>
<BR /><BR />
<input type="button" value="< Go Back" onclick="history.go(-1)" /> 
<input type="submit" name="submit" value="Submit" />     

</div>



</div>
</FORM>