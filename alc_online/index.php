<?php

//start the session
session_start();
//print_r ($_SESSION);
//return;
//check to make sure the session variable is registered
if(isset($_SESSION['ALC_username']))
//if(session_is_registered('username'))
	{
	//the session variable is registered, the user is allowed to see anything that follows
	//echo 'Welcome, you are still logged in.<BR>';
	//echo "Session value ".$_SESSION['ALC_username'];
	//echo "<BR><A HREF='logout.php'>logout</A>";
	//if username contains anything else other than letters (ie. numbers) automatically logout the user to ensure only staff and faculty Novell can access the form
	
	//--- IMPORTANT IF YOU WANT TO ALLOW ONLY FACULTY & STAFF!
	//if(!eregi("^[a-zA-Z]+$", $_SESSION['ALC_username'])) { header( "Location: https://www.wlu.ca/alcforms/logout.php" ); die(); } 
	//else { include "login/index.php"; }  
	//--- END
	include "login/index.php";
	//if(preg_match("/([A-Za-z][A-Za-z][A-Za-z][A-Za-z][0-9][0-9][0-9][0-9])/", $H1N1registration_username))
	//print_r ($_SESSION);
	}
else
	{
	//echo "ok";
	//return;
	//the session variable isn't registered, send them back to the login page
	header( "Location: login.php" );
	//echo "sorry";
	die(); //to make sure no other script is executed
	}

?>