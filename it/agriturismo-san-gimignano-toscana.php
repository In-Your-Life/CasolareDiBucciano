<?php
require_once("../_ext/include/mobile_detect.php");
$detect = new Mobile_Detect;

if($detect->isMobile() && $_GET['m']!="no")
{
  	header("Location: http://m.casolaredibucciano.it/it/dintorni.php");
   	die();
}
if (($_SERVER["HTTP_HOST"]=="www.casolaredibucciano.eu") or ($_SERVER["HTTP_HOST"]=="casolaredibucciano.eu")) {
	header("HTTP/1.1 301 Moved Permanently"); 
header("Location: http://www.casolaredibucciano.it/it/agriturismo-san-gimignano-toscana.php"); 



}
$idl = "_ita";
$idp = 14;
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


<div id="header_1" style="background-image:url(../_ext/img/agriturismi_san_gimignano_toscana_10.jpg);">
	<!-- jQuery handles to place the header background images -->
	
	<!-- Top navigation on top of the images -->
</div>

</div>


<div id="box_int">

<div id="gallery_slider">
<?php include_once('../_ext/include/foto_gallery_san_gimignano.php'); ?>
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
I dintorni &raquo; SAN GIMIGNANO
</div>

La ???<strong>citt?? dalle belle torri</strong>??? ?? uno degli insediamenti medievali meglio preservati della Toscana, dove il centro storico ?? rimasto sostanzialmente intatto ed ?? un apprezzabile esempio di organizzazione urbana dell???et?? comunale. Per le sue caratteristiche urbanistiche ed architettoniche uniche <strong>San Gimignano</strong> ?? stato dichiarato dall???UNESCO patrimonio dell???umanit??.<br/><br/>
Pur avendo origini etrusche, <strong>San Gimignano</strong> vede il suo periodo di sviluppo tra il IX ed il XII secolo, quando i pellegrini che si dirigevano a Roma lungo la via Francigena contribuivano al benessere della citt??: abbondavano alberghi ed osterie ed i commerci erano fiorenti. Venivano commerciati soprattutto pregiati prodotti agricoli locali, tra i quali il pi?? ricercato era lo zafferano, venduto anche in Egitto ed in Francia.<br/><br/>
Nel momento di massimo splendore si contavano 72 torri, delle quali solo 14 sopravvissute fino ai giorni nostri, espressione della supremazia politica e sociale del ceto aristocratico di San Gimignano.<br/><br/>
Il cambio delle rotte dei pellegrini e la peste del 1348 furono le cause della decadenza e dell???abbandono di questo centro, che per?? ne hanno permesso una straordinaria conservazione del suo aspetto medievale.<br/><br/>
Assolutamente da visitare la Collegiata di S. Maria Assunta, o il Duomo, uno dei pi?? prestigiosi esempi di romanico toscano, e la Chiesa di Sant???Agostino anch???essa finemente affrescata e collocata in un delle pi?? belle piazze, piazza Sant???Agostino.<br/><br/>
Consigliamo di visitare la Torre Grossa ed il Palazzo del Popolo, piazza della Cisterna ed i musei cittadini, o pi?? semplicemente di camminare per le vie ed ammirare le torri e le case torri dell???antica aristocrazia che si affacciano sulle piazze e le vie principali. <br/><br/>
D???obbligo ?? una visita al Museo del vino e della Vernaccia, nel Parco della Rocca di Montestaffoli, con percorsi dedicati e degustazioni dei vini della zona, con particolare attenzione alla <strong>Vernaccia di San Gimignano</strong>.
<br/><br/>
<h2><?php include_once('../_ext/include/h2.php'); ?></h2>


<div id="social">
<script type="text/javascript" src="../_ext/js/iframe.js"></script>

 


<!-- <div style="float:left; width:160px; margin-left:30px; margin-top:10px; text-align:center;">
<script type="text/javascript" src="_ext/js/iframe_2.js"></script>
</div> -->


<div style="float:left; width:160px; margin-left:30px; margin-top:20px;">
<script type="text/javascript" src="../_ext/js/iframe_3.js"></script>
</div>

<div style="float:left; width:160px; margin-left:30px; margin-top:20px;">
<div id="hc-ratingRatingHotel"> <div id="hc-ratingRatingHotel__inner"> <img id="hc-ratingRatingHotel__ribbon" src="https://media.datahc.com/ratinghotel/stellar2/ribbon.png"/> <span id="hc-ratingRatingHotel__year">2017</span> <span id="hc-ratingRatingHotel__award">ATTESTATO DI ECCELLENZA</span> <div id="hc-ratingRatingHotel__hotelink"> <a id="hc-ratingRatingHotel__hotelname" target="_blank" href="javascript:void(0)">Agriturismo Casolare di Bucciano</a> </div> <a id="hc-ratingRatingHotel__hclink" target="_blank" href="https://www.hotelscombined.it/">HotelsCombined</a> </div> <div id="hc-ratingRatingHotel__rating"> <span id="hc-ratingRatingHotel__number">9.2</span> <span id="hc-ratingRatingHotel__pipe"></span> <span id="hc-ratingRatingHotel__ratedby">Voto ospiti</span> </div> </div> <div id="hc-data__hotellink" style="display: none;">Agriturismo_Casolare_di_Bucciano</div> <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"> </script> <script>(function(){var rand = Math.floor((Math.random() * 99999999) + 1); function loadjscssfile(a,b){if("js"==b){var c=document.createElement("script");c.setAttribute("type","text/javascript"),c.setAttribute("src",a)}else if("css"==b){var c=document.createElement("link");c.setAttribute("rel","stylesheet"),c.setAttribute("type","text/css"),c.setAttribute("href",a)}"undefined"!=typeof c&&document.getElementsByTagName("head")[0].appendChild(c)} loadjscssfile('https://media.datahc.com/ratinghotel/stellar2/styles.css?v' + rand, 'css'); loadjscssfile('https://media.datahc.com/ratinghotel/stellar2/script.js?v' + rand, 'js'); })(); </script>
</div>

</div>

</div>




<div id="home_dx">


<p style="margin:0;  padding:0; text-align:center; margin-top:20px;">
<img src="../_ext/img/agriturismi_san_gimignano_toscana_40.jpg" alt="<?php include('../_ext/include/alt.php'); ?>" class="img_rounded"/>
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
