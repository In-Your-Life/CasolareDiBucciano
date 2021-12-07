<?php session_start();?>
<?php

if (($_SERVER["HTTP_HOST"]=="www.casolaredibucciano.it") or ($_SERVER["HTTP_HOST"]=="casolaredibucciano.it")) {
	header("HTTP/1.1 301 Moved Permanently"); 
header("Location: http://www.casolaredibucciano.eu/en/policy_en.php"); 



}
$idl = "_eng";
$idp = 18;
include_once('../_ext/include/allarray.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Policy Cookie casolare di bucciano</title>
<meta name="Keywords" content="agriturismo, toscana, san gimignano, siena, agriturismi, ristorante, piscina, camere, romantico, charme, mezza pensione, pensione completa" />
<meta name="robots" content="noindex">
<meta name="Description" content="Policy Cookie casolare di bucciano" />
<meta name="language" content="it" /> 
<meta name="author" content="Designed by InYourLife- http://www.inyourlife.info" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../_ext/css/layout.css" />
<link rel="shortcut icon" href="../favicon.ico"/>
<script type="text/javascript" src="../_ext/js/jquery.min.js"></script>

<script type="text/javascript" src="../_ext/js/preferiti.js"></script>

<link rel="stylesheet" href="../_ext/css/jquery.spotslider_gallery.css" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


<script src="jquery.spotslider_1.js"  type="text/javascript"></script>


<script type="text/javascript">
$(document).ready(function() {
	newsSlider_1();
});
</script>




<!-- Add jQuery library -->
	<script type="text/javascript" src="../_ext/lib/jquery-1.8.0.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="../_ext/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	







<script type="text/javascript">
<!--
$(document).ready(function () {
      $('#nav li, #nav_2 li, #nav_3 li, #nav_4 li, #nav_5 li').hover(
        function () {
            //mostra sottomenu
            $('ul', this).stop(true, true).delay(50).slideDown(100);
 
        }, 
        function () {
            //nascondi sottomenu
            $('ul', this).stop(true, true).slideUp(200);        
        }
    );
	
	
});

$("a").mouseover(function(){
  $("a").css("font-weight","bold");
});

-->
</script>



<script type="text/javascript">
<!--
$(document).ready(function () {
      $("li a.select").mouseover(function(){
  $(this).css("font-weight","bold");
});
      $("li a.select").mouseout(function(){
  $(this).css("font-weight","100");
});
	
});


-->
</script>


<script src="../_ext/js/datetimepicker_css.js" type="text/javascript"></script>


<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += nm+' è un campo obbligatorio.\n'; }
  } if (errors) alert('Attenzione:\n'+errors);
  document.MM_returnValue = (errors == '');
}

function MM_displayStatusMsg(msgStr) { //v1.0
  status=msgStr;
  document.MM_returnValue = true;
}

function abilita() {
	if(document.getElementById('privacy').checked) document.getElementById('invia').disabled=false;
	else document.getElementById('invia').disabled=true;
	}


//-->
</script>


<!--[if lte IE 7]> 
<style type="text/css">
.headerimg {top:20px; position:absolute;}
</style>
<![endif]-->

<link rel="stylesheet" href="../_ext/css/colorbox.css" />
	
		<script src="../_ext/js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the ColorBox event to elements
				$(".fancybox").colorbox({rel:'fancybox'});
	
		
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>

<link type="text/css" href="../_ext/css/horizontal-box-style.css" rel="stylesheet" />
	<script type="text/javascript" src="http://www.simplebooking.it/search-box-script.axd?IDA=1937"></script>
		<script type="text/javascript">
		var SBParameters = {
			CodLang: 'IT'
		};
	</script>
<link rel="stylesheet" type="text/css" href="../_ext/css/layout.css" />
</head>

<body>

<div id="fb-root"></div>
<script type="text/javascript">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1&amp;appId=259098687437182";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="striscia_top">
<h1><?php include_once('../_ext/include/h1.php'); ?></h1>
</div>

