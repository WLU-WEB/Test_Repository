<?PHP
/*
if ($_SERVER["HTTP_X_FORWARDED_FOR"] != "")
	{ 
	$ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; 
	$proxy = $_SERVER["REMOTE_ADDR"]; 
	$host = @gethostbyaddr($_SERVER["HTTP_X_FORWARDED_FOR"]); 
	}
else{ 
	$ip = $_SERVER["REMOTE_ADDR"]; 
	$host = @gethostbyaddr($_SERVER["REMOTE_ADDR"]); 
	}	
*/	
$ip = $_SERVER['REMOTE_ADDR'];
$_SERVER["SERVER_NAME"] =  exec('hostname -f');
$host = $_SERVER["SERVER_NAME"];
	
?>