<?php
if (($_SERVER["HTTP_HOST"]=="www.casolaredibucciano.eu") or ($_SERVER["HTTP_HOST"]=="casolaredibucciano.eu")) {
	header("HTTP/1.1 301 Moved Permanently"); 
header("Location: http://www.casolaredibucciano.it/it/agriturismo-romantico-toscana_1.php"); 


}
$idl = "_ita";
$idp = 7;
include_once('../_ext/include/allarray.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php
include_once('../_ext/include/title.php'); 
?></title>
<meta name="Keywords" content="agriturismo, toscana, san gimignano, siena, agriturismi, ristorante, piscina, camere, romantico, charme, mezza pensione, pensione completa" />
<meta name="Description" content="<?php include_once('../_ext/include/description.php'); ?>" />

<meta name="language" content="it" /> 
<meta name="author" content="Designed by InYourLife- http://www.inyourlife.info" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../_ext/css/layout.css" />
<link rel="shortcut icon" href="../favicon.ico"/>
<script type="text/javascript" src="../_ext/js/jquery.min.js"></script>

<script type="text/javascript" src="../_ext/js/preferiti.js"></script>

<link rel="stylesheet" href="../_ext/css/jquery.spotslider.css" type="text/css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>




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

<!--[if lte IE 7]> 
<style type="text/css">
#header_1 {height:481px; background-position: center bottom;}
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


<div id="header_1" style="background-image:url(../_ext/img/agriturismo_romantico_toscana_10.jpg);">
	<!-- jQuery handles to place the header background images -->
	
	<!-- Top navigation on top of the images -->
</div>

</div>


<div id="box_int">

<div id="gallery_slider">
<?php include_once('../_ext/include/foto_gallery_gallery_1.php'); ?>
</div>
<br/>
<?php include_once('../_ext/include/menu_box.php'); ?>

</div>

<div class="clear_float" style="height:10px;"></div>


<div id="simple_booking">
<?php include_once('../_ext/include/simple_booking.php'); ?>
</div>


<div id="content_wide">

<div id="content">


<div id="titolo" style="width:970px;">
FOTO GALLERY
</div>


<div id="foto_gallery">
<strong>Esterni</strong><br/><br/>

<a href="../_ext/gallery/agriturismo_romantico_toscana_1_large.jpg" data-fancybox-group="gallery" class="fancybox">
<img src="../_ext/gallery/agriturismo_romantico_toscana_1_large_small.jpg" alt="<?php include_once('../_ext/include/alt.php'); ?>" class="img_rounded_gallery" style="border:none;" />
</a>

<a href="../_ext/gallery/agriturismo_romantico_toscana_2_large.jpg" data-fancybox-group="gallery" class="fancybox">
<img src="../_ext/gallery/agriturismo_romantico_toscana_2_large_small.jpg" alt="<?php include_once('../_ext/include/alt.php'); ?>" class="img_rounded_gallery" style="margin-left:0px; border:none;"/>
</a>

<a href="../_ext/gallery/agriturismo_romantico_toscana_3_large.jpg" data-fancybox-group="gallery" class="fancybox">
<img src="../_ext/gallery/agriturismo_romantico_toscana_3_large_small.jpg" alt="<?php include_once('../_ext/include/alt.php'); ?>" class="img_rounded_gallery" style="margin-left:0px;border:none;"/>
</a>

<a href="../_ext/gallery/agriturismo_romantico_toscana_4_large.jpg" data-fancybox-group="gallery" class="fancybox">
<img src="../_ext/gallery/agriturismo_romantico_toscana_4_large_small.jpg" alt="<?php include_once('../_ext/include/alt.php'); ?>" class="img_rounded_gallery" style="margin-left:0px; border:none;"/>
</a>

<a href="../_ext/gallery/agriturismo_romantico_toscana_5_large.jpg" data-fancybox-group="gallery" class="fancybox">
<img src="../_ext/gallery/agriturismo_romantico_toscana_5_large_small.jpg" alt="<?php include_once('../_ext/include/alt.php'); ?>" class="img_rounded_gallery" style="margin-left:0px; border:none;"/>
</a><br/><br/><br/>

<div class="clear_gallery"></div>

<strong>Interni</strong><br/><br/>

<a href="../_ext/gallery/agriturismo_romantico_toscana_6_large.jpg" data-fancybox-group="gallery" class="fancybox">
<img src="../_ext/gallery/agriturismo_romantico_toscana_6_large_small.jpg" alt="<?php include_once('../_ext/include/alt.php'); ?>" class="img_rounded_gallery" style="border:none;"/>
</a>

<a href="../_ext/gallery/agriturismo_romantico_toscana_7_large.jpg" data-fancybox-group="gallery" class="fancybox">
<img src="../_ext/gallery/agriturismo_romantico_toscana_7_large_small.jpg" alt="<?php include_once('../_ext/include/alt.php'); ?>" class="img_rounded_gallery" style="border:none;"/>
</a>

<a href="../_ext/gallery/agriturismo_romantico_toscana_8_large.jpg" data-fancybox-group="gallery" class="fancybox">
<img src="../_ext/gallery/agriturismo_romantico_toscana_8_large_small.jpg" alt="<?php include_once('../_ext/include/alt.php'); ?>" class="img_rounded_gallery" style="border:none;"/>
</a>

<a href="../_ext/gallery/agriturismo_romantico_toscana_9_large.jpg" data-fancybox-group="gallery" class="fancybox">
<img src="../_ext/gallery/agriturismo_romantico_toscana_9_large_small.jpg" alt="<?php include_once('../_ext/include/alt.php'); ?>" class="img_rounded_gallery" style="border:none;"/>
</a>

<a href="../_ext/gallery/agriturismo_romantico_toscana_10_large.jpg" data-fancybox-group="gallery" class="fancybox">
<img src="../_ext/gallery/agriturismo_romantico_toscana_10_large_small.jpg" alt="<?php include_once('../_ext/include/alt.php'); ?>" class="img_rounded_gallery" style="border:none;"/>
</a><br/><br/><br/>


</div>


<h2><?php include_once('../_ext/include/h2.php'); ?></h2>






<div id="home_sx">

<div id="social">
<script type="text/javascript" src="../_ext/js/iframe.js"></script>

 


<div style="float:left; width:160px; margin-left:30px; margin-top:10px; text-align:center;">
<script type="text/javascript" src="../_ext/js/iframe_2.js"></script>
</div>


<div style="float:left; width:160px; margin-left:30px; margin-top:20px;">
<script type="text/javascript" src="../_ext/js/iframe_3.js"></script>
</div>

</div>

</div>




<div id="home_dx">


<p style="margin:0;  padding:0; text-align:center; margin-top:30px;">
<img src="../_ext/gallery/agriturismo_romantico_toscana_40.jpg" alt="<?php include('../_ext/include/alt.php'); ?>" class="img_rounded"/>
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


<script src="jquery.spotslider.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	newsSlider();
});
</script>


</body>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/google_analytics.php");?></html>