<div id="container_large">

<div id="container">

<div id="menu_alto">
<?php include_once('../_ext/include/menu_alto.php'); ?>
</div>

<div id="logo">
<?php include_once('../_ext/include/logo.php'); ?>
</div>

<div id="preferiti">
<?php include_once('../_ext/include/preferiti.php'); ?>
</div>

</div>


<div id="header_1" style="background-image:url(../_ext/img/agriturismo_bambini_toscana_10.jpg);">
	<!-- jQuery handles to place the header background images -->
	
	<!-- Top navigation on top of the images -->
</div>

</div>


<div id="box_int">

<div id="gallery_slider">
<?php include_once('../_ext/include/foto_gallery_contatti.php'); ?>
</div>

<div id="menu_box">
<?php include_once('../_ext/include/menu_box.php'); ?>
</div>
</div>

<div class="clear_float" style="height:10px;"></div>


<div id="simple_booking">
<?php include_once('../_ext/include/simple_booking.php'); ?>
</div>



<div id="content_wide">

<div id="content">



<div id="home_sx">

<div id="titolo">
Cookie Policy
</div>

<div id="policy" style="background-color:#fff; width:100%; max-height:500px; overflow: scroll; padding: 4px;
    border:1px solid #EEE; border-right:0 solid;">
<br><br>
Our website (www.casolaredibucciano.it - www.casolaredibucciano.eu) uses cookies to improve the online experience for all our users.
<br>
Within our Cookie Policy we describe what cookies are and how they are used in our website.
Please see our Privacy Policy for more information on how we use the personal data of users who connect to our websites and on the importance with which we consider the protection of your privacy.
<br>
Our web site and services contained in it cannot be used without the presence of cookies and therefore to use our Web platform, you consent to the use of cookies in accordance with the terms of that policy.
<br><br><br>

<strong>What are cookies?</strong>
<br><br>
Cookies are text files that contain text strings of small size sent from a Web server to a client (usually a browser) and then sent back by the client to the server (without changes) each time the client accesses the same portion the of the same web domain.
Cookies do not contain any information that can directly identify a user, however, the personal information stored on our site can be linked, on our part, to the information stored in the cookie and obtained by the cookie.
<br><br><br>

<strong>Cookie Usage</strong>
<br><br>
The information we obtain through use of our Cookies are used for the following purposes:
<ul>
<li>To recognize your computer when you visit our website</li>
<li>To improve the usability of the Web site</li>
<li>To analyze the use of the Web site</li>
<li>To administer this website</li>
<li>To personalize our website (with targeted messages that may be of interest to the user)</<li>To keep track of the user's navigation during his visit.</li>
</ul>
<br><br>

<strong>Is the enabling of cookies safe?</strong>
<br><br>
Yes. Cookies contain only small amounts of data and cannot work independently. We recommend that you configure your Web browser in order to accept cookies from our website.

<br><br><br>



<strong>How can you change the settings for cookies?</strong>
<br><br>
To change the settings regarding cookies, you must change the settings of the browser you use. Since browsers are updated frequently and the platforms that support them more and more, it is not possible to provide a single guide suitable for all versions of browsers and devices.
However the following links refer to a Google search with the appropriate keywords related to the modification of the Cookie for each major browser. Customize your search by entering the browser version and the platform you use (PC, MAC, iPhone, Android, BlackBerry, etc.).
<ul>
<li>Internet Explorer</li>
<li>Mozilla Firefox</li>
<li>Chrome</li>
<li>Safari</li>
</ul>
<br><br>
<strong>How many types of cookies are there?</strong>
<br><br>
On our website three different types of Cookies are used:
<ul>
<li>Session Cookies: Temporary files that are stored only for the duration of the browsing session on the website. The web browser normally deletes them at closing.</li>

<li>Persistent Cookies: The duration of these files exceeds the browser session (for example, if you log on to a Web site, it acknowledges the user on his subsequent visit). The Persistent cookies enable features such as welcomes, maintenance of the items in your cart (in the case of online purchases), recognition of preferences such as languages, colours and so on.</li>

