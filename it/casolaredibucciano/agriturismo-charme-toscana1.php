<?php
$idl = "_ita";
$idp = 5;
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

<link rel="stylesheet" href="../_ext/css/jquery.spotslider_gallery.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>


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


<div id="header_1" style="background-image:url(../_ext/img/agriturismo_charme_toscana_10.jpg);">
	<!-- jQuery handles to place the header background images -->
	
	<!-- Top navigation on top of the images -->
</div>

</div>


<div id="box_int">

<div id="gallery_slider">
<?php include_once('../_ext/include/foto_gallery_camere.php'); ?>
</div>

<?php include_once('../_ext/include/menu_box.php'); ?>

</div>

<div class="clear_float" style="height:10px;"></div>





<div id="content_wide">

<div id="content">

<div id="home_sx">

<div id="titolo">
Agriturismo &raquo; I PREZZI
</div>

<table style="width:60%; margin-left:110px; border:1px solid #897F6C; border-collapse:collapse; line-height:1.5em;">

<tr><th class="center">Sistemazione</th><th class="center">Prezzo</th></tr>

<?php
$prezzi=getPrezzi();
if($prezzi){
foreach($prezzi as $prz){?>

<tr><td class="left"><?php echo ucfirst($prz['Sistemazione']);?></td><td class="center"><strong>$ <?php echo $prz['Prezzo'];?>,00</strong></td></tr>
<?php } } ?>

</table>
<br/><br/>

Ricordiamo inoltre la possibilit?? di aggiungere in alcune camere il terzo letto al prezzo di ??? 26,00 per bambini fino a 11 anni e di ??? 36,00 per gli adulti.
<br/><br/>
Le tariffe includono: prima colazione a buffet, biancheria e asciugamani.<br/><br/><br/>


<strong>Richiesta informazioni</strong><br/><br/>

Per avere inormazioni circa la disponibilit?? dell'Agriturismo potete<ul>
<li>inviare una mail a <a href="mailto:info@casolaredibucciano.com?subject=Richiesta inviata da www.casolaredibucciano.it" style="color:#877F6C;"><strong>info@casolaredibucciano.com</strong></a></li>
<li>chiamare al 0039 0577 940189</li>
<li>inviare un fax al 0039 0577 906 956</li></ul>



<h2><?php include_once('../_ext/include/h2.php'); ?></h2>
<div id="social">


<script type="text/javascript" src="../_ext/js/iframe.js"></script>

 


<div style="float:left; width:160px; margin-left:40px; margin-top:10px;">
<script type="text/javascript" src="../_ext/js/iframe_2.js"></script>
</div>

</div>

</div>




<div id="home_dx">


<p style="margin:0;  padding:0; text-align:center; margin-top:30px;">
<img src="../_ext/img/agriturismo_charme_toscana_100.jpg" alt="<?php include('../_ext/include/alt.php'); ?>" class="img_rounded"/>
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

</html>
