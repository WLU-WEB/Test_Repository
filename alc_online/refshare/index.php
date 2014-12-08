<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">

<?php
session_start();
if(isset($_SESSION['ALC_username']))
	{
	header("Location: index.php");
	}
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
<LINK REL="stylesheet" TYPE="text/css" HREF="../bk.css">

<TITLE>Accessible Learning Centre</TITLE>
</head>

<BODY>
<?php 
include ("top.shtml");
$title_01="<img src='../_images/ALC_title.jpg' alt='Accessible Learning Centre Online Forms' width='850' height='100' />";

?>

<table width="100%" border="0" cellpadding="0">
  <tr>
    <td class="ltext" ALIGN="LEFT" VALIGN="TOP"><table WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0" BGCOLOR="#FAFAF4">
      <tr ALIGN="LEFT" VALIGN="MIDDLE">
        <td WIDTH="100%" ALIGN="LEFT" VALIGN="TOP"><table WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="5">
          <tr ALIGN="LEFT" VALIGN="TOP">
            <td>&nbsp;</td>
          </tr>
          <tr ALIGN="LEFT" VALIGN="TOP">
            <td><h1><?php echo "$title_01"; ?></h1></td>
            </tr>
          <tr ALIGN="LEFT" VALIGN="TOP">
            <td>If you are experiencing problems with your electronic text, please notify the Transcription Technologist immediately. (<a href="mailto:etext@wlu.ca">etext@wlu.ca</a> or ext. 2109)<br>
              <br>
