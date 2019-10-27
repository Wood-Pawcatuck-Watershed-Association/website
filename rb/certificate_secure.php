<?php
	//This code checks to make sure the user is properly logged in. If not they are sent to the login page.
	//reference the system that validates the login
	require_once('../manage/checkid.php');
	
	//validate the session
	$redirect = check(basename(__FILE__));
	
	//If validation fails then bail
	if ($redirect != "ok") {
		header('location:../login');
    }
	
	//If we get to here then the log in is OK, so proceed
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<title>WPWA River Bucks</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php
$code = $_GET['code'];
$firstName = $_GET['first'];
$lastName = $_GET['last'];
$dollarAmt = $_GET['dollarAmt'];
echo("<frameset cols=\"85,*\" frameborder=\"no\" border=\"0\">");
echo("<frame src=\"certificate_inst.htm\" name=\"instruct\" scrolling=no noresize marginwidth=\"0\" marginheight=\"0\">");
echo("<frame src=\"certificate_main_secure.php?code=$code&amp;first=$firstName&amp;last=$lastName&amp;dollarAmt=$dollarAmt\" name=\"cert\" scrolling=no noresize marginwidth=\"0\" marginheight=\"0\">");
echo("</frameset>");
?>
<noframes><body>
</body></noframes>
</html>
