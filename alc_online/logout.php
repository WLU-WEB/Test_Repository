<?php
//start the session
session_start();
unset($_SESSION['ALC_username']);
unset($_SESSION['ALC_password']);
unset($_SESSION['studentID_fromLDAP']);
unset($_SESSION['thirdpartyid_fromLDAP']);

unset($_SESSION['password']);
unset($_SESSION['surname_fromLDAP']);
unset($_SESSION['givenname_fromLDAP']);
unset($_SESSION['email_fromLDAP']);
session_destroy();
header( "Location: index.php" );


?>