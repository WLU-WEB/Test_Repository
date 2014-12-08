<style type="text/css" media="screen, print, projection">

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
.intro_text { 
	text-indent:-1.5em; 
	padding-left: 1.5em;
	}
	
	
ul {
    margin: 0 0 0 -25px;
    line-height: 1.5em;
	padding-left:40px;
	}	
.no_bullet {
	list-style-type: none;
	}	

ul li ol li{
    margin: 0 0 0 -10px;
    line-height: 1.5em
	}	

/*	
.code_form_field { margin-left:10px; }	
.section_form_field { margin-left:10px; }	
.add_form_field { margin-left:10px; }	
*/
	
</style>


<div id="main_container">

<div id="left_area"><P></div>

<div id="right_area">
<BR /><BR />
<?PHP
echo "<STRONG>Registrations Closed!</STRONG>";

if($timeframe_unique_id_next_fdB)
	{
	$status = "The next registration starts on <B>$timeframe_start_next_fdB_verbose</B and will end on <B>$timeframe_end_next_fdB_verbose</B>.";
	}
else
	{
	$status = "The administrator has not yet specified when the next registration will start.";
	}
?>

<P>
<ul>
<li class="no_bullet"><BR />At the present moment, the registration for Alternative Text is closed. Please check again!</li>
<li class="no_bullet"><BR /><?PHP echo "$status"; ?></li>
<li class="no_bullet"><BR />

<strong>Steps to follow:</strong><br />
          <br />1. Textbooks must be purchased before any order will be executed--Keep your receipts!
          <br />2. Your request will be considered in order of receipt following after requests that have been submitted on time     
          
          <?php 
            if ($_SESSION[campus_fF] == 'brantford'){
                echo "<br />3. <a href='LBAlt-FormatMissedDeadlineForm.docx' target='_blank'>Download and complete the following form with ALL information</a> (You will be propted to open or save a .docx file)";
				echo "<br />4. Bring form and receipts to DAL 105 to initiate request";
            }
            else{
                echo "<br />3. <a href='Alt-FormatMissedDeadlineForm.pdf' target='_blank'>Download and complete the following form with ALL information</a> (PDF form will open in a new window or tab)";
				echo "<br />4. Bring form and receipts to 1C10A to initiate request";
            }
            ?>

          <br />5. Book a &quot;Material Pick-up Time&quot; to pick up your e-text (please note that the later the request, the deeper into the term for appointment availability)
          <br />6. Diligently follow the additional steps for receiving your e-text (i.e., check RefShare frequently, and react to communications from the Transcription Technologist)
          <br />7. All late requests will be referred to the consultant, and outcomes may lead to suspension or termination of the service

</li>
<li class="no_bullet"><BR />Click here to return back to the <a href="https://infowebtest.wlu.ca/alconline/index.php?action=goHome">Accessible Learning Centre Online Forms Homepage</a></li>
</ul>
</div>

</div>