When checking the WLU Bookstore on-line Textbook List for purchase, please refer to the RefShare list to see if your books have been completed by Accessible Learning.<br>
<br>
To pick up completed material, please bring your receipts and a USB memory stick   to the Transcription Technologist in 1C10A. NO TEXTS WITHOUT RECEIPTS.</td>
          </tr>
        </table></td>
        </tr>
      <tr>
        <td ALIGN="LEFT" VALIGN="TOP"><TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="0" BGCOLOR="#FAFAF4">
          <TR ALIGN="LEFT" VALIGN="MIDDLE">
            <TD width="33%" ALIGN="LEFT" VALIGN="TOP"><TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="5">
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD width="99%"><strong><a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Anthropology%20%28AN%29" target="_blank">Anthropology (AN)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Archaeology%20%28AR%29" target="_blank">Archaeology (AR)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare2?site=010091202360400000/191-94-RWWEB11110515/Arts%20Faculty%20(AF)" target="_blank">Arts Faculty (AF)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Astronomy%20%28AS%29" target="_blank">Astronomy (AS)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Biology%20%28BI%29" target="_blank">Biology (BI)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Business%20%28BU%29" target="_blank">Business (BU)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Chemistry%20%28CH%29" target="_blank">Chemistry (CH)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Classical%20Studies%20%28CL%29" target="_blank">Classical Studies (CL)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Communication%20Studies%20%28CS%29" target="_blank">Communication Studies (CS)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Computer%20Science%20%28CP%29" target="_blank">Computer Science (CP)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare2?site=010091202360400000/191-94-RWWEB11110515/Concurrent%20Education%20(CO-BR)" target="_blank">Concurrent Education (CO-BR)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Contemporary%20Studies%20%28CT%29" target="_blank">Contemporary Studies (CT)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare2?site=010091202360400000/191-94-RWWEB11110515/Criminology%20(CC)" target="_blank">Criminology (CC)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Cultural%20Studies%20%28KS%29" target="_blank">Cultural Studies (KS)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Economics%20%28EC%29" target="_blank">Economics (EC)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Education%20%28EU%29" target="_blank">Education (EU-ED-BR)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/English (EN)" target="_blank">English (EN)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Environmental%20Studies%20%28ES%29" target="_blank">Environmental Studies (ES)</a></strong></TD>
              </TR>
            </TABLE></TD>
            <TD width="34%" ALIGN="LEFT" VALIGN="TOP"><TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="5">
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Film Studies (FS)" target="_blank">Film Studies (FS)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/French (FR)" target="_blank">French (FR)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Geography%20%28GG%29" target="_blank">Geography (GG)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Geology%20%28GL%29" target="_blank">Geology (GL)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Global%20Studies%20%28GS%29" target="_blank">Global Studies (GS)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare2?site=010091202360400000/191-94-RWWEB11110515/Health%20(HE-HS-BR)" target="_blank">Health (HE-HS-BR)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/History%20%28HI%29" target="_blank">History (HI)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/History (HI)" target="_blank">Human Rights (HR-BR)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD width="99%"><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Italian (IT)" target="_blank">Italian (IT)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Kinesiology (KP)" target="_blank">Kinesiology (KP)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/_76,97,110,103,117,97,103,101,32,38,32,76,105,116,101,114,97,116,117,114,101,32,40,76,76,41&enc=y" target="_blank">Languages &amp; Literature (LL)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Latin%20%28LA%29" target="_blank">Latin (LA)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Latin (LA)" target="_blank">Leadership (OL-BR)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Mathematics%20%28MA%29" target="_blank">Mathematics (MA)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare2?site=010091202360400000/191-94-RWWEB11110515/Media%20Studies%20(MX-BR)" target="_blank">Media Studies (MX-BR)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Medieval%20Studies%20%28ML%29" target="_blank">Medieval Studies (ML)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Mediterranean%20Studies%20%28MI%29" target="_blank">Mediterranean Studies (MI)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Music%20%28MU%29" target="_blank">Music (MU)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD width="99%"><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Muslim%20Studies%20%28MZ%29" target="_blank">Muslim Studies (MZ)</a></strong></TD>
              </TR>
            </TABLE></TD>
            <TD width="33%" ALIGN="LEFT" VALIGN="TOP"><TABLE WIDTH="100%"  BORDER="0" CELLSPACING="0" CELLPADDING="5">
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Near%20Eastern%20Studies%20%28NE%29" target="_blank">Near Eastern Studies (NE)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD width="99%"><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/North%20American%20Studies%20%28NO%29" target="_blank">North American Studies (NO)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Philosophy%20%28PP%29" target="_blank">Philosophy (PP)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/_80,104,121,115,105,99,115,32,38,32,67,111,109,112,117,116,105,110,103,32,40,80,67,41&enc=y" target="_blank">Physics &amp; Computing (PC)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Political%20Science%20%28PO%29" target="_blank">Political Science (PO)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Psychology%20%28PS%29" target="_blank">Psychology (PS)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/_82,101,108,105,103,105,111,110,32,38,32,67,117,108,116,117,114,101,32,40,82,69,41&enc=y" target="_blank">Religion &amp; Culture (RE)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Social%20Work%20%28SK%29" target="_blank">Social Work (SK)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Sociology%20%28SY%29" target="_blank">Sociology (SY)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Spanish%20%28SP%29" target="_blank">Spanish (SP)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/Theology%20%28TH%29" target="_blank">Theology (TH)</a></strong></TD>
              </TR>
              <TR ALIGN="LEFT" VALIGN="TOP" bgcolor="#F4F4E9">
                <TD width="1%" align="center" VALIGN="baseline" SCOPE="row"><IMG SRC="_images/9x9_grey.gif" alt="" WIDTH="9" HEIGHT="9"></TD>
                <TD><strong> <a href="http://refworks.scholarsportal.info/refshare/?site=010091076648400000/191-94-RWWEB11110515/_87,111,109,101,110,39,115,32,83,116,117,100,105,101,115,32,40,87,83,41&enc=y" target="_blank">Women's Studies (WS)</a></strong></TD>
              </TR>
            </TABLE></TD>
          </TR>
        </TABLE></td>
        </tr>
    </table></td>
  </tr>
</table>
<?php 
include ("footer.php");
?>
</BODY>
</HTML>