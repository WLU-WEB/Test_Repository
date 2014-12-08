<?PHP	
	
	$html_code_start = "<HTML><HEAD><LINK REL='stylesheet' TYPE='text/css' HREF='/_includes/css.css'></HEAD><BODY>";
	$html_code_end = "</BODY></HTML>";
	
	$LDAP_SERVER='ldap6.wlu.ca';
	$LDAP_HOST=gethostbyname($LDAP_SERVER);
	$LDAP_URL='ldaps://'.$LDAP_HOST;
	$ds=ldap_connect($LDAP_URL);  // assuming the LDAP server is on this host
	
	//$_SESSION['ALC_username'] = $ALC_username;
   // $_SESSION['ALC_password'] = $password;
	//print_r ($_SESSION);

	if ($ds) 
		{//A
		if(ldap_bind($ds)) // bind
			{//D
			$sr = ldap_search($ds, "ou=students,o=wl","uid=$ALC_username");
			//$sr = ldap_search($ds, "o=wlu","uid=$ALC_username");
			if (($sr)&&(ldap_count_entries($ds,$sr)==1))
				{
				//echo "loop 3<BR>";
				//return;
				$info=ldap_get_entries($ds, $sr);
				$dn=$info[0]['dn'];
				$result=ldap_compare($ds,$dn,"userpassword",$password); //this becomes 1 (one) if a match is found
				//---pull $sn from LDAP to later compare with value in dB
				for ($i=0; $i<$info["count"]; $i++) 
					{ 
					$surname_fromLDAP=$info[$i]["sn"][0]; 
					$givenname_fromLDAP=$info[$i]["givenname"][0];
					$email_fromLDAP=$info[$i]["mail"][0]; 
					$dn_fromLDAP=$info[$i]["dn"]; 
					} 
				
				$_SESSION['surname_fromLDAP'] = $surname_fromLDAP;
				$_SESSION['givenname_fromLDAP'] = $givenname_fromLDAP;
				$_SESSION['email_fromLDAP'] = $email_fromLDAP;
				//$_SESSION['dn_fromLDAP'] = $dn_fromLDAP;
				//print_r ($_SESSION);
				//echo "result [$dn | $surname_fromLDAP | $result | $ALC_username]<BR>";
				//return;
				ldap_close($ds);
				//echo "[p: $ALC_password|$password]<BR>";
				//exit;
				//if ($result === TRUE) { $_SESSION['sucessful_login'] = "yes"; include ("_include/_the_form.php"); include ("/www/forms/_includes/footer.php"); die(); } 
				//if ($result === TRUE) { $_SESSION['sucessful_login'] = "yes"; echo "success!"; die(); } 
				if ($result === TRUE) 
					{ 
					$_SESSION['sucessful_login'] = "yes"; 
					include ("_error_checking/_write_login_success_wlu.php"); 
					include ("_novell_success.php"); 
					die(); 
					} 
				elseif ($result === FALSE) 	
					{ 
					echo "$html_code_start"; 
					include ("top.shtml"); 
					include ("_messages/_user_not_found.php"); 
					include ("footer.php"); 
					include ("_error_checking/_write_login_error.php"); 
					echo "$html_code_end"; 
					die(); 
					}
				elseif ($result === -1)	
					{ 
					echo "$html_code_start"; 
					include ("top.shtml"); 
					include ("_messages/_user_not_found.php"); 
					include ("footer.php"); 
					include ("_error_checking/_write_login_error.php"); 
					echo "$html_code_end"; 
					die(); 
					} 
				}
			else
				{//E
				if($ALC_username=="akovacsik" || $ALC_username=="skokotovic" || $ALC_username=="dfacey" || $ALC_username=="eriggin" || $ALC_username=="jbruyea" || $ALC_username=="jhunt" || $ALC_username=="gpage" || $ALC_username=="jfridrich" || $ALC_username=="iadebowale" || $ALC_username=="dkohlruss" || $ALC_username== "aevans" || $ALC_username== "mackerman"  || $ALC_username== "klizzotti" || $ALC_username== "clopez")
					{//open some staff
					$sr = ldap_search($ds, "o=wlu","uid=$ALC_username");
					//TESTING for Keith Goulet - Keith is on the NEW TREE, so $sr must have WL, not WLU)
					if ($ALC_username=="kgoulet")
						{
						$sr = ldap_search($ds, "o=wl","uid=$ALC_username");
						}
							
					if (($sr)&&(ldap_count_entries($ds,$sr)==1))
						{
						//echo "loop 3<BR>";
						$info=ldap_get_entries($ds, $sr);
						$dn=$info[0]['dn'];
						$result=ldap_compare($ds,$dn,"userpassword",$password); //this becomes 1 (one) if a match is found
						//---pull $sn from LDAP to later compare with value in dB
						for ($i=0; $i<$info["count"]; $i++) 
							{ 
							$surname_fromLDAP=$info[$i]["sn"][0]; 
							$givenname_fromLDAP=$info[$i]["givenname"][0];
							$email_fromLDAP=$info[$i]["mail"][0]; 
							$dn_fromLDAP=$info[$i]["dn"]; 
							} 
						
						$_SESSION['surname_fromLDAP'] = $surname_fromLDAP;
						$_SESSION['givenname_fromLDAP'] = $givenname_fromLDAP;
						$_SESSION['email_fromLDAP'] = $email_fromLDAP;
						//$_SESSION['dn_fromLDAP'] = $dn_fromLDAP;
						//print_r ($_SESSION);
						//echo "result [$dn | $surname_fromLDAP | $result | $ALC_username]<BR>";
						ldap_close($ds);
						if ($result === TRUE) 
							{ 
							$_SESSION['sucessful_login'] = "yes"; 
							include ("_error_checking/_write_login_success_wlu.php"); 
							include ("_novell_success.php"); 
							die(); 
							} 
						elseif ($result === FALSE) 	
							{ 
							echo "$html_code_start"; 
							include ("top.shtml"); 
							include ("_messages/_user_not_found.php"); 
							include ("footer.php"); 
							include ("_error_checking/_write_login_error.php"); 
							echo "$html_code_end"; 
							die(); 
							}
						elseif ($result === -1)	
							{ 
							echo "$html_code_start"; 
							include ("top.shtml"); 
							include ("_messages/_user_not_found.php"); 
							include ("footer.php"); 
							include ("_error_checking/_write_login_error.php"); 
							echo "$html_code_end"; 
							die(); 
							} 
						}
					else //when username is wrong, or when username and password are both wrong
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
						return;
						}							
					}//close some staff
				
				else //if staff not as indicated above
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
					return;
					}
				}//[E]
			}//[D]
		else 
			{
			echo "Unable to bind to LDAP server.";
			}          
		ldap_close($ds);
		}//[A]
	
	else 
		{
		echo "Unable to connect to LDAP server.";
		}	
?>
