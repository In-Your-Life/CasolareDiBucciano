<?php
if ($_SERVER['QUERY_STRING']!="") {
	header("Location: /");
	exit;
}
if (($_SERVER["HTTP_HOST"]=="www.casolaredibucciano.eu")or ($_SERVER["HTTP_HOST"]=="casolaredibucciano.eu")) {
	$idl='_eng';
} else {
	$idl='_ita';
}
$idp = 0;

include_once('_ext/include/allarray.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php
include_once('_ext/include/title.php'); 
?></title>
<?php if($idl=='_ita'){?>
<meta name="Keywords" content="agriturismo, toscana, san gimignano, siena, agriturismi, ristorante, piscina, camere, romantico, charme, mezza pensione, pensione completa" />
<meta name="language" content="it" /> 
<?php } ?>
<?php if($idl=='_eng'){?>
<meta name="Keywords" content="agriturismo, tuscany,  san gimignano, siena, italy, farmhouse, restaurant, pool, rooms, siena, vine, oil, production, luxury, near, grappa, certaldo, volterra, poggibonsi, monteriggioni, casolare di bucciano" />
<meta name="language" content="en" /> 
<?php } ?>
<meta name="Description" content="<?php include_once('_ext/include/description.php'); ?>" />
<script src="_ext/js/mobile.js" type="text/javascript"></script>
<meta name="author" content="Designed by InYourLife- http://www.inyourlife.info" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="shortcut icon" href="favicon.ico"/>
<script type="text/javascript" src="_ext/js/jquery.min.js"></script>
<script type="text/javascript" src="_ext/js/preferiti.js"></script>
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


<script type="text/javascript" src="_ext/js/script.js"></script>

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
.headerimg {top:20px;}
</style>
<![endif]-->
<?php if($idl=='_ita'){?>
<link type="text/css" href="_ext/css/horizontal-box-style.css" rel="stylesheet" />
	<script type="text/javascript" src="http://www.simplebooking.it/search-box-script.axd?IDA=1937"></script>
		<script type="text/javascript">
		var SBParameters = {
			CodLang: 'IT'
		};
	</script>
    <?php } else { ?>
    <link type="text/css" href="_ext/css/horizontal-box-style.css" rel="stylesheet" />
	<script type="text/javascript" src="http://www.simplebooking.it/search-box-script.axd?IDA=1937"></script>
		<script type="text/javascript">
		var SBParameters = {
			CodLang: 'EN'
		};
	</script>
    <?php } ?>
<link rel="stylesheet" type="text/css" href="_ext/css/layout.css" />
</head>


<body  onload="MM_preloadImages('_ext/img/agriturismo_toscana_20.jpg', _ext/'img/agriturismo_toscana_21.jpg', '_ext/img/agriturismo_toscana_22.jpg', '_ext/img/agriturismo_toscana_23.jpg', '_ext/img/agriturismo_toscana_24.jpg', '_ext/img/agriturismo_toscana_25.jpg')">


<?php if($idl=='_ita'){?>

<div id="fb-root"></div>
<script type="text/javascript">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1&amp;appId=259098687437182";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="striscia_top">
<h1><?php include_once('_ext/include/h1.php'); ?></h1>
</div>

<div id="container_large">

<div id="container">

<div id="menu_alto">
<?php include_once('_ext/include/menu_alto.php'); ?>
</div>

<div id="logo" style="padding-top:3px;">
<img src="_ext/img/logo_prova.jpg" alt="<?php include_once('_ext/include/alt.php'); ?>" />
</div>

<div id="preferiti">
<?php include_once('_ext/include/preferiti.php'); ?>
</div>

</div>


<div id="header">
	<!-- jQuery handles to place the header background images -->
	<div id="headerimgs">
		<div id="headerimg1" class="headerimg"></div>
		<div id="headerimg2" class="headerimg"></div>
	</div>
	<!-- Top navigation on top of the images -->
</div>



</div>


<div id="box">


<?php include_once('_ext/include/menu_box.php'); ?>

</div>

<div class="clear_float" style="height:10px;"></div>

<div id="simple_booking">
<?php include_once('_ext/include/simple_booking.php'); ?>
</div>

<div id="content_wide">

<div id="content">

<div id="home_sx">

<img src="_ext/img/agriturismo_toscana_12.jpg" style="float:right; margin-left:20px; margin-bottom:15px;" alt="<?php include('_ext/include/alt.php'); ?>" class="img_rounded" /><ul style="margin:0; padding:0; margin-left:15px;">
<li>L’<strong>Agriturismo Il Casolare di Bucciano</strong> è una dimora cinquecentesca, sapientemente ristrutturata, completamente immersa nella natura, tra vigneti ed oliveti, con splendida vista su <strong>San Gimignano</strong> e sulle colline circostanti.<br/><br/></li> 

<li>La posizione è soleggiata e ventilata, essendo elevata in collina ed isolata, anche se a pochi km dai tesori dell’arte e della cultura della <strong>Toscana</strong>.<br/><br/></li>


<li>Intorno all’<strong>agriturismo</strong>, un ampio giardino attrezzato, un piccolo angolo di paradiso, dove è possibile ritagliarsi dei momenti di profondo relax.<br/><br/></li>

<li>Le stanze, con arredi in stile, pavimenti in cotto e travi in legno a vista, sono state realizzate con particolare cura, per poter garantire un soggiorno piacevole e tranquillo agli ospiti. <br/><br/></li>
</ul>
<br/>
<a href="http://m.casolaredibucciano.it" style="color:#900; font-weight:bold;">Versione Mobile</a><br/><br/>
<h2><?php include_once('_ext/include/h2.php'); ?></h2>

<div id="TA_certificateOfExcellence151" class="TA_certificateOfExcellence" style="float:right; margin-top:-100px; margin-right:10px;">
<ul id="ioGmh8H0" class="TA_links MQdPbu">
<li id="JGjvq2" class="nEvzo7H">
<a target="_blank" href="http://www.tripadvisor.it/"><img src="http://www.tripadvisor.it/img/cdsi/img2/awards/CoE2014_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a>
</li>
</ul>
</div>
<script type="text/javascript" src="http://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=151&amp;locationId=1095267&amp;lang=it&amp;year=2014"></script>
 

<div id="social" style="margin-top:90px;">


<script type="text/javascript" src="_ext/js/iframe.js"></script>

<div style="float:left; width:160px; margin-top:20px;">
<script type="text/javascript" src="_ext/js/iframe_1.js"></script>
</div>


<div style="float:left; width:160px; margin-left:30px; margin-top:10px; text-align:center;">
<script type="text/javascript" src="_ext/js/iframe_2.js"></script>
</div>


<div style="float:left; width:160px; margin-left:30px; margin-top:20px;">
<script type="text/javascript" src="_ext/js/iframe_3.js"></script>
</div>

</div>

</div>




<div id="home_dx">

<div class="bottiglia">
<a href="http://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_100_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(1)
</div>


<div class="bottiglia">
<a href="http://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_105_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(2)
</div>

<div class="bottiglia">
<a href="http://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_102_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(3)
</div>

<div class="bottiglia">
<a href="http://390679.freecomm.biz/catalogo/5642/prodotti-oleari.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_110_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(4)
</div>

<div class="bottiglia">
<a href="http://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_101_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(5)
</div>

<div class="bottiglia">
<a href="http://390679.freecomm.biz/catalogo/5642/prodotti-oleari.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_115_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(6)
</div>


<div class="divide_vini"></div>

Qui potrete assaggiare i prodotti della nostra azienda, l’Azienda Agricola Signano:<br/>

<p style="margin-left:30px; line-height:1.6em;">

(1) <a href="it/vernaccia-san-gimignano.php" title="<?php include('_ext/include/alt.php'); ?>"><strong>Vino Rosato</strong>,</a><br/>
(2) <a href="it/vernaccia-san-gimignano.php" title="<?php include('_ext/include/alt.php'); ?>"><strong>Chianti Colli Senesi</strong>,</a><br/> 
(3) <a href="it/vernaccia-san-gimignano.php" title="<?php include('_ext/include/alt.php'); ?>"><strong>Vernaccia San Gimignano</strong>,</a><br/>
(4) <a href="it/vernaccia-san-gimignano.php" title="<?php include('_ext/include/alt.php'); ?>"><strong>San Gimignano Rosso</strong>,</a><br/>
(5) <a href="it/vernaccia-san-gimignano.php" title="<?php include('_ext/include/alt.php'); ?>"><strong>Vin Santo</strong>,</a><br/>
(6) <a href="it/olio-extravergine-di-oliva-toscano.php" title="<?php include('_ext/include/alt.php'); ?>"><strong>Olio Extra-Vergine di Oliva</strong>.</a></p>



<div id="e_shop">
<a href="http://390679.freecomm.biz/" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'" style="color:#fff;">
VISITA IL NOSTRO E-SHOP</a>&nbsp;&nbsp;<img src="_ext/img/icona_li.png" alt="<?php include('_ext/include/alt.php'); ?>" />

</div>
</div>


<div class="clear_float"></div>

</div>
</div>

<div id="indirizzo_wide">
<div id="indirizzo">
<?php include_once('_ext/include/indirizzo.php'); ?>
</div>
</div>

<?php } ?>







<?php if($idl=='_eng'){?>




<div id="fb-root"></div>
<script type="text/javascript">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ien_US/all.js#xfbml=1&amp;appId=259098687437182";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="striscia_top">
<h1><?php include_once('_ext/include/h1.php'); ?></h1>
</div>

<div id="container_large">

<div id="container">

<div id="menu_alto">
<?php include_once('_ext/include/menu_alto.php'); ?>
</div>

<div id="logo">
<?php include_once('_ext/include/logo.php'); ?>
</div>

<div id="preferiti">
<?php include_once('_ext/include/preferiti.php'); ?>
</div>

</div>


<div id="header">
	<!-- jQuery handles to place the header background images -->
	<div id="headerimgs">
		<div id="headerimg1" class="headerimg"></div>
		<div id="headerimg2" class="headerimg"></div>
	</div>
	<!-- Top navigation on top of the images -->
</div>

</div>


<div id="box">


<?php include_once('_ext/include/menu_box.php'); ?>

</div>

<div class="clear_float" style="height:10px;"></div>

<div id="simple_booking">
<?php include_once('_ext/include/simple_booking_1.php'); ?>
</div>

<div id="content_wide">

<div id="content">

<div id="home_sx">

<img src="_ext/img/agriturismo_toscana_12.jpg" style="float:right; margin-left:20px; margin-bottom:15px;" alt="<?php include('_ext/include/alt.php'); ?>" class="img_rounded" /><ul style="margin:0; padding:0; margin-left:15px;">
<li><strong>Casolare di Bucciano farmhouse</strong> is a five hundred renovate residence, immerse in the nature,  between Vineyard and olive groves with a beautiful view on San Gimignano and on surrounding hills. <br/><br/></li> 

<li>The position is sunny and ventilated because it is on an isolated hill, but just few km from artistic and historical Tuscan places.<br/><br/></li>


<li>Surrounding the farmhouse there are a big equipped garden, a little paradise, where it’s possible relaxing.<br/><br/></li>

<li>The rooms, with stylish furnish, terracotta floors and wooden beams, were made with care to give a comfortable accommodation.<br/><br/></li>
</ul>
<br/>
<a href="http://m.casolaredibucciano.it/en/home_en.php" style="color:#900; font-weight:bold;">Mobile Version</a><br/><br/>
<h2><?php include_once('_ext/include/h2.php'); ?></h2>


<div id="TA_certificateOfExcellence151" class="TA_certificateOfExcellence" style="float:right; margin-top:-100px; margin-right:10px;">
<ul id="ioGmh8H0" class="TA_links MQdPbu">
<li id="JGjvq2" class="nEvzo7H">
<a target="_blank" href="http://www.tripadvisor.com/"><img src="http://www.tripadvisor.com/img/cdsi/img2/awards/CoE2014_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a>
</li>
</ul>
</div>
<script type="text/javascript" src="http://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=151&amp;locationId=1095267&amp;lang=en&amp;year=2014"></script>

<div class="clear:both;"></div>

<div id="social" style="margin-top:80px;">


<script type="text/javascript" src="_ext/js/iframe.js"></script>

<div style="float:left; width:160px; margin-top:20px;">
<script type="text/javascript" src="../_ext/js/iframe_1.js"></script>
</div>


<div style="float:left; width:160px; margin-left:30px; margin-top:10px; text-align:center;">
<script type="text/javascript" src="_ext/js/iframe_2_eng.js"></script>
</div>


<div style="float:left; width:160px; margin-left:30px; margin-top:20px;">
<script type="text/javascript" src="_ext/js/iframe_3.js"></script>
</div>

</div>

</div>




<div id="home_dx">

<div class="bottiglia">
<a href="http://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_100_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(1)
</div>


<div class="bottiglia">
<a href="http://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_105_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(2)
</div>

<div class="bottiglia">
<a href="http://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_102_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(3)
</div>


<div class="bottiglia">
<a href="http://390679.freecomm.biz/catalogo/5642/prodotti-oleari.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_110_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(4)
</div>


<div class="bottiglia">
<a href="http://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_101_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(5)
</div>


<div class="bottiglia">
<a href="http://390679.freecomm.biz/catalogo/5642/prodotti-oleari.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_115_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(6)
</div>


<div class="divide_vini"></div>

Here you can taste the products of our farm Signano farm:<br/>

<p style="margin-left:30px; line-height:1.6em;">

(1) <a href="en/production-wine-chianti-italy.php" title="<?php include('_ext/include/alt.php'); ?>"><strong>Rosato</strong>,</a><br/>
(2) <a href="en/production-wine-chianti-italy.php" title="<?php include('_ext/include/alt.php'); ?>"><strong>Chianti Colli Senesi</strong>,</a><br/> 
(3) <a href="en/production-wine-chianti-italy.php" title="<?php include('_ext/include/alt.php'); ?>"><strong>San Gimignano Vernaccia</strong>,</a><br/>
(4) <a href="en/production-wine-chianti-italy.php" title="<?php include('_ext/include/alt.php'); ?>"><strong>San Gimignano Rosso</strong>,</a><br/>
(5) <a href="en/production-wine-chianti-italy.php" title="<?php include('_ext/include/alt.php'); ?>"><strong>Vin Santo</strong>,</a><br/>
(6) <a href="en/production-oil-tuscany.php" title="<?php include('_ext/include/alt.php'); ?>"><strong>Extra Virgin olive oil</strong>.</a></p>



<div id="e_shop">
<a href="http://390679.freecomm.biz/" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'" style="color:#fff;">
VISIT OUR E-SHOP</a>&nbsp;&nbsp;<img src="_ext/img/icona_li.png" alt="<?php include('_ext/include/alt.php'); ?>" />

</div>
</div>


<div class="clear_float"></div>

</div>
</div>

<div id="indirizzo_wide">
<div id="indirizzo">
<?php include_once('_ext/include/indirizzo.php'); ?>
</div>
</div>






<?php } ?>
</body>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/google_analytics.php");?></html>
