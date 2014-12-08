<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">

<?php
//start the session and register a variable
session_start();
session_register('ALC_username');
session_register('password'); //---registered so that you can pull it again to connect to dB in the /login/index.php page
$logged="yes";
session_register('logged');
session_register('campus_fF');

//set the database connection variables
require_once("mysqlArray.php");
$connection_name = "AcademicLearningServices";
$dbcnx = @mysqlLogin($connection_name);	

//echo "ALC_username: [$ALC_username]<P>";

$result = mysql_query("SELECT * FROM a_user WHERE user_novell_id='$ALC_username'");




$retrieved_value = mysql_fetch_array($result);
$user_id_fdB = $retrieved_value['user_id']; //important
$user_name_fdB = $retrieved_value['user_novell_id'];
$first_name_fdB = $retrieved_value['user_first_name'];
$last_name_fdB = $retrieved_value['user_last_name'];
$iam_fdB = $retrieved_value['user_view_rights'];
$user_active_fdB = $retrieved_value['user_active'];

//echo "retrieved_value: [$retrieved_value ]<P>";
//search for Laurier ID 
$result2 = mysql_query("SELECT * FROM a_user_laurier_id WHERE user_id='$user_id_fdB'");
$retrieved_value2 = mysql_fetch_array($result2);
$user_id_2ndTable_fdB = $retrieved_value2['user_id'];
$user_laurier_id_fdB = $retrieved_value2['user_laurier_id'];


if(!$ALC_username || !$user_id_fdB || !$user_name_fdB) //one of these are empty
	{
	$error_with_user_information="true";
	}
else
	{
	//LAURIER ID and USER ID do not exist (ie. student is signing in for the first time)
	//OR from above query where $user_id_2ndTable_fdB AND $user_laurier_id_fdB are pulled in as empty IF user_id in "a_user_laurier_id" table (in above query) does not exist
	//proceed and manually delete all entries in "a_user_laurier_id" table where only a student ID exists; there should be another record where a STUDENT ID and LAURIER ID should exist
	if(!$user_id_2ndTable_fdB && !$user_laurier_id_fdB)
		{
		include ("_get_AD_ID.php"); 
		$_SESSION['studentID_fromLDAP'] = $id; //$id pulled from above line (uses the password session set above to get this)
		$studentID_fromLDAP = $_SESSION['studentID_fromLDAP'];
		$generated_user_id = $_SESSION['generated_user_id']; //pulled from _novell_success.php session which was genetated one step earlier (for new users only)
			
		$sql_process_1 = "INSERT INTO a_user_laurier_id (user_entry_id,user_id,user_laurier_id)
					VALUES (NULL,'$generated_user_id','$studentID_fromLDAP')";
		$result_createNewProject = mysql_query($sql_process_1) or die ("Error in query: $sql_process_1. " .mysql_error());
		}
	//LARIER ID missing, therefore update
	if($user_id_2ndTable_fdB!="" && !$user_laurier_id_fdB)  
		{
		include ("_get_AD_ID.php"); 
		$_SESSION['studentID_fromLDAP'] = $id; //$id pulled from above line (uses the password session set above to get this)
		$studentID_fromLDAP = $_SESSION['studentID_fromLDAP'];
	
		$query = "UPDATE a_user_laurier_id SET user_laurier_id='$studentID_fromLDAP' WHERE user_id='$user_id_fdB'";
		$result = mysql_query($query) or die ("Error in query: $query. " .mysql_error());
		}
	}

//echo "user_id_fdB: [$user_id_fdB]<P>";

