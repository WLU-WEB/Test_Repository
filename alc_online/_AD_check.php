<?PHP	
	
	$html_code_start = "<HTML><HEAD><LINK REL='stylesheet' TYPE='text/css' HREF='/_includes/css.css'></HEAD><BODY>";
	$html_code_end = "</BODY></HTML>";
	
	include_once('AD_authentication.php');
	
	$userCategory = "2"; //student category
	$authenticate = userAuthentication($userCategory,$ALC_username,$password);
	
	if ($authenticate) //successful student login
	{
		$surname_fromLDAP = $authenticate['user_full_name'];
		$givenname_fromLDAP = $authenticate['user_first_name'];
		$email_fromLDAP = $authenticate['user_email'];
		
		$_SESSION['surname_fromLDAP'] = $surname_fromLDAP;
		$_SESSION['givenname_fromLDAP'] = $givenname_fromLDAP;
		$_SESSION['email_fromLDAP'] = $email_fromLDAP;
		$_SESSION['sucessful_login'] = "yes"; 
		
		include ("_error_checking/_write_login_success_wlu.php"); 
		include ("_novell_success.php"); 
		die(); 
	}
	
	if($ALC_username=="akovacsik" || $ALC_username=="skokotovic" || $ALC_username=="dfacey" || $ALC_username=="eriggin" || $ALC_username=="jbruyea" || $ALC_username=="jhunt" || $ALC_username=="gpage" || $ALC_username=="jfridrich" || $ALC_username=="iadebowale" || $ALC_username=="dkohlruss" || $ALC_username== "aevans" || $ALC_username== "mackerman" || $ALC_username== "klizzotti" || $ALC_username== "clopez")
	{
		$userCategory = "1"; //staff category
		$authenticate = userAuthentication($userCategory,$ALC_username,$password);
		
		if ($authenticate) //successful "some staff" login
		{
			$surname_fromLDAP = $authenticate['user_full_name'];
			$givenname_fromLDAP = $authenticate['user_first_name'];
			$email_fromLDAP = $authenticate['user_email'];
			
			$_SESSION['surname_fromLDAP'] = $surname_fromLDAP;
			$_SESSION['givenname_fromLDAP'] = $givenname_fromLDAP;
			$_SESSION['email_fromLDAP'] = $email_fromLDAP;
			$_SESSION['sucessful_login'] = "yes"; 
			
			include ("_error_checking/_write_login_success_wlu.php"); 
			include ("_novell_success.php"); 
			die(); 
		}
	}
	
	if (!$authenticate) //failed both student and "some staff" logins
	{
		unset($_SESSION['ALC_username']);
		unset($_SESSION['password']);
		unset($_SESSION['surname_fromLDAP']);
		unset($_SESSION['givenname_fromLDAP']);
		unset($_SESSION['email_fromLDAP']);
		session_destroy(); // this would destroy the session variables 
		echo "$html_code_start";
		include ("top.shtml");
		include ("_messages/_user_not_found.php");
		include ("_error_checking/_write_login_error.php");
		include ("footer.php");
		echo "$html_code_end";
		die();
	}

?>
