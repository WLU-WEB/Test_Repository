<?php
session_start();
session_register ("ALC_username"); // create a session variable called username
session_register ("password");
session_register ("surname_fromLDAP");
session_register ("givenname_fromLDAP");
session_register ("email_fromLDAP");

//echo "[p: $password]<P>";
//exit;
//$id_fist_time_insertion = $_SESSION['studentID_fromLDAP']; 

if(isset($_SESSION['ALC_username']))
	{
	//the session variable is registered, the user is allowed to see anything that follows
	//header( "Location: https://www.wlu.ca/research_ethics/index.php?account_type_fF=$account_type_fF" );
	
	//--------------------------------------------------------------------------------------------
	//---add +1 to count in dB only IF account already exists (otherwise nr_time_logged and date_last_logged show up as 0 if only the user logins in once - a bug) 
	$date_last_logged_in = date("Y-m-d H:i:m");
	//set the database connection variables
	require_once("mysqlArray.php");
	$connection_name = "AcademicLearningServices";
	$dbcnx = @mysqlLogin($connection_name);	
	
	//check if user exists in table
	//if does not exit, insert user information in table
	//if exist, update table
	$search_dB = mysql_query("SELECT user_novell_id FROM a_user WHERE user_novell_id='$ALC_username'");	
	$myrow = mysql_fetch_array($search_dB);
	$user_novell_id_fdB = $myrow["user_novell_id"];

	if(!$user_novell_id_fdB)
		{
		include "login/includes/_generate_user_id.php";
		session_register ("generated_user_id"); //IMPORTANT for index.php (to be inserted into table where USER ID and NOVELL ID are stored by index.php)
		
		$givenname_fromLDAP = addslashes(ucwords($givenname_fromLDAP));
		$surname_fromLDAP = addslashes(ucwords($surname_fromLDAP));

		$sql = "INSERT INTO a_user (user_entry_id,user_id,user_novell_id,user_first_name,user_last_name,user_email,user_date_last_logged,user_nr_times_logged) 
			   	VALUES (NULL,'$generated_user_id','$ALC_username','$givenname_fromLDAP','$surname_fromLDAP','$email_fromLDAP','$date_last_logged_in','1')";
		$result = mysql_query($sql) or die ("Error in query: $sql. " .mysql_error());
		
		}
	else
		{
		$query = "UPDATE a_user SET user_nr_times_logged=user_nr_times_logged+1, user_date_last_logged='$date_last_logged_in' WHERE user_novell_id='$ALC_username'";
		$result = mysql_query($query) or die ("Error in query: $query. " .mysql_error());
		}
	mysql_close($db);

	header( "Location: index.php" );
	die(); //to make sure no other script is executed
	}
else
	{
	//the session variable isn't registered, send them back to the login page
	header( "Location: login.php" );
	die(); //to make sure no other script is executed
	}

?>