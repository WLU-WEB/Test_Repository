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
<LINK REL="stylesheet" TYPE="text/css" HREF="bk.css">

<style>
#private_notice {
	font-size: 10px;
	}
</style>

<TITLE>Accessible Learning Centre</TITLE>
</head>

<BODY>
<?php 
//include ("/www/home/ssi/top.shtml"); 
include ("top.shtml");
$image_08="<img src='_images/9x9_grey.gif' alt='Bullet Image' width='9' height='9' />";
$title_01="<img src='_images/ALC_title.jpg' alt='Accessible Learning Centre Online Forms' width='850' height='100' />";
$title_02="<img src='_images/ALC_title_small.jpg' alt='Accessible Learning Centre Online Forms' width='850' height='50' />";
$errorImage="<img src='_images/warning_small.png' alt='Missing Information' width='16' height='16' />";

?>

<table width="100%" border="0" cellpadding="0">
  <tr>
    <td class="ltext" ALIGN="LEFT" VALIGN="TOP"><table WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0" BGCOLOR="#FFFFFF">
      <tr ALIGN="LEFT" VALIGN="MIDDLE">
        <td WIDTH="100%" ALIGN="LEFT" VALIGN="TOP"><table WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="5">
          <tr ALIGN="LEFT" VALIGN="TOP">
          </tr>
          <tr ALIGN="LEFT" VALIGN="TOP">
            <td><h1><?php echo "$title_01"; ?></h1></td>
            </tr>
        </table></td>
        </tr>
      <tr>
        <td ALIGN="LEFT" VALIGN="TOP"><TABLE WIDTH="100%"  BORDER="0" CELLPADDING="10" CELLSPACING="0" BGCOLOR="#FFFFFF">
          <TR ALIGN="LEFT" VALIGN="TOP">
            <TD WIDTH="50%" SCOPE="row"><FORM METHOD="POST" ACTION="validation.php">
              <TABLE WIDTH="100%"  BORDER="0" CELLSPACING="5" CELLPADDING="0">
                <TR ALIGN="LEFT" VALIGN="MIDDLE">
                  <TD VALIGN="TOP">&nbsp;</TD>
                  <td align="right" valign="top"><?php echo "$image_08"; ?></td>
                  <td align="left" valign="top">Please sign in using your MyLaurier username (ie. smit6789) and password.</td>
                </TR>
                <TR ALIGN="LEFT" VALIGN="MIDDLE">
                  <TD VALIGN="TOP">&nbsp;</TD>
                  <td align="right" valign="top"><?php echo "$image_08"; ?></td>
                  <td align="left" valign="top"><span>If you experience any technical difficulties signing in: </span></td>
                </TR>
                <TR ALIGN="LEFT" VALIGN="MIDDLE">
                  <TD VALIGN="TOP">&nbsp;</TD>
                  <td align="right" valign="top">&nbsp;</td>
                  <td align="left" valign="top"><table width="100%" border="0" cellspacing="5" cellpadding="0">
                    <tr>
                      <td width="1%" align="left" valign="top"><?php echo "$image_08"; ?></td>
                      <td width="99%" align="left" valign="top">if you are unsure of your Network login, contact <strong>Student Service Desk</strong> at <a href="mailto:support@mylaurier.ca">support@mylaurier.ca</a> or (519) 884-0710 extension <strong>2222</strong></td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><?php echo "$image_08"; ?></td>
                      <td align="left" valign="top">pressing the reset button will clear form information and may in some cases resolve technical difficulties.</td>
                    </tr>
                  </table></td>
                </TR>
                <TR ALIGN="LEFT" VALIGN="MIDDLE">
                  <TD VALIGN="TOP">&nbsp;</TD>
                  <TD>&nbsp;</TD>
                  <TD>&nbsp;</TD>
                </TR>
                <TR ALIGN="LEFT" VALIGN="MIDDLE">
                  <TD VALIGN="TOP">&nbsp;</TD>
                  <TD><DIV ALIGN="RIGHT"><IMG SRC="_images/password.png" WIDTH="16" HEIGHT="16"></DIV></TD>
                  <TD><h1> MyLaurier Login</h1></TD>
                </TR>
                <TR ALIGN="LEFT" VALIGN="MIDDLE">
                  <TD VALIGN="TOP">&nbsp;</TD>
                  <TD></TD>
                  <TD>
                  <?php if($campus_error) { echo "$errorImage"; } ?>
                  
<?php if($campus_fF=='waterloo') { echo "<INPUT TYPE='radio' NAME='campus_fF' VALUE='waterloo' ID='waterloo_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='campus_fF' VALUE='waterloo' ID='waterloo_selection'>"; } ?>
<label for="waterloo_selection">Waterloo</label>
<?php if($campus_fF=='brantford') { echo "<INPUT TYPE='radio' NAME='campus_fF' VALUE='brantford' ID='brantford_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='campus_fF' VALUE='brantford' ID='brantford_selection'>"; } ?>
<label for="parttime_selection">Brantford</label>
<?php if($campus_fF=='kitchener') { echo "<INPUT TYPE='radio' NAME='campus_fF' VALUE='kitchener' ID='kitchener_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='campus_fF' VALUE='kitchener' ID='kitchener_selection'>"; } ?>
<label for="kitchener_selection">Kitchener</label>
<?php if($campus_fF=='toronto') { echo "<INPUT TYPE='radio' NAME='campus_fF' VALUE='toronto' ID='toronto_selection' CHECKED>"; } else { echo "<INPUT TYPE='radio' NAME='campus_fF' VALUE='toronto' ID='toronto_selection'>"; } ?>
<label for="toronto_selection">Toronto</label>

