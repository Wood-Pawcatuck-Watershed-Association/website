<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>River Bucks</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
<body>
<?php
	# This page displays the River Bucks certifcate. The plan is that it will be avaialble from both the management area and via links sent to cutomers
	# Created starting on April 30, 2010 by Bruce G. Hooke
	require_once('../../php/mysql_connect.php'); //connect to the database
	//get the data
	$code = $_GET['code'];
	$query = "SELECT riverBucks.riverBucksID, firstName, lastName, dollarAmt FROM riverBucks LEFT JOIN riverBucksPeople ON riverBucks.riverBucksID = riverBucksPeople.riverBucksID WHERE (riverBucksOwner = 1 OR riverBucksOwner IS NULL) AND riverBucks.riverBucksCode = '$code'";
	$result = @mysql_query($query) or die("MySQL Error: ".mysql_error()); //Run the query
	if ($result) {
		$row = mysql_fetch_array($result, MYSQL_NUM);
		$riverBucksID = $row[0];
		$firstName = $row[1];
		$lastName = $row[2];
		$dollarAmt = $row[3];
		if ($dollarAmt == 0.00) {$dollarAmt = NULL;}
		mysql_free_result($result); //free up the resource
	}
	if ($riverBucksID != NULL) {
		echo("<div id=\"certificate\" style=\"position:absolute; left:0px; top:15px; width:720px; height:416px\">");
		echo("<img src=\"../graphics/riverBucks.jpg\" width=\"670\" height=\"387\"> </div>");
		echo("<div id=\"code\" style=\"position:absolute; left:296px; top:173px; width:158px; height:50px; color:#24678e; text-align:center; font: 39px 'Times New Roman', Times, serif;\">$code</div>");
		echo("<div id=\"name\" style=\"position:absolute; left:186px; top:224px; width:446px; height:32px; color:#24678e; text-align:left; font: 34px 'Times New Roman', Times, serif;\">$firstName $lastName</div>");
		echo("<div id=\"dollars\" style=\"position:absolute; left:279px; top:268px; width:112px; height:32px; color:#24678e; text-align:center; font: 34px 'Times New Roman', Times, serif;\">" . $dollarAmt . "</div>");
	} else {
		echo("<div id=\"error\" style=\"position:absolute; left:100px; top:174px; width:500px; height:200px; text-align:center; font:bold 18px 'Times New Roman', Times, serif;\">I'm sorry...we could not find a River Bucks certificate that matches this code. Please try again or <a href=\"mailto:info@wpwa.org\">contact WPWA</a> for assistance.</div>");
	}

?>
</body>
</html>

