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
		
.grey_bullet {
	list-style-image:url("_images/9x9_grey.gif");
	}	

p.alert {
	border-style: solid;
    border-color: red;
	color:red;
	text-align:center;
	text-transform: uppercase;
}

/*	
.code_form_field { margin-left:10px; }	
.section_form_field { margin-left:10px; }	
.add_form_field { margin-left:10px; }	
*/
	
</style>


<div id="main_container">

<div id="left_area">
<?php echo "$image_22"; ?>
</div>

<div id="right_area">
<p>
  <?PHP
echo "<h1>Alternate Format Request $session_name_for_include_fdB $subActionYear</h1>";
?>
  </p>
<br />
<p class="alert">NO TEXTBOOKS WITHOUT RECEIPTS</p>
<ul>
<li class="grey_bullet">Please provide the course information for the courses in which you will require alternate format material to assist with the ordering process. (Up to five (5) courses can be entered per submission).</li>
<li class="grey_bullet">The Transcription Technologist will track and order materials.</li>
<li class="grey_bullet">You will be notified when your book is ready, or informed if scanning will be necessary.</li>
<?php 
if ($_SESSION[campus_fF] == 'brantford'){
	echo "<li class='grey_bullet'>If you have any questions please contact <B>Carla Lopez</B>, Assistive Technology and Transcriptionist, at <a href=mailto:clopez@wlu.ca>clopez@wlu.ca</a> or extension 5656.</li>";
}
else{
	echo "<li class='grey_bullet'>If you have any questions please contact <B>Douglas Facey</B>, Transcription Technologist, at <a href=mailto:dfacey@wlu.ca>dfacey@wlu.ca</a> or extension 2109.</li>";
}
?>
</ul>
</div>

</div>


