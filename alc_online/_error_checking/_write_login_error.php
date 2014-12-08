<?PHP
//---START: write to text file
$date = date("F j, Y, g:i:s a");

if ($_SERVER["HTTP_X_FORWARDED_FOR"] != "")
	{ 
	$ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; 
	$proxy = $_SERVER["REMOTE_ADDR"]; 
	$host = @gethostbyaddr($_SERVER["HTTP_X_FORWARDED_FOR"]); 
	}
else
	{ 
	$ip = $_SERVER["REMOTE_ADDR"]; 
	$host = @gethostbyaddr($_SERVER["REMOTE_ADDR"]); 
	}	
		
$file_name = "_error_checking/failed_login_results.txt"; 
$input = array ($date,$ALC_username,$ip,$host); 
$output_line = implode ($input, "|")."\n"; 
$output_stream = fopen($file_name, "a+");
$result = fputs ($output_stream, $output_line);
fclose($output_stream);
//---END: write to text file
?>