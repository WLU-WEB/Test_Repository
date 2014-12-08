<?PHP

session_start();

//check that the user is calling the page from the login form and not accessing it directly
//and redirect back to the login form if necessary
//$username = addslashes($_POST['username']);
//$password = addslashes($_POST['password']);
//echo "username: [$username]<BR>";
//echo "password: [$password]<BR>";

$ALC_username = addslashes($ALC_username);
$password = addslashes($password);
//echo "[$ALC_username|$password]<BR>";

//---create a session variable to read the type of account after login
//session_register ("account_type_fF"); 
//echo "Account Type ".$_SESSION['account_type_fF'];

if (!isset($ALC_username) || !isset($password)) 
	{
	//echo "1";
	//unset($_SESSION['account_type_fF']);  
	header( "Location: login.php?loginerror=1" );
	
	}
//check that the form fields are not empty, and redirect back to the login page if they are
elseif (empty($ALC_username) || empty($password)) 
	{
	//echo "2";
	//unset($_SESSION['account_type_fF']);  
	header( "Location: login.php?loginerror=1" );
	
	}
elseif (empty($ALC_username) || empty($password)) 
	{
	//echo "2";
	//unset($_SESSION['account_type_fF']);  
	header( "Location: login.php?loginerror=1" );

	}
//check to see that the campus is selected
elseif (!isset($campus_fF)) 
	{
	//echo "1";
	//unset($_SESSION['account_type_fF']);  
	header( "Location: login.php?campus_error=1" );

	}
else
	{
	//include ("_novell_check.php"); //only Brantford users
	//include ("/www/forms/accessible_learning/alc_student_applications/_get_ID.php"); 
	//$_SESSION['studentID_fromLDAP'] = $id; //$id pulled from above line
	
	//echo '<pre>'.print_r($_POST,true).'</pre>';
	$_SESSION['campus_fF'] = $_POST['campus_fF'];
	//print_r ($_SESSION);
	//exit;
	include ("_AD_check.php"); //added myself (as a Waterloo user as well along the Brantfor users) for testing purposes
	}
?> 