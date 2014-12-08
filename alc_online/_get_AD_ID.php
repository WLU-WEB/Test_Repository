<?php
	$user = $ALC_username; //username supplied by user
	$password = $password; //password supplied by user

	include_once('AD_authentication.php');

	$userCategory = "2"; //student category
	$authenticate = userAuthentication($userCategory,$user,$password);
	
	if(!$authenticate)
	{
	$userCategory = "1"; //staff category
	$authenticate = userAuthentication($userCategory,$user,$password);
	}
	
	if ($authenticate)
	{
		$return['mail']=$authenticate['user_email'];
		$return['givenName']=$authenticate['user_first_name'];
		$return['sn']=$authenticate['user_full_name'];
		$id=$authenticate['user_id'];
		$thirdpartyid=$authenticate['user_workforceid'];
	}
	
	echo $id;
	


?> 