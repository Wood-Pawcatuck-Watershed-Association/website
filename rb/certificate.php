<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<title>WPWA River Bucks</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php
$code = $_GET['code'];
echo("<frameset cols=\"85,*\" frameborder=\"no\" border=\"0\">");
echo("<frame src=\"certificate_inst.htm\" name=\"instruct\" scrolling=no noresize marginwidth=\"0\" marginheight=\"0\">");
echo("<frame src=\"certificate_main.php?code=$code\" name=\"cert\" scrolling=no noresize marginwidth=\"0\" marginheight=\"0\">");
echo("</frameset>");
?>
<noframes><body>
</body></noframes>
</html>
