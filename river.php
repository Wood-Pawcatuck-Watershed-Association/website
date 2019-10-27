<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><!-- InstanceBegin template="/Templates/stdPage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<meta name="description" content="Wood-Pawcatuck Watershed Association">
<meta name="keywords" content="Wood-Pawcatuck Watershed Association">

<meta name="robots" content="index,follow">
<meta name="copyright" content="Wood-Pawcatuck Watershed Association 2010">
<!-- InstanceBeginEditable name="doctitle" -->
<title>River Conditions: Wood-Pawcatuck Watershed Association</title>
<link href="https://wpwa.org/styles/mapStyles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="https://wpwa.org/functions/dom-drag.js"></script>
<!-- InstanceEndEditable -->
<link rel="shortcut icon" href="favicon.ico">
<link href="https://wpwa.org/styles/styles.css" rel="stylesheet" type="text/css">
<link href="https://wpwa.org/styles/menuStyles.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
<!-- 
function swapImage() { //v3.0
  var i,j=0,x,a=swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v3.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; if(!(x=d[n])&&d.getElementById) x=d.getElementById(n);
  for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document); return x;
}

function preloadImages() {
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
// -->
</script>
<script type="text/javascript" src="https://wpwa.org/styles/menuStyles.js"></script>
<!-- InstanceBeginEditable name="head" -->
<script type="text/javascript">
<!--
function openLink(linkStr) {
	var theURL
	theURL = linkStr;
	window.open(theURL)
}

var newMarker;

function startReport(pointy, chk, lat, long){
	if (chk==true && (lat > 41.6708 || lat < 41.30315|| long < -71.911719|| long > -71.4921)) {
		alert("The location on which you clicked is not in the Wood-Pawcatuck Watershed. This system should only be used to report river conditions in the Wood-Pawcatuck watershed. Thanks!");
	} else {
		var e = document.getElementById("submitSite");
		if (pointy > 480) {pointy = 180;}
		if (pointy < 190 && pointy >=0 ) {pointy = 190;}
		e.style.top = Math.round((pointy+20),0)+"px";
		if (lat != null) {
			if (curr_infw) {
            	curr_infw.close();;
        	}
			//createMarker(map, new GLatLng(lat,long),"star","");
			var star = new google.maps.MarkerImage('https://wpwa.org/maps/icons/star.gif',
				new google.maps.Size(20, 24),
				new google.maps.Point(0,0),
				new google.maps.Point(10, 12));
			var shadow = new google.maps.MarkerImage('https://wpwa.org/maps/icons/shadow.png',
				new google.maps.Size(31, 24),
				new google.maps.Point(0,0),
				new google.maps.Point(10, 12));
			var shape = {
				coord: [0, 0, 0, 24, 20, 24, 20 , 0],
				type: 'poly'
			};
			var myLatLng = new google.maps.LatLng(lat,long);
			
			var infoStr = "<div style='line-height:1.35;overflow:hidden;white-space:nowrap;'><p><a href='javascript:;' onClick='startReport(" + pointy + ",true," + lat + "," + long + ")'>Click here to enter a report about<br>river conditions at this location.</a></p></div>";
			
			createPushpin (map, myLatLng, shadow, star, shape, 'Report', infoStr);
			
			//var bbmIcon = new GIcon(G_DEFAULT_ICON);
			//bbmIcon.image = "maps/icons/star.gif" 
			//bbmIcon.shadow = "maps/icons/shadow.png"
			//bbmIcon.transparent = "maps/icons/transparent.png";
			//bbmIcon.iconSize = new GSize(20, 24); 
			//bbmIcon.shadowSize = new GSize(31, 24);
			//bbmIcon.iconAnchor = new GPoint(12, 24); 
			//bbmIcon.infoWindowAnchor = new GPoint(17, 4);  
			//bbmIcon.imageMap = [0,0, 24,0, 24,20, 0,20]        
			// Set up our GMarkerOptions object
			//markerOptions = { icon:bbmIcon };
			//position = new GLatLng(lat,long);
			//newMarker = new GMarker(position, markerOptions);
			//map.addOverlay(newMarker, markerOptions);
			
			//Take the Lat and Long and break them into the individual elements
			var E = -long
			var E1 = Math.floor(E);
			var E2D = Math.round(((E - E1) * 60),4);
			var E2 = Math.floor((E - E1) * 60);
			var E3 = Math.round((((E - E1) * 60) - E2) * 60,2);
		
			var N = lat;
			var N1 = Math.floor(N);
			var N2D = Math.round(((N - 1) * 60),4);
			var N2 = Math.floor((N - N1) * 60);
			var N3 = Math.round((((N - N1) * 60) - N2) * 60,2);
			
			var str = "<input name='latitudeDeg' id='latitudeDeg' type='text' size='2' maxlength='2' value='" + N1 + "'>&deg; " +
				 "<input name='latitudeMin' id='latitudeMin' type='text' size='2' maxlength='2' value='" + N2 + "'>' " +
				 "<input name='latitudeSec' id='latitudeSec' type='text' size='5' maxlength='5' value='" + N3 + "'>&quot;" +
				 "<br>" +
				 "<input name='longitudeDeg' id='longitudeDeg' type='text' size='2' maxlength='2' value='" + E1 + "'>&deg; " +
				 "<input name='longitudeMin' id='longitudeMin' type='text' size='2' maxlength='2' value='" + E2 + "'>' " +
				 "<input name='longitudeSec' id='longitudeSec' type='text' size='5' maxlength='5' value='" + E3 + "'>&quot;"; 
			
			var pos = document.getElementById("degminsec");
			pos.innerHTML = str;
		} else {
			var a = document.getElementById("latitudeDeg");
			a.value = "";
			var a = document.getElementById("latitudeMin");
			a.value = "";
			var a = document.getElementById("latitudeSec");
			a.value = "";
			var a = document.getElementById("longitudeDeg");
			a.value = "";
			var a = document.getElementById("longitudeMin");
			a.value = "";
			var a = document.getElementById("longitudeSec");
			a.value = "";
		}
		var d = document.getElementById("dateObserved");
		if (d.value == "") {
			var today = new Date();
			var dt = today.getMonth()+"/"+today.getDate()+"/"+today.getFullYear();
			d.value = dt;
		}
		e.style.visibility = "visible";
	}
}

function closeForm() {
	var resp = confirm("Are you sure you want to cancel this submission? Click OK to close the report form without submitting the data or click cancel to continue with submitting this report.")
	if (resp == true) {
		var e = document.getElementById("submitSite");
		e.style.visibility = "hidden";
		map.removeOverlay(newMarker);
	}
}	
//-->
</script>
<!-- InstanceEndEditable -->
</head>
<body>
<div class="innercontainer">
<!-- start of header -->
<div id="header" class="headerDIV">
<img src="https://wpwa.org/graphics/header_TL.gif" id="headerTL" alt="">
<img src="https://wpwa.org/graphics/header_TR.gif" id="headerTR" alt="">
<div class="headerDIVtext">
<p class="headerTextMain">Wood-Pawcatuck Watershed Association</p>
<p class="headerTextSub">Our mission is to preserve and protect the lands and waters of</p>
<p class="headerTextSub">the Wood-Pawcatuck watershed for natural and human communities</p>
</div>
<div class="menuDIV">
  <ul id="nav">
    
      <!-- Home  -->
    <li class="menuItem" style="left:10px;"><a href="index.php.html" style="width:5em;">Home</a> </li>
      <!-- About Us  -->
    <li class="menuItem" style="left:85px;* margin-top:9px;"><a href="aboutwpwa.htm" onMouseOver="swapImage('menu_about','','https://wpwa.org/graphics/downArrowRO.gif',1)" onMouseOut=" swapImgRestore()" style="width:7em;">About Us<img src="https://wpwa.org/graphics/downArrow.gif" alt="" width="10" height="8" name="menu_about"></a>
        <ul class="ddmenu" style="width:9em;">
          <li class="ddmenuItem" style="margin-top:14px;"><a href="aboutwpwa.htm" style="width:8em;">Overview</a></li>
          <li class="ddmenuItem"><a href="history.htm" style="width:8em;">History </a></li>
          <li class="ddmenuItem"><a href="staff.htm" style="width:8em;">Our Staff</a></li>
          <li class="ddmenuItem"><a href="board.htm" style="width:8em;">Our Board</a></li>
          <li class="ddmenuItem"><a href="funders.htm" style="width:8em;">Our Funders</a></li>
          <li class="ddmenuItem"><a href="newsletters.php.html" style="width:8em;"> Newsletter</a></li>
          <li class="ddmenuItem"><a href="press.php.html" style="width:8em;">Press</a></li>
          <li class="ddmenuItem"><a href="annualReport.php.html" style="width:8em;">Annual Reports</a></li>
        </ul>
    </li>
      <!-- The Watershed  -->
    <li class="menuItem" style="left:188px;* margin-top:9px;"><a href="waterOverview.htm" onMouseOver="swapImage('menu_watershed','','https://wpwa.org/graphics/downArrowRO.gif',1)" onMouseOut=" swapImgRestore()" style="width:10em;">The Watershed<img src="https://wpwa.org/graphics/downArrow.gif" alt="" width="10" height="8" name="menu_watershed"></a>
        <ul class="ddmenu">
          <li class="ddmenuItem" style="margin-top:14px;"><a href="waterOverview.htm">Overview</a></li>
          <li class="ddmenuItem"><a href="gallery.php.html">Photo Gallery</a></li>
          <li class="ddmenuItem"><a href="reports.php.html">Studies &amp; Reports</a></li>
          <li class="ddmenuItem"><a href="adapting_watershed.php.html">Climate Change</a></li>
         <li class="ddmenuItem"><a onMouseOver="swapImage('menu_education','','https://wpwa.org/graphics/rightArrowRO.gif',1)" onMouseOut="swapImgRestore()"><img src="https://wpwa.org/graphics/rightArrow.gif" alt="" width="8" height="10" name="menu_education">Education</a>
             <ul class="ddmenu2">
                <li class="ddmenuItem2" style="margin-top:7px;"><a href="education.htm">Education Programs</a></li>
                <li class="ddmenuItem2"><a href="education-awesome.htm">AWESome Ciriculum</a></li>
                <li class="ddmenuItem2"><a href="education-science.htm">Watershed Science Course</a></li>
             </ul></li>
          <li class="ddmenuItem"><a href="kids_programs.html">Kids' Programs</a></li>
          <li class="ddmenuItem"><a href="paddling_maps.htm">River Route Maps</a></li>
          <li class="ddmenuItem"><a href="river.php.html">River Conditions</a></li>
          <li class="ddmenuItem"><a href="waterQuality.htm">Water Quality Data</a></li>
          <li class="ddmenuItem"><a href="fishing.htm">Fishing in the Watershed</a></li>
        </ul>
    </li>
      <!-- Events  -->
    <li class="menuItem" style="left:322px;"><a href="events.php.html" style="width:5em;">Programs</a> </li>
    <!--<li class="menuItem" style="left:276px;* margin-top:9px;"><a href="../events.php" onMouseOver="swapImage('menu_events','','https://wpwa.org/graphics/downArrowRO.gif',1)" onMouseOut=" swapImgRestore()" style="width:6em;">Events<img src="../https://wpwa.org/graphics/downArrow.gif" alt="" width="10" height="8" name="menu_events"></a>
        <ul class="ddmenu" style="width:10em;">
          <li class="ddmenuItem" style="margin-top:14px;"><a href="../events.php" style="width:9em;">Events Calendar</a></li>
          <li class="ddmenuItem"><a href="../tripJournal.php" style="width:9em;"> Trip Journal</a></li>
        </ul>
    </li>-->
      <!-- Support the Cause  -->
    <!-- Support the Cause  -->
    <li class="menuItem" style="left:416px;"><a href="membership2.php.html" style="width:10em;">Support the Cause</a> 
    <ul class="ddmenu">
          <li class="ddmenuItem" style="margin-top:14px;"><a href="membership2.php.html">Join/Renew/Gift</a></li>
          <li class="ddmenuItem"><a href="donate.php.html">Donate</a></li>
          <li class="ddmenuItem"><a href="volunteer.php.html">Volunteer</a></li>
    	</ul></li>
      <!-- Volunteer  -->
    <li class="menuItem" style="left:559px;"><a href="volunteer.php.html" style="width:6em;">Volunteer</a> </li>
      <!-- Blog  
    <li class="menuItem" style="left:556px;"><a href="http://wpwariverwatch.blogspot.com" style="width:4em;">Blog</a> </li>-->
      <!-- Shop
    <li class="menuItem" style="left:601px;"><a href="../shop.php" style="width:4em;">Shop</a> </li>  -->
      <!-- Links -->
    <li class="menuItem" style="left:649px;"><a href="links.htm" style="width:4em;">Links</a> </li>
      <!-- Contact Us  -->
    <li class="menuItem" style="left:715px;"><a href="contact.htm" style="width:6em;">Contact Us</a> </li>
      
  </ul>
  </div>
</div>

<div id="home" class="mainDIV"><!-- InstanceBeginEditable name="innerBody" -->
  <h1>River Conditions Report:</h1>
  <p>This map shows selected river conditions that may be useful to paddlers and other users of the river and allows you to tell us about conditions you encountered that you think other people should know about. The data presented here are largely collected by volunteers including people like you who paddle the river and provide reports on conditions. So you should not assume that the information presented here is current or comprehensive. We highly recommend that get a copy of our <a href="shop.php.html">River Guide</a> before paddling in the watershed, or you can <a href="events.php.html">come with us</a> on one of our paddling outings and leave the planning and organization to us! For information on put-ins and take-outs you can also visit the <a href="http://www.exploreri.org">ExploreRI.org website</a>.</p>
  <div id="sidebar">
<div id="key">
<div class="keyItem">
<p style="font-size:1.4em;padding-top:14px">KEY:</p>
</div>
<div class="keyItem">
<img src="https://wpwa.org/maps/icons/dam_key.gif" alt="Dam Icon" width="24" height="24"><p>Dam</p>
</div>
<div class="keyItem">
<img src="https://wpwa.org/maps/icons/obstruction_key.gif" alt="Obstruction Icon" width="24" height="24"><p>Obstruction or Other Hazard</p>
</div>
<div class="keyItem">
<img src="https://wpwa.org/maps/icons/riverlevel_key.gif" alt="River Level Icon" width="24" height="24"><p>River Level Information</p>
</div>
<div class="keyItem">
<img src="https://wpwa.org/maps/icons/information_key.gif" alt="Information Icon" width="24" height="24"><p>Source of Information</p>
</div>
</div>
</div>
<div style="clear:both;position:relative;"><div id="submitSite" style="left:200px;"><div id="subhandle"><h2>Submit a River Report</h2></div><form enctype="multipart/form-data" action="river.php?status=newReport" method="POST">
<table class="datatable" style="width:98%;border:none;margin:0 8px 0 3px;">
<tr>
<td width="87px;"><span class="dataLabel" style="vertical-align:top;line-height:21px;">Latitude (N):<br>Longitude (W):</span></td>
<td><div id="degminsec">
<input name="latitudeDeg" id="latitudeDeg" type="text" size="2" maxlength="2" value="">&deg; <input name="latitudeMin" id="latitudeMin" type="text" size="2" maxlength="2" value="">' <input name="latitudeSec" id="latitudeSec" type="text" size="5" maxlength="5" value="">&quot;<br><input name="longitudeDeg" id="longitudeDeg" type="text" size="2" maxlength="2" value="">&deg; <input name="longitudeMin" id="longitudeMin" type="text" size="2" maxlength="2" value="">' <input name="longitudeSec" id="longitudeSec" type="text" size="5" maxlength="5" value="">&quot;</div></td>
</tr>
<tr>
<td style="vertical-align:text-bottom;"><div style="margin-top:3px;"><span class="dataLabel">Subject/Title:</span></div></td>
<td><input name="itemTitle" type="text" id="itemTitle" size="41" maxlength="64" value=""><br>e.g., "Large Blowdown Across River"</td>
</tr>
<tr>
<td style="vertical-align:top;"><span class="dataLabel">Description: </span></td>
<td><textarea name="itemDescription" id="itemDescription" cols="31" rows="5"></textarea></td>
</tr>
<tr>
<td><span class="dataLabel">Date Observed:</span></td>
<td><input name="dateObserved" type="text" id="dateObserved" size="12" maxlength="10" value="04/8/2018"> (m/d/yyyy)</td>
</tr>
<tr>
<td colspan="2">You do not need to provide any contact information but it helps us if we can contact you if we need more information. Thanks!</td>
</tr>
<tr>
<td><span class="dataLabel">Your Name:</span></td>
<td><input name="repName" type="text" id="repName" size="24" maxlength="64" value=""></td>
</tr>
<tr>
<td><span class="dataLabel">Email Address:</span></td>
<td><input name="email" type="text" id="email" size="16" maxlength="64" value=""><span class="dataLabel" style="vertical-align:baseline;">&nbsp;&nbsp;&nbsp;Phone:</span> <input name="phone" type="text" id="phone" size="12" maxlength="64" value=""></td>
</tr>
<tr>
<td><input type="button" onclick="closeForm()" name="cancel" id="cancel" value="Cancel"></td>
<td><div style="float:right;"><input type="submit" value="Submit"></div></td>
</tr>
</table>
</form>
</div></div>
<div id="mapblock"></div>
<p style="margin-bottom:130px;">To report river conditions (such as a large blow-down that is making canoe and kayak passage difficult) that you have observed on the river, hold down the Alt key and <strong>right</strong> click on the map at the location where you observed something and the follow the prompts to enter a report. If you have the GPS coordinates (latitude and longitude) for the location you can also <a href="javascript:;" onClick="startReport(300,false,null,null)">click here</a> and enter the latitude and longitude manually. Once you submit a report we will review it and if appropriate add it to the map so that others will know about the situation or condition. Thanks!</p>
<script type=\"text/javascript\">
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAl4oq90Qmcjd3d7dX1tDv-F0ua5SZsK0&amp;sensor=false" type="text/javascript"></script><script type="text/javascript"><!--
var aPark = document.getElementById("submitSite");
var hndl = document.getElementById("subhandle");
Drag.init(hndl, aPark, -5, 380, -200, 500);
function initialize() {
var myOptions = {
center: new google.maps.LatLng(41.483228,-71.652117), zoom:11, mapTypeId: google.maps.MapTypeId.TERRAIN,
mapTypeControlOptions: {
mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.TERRAIN]
}
};
window.map = new google.maps.Map(document.getElementById("mapblock"), myOptions);
var star = new google.maps.MarkerImage('https://wpwa.org/maps/icons/star.gif',
new google.maps.Size(20, 24),
new google.maps.Point(0,0),
new google.maps.Point(10, 12));
var dam = new google.maps.MarkerImage('https://wpwa.org/maps/icons/dam.gif',
new google.maps.Size(20, 24),
new google.maps.Point(0,0),
new google.maps.Point(10, 12));
var obstruction = new google.maps.MarkerImage('https://wpwa.org/maps/icons/obstruction.gif',
new google.maps.Size(20, 24),
new google.maps.Point(0,0),
new google.maps.Point(10, 12));
var riverlevel = new google.maps.MarkerImage('https://wpwa.org/maps/icons/riverlevel.gif',
new google.maps.Size(20, 24),
new google.maps.Point(0,0),
new google.maps.Point(10, 12));
var information = new google.maps.MarkerImage('https://wpwa.org/maps/icons/information.gif',
new google.maps.Size(20, 24),
new google.maps.Point(0,0),
new google.maps.Point(10, 12));
var other = new google.maps.MarkerImage('https://wpwa.org/maps/icons/other.gif',
new google.maps.Size(20, 24),
new google.maps.Point(0,0),
new google.maps.Point(10, 12));
var shadow = new google.maps.MarkerImage('https://wpwa.org/maps/icons/shadow.png',
new google.maps.Size(31, 24),
new google.maps.Point(0,0),
new google.maps.Point(10, 12));
var shape = {
coord: [0, 0, 0, 24, 20, 24, 20 , 0],
type: 'poly'
};
google.maps.event.addListener(map, "rightclick", function(event) {
py = event.pixel.y;latx = event.latLng.lat();lngy = event.latLng.lng();startReport(py, true, latx, lngy);});
var myLatLng = new google.maps.LatLng(41.38097,-71.8325);
createPushpin (map, myLatLng, shadow, riverlevel, shape, 'USGS River Gauge on the Pawcatuck River at Westerly', '<div class=\"mapLabel\"><p class=\"title\">USGS River Gauge on the Pawcatuck River at Westerly<\/p><p>41º22\'51.49\" N, 71º49\'57\" W<\/p> <p><a  href=\"javascript:;\" onClick=\"openLink(\'http://waterdata.usgs.gov/nwis/uv?01118500\')\">USGS River Gauge Website<\/a><\/p><\/div>');
var myLatLng = new google.maps.LatLng(41.49806,-71.71694);
createPushpin (map, myLatLng, shadow, riverlevel, shape, 'USGS River Gauge on the Wood River at Hope Valley', '<div class=\"mapLabel\"><p class=\"title\">USGS River Gauge on the Wood River at Hope Valley<\/p><p>41º29\'53.02\" N, 71º43\'0.98\" W<\/p> <p><a  href=\"javascript:;\" onClick=\"openLink(\'http://waterdata.usgs.gov/nwis/uv?01118000\')\">USGS River Gauge Website<\/a><\/p><\/div>');
var myLatLng = new google.maps.LatLng(41.57389,-71.72111);
createPushpin (map, myLatLng, shadow, riverlevel, shape, 'USGS River Gauge on the Wood River near Arcadia', '<div class=\"mapLabel\"><p class=\"title\">USGS River Gauge on the Wood River near Arcadia<\/p><p>41º34\'26\" N, 71º43\'16\" W<\/p> <p><a  href=\"javascript:;\" onClick=\"openLink(\'http://waterdata.usgs.gov/nwis/uv?01117800\')\">USGS River Gauge Website<\/a><\/p><\/div>');
var myLatLng = new google.maps.LatLng(41.44439,-71.68167);
createPushpin (map, myLatLng, shadow, riverlevel, shape, 'USGS River Gauge on the Pawcatuck River at Wood River Junction', '<div class=\"mapLabel\"><p class=\"title\">USGS River Gauge on the Pawcatuck River at Wood River Junction<\/p><p>41º26\'39.8\" N, 71º40\'54.01\" W<\/p> <p><a  href=\"javascript:;\" onClick=\"openLink(\'http://waterdata.usgs.gov/nwis/uv?01117500\')\">USGS River Gauge Website<\/a><\/p><\/div>');
var myLatLng = new google.maps.LatLng(41.49228,-71.62805);
createPushpin (map, myLatLng, shadow, riverlevel, shape, 'USGS River Gauge on the Beaver River near Usquepaug', '<div class=\"mapLabel\"><p class=\"title\">USGS River Gauge on the Beaver River near Usquepaug<\/p><p>41º29\'32.21\" N, 71º37\'40.98\" W<\/p> <p><a  href=\"javascript:;\" onClick=\"openLink(\'http://waterdata.usgs.gov/nwis/uv?01117468\')\">USGS River Gauge Website<\/a><\/p><\/div>');
var myLatLng = new google.maps.LatLng(41.44611,-71.62167);
createPushpin (map, myLatLng, shadow, riverlevel, shape, 'USGS River Gauge on the Pawcatuck River at Kenyon', '<div class=\"mapLabel\"><p class=\"title\">USGS River Gauge on the Pawcatuck River at Kenyon<\/p><p>41º26\'46\" N, 71º37\'18.01\" W<\/p> <p><a  href=\"javascript:;\" onClick=\"openLink(\'http://waterdata.usgs.gov/nwis/uv?01117430\')\">USGS River Gauge Website<\/a><\/p><\/div>');
var myLatLng = new google.maps.LatLng(41.47667,-71.60528);
createPushpin (map, myLatLng, shadow, riverlevel, shape, 'USGS River Gauge on the Usquepaug River near Usquepaug', '<div class=\"mapLabel\"><p class=\"title\">USGS River Gauge on the Usquepaug River near Usquepaug<\/p><p>41º28\'36.01\" N, 71º36\'19.01\" W<\/p> <p><a  href=\"javascript:;\" onClick=\"openLink(\'http://waterdata.usgs.gov/nwis/uv?01117420\')\">USGS River Gauge Website<\/a><\/p><\/div>');
var myLatLng = new google.maps.LatLng(41.53889,-71.56917);
createPushpin (map, myLatLng, shadow, riverlevel, shape, 'USGS River Gauge on the Queen River at Liberty Road', '<div class=\"mapLabel\"><p class=\"title\">USGS River Gauge on the Queen River at Liberty Road<\/p><p>41º32\'20\" N, 71º34\'9.01\" W<\/p> <p><a  href=\"javascript:;\" onClick=\"openLink(\'http://waterdata.usgs.gov/nwis/uv?01117370\')\">USGS River Gauge Website<\/a><\/p><\/div>');
var myLatLng = new google.maps.LatLng(41.48222,-71.55167);
createPushpin (map, myLatLng, shadow, riverlevel, shape, 'USGS River Gauge on the Chipuxet River at West Kingston', '<div class=\"mapLabel\"><p class=\"title\">USGS River Gauge on the Chipuxet River at West Kingston<\/p><p>41º28\'55.99\" N, 71º33\'6.01\" W<\/p> <p><a  href=\"javascript:;\" onClick=\"openLink(\'http://waterdata.usgs.gov/nwis/uv?01117350\')\">USGS River Gauge Website<\/a><\/p><\/div>');
var myLatLng = new google.maps.LatLng(41.45848,-71.66414);
createPushpin (map, myLatLng, shadow, information, shape, 'The \"Mousehole\"', '<div class=\"mapLabel\"><p class=\"title\">The \"Mousehole\"<\/p><p>41º27\'30.53\" N, 71º39\'50.9\" W<\/p><p>Below Route 112 there are 200 yards of Class II whitewater that cannot be portaged. To avoid these rapids take out on the right before the bridge.</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.54062,-71.69608);
createPushpin (map, myLatLng, shadow, dam, shape, 'Barberville Dam', '<div class=\"mapLabel\"><p class=\"title\">Barberville Dam<\/p><p>41º32\'26.23\" N, 71º41\'45.89\" W<\/p><p>Portage on river right</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.51583,-71.70333);
createPushpin (map, myLatLng, shadow, dam, shape, 'Wyoming Dam', '<div class=\"mapLabel\"><p class=\"title\">Wyoming Dam<\/p><p>41º30\'56.99\" N, 71º42\'11.99\" W<\/p><p>Take out on the left</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.50313,-71.71637);
createPushpin (map, myLatLng, shadow, dam, shape, 'Hope Valley Dam', '<div class=\"mapLabel\"><p class=\"title\">Hope Valley Dam<\/p><p>41º30\'11.27\" N, 71º42\'58.93\" W<\/p><p>Take out on the right, carry across the bridge and put in on the left.</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.49809,-71.71557);
createPushpin (map, myLatLng, shadow, dam, shape, 'Gauging Station Dam', '<div class=\"mapLabel\"><p class=\"title\">Gauging Station Dam<\/p><p>41º29\'53.12\" N, 71º42\'56.05\" W<\/p><p>This low, 6\" dam can usually be run</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.45997,-71.71897);
createPushpin (map, myLatLng, shadow, dam, shape, 'Woodville Dam', '<div class=\"mapLabel\"><p class=\"title\">Woodville Dam<\/p><p>41º27\'35.89\" N, 71º43\'8.29\" W<\/p><p>Take out on river right, portage across the bridge and put in on river left below the dam.</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.43788,-71.72228);
createPushpin (map, myLatLng, shadow, dam, shape, 'Alton Dam', '<div class=\"mapLabel\"><p class=\"title\">Alton Dam<\/p><p>41º26\'16.37\" N, 71º43\'20.21\" W<\/p><p>Take out on the right, carry across the (busy) road and put in below the dam and road on river right. </p> <\/div>');
var myLatLng = new google.maps.LatLng(41.5412,-71.69653);
createPushpin (map, myLatLng, shadow, information, shape, 'WPWA Office', '<div class=\"mapLabel\"><p class=\"title\">WPWA Office<\/p><p>41º32\'28.32\" N, 71º41\'47.51\" W<\/p><p>The WPWA office on river right, just above the Barberville Dam has completed renovations.  Stop in and visit us.</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.44578,-71.62574);
createPushpin (map, myLatLng, shadow, information, shape, 'Former Kenyon Dam', '<div class=\"mapLabel\"><p class=\"title\">Former Kenyon Dam<\/p><p>41º26\'44.81\" N, 71º37\'32.66\" W<\/p><p>The dam has been replaced with a tiered rock ramp, making a short class II rapids for paddlers, passable at high water.  Aim for the middle cut in the new dam; follow the water flow between the boulders to navigate down the ramp.  Or portage to the left.</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.44765,-71.6363);
createPushpin (map, myLatLng, shadow, dam, shape, 'Shannock Horseshoe Dam', '<div class=\"mapLabel\"><p class=\"title\">Shannock Horseshoe Dam<\/p><p>41º26\'51.54\" N, 71º38\'10.68\" W<\/p><p>Take out on the left (use caution as the take out is right at the lip of the dam). Cross Shannock Road and put in on the left bank below an old parking area.</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.44516,-71.68108);
createPushpin (map, myLatLng, shadow, dam, shape, 'Jay Cronan River Access, USGS Dam', '<div class=\"mapLabel\"><p class=\"title\">Jay Cronan River Access, USGS Dam<\/p><p>41º26\'42.58\" N, 71º40\'51.89\" W<\/p><p>This low dam can sometimes be run at high water.  Best to take out on the right and portage around the dam.</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.40752,-71.74942);
createPushpin (map, myLatLng, shadow, dam, shape, 'Bradford Dam', '<div class=\"mapLabel\"><p class=\"title\">Bradford Dam<\/p><p>41º24\'27.07\" N, 71º44\'57.91\" W<\/p><p>Portage on the right along the fish ladder.</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.41703,-71.72924);
createPushpin (map, myLatLng, shadow, dam, shape, 'Burdickville Dam', '<div class=\"mapLabel\"><p class=\"title\">Burdickville Dam<\/p><p>41º25\'1.31\" N, 71º43\'45.26\" W<\/p><p>Take out up the steep bank on river right, above the dam, or to portage lift over the left side of the dam, or run the dam in the fast water right of the center \"island.\" Only at high water should the dam be run down the middle.</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.41404,-71.79698);
createPushpin (map, myLatLng, shadow, dam, shape, 'Potter Hill Dam', '<div class=\"mapLabel\"><p class=\"title\">Potter Hill Dam<\/p><p>41º24\'50.54\" N, 71º47\'49.13\" W<\/p><p>Take out on river right BEFORE the bridge, up the short steep bank to River Road. To portage around the dam follow River Road and Potter Hill Road past the dam then turn left on Laurel Street and put in down the bank from Laurel Street.</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.44229,-71.59109);
createPushpin (map, myLatLng, shadow, information, shape, 'Tough section ahead', '<div class=\"mapLabel\"><p class=\"title\">Tough section ahead<\/p><p>41º26\'32.24\" N, 71º35\'27.92\" W<\/p><p>This section is minimally cleared of blowdowns and has some trees below water level that need shimmying to get over. Multiple beaver dams also persist between Worden Pond and Rte 2.  Poison ivy is bountiful along the many curves. </p> <\/div>');
var myLatLng = new google.maps.LatLng(41.45196,-71.61228);
createPushpin (map, myLatLng, shadow, obstruction, shape, 'Beaver Dam', '<div class=\"mapLabel\"><p class=\"title\">Beaver Dam<\/p><p>41º27\'7.06\" N, 71º36\'44.21\" W<\/p><p>Beaver dam fully obstructing the river. At high water kayaks and canoes can get over. Lower water levels may prove more difficult.</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.44833,-71.64556);
createPushpin (map, myLatLng, shadow, obstruction, shape, 'Blowdown Across River', '<div class=\"mapLabel\"><p class=\"title\">Blowdown Across River<\/p><p>41º26\'53.99\" N, 71º38\'44.02\" W<\/p><p>Just after going under the Shannock Village road bridge, there is a blowdown across the river. Challenging in high water to pass by.</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.39528,-71.77445);
createPushpin (map, myLatLng, shadow, obstruction, shape, 'Large blowdown across river', '<div class=\"mapLabel\"><p class=\"title\">Large blowdown across river<\/p><p>41º23\'43.01\" N, 71º46\'28.02\" W<\/p><p>Large tree and log blocking river. Portage during high water on left bank of river was difficult but doable. </p> <\/div>');
var myLatLng = new google.maps.LatLng(41.44611,-71.68111);
createPushpin (map, myLatLng, shadow, obstruction, shape, 'Large Blowdown Accross River', '<div class=\"mapLabel\"><p class=\"title\">Large Blowdown Accross River<\/p><p>41º26\'46\" N, 71º40\'52\" W<\/p><p>A tree is blocking the river in high water conditions.  Portage may not be possible.  Use caution navigating through or over the tree which will be removed by WPWA late this summer.</p> <\/div>');
var myLatLng = new google.maps.LatLng(41.40784,-71.75158);
createPushpin (map, myLatLng, shadow, information, shape, 'FISH PASSAGE CONSTRUCTION ', '<div class=\"mapLabel\"><p class=\"title\">FISH PASSAGE CONSTRUCTION <\/p><p>41º24\'28.22\" N, 71º45\'5.69\" W<\/p><p>From July to Nov 2017 Bradford Dam will be replaced by rock ramps for fish passage.  During construction it will be difficult to portage around the area. </p> <\/div>');
}
//}

google.maps.event.addDomListener(window, 'load', initialize);

var curr_infw;

function createPushpin (map, myLatLng, shadow, image, shape, siteName, infoStr) {
	
	var infowindow = new google.maps.InfoWindow({
		content: infoStr
	});
	
	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		shadow: shadow,
		icon: image,
		shape: shape,
		title: siteName
	});
	
    google.maps.event.addListener(marker, 'click', function() {
        if (curr_infw) {
            curr_infw.close();;
        }
        infowindow.open(map,marker);
            curr_infw = infowindow;
	});
};

//-->
</script>

<!-- InstanceEndEditable --></div>

<!-- start of footer -->
<div id="footer" class="footerDIV">
	<div class="footerGraphic" style="left:0;bottom:0;position:absolute;float:left;"><img src="https://wpwa.org/graphics/footerEndLeft.gif" alt="" width="9" height="31"></div>
    <div class="footerGraphic" style="right:0;bottom:0;position:absolute;float:right;"><img src="https://wpwa.org/graphics/footerEndRight.gif" alt="" width="9" height="31"></div>
    <div class="footerText">
      <div style="float:left;">Wood-Pawcatuck Watershed Association <img src="https://wpwa.org/graphics/dot.gif" alt="" width="3" height="9"> 203 Arcadia Road <img src="https://wpwa.org/graphics/dot.gif" alt="" width="3" height="9"> Hope Valley, RI 02832</div>
      <div style="float:right;"><a href="mailto:info@wpwa.org">info@wpwa.org</a> <img src="https://wpwa.org/graphics/dot.gif" alt="" width="3" height="9"> Telephone: (401) 539-9017</div>
</div>
</div>  
</div>
<div class="innercontainer">
  <div class="extraMenu"> <a href="support.php.html">Donate</a><a href="search.php.html">Search Site</a><a href="cart.php.html">Shopping Cart</a><a href="privacy.htm">Privacy Policy</a></div>
</div>

<script src='https://www.google-analytics.com/ga.js' type='text/javascript'></script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-12593486-1");
pageTracker._trackPageview();
} catch(err) {}
</script>

</body>
<!-- InstanceEnd --></html>