<script>
    console.log("test <?php echo $campus_fF; ?>");
</script>

                  </TD>
                </TR>
                <TR ALIGN="LEFT" VALIGN="MIDDLE">
                  <TD WIDTH="1%" VALIGN="TOP"><IMG SRC="_images/1x1_transparent.gif" WIDTH="1" HEIGHT="1"></TD>
                  <TD><IMG SRC="_images/1x1_transparent.gif" WIDTH="1" HEIGHT="1"></TD>
                  <TD BGCOLOR="#CCCCCC"><IMG SRC="_images/1x1_transparent.gif" WIDTH="1" HEIGHT="1"></TD>
                </TR>
                <TR ALIGN="LEFT" VALIGN="MIDDLE">
                  <TD WIDTH="1%" VALIGN="TOP">&nbsp;</TD>
                  <TD WIDTH="1%"><DIV ALIGN="RIGHT"><STRONG>
                    <?php if(!$loginerror) { echo "<B>Username</B>"; } else { echo "<B><SPAN CLASS='style1'>Username</SPAN></B>"; } ?>
                  </STRONG></DIV></TD>
                  <TD WIDTH="98%"><input name="ALC_username" type="text" size="30" maxlength="60" AUTOCOMPLETE="OFF" value="<? echo strip_tags($ALC_username); ?>" <?php if($loginerror) { echo "style='background-color: #FFFF99';"; } ?>></TD>
                </TR>
                <TR ALIGN="LEFT" VALIGN="MIDDLE">
                  <TD WIDTH="1%" VALIGN="TOP">&nbsp;</TD>
                  <TD><DIV ALIGN="RIGHT"><STRONG>
                    <?php if(!$loginerror) { echo "<B>Password</B>"; } else { echo "<B><SPAN CLASS='style1'>Password</SPAN></B>"; } ?>
                  </STRONG></DIV></TD>
                  <TD><input name="password" type="PASSWORD" size="30" maxlength="60" value="<? echo strip_tags($password); ?>" <?php if($loginerror) { echo "style='background-color: #FFFF99';"; } ?>></TD>
                </TR>
                <TR ALIGN="LEFT" VALIGN="MIDDLE">
                  <TD>&nbsp;</TD>
                  <TD>&nbsp;</TD>
                  <TD><?php 
		  if(count($errors)>0) 
		  	{ 
		  	echo "$bullet_image <A HREF='http://www.wlu.ca/page.php?grp_id=47&p=1067' TARGET='_blank'>Network Login Information</A><BR>"; 
			echo "$bullet_image <A HREF='http://www.wlu.ca/page.php?grp_id=47&p=6146' TARGET='_blank'>Network Password Reset Procedure</A>"; 
			} 
			?>
                    <SPAN CLASS="pageTitle">
                      <INPUT TYPE='hidden' NAME='form_started' VALUE="Yes">
                      <INPUT TYPE='hidden' NAME='step_1_value' VALUE="1">
                      <!-- <input type="submit" name="submit_step_1" value="Login"> //-->
                      <INPUT TYPE="button" VALUE='Reset' onClick="location.href='logout.php'"/>
					  <?PHP
					   if ($_SERVER["HTTP_X_FORWARDED_FOR"] != "")
							{ 
							$ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; 
							//$proxy = $_SERVER["REMOTE_ADDR"]; 
							//$host = @gethostbyaddr($_SERVER["HTTP_X_FORWARDED_FOR"]); 
							}
						else{ 
							$ip = $_SERVER["REMOTE_ADDR"]; 
							//$host = @gethostbyaddr($_SERVER["REMOTE_ADDR"]); 
							}		
						/*
						if($ip=="205.189.26.78")
							{ echo "<input type='submit' name='submit_step_1' value='Login'>"; }
						else
							{ echo "<input type='submit' name='submit_step_1' value='CURRENTLY UNDERGOING MAINTENANCE' DISABLED>"; }
						*/
						echo "<input type='submit' name='submit_step_1' value='Login'>";
                    ?>
                    </SPAN></TD>
                </TR>
              </TABLE>
            </FORM></TD>
            <TD WIDTH="50%" ALIGN="LEFT" VALIGN="TOP"><DIV ALIGN="RIGHT"><IMG SRC="_images/main_page.jpg" ALT="Brantford Academic Curriculum" WIDTH="400" HEIGHT="300"> </DIV></TD>
          </TR>
        </TABLE></td>
        </tr>
    </table></td>
  </tr>
</table>

<?php include('/www/private/privacy_notice/notice.php'); ?><br/>

<?php 
include ("footer.php");
?>
</BODY>
</HTML>