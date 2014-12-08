<?php
$user = $ALC_username; //username supplied by user
//$password = $ALC_password; //password supplied by user
$password = $password; //password supplied by user

//$user = kova8670; //username supplied by user
//$password = super12; //password supplied by user

$LDAP_SERVER='ldap6.wlu.ca';
$LDAP_HOST=gethostbyname($LDAP_SERVER);
$LDAP_URL='ldaps://'.$LDAP_HOST;

include_once('studentProxy.php');

$ds_connect = ldap_connect("$LDAP_URL") or die("Could not connect to LDAP server."); //connect to ldap server

//if (ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3)) { echo "Using LDAPv3<P>"; } else { echo "Failed to set protocol version to 3"; }

if($ds_connect) {
  $ldapbind = ldap_bind($ds_connect, $proxyUserDN, $proxyUserPW);  //binding to ldap server; proxy username and password
  if($ldapbind) //verify binding
	{
  	$justthese = array("employeenumber", "sn", "givenname", "mail", "workforceid");
	$sr=ldap_search($ds_connect,' ',"cn=$user",$justthese);
	if($sr)
		{
		$ldapInfo = ldap_get_entries($ds_connect, $sr);
   		$dn_fromLDAP=$ldapInfo[0]["dn"];

		$bindSuccess = ldap_bind($ds_connect,$dn_fromLDAP,$password);
		if($bindSuccess=="1")
			{
			$sr2=ldap_search($ds_connect,' ',"cn=$user",$justthese);
			$ldapInfo = ldap_get_entries($ds_connect, $sr2); 
			$return['mail']=$ldapInfo[0]['mail'][0];
			$return['givenName']=$ldapInfo[0]['givenname'][0];
			$return['sn']=$ldapInfo[0]['sn'][0];
			$id=$ldapInfo[0]['employeenumber'][0];
        	$thirdpartyid=$ldapInfo[0]['workforceid'][0];
			//echo "id: [$id]<BR>";
			//echo "thirdpartyid: [$thirdpartyid]<BR>";
			//exit;
			}
		}
	else
		{
		//echo "<BR>Could not find.";
		}
	} 
  else 
  	{
    //echo "LDAP bind failed...";
  	}
}

ldap_close($ds_connect);

?> 