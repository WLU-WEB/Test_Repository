<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?PHP
$value='CHECKED';
?>

<FORM ACTION="">
<INPUT TYPE='checkbox' NAME='q_01' VALUE='Computer' ID='q1' <?PHP echo $value; ?>>
<INPUT TYPE='checkbox' NAME='q_02' VALUE='Computer' ID='q2' <?PHP echo "$value"; ?>>
</FORM>
</body>
</html>
