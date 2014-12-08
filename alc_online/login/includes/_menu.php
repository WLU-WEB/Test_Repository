<?PHP
$current_year = date("Y");

echo "<span class='primary_title'>$first_name_fdB $last_name_fdB ($ALC_username)</span><P>". $_SESSION['studentID_fromLDAP'] ."";


//-----------------------------------------------------------------------------
//------------------------------- Home
//-----------------------------------------------------------------------------
echo "
	<div id='menu1'>
	<ul>
		<li><A HREF='$PHP_SELF?action=goHome'>$i09 Home</A></li>
	";
echo "
	</ul>
	</div>
	";
	
//-----------------------------------------------------------------------------
//------------------------------- Sign Out
//-----------------------------------------------------------------------------
echo "
	<div id='menu1'>
	<ul>
		<li><A HREF='logout.php'>$i13 Sign Out</A></li>
	";
echo "
	</ul>
	</div>
	";
	
//-----------------------------------------------------------------------------
//------------------------------- Express Registration
//-----------------------------------------------------------------------------
echo "
	<div id='menu_heading'><ul><li>Express Registration</li></ul></div>
	<div id='menu1'>
	<ul>
		<li><A HREF='$PHP_SELF?action=ExpressRegistrationReturning'>$i10 Returning Students</A></li>
	";
if($ALC_username=="kova8670a" || $ALC_username=="akovacsik" || $ALC_username=="dkohlruss" || $ALC_username=="iadebowale" || $ALC_username=="gpage" || $ALC_username=="clopez" || $ALC_username=="klizzotti")
	{
	echo"
	<li><A HREF='$PHP_SELF?action=ExpressRegistrationTimeFrames'>$i12 Manage Timeframes</A></li>
	";
	}
echo "
	</ul>
	</div>
	";

//-----------------------------------------------------------------------------
//------------------------------- Alternate Format Request
//-----------------------------------------------------------------------------
echo "
	<div id='menu_heading'><ul><li>Alternate Format Request</li></ul></div>
	<div id='menu1'>
	<ul>
		<li><A HREF='$PHP_SELF?action=alternateFormatRequest'>$i10 Returning Students</A></li>
		<li><A HREF='$PHP_SELF?action=alternateFormatRequestFirstTime'>$i10 First-Time E-text User</A></li>
		<li><A HREF='$PHP_SELF?action=alternateFormatRequestViewMyRequests&subActionYear=$current_year'>$i11 View My Requests</A></li>
	";
if($ALC_username=="kova8670a" || $ALC_username=="akovacsik" || $ALC_username=="dfacey" || $ALC_username=="iadebowale" || $ALC_username=="gpage" || $ALC_username=="clopez" || $ALC_username=="klizzotti")
	{
	echo"
	<li><A HREF='$PHP_SELF?action=alternateFormatRequestTimeFrames'>$i12 Manage Timeframes</A></li>";
	//<li><A HREF='$PHP_SELF?action=alternateFormatRequestTimeFrames'>$i12 View Registrations</A></li>
	//";
	}
echo "
	</ul>
	</div>
	";


//-----------------------------------------------------------------------------
//------------------------------- Exam Booking
//-----------------------------------------------------------------------------
echo "
	<div id='menu_heading'><ul><li>Exam Booking</li></ul></div>
	<div id='menu1'>
	<ul>
		<li><A HREF='$PHP_SELF?action=midtermExams'>$i15 Midterm Exams</A></li>
		<li><A HREF='$PHP_SELF?action=finalExams'>$i15 Final Exams</A></li>";
		
		if($_SESSION['campus_fF']!="brantford"){
			echo "<li><A HREF='$PHP_SELF?action=mbaExams'>$i15 MBA Exams</A></li>";
		}		
		echo "<li><A HREF='$PHP_SELF?action=viewExams'>$i15 View My Bookings</A></li>
	";
if($ALC_username=="kova8670a" || $ALC_username=="akovacsik" || $ALC_username=="jbruyea" || $ALC_username=="jhunt" || $ALC_username=="gpage" || $ALC_username=="jfridrich" || $ALC_username=="iadebowale" || $ALC_username=="clopez"  || $ALC_username=="aevans" || $ALC_username=="klizzotti")
	{
	echo"
	<li><A HREF='$PHP_SELF?action=manageExamTimeframes'>$i15 Manage Exam Timeframes</A></li>
	";
	}
echo "
	</ul>
	</div>
	";

//-----------------------------------------------------------------------------
//------------------------------- Note-taking Program (deactivated until further notice)
//-----------------------------------------------------------------------------
/*
echo "
	<div id='menu_heading'><ul><li>Note-taking Program</li></ul></div>
	<div id='menu1'>
	<ul>
	";
if($user_active_fdB=="1")
	{
	if($iam_fdB=="1" || $iam_fdB=="3")
		{
		echo"
		<li><A HREF='$PHP_SELF?action=ntEvalNoteTakers'>$image_04 Note-takers Evaluation</A></li>
		";
		}
	if($iam_fdB=="2" || $iam_fdB=="3")
		{
		echo"
		<li><A HREF='$PHP_SELF?action=ntEvalStudents'>$image_04 Note-receivers Evaluations</A></li>
		";
		}
	echo"
	<li><A HREF='$PHP_SELF?action=updateActivateProfile'>$image_04 My Profile</A></li>
	";
	}
if($ALC_username=="akovacsik")
	{
	echo"
	<li><A HREF='$PHP_SELF?action=manageTimeframes'>$image_05 Add Registrations</A></li>
	";
	}
if($ALC_username=="akovacsik" || $ALC_username=="jeulenberg" || $ALC_username=="eriggin")
	{
	echo"
	<li><A HREF='$PHP_SELF?action=viewSubmissions'>$image_05 View Submissions</A></li>
	";
	}
echo "
	</ul>
	</div>
	";
*/
?>