<li>Third-party Cookies: while browsing our Web site, the user may transmit Cookies to third parties not related to our company. If you access a Web page with embedded content, such as YouTube, Cookies can be transmitted to and from that site. We have no control over these cookies, we encourage you to consult the Web sites of third parties for further information regarding the cookies they use and how to handle them.</li>
</ul>
<br><br>

<strong>Cookies on our website</strong>
<br><br>
The following is a list of cookies used by our website, with an explanation of the individual use:
<ul>
<li>Owner type cookie use</li>
<li>This website temporary session</li>
<li>Persistent use Google Statistics</li>
<li>Persistent Facebook Login</li>
<li>Persistent Twitter Login</li>
<li>Cookie block</li>
</ul>
<br>

All browsers allow you to decline cookies. Since browsers are updated frequently and the platforms that support them more and more, it is not possible to provide a single guide suitable for all versions of browsers and devices.
<br>
Blocking of Cookies, however, can have a negative impact on the usability of many websites.
<br><br><br>

<strong>Deleting Cookies</strong>
<br><br>
You can delete cookies already stored on your computer. Since browsers are updated frequently and the platforms that support them more and more, it is not possible to provide a single guide
suitable for all versions of browsers and devices.
This action can have negative consequences regarding the usability of many websites.
<br><br><br>
<strong>Other technologies on our website</strong>
<br><br>
<em>- Google Analytics</em>
<br>
Google Analytics is a Google analysis tool which helps website and app owners to understand how visitors interact with the content they own. You can use a set of cookies to collect information and generate usage statistics of the website without personal identification of individual visitors by Google.
<br><br>
<em>- Google Maps</em><br>
Google Maps is a service of visualizing maps powered by Google Inc. which greatly improves the user experience on our website. Google Maps, in fact, provides detailed information on the location of a specific commercial establishment or accommodation business in the area.

<br><br>

</div> <!--fine policy-->




<br/><br/>
<h2><?php include_once('../_ext/include/h2.php'); ?></h2>


<div id="social">
<script type="text/javascript" src="../_ext/js/iframe.js"></script>

<div style="float:left; width:160px; margin-top:20px;">
<script type="text/javascript" src="../_ext/js/iframe_1.js"></script>
</div>


<div style="float:left; width:160px; margin-left:30px; margin-top:10px; text-align:center;">
<script type="text/javascript" src="../_ext/js/iframe_2.js"></script>
</div>


<div style="float:left; width:160px; margin-left:30px; margin-top:20px;">
<script type="text/javascript" src="../_ext/js/iframe_3.js"></script>
</div>

</div>

</div>




<div id="home_dx">
<p style="margin-left:50px;">
<a href="http://www.casolaredibucciano.it " title="<?php include('../_ext/include/alt.php'); ?>"><strong>Agriturismo Casolare di Bucciano</strong></a><br/><br/>
Azienda Agricola Signano<br/>Località Racciano-Bucciano<br/>53037 San Gimignano (SI)<br/><br/>Tel +39 0577 940189<br/>Fax +39 0577-906956<br/><br/><a href="mailto:info@casolaredibucciano.com?subject=Richiesta inviata da www.casolaredibucciano.it" title="<?php include('../_ext/include/alt.php'); ?>"><strong>info@casolaredibucciano.com</strong></a></p>

<p style="margin:0;  padding:0; text-align:center; margin-top:20px;">
<img src="../_ext/img/agriturismo_bambini_toscana_40.jpg" alt="<?php include('../_ext/include/alt.php'); ?>" class="img_rounded"/>
</p>
</div>


<div class="clear_float"></div>

</div>
</div>

<div id="indirizzo_wide">
<div id="indirizzo">
<?php include_once('../_ext/include/indirizzo.php'); ?>
</div>
</div>


</body>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/google_analytics.php");?></html>
