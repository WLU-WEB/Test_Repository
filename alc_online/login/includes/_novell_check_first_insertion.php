	<?php
	$ds=ldap_connect("ldap6.wlu.ca");  // assuming the LDAP server is on this host
	if ($ds) 
		{
		if(ldap_bind($ds)) // bind 
			{
	    	//echo "Bind result is " . $r . "<br />";
			// prepare data
	  	 	// $sr=ldap_search($ds, "ou=staff,ou=its,o=wlu", "sn=*");  //me
			//$sr=ldap_search($ds, "ou=its,o=wlu","uid=$novellLogin"); //bg
			$sr=ldap_search($ds, "o=wlu","uid=$ALC_username"); //bg
			//echo "Search result is " . $sr . "<br />";
			//echo "Number of entires returned is " . ldap_count_entries($ds, $sr) . "<br />";
			//echo "Getting entries ...<p>";
			$info = ldap_get_entries($ds, $sr);
			//echo "Data for " . $info["count"] . " items returned:<p>";
			/*
			for ($i=0; $i<$info["count"]; $i++) 
				{
				echo "uid: " . $info[$i]["uid"][0] . "<br />";
				echo "cn: " . $info[$i]["cn"][0] . "<br />";
				echo "description: " . $info[$i]["description"][0] . "<br />";
				echo "dn: " . $info[$i]["dn"][0] . "<br />";
				echo "sn: " . $info[$i]["sn"][0] . "<br />";
				echo "ou: " . $info[$i]["ou"][0] . "<br />";
				echo "givenname: " . $info[$i]["givenname"][0] . "<br />";
				echo "title: " . $info[$i]["title"][0] . "<br />";
				echo "l: " . $info[$i]["l"][0] . "<br />";
				echo "telephonenumber: " . $info[$i]["telephonenumber"][0] . "<br />";
				echo "mail: " . $info[$i]["mail"][0] . "<br /><hr />";
				echo "description: " . $info[$i]["description"][0] . "<br />";
				echo "employeeNumber: " . $info[$i]["employeeNumber"][0] . "<br />";
				echo "student number: " . $info[$i]["student number"][0] . "<br />";
				}
			*/	
			//echo "Closing connection";
			//ldap_close($ds);
	
	//"userpassword",$password
			// compare value
			//$dn = "uid=akovacsik, ou=staff,ou=its,o=wlu";
			//$sr=ldap_search($ds, "ou=its,o=wlu","uid=$novellLogin"); //bg
			$dn=$info[0]["dn"];
			//echo "1. uid: " . $info[$i]["uid"][0] . "<br />";
			//echo "dn: $dn<BR>";
			$sn_fLDAP = $info[2]["sn"];

			$cn_fLDAP = $info[0]["cn"];
			$email_fLDAP = $cn_fLDAP[0];
			$array = array($email_fLDAP, '@wlu.ca');
			$email_fLDAP = implode("", $array);
			//echo "email_fLDAP: $email_fLDAP<BR>";
			
			//echo "3. sn: $sn<BR>";
			$givenname_fLDAP = $info[0]["givenname"];
			$givenname_fLDAP = $givenname_fLDAP[0];
			//echo "givenname_fLDAP: $givenname_fLDAP<BR>";
			$sn_fLDAP = $info[0]["sn"];
			$sn_fLDAP = $sn_fLDAP[0];
			//$uid_fLDAP = $uid[0];
			//echo "uid_fLDAP: $uid_fLDAP<BR>";
			
			$uid=$info[0]["uid"];
			$uid_fLDAP = $uid[0];
			
			$description=$info[0]["description"];
			$description_fLDAP = $description[0];
			//echo "description_fLDAP: $description_fLDAP<BR>";
			
			$employeeNumber=$info[0]["employeeNumber"];
			$employeeNumber_fLDAP = $employeeNumber[0];
			//echo "employeeNumber_fLDAP: $employeeNumber_fLDAP<BR>";

			$studentnumber=$info[0]["student number"];
			$studentnumber_fLDAP = $studentnumber[0];
			//echo "studentnumber_fLDAP: $studentnumber_fLDAP<BR>";
			//echo "uid_fLDAP: $uid_fLDAP<BR>";
			//$dn = "ou=staff,ou=its,o=wlu";
			//$value = "password"; //form field
			//$attr = "userpassword"; //LDAP field
			
			//$r=ldap_compare($ds, $dn, $attr, $value);
			//$r=ldap_compare($ds,$dn,"userpassword",$password);
			} 
		else 
			{
			//header("Location: http://www.cnn.com");
			echo "Unable to bind to LDAP server.";
			}          
		ldap_close($ds);
		} 
else 
		{
		//header("Location: http://www.cbc.com");
		echo "Unable to connect to LDAP server.";
		}	
?>
