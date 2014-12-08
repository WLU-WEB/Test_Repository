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

/*	
.code_form_field { margin-left:10px; }	
.section_form_field { margin-left:10px; }	
.add_form_field { margin-left:10px; }	
*/
	
</style>


<div id="main_container">

<div id="left_area">
<?php echo "$image_25"; ?>
</div>

<div id="right_area">
<?PHP
$action = $_GET["action"];
if($action=="midtermExams") { $exam_type = "Midterm"; }
elseif($action=="finalExams") { $exam_type = "Final"; }
elseif($action=="mbaExams") { $exam_type = "MBA"; }

echo "<h1>$exam_type Exam Booking $session_name_for_include_fdB $subActionYear</h1>";
?>
<P>
<ul>
<li class="grey_bullet">As per your accommodation plan, please indicate which approved accommodation(s) you will need for this exam. These accommodations will affect the location and/or format of your exam, therefore it is important for us to know this information.</li>
<li class="grey_bullet">If your instructor has mentioned that your exam includes slides, listening (i.e. music) components or any specialized software, please ensure that all necessary arrangements are made through your professor and that you let us know about this in the Other box on this form or through e-mail at 

<?php 
if ($_SESSION[campus_fF] == 'brantford'){
	echo "<a href=mailto:lbalexams@wlu.ca>lbalexams@wlu.ca</a>.</li>";
}
else{
	echo "<a href=mailto:alexams@wlu.ca>alexams@wlu.ca</a>.</li>";
}
?>
<li class="grey_bullet"><B>Please Note:</B> All other accommodations not listed on this form, (for example, extra time) will be provided automatically.</li>
<?PHP 
if($timeframe_unique_id_fdB) { ?>
<li class="grey_bullet"><?php echo "Registration open: $timeframe_start_fdB_verbose - $timeframe_end_fdB_verbose"; ?></li>
<?PHP } ?>
</ul>
</div>

</div>