?>
<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="keywords" content="Wilfrid Laurier University, Arts, Science, Music, School of Business and Economics" />
<meta name="description" content="Founded in 1911, Laurier is a premier university and renowned for attracting students who want to succeed. Our Faculty of Arts, Faculty of Science, Faculty of Music, School of Business and Economics and our Brantford Campus offer an unparalleled academic experience. Our unique, interdisciplinary approach to learning allows students to combine majors in completely different fields. Laurier's faculty, among the finest anywhere, expand the horizons of our students, providing them with a broad perspective of the world that opens up new ways of thinking and seeing things." />
<meta name="google-site-verification" content="dPdIE2UaHEV-fvi9fDJXPUZf7FAFU7fFCWtbaUAqhrk" /> 
<link rel="alternate" type="application/rss+xml" title="RSS" href="https://www.wlu.ca/news_listing.php?RSS=1&amp;grp_id=0" />	
<link rel="stylesheet" href="/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="/printstyle.css" type="text/css" media="print" />
<link rel="stylesheet" href="/css/jquery.fancybox.css" type="text/css" media="screen">
	
	<script type="text/javascript">
	<!--
	
	function hideSelect()
	{ 
		var DL_bIE = document.all ? true : false; // initialize var to identify IE
		if(DL_bIE) {                            // if browser is IE, then...
			var numforms=document.forms.length;
			for (f=1;f<numforms;f++) {
				var numformelements = document.forms[f].elements.length;
				for (counter = 0; counter < numformelements; counter++) {
					var thisselect = document.forms[f].elements[counter];
					thisselect.style.visibility= "hidden";
				}
			}
		}
	}
	
	function showSelect()
	{ 
		var numforms=document.forms.length;
		for (f=1;f<numforms;f++) {
			var numformelements = document.forms[f].elements.length;
			for (counter = 0; counter < numformelements; counter++) {
				var thisselect = document.forms[f].elements[counter];
				thisselect.style.visibility= "visible";
			}
		}
	}
	
	
	startList = function() {
		if (document.all && document.getElementById) {
			navRoot = document.getElementById("nav");
			for (i=0; i<navRoot.childNodes.length; i++) {
				node = navRoot.childNodes[i];
				if (node.nodeName=="LI") {
					node.onmouseover=function() {
						this.className+=" over";
					}
					node.onmouseout=function() {
						this.className=this.className.replace(" over", "");
					}
				}
			}
		}
		}
	function externalNotice() {
	// links that open in a new window should send a notice to aid screen-readers.
		res=window.confirm("This link will open in a new window.  Continue?");
		return res;
	}
	
	function popUpWindow(strURL,strType,strWidth,strHeight) {
	// opens a pop-up window...
	
		var strOptions="";
		if (strType=="scollable_console") strOptions="resizable,scrollbars,height="+strHeight+",width="+strWidth;
		if (strType=="console") strOptions="resizable,height="+strHeight+",width="+strWidth;
		if (strType=="fixed") strOptions="status,height="+strHeight+",width="+strWidth;
		if (strType=="elastic") strOptions="toolbar,menubar,scrollbars,resizable,location,height="+strHeight+",width="+strWidth;
	
		window.open(strURL, 'newWin', strOptions);
	}
	
	function initSWF(what,what_id,where,size_x,size_y,vars) {
		var so=new SWFObject(what,what_id,size_x,size_y,"6","#1E1E1E");
		so.addParam("wmode","transparent");
		so.addParam("FlashVars",vars);
		so.write(where);
	}
	
		window.onload=startList;
		//-->
	</script>
	
	<script type="text/javascript" src="includes/http.js" charset="iso-8859-1"></script>
	<script src="/js/jquery-1.3.2.min.js" type="text/javascript"></script>

	<script src="/js/common.js" type="text/javascript"></script>
	<script src="/js/jquery.fancybox-1.2.1.js" type="text/javascript"></script>
	<script src="/js/jquery.cookie.js" type="text/javascript"></script>
	<script src="/js/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>
	<script src="/js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
	<script src="/js/swfobject.js" type="text/javascript"></script>


<script type="text/javascript">
<!--
var newwindow;
function poptastic(url)
{
	newwindow=window.open(url,'name','height=300,width=800,resizable=yes,scrollbars=yes,status=yes');
	if (window.focus) {newwindow.focus()}
}
// -->
</script>



<script>
function PopupCenter(pageURL,title,w,h) {
	var left = (screen.width/2)-(w/2);
	var top = (screen.height/2)-(h/2);
	var newWindow = window.open(pageURL,title,'resizable=no,width='+w+',height='+h+',top='+top+',left='+left);
	}
	
</script>

<script type="text/javascript">
function setVisibility(id, visibility) 
	{
	document.getElementById(id).style.display = visibility;
	}
</script>

<script>
function clearText(thefield)
	{
	if (thefield.defaultValue==thefield.value)
	thefield.value = ""
	} 
</script>

<script>
function fromreset()
	{
	document.theForm.subject_1_fF=""; 
	document.theForm.code_1_fF=""; 
	document.theForm.section_1_fF=""; 
	}
</script>


<script type="text/javascript">
<!--
function popUp(winURL) { window.open(winURL,"popup","width=750,height=200,resizable=no,scrollbars=no,status=no,toolbar=no,location=no"); }
// -->
</script>

<LINK REL="stylesheet" TYPE="text/css" HREF="/_includes/css.css">
<LINK REL="stylesheet" TYPE="text/css" HREF="bk.css">

<TITLE>Accessible Learning Centre</TITLE>
</head>

<BODY>
<?php 
include ("top.shtml"); 
include ("_inc/_inc_images.php"); 

$campus_fF = $_SESSION['campus_fF'];

$link_to_redirect_after_submit = $_SERVER["HTTP_REFERER"];
$link_to_redirect_after_submit_home = "https://" . $_SERVER['SERVER_NAME'] . "/alconline/";
?>

<table width="100%" border="0" cellpadding="0">
<tr>
<td class="ltext" ALIGN="LEFT" VALIGN="TOP"><table WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0">
<tr ALIGN="LEFT" VALIGN="MIDDLE">
<td WIDTH="100%" ALIGN="LEFT" VALIGN="TOP"><table WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="5">
<tr ALIGN="LEFT" VALIGN="TOP">
<td><?php echo "$title_02";  echo "";?></td>
</tr>
</table></td>
</tr>
<tr>
<td ALIGN="LEFT" VALIGN="TOP"><table WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="2">
<tr align="LEFT" valign="MIDDLE">
  <td>&nbsp;</td>
</tr>
<tr align="LEFT" valign="MIDDLE">
  <td VALIGN="TOP"><TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="7">
    <TR ALIGN="LEFT" VALIGN="TOP">
      <TD width="75%" height="106" bgcolor="#FFFFFF" SCOPE="row">

<?PHP
if($error_with_user_information=="true")
	{
	echo "<B>Could not find your student information.</B>";
	echo "<BR><BR>Please contact <A HREF='mailto:akovacsik@wlu.ca'>akovacsik@wlu.ca</A> with details (please indicate your nine digit student ID).";
	}
else
	{
	$today_date = date("Y-m-d");
	
	$errorColor = "style='background-color: #ffff99';";
	$errorImage = "&nbsp; $missing"; //space followed by image name
	
	
	if($ALC_username=="akovacsik" || $ALC_username=="kova8670") 
		{
		/*
		echo "[$dn_fromLDAP]<BR><P>";
		echo "[$ALC_username|$user|$ALC_password|$password]<BR>";
		echo "student_ID_from_LDAP: [$student_ID_from_LDAP]<BR>";
		echo "id_fist_time_insertion: [$id_fist_time_insertion]<BR>";
		//id_fist_time_insertion
		echo "id: [$id]<BR><P>";
		//$user_laurier_id_fdB
		echo "user_laurier_id_fdB: [$user_laurier_id_fdB]<BR><P>";
		print_r ($_SESSION);
		*/
		}
		
	if($action=="goHome" || !$action) { include ("_processes/_welcome/_welcome_include.php"); }
	
	//Express Registration
	if($action=="ExpressRegistrationReturning") { include ("_processes/express_registration/returning_students/index.php"); }
	if($action=="ExpressRegistrationTimeFrames") { include ("_processes/express_registration/returning_students_manageTimeframes/manageTimeframes.php"); }
	
	if($action=="alternateFormatRequest") { include ("_processes/alternate_format_request/index.php"); }
	if($action=="alternateFormatRequestFirstTime") { include ("_processes/alternate_format_request_first_time/index.php"); }
	if($action=="alternateFormatRequest2" && ($ALC_username=="akovacsik" || $ALC_username=="kgoulet")) 
		{ include ("_processes/alternate_format_request2/index.php"); }
	if($action=="alternateFormatRequestViewMyRequests") { include ("_processes/alternate_format_request_my_requests/index.php"); }
	if($action=="alternateFormatRequestTimeFrames") { include ("_processes/alternate_format_request_manageTimeframes/index.php"); }
	
	//Exam Booking
	if($action=="midtermExams") { include ("_processes/exams/midterm/index.php"); }
	if($action=="finalExams") { include ("_processes/exams/final/index.php"); }
	if($action=="mbaExams") { include ("_processes/exams/mba/index.php"); }
	if($action=="viewExams") { include ("_processes/exams/view/index.php"); }
	if($action=="manageExamTimeframes") { include ("_processes/manageTimeframe/manageTimeframes.php"); }
	
	//Note Taking (deactivated until further notice)
	/*
	if($action=="ntEvalNoteTakers") { include ("_processes/ntEvalNoteTakers/ntEvalNoteTakers.php"); }
	if($action=="ntEvalStudents") { include ("_processes/ntEvalStudents/ntEvalStudents.php"); }
	if($action=="updateActivateProfile") { include ("_processes/updateActivateProfile/updateActivateProfile.php"); }
	if($action=="viewSubmissions" && ($ALC_username=="akovacsik" || $ALC_username=="jeulenberg" || $ALC_username=="eriggin" || $ALC_username=="kgoulet") ) 
		{ include ("_processes/viewSubmissions/viewSubmissions.php"); }
	*/
	}
	
?>

</TD>
      <TD WIDTH="25%" ALIGN="LEFT" class="border_b"><?PHP include ("includes/_menu.php"); ?>
      
      <?PHP 
	/*
	if($ALC_username=="akovacsik") 
		{ 
		echo "<BR><BR>";
		include ("includes/_menu_simple.php"); 
		}
	 */ 
	   ?>
      </TD>
      </TR>
  </TABLE></td>
</tr>
<tr align="LEFT" valign="MIDDLE">
<td>&nbsp;</td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table>
<?php 
mysql_close($dbcnx);	

include ("footer.php"); 


?>
</BODY>
</HTML>