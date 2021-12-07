<?php
if ($_SERVER['QUERY_STRING']!="") {
	header("Location: /");
	exit;
}
if (($_SERVER["HTTP_HOST"]=="www.casolaredibucciano.eu")or ($_SERVER["HTTP_HOST"]=="casolaredibucciano.eu")) {
	$idl='_eng';
} 
	
	
	
if (($_SERVER["HTTP_HOST"]=="www.agriturismosangimignano.de")or ($_SERVER["HTTP_HOST"]=="agriturismosangimignano.de")) {
	$idl='_deu';
} 
		
	
	if (($_SERVER["HTTP_HOST"]=="www.casolaredibucciano.it")or ($_SERVER["HTTP_HOST"]=="casolaredibucciano.it")) {
	$idl='_ita';
} 

require_once("_ext/include/mobile_detect.php");
$detect = new Mobile_Detect;

if($detect->isMobile() && $_GET['m']!="no")
{
    if($idl=='_ita')
    {
    	header("Location: https://m.casolaredibucciano.it/");
    	die();
    }
    else if($idl=='_eng' || $idl=='_deu')
    {
    	header("Location: https://m.casolaredibucciano.it/en/home_en.php");
    	die();
    }
}
$idp = 0;

include_once('_ext/include/allarray.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "https://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<?php if($idl=='_deu'){?>
<title>Agriturismo San Gimignano Agriturismo Toskana pool Agriturismo San Gimignano pool Toskana Italien</title>

<?php } else { ?>
<title><?php
include_once('_ext/include/title.php'); 
} ?></title>
<?php if($idl=='_ita'){?>
<meta name="Keywords" content="agriturismo, toscana, san gimignano, siena, agriturismi, ristorante, piscina, camere, romantico, charme, mezza pensione, pensione completa" />
<meta name="language" content="it" /> 
<?php } ?>
<?php if($idl=='_eng'){?>
<meta name="Keywords" content="agriturismo, tuscany,  san gimignano, siena, italy, farmhouse, restaurant, pool, rooms, siena, vine, oil, production, luxury, near, grappa, certaldo, volterra, poggibonsi, monteriggioni, casolare di bucciano" />
<meta name="language" content="en" /> 
<?php } ?>
<?php if($idl=='_deu'){?>
<meta name="Keywords" content="agriturismo, casolare di bucciano, san gimignano, toskana, italien, ferienhaus, siena, pool" />
<meta name="language" content="de" /> 
<?php } ?>
<?php if($idl=='_deu'){?>
<meta name="Description" content="Offiziel website Der Agriturismo Casolare di Bucciano in San Gimignano,mit pool,mitten auf dem Land des Chianti und der Toskana" />
<?php } else { ?>
<meta name="Description" content="<?php include_once('_ext/include/description.php'); ?>" />

<?php }  ?>

<!--<script src="_ext/js/mobile.js" type="text/javascript"></script>-->
<meta name="author" content="Designed by InYourLife- https://www.inyourlife.info" />
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

<?php if($idl=='_deu'){?>
<script type="text/javascript" src="_ext/js/script_1.js"></script>

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
<?php }  else { ?>
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

<?php } ?>
<!--[if lte IE 7]> 
<style type="text/css">
.headerimg {top:20px;}
</style>
<![endif]-->
<?php if($idl=='_ita'){?>
<link type="text/css" href="_ext/css/horizontal-box-style.css" rel="stylesheet" />
	<script type="text/javascript" src="https://www.simplebooking.it/search-box-script.axd?IDA=1937"></script>
		<script type="text/javascript">
		var SBParameters = {
			CodLang: 'IT'
		};
	</script>
    <?php }
	
	if($idl=='_eng'){?>
    <link type="text/css" href="_ext/css/horizontal-box-style.css" rel="stylesheet" />
	<script type="text/javascript" src="https://www.simplebooking.it/search-box-script.axd?IDA=1937"></script>
		<script type="text/javascript">
		var SBParameters = {
			CodLang: 'EN'
		};
	</script>
   <?php }
	
	if($idl=='_deu'){?>
    <link type="text/css" href="_ext/css/horizontal-box-style.css" rel="stylesheet" />
	<script type="text/javascript" src="https://www.simplebooking.it/search-box-script.axd?IDA=1937"></script>
		<script type="text/javascript">
		var SBParameters = {
			CodLang: 'DE'
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
<a href="https://m.casolaredibucciano.it" style="color:#900; font-weight:bold;">Versione Mobile</a><br/><br/>
<h2><?php include_once('_ext/include/h2.php'); ?></h2>



<div id="social" style="margin-top:90px;">


<script type="text/javascript" src="_ext/js/iframe.js"></script>




<!-- <div style="float:left; width:160px; margin-left:30px; margin-top:10px; text-align:center;">
<script type="text/javascript" src="_ext/js/iframe_2.js"></script>
</div> -->

<div style="float:left; width:160px; margin-left:30px; margin-top:20px;">
<script type="text/javascript" src="_ext/js/iframe_3.js"></script>
</div>


<div style="float:left; width:160px; margin-left:30px; margin-top:20px;">
<div id="hc-ratingRatingHotel"> <div id="hc-ratingRatingHotel__inner"> <img id="hc-ratingRatingHotel__ribbon" src="https://media.datahc.com/ratinghotel/stellar2/ribbon.png"/> <span id="hc-ratingRatingHotel__year">2017</span> <span id="hc-ratingRatingHotel__award">ATTESTATO DI ECCELLENZA</span> <div id="hc-ratingRatingHotel__hotelink"> <a id="hc-ratingRatingHotel__hotelname" target="_blank" href="javascript:void(0)">Agriturismo Casolare di Bucciano</a> </div> <a id="hc-ratingRatingHotel__hclink" target="_blank" href="https://www.hotelscombined.it/">HotelsCombined</a> </div> <div id="hc-ratingRatingHotel__rating"> <span id="hc-ratingRatingHotel__number">9.2</span> <span id="hc-ratingRatingHotel__pipe"></span> <span id="hc-ratingRatingHotel__ratedby">Voto ospiti</span> </div> </div> <div id="hc-data__hotellink" style="display: none;">Agriturismo_Casolare_di_Bucciano</div> <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"> </script> <script>(function(){var rand = Math.floor((Math.random() * 99999999) + 1); function loadjscssfile(a,b){if("js"==b){var c=document.createElement("script");c.setAttribute("type","text/javascript"),c.setAttribute("src",a)}else if("css"==b){var c=document.createElement("link");c.setAttribute("rel","stylesheet"),c.setAttribute("type","text/css"),c.setAttribute("href",a)}"undefined"!=typeof c&&document.getElementsByTagName("head")[0].appendChild(c)} loadjscssfile('https://media.datahc.com/ratinghotel/stellar2/styles.css?v' + rand, 'css'); loadjscssfile('https://media.datahc.com/ratinghotel/stellar2/script.js?v' + rand, 'js'); })(); </script>
</div>
</div>

</div>




<div id="home_dx">

<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_100_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(1)
</div>


<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_105_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(2)
</div>

<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_102_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(3)
</div>

<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5642/prodotti-oleari.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_110_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(4)
</div>

<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_101_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(5)
</div>

<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5642/prodotti-oleari.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
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
<a href="https://390679.freecomm.biz/" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'" style="color:#fff;">
VISITA IL NOSTRO E-SHOP</a>&nbsp;&nbsp;<img src="_ext/img/icona_li.png" alt="<?php include('_ext/include/alt.php'); ?>" />
<br/>


<script src="//widget.customer-alliance.com/reviews/js/standard/6d1900c46a2187b0.js" async></script>
</div>
<br/><br/>

<iframe width="410" height="230" src="https://www.youtube.com/embed/QBrhLbL3x1g?ecver=1&rel=0" frameborder="0" allowfullscreen></iframe>
<div style="width:100%; margin-top:20px; ">
<img src="_ext/img/banner-agriturismo-per-le-imprese.jpg" style="width:100%;margin:0 auto;margin-top:10px;align-content: center !important;" class="img_rounded">
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
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&amp;appId=259098687437182";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="striscia_top">
<h1><?php include_once('_ext/include/h1.php'); ?></h1>
</div>

<div id="container_large">

<div id="container">

<div id="menu_alto" style="padding-left:0;">
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
<li>The Farm <strong>Casolare Di Bucciano</strong> is a sixteenth-century habitation, lovingly restored, and completely surrounded by nature, vineyards and olive groves, with beautiful views of San Gimignano and the surrounding hills.<br/><br/></li> 

<li>The location is sunny and breezy, being high in the hills and isolated, although only a few kilometers from the treasures of art and culture of Tuscany.<br/><br/></li>


<li>Around the farmhouse, a large furnished garden, a small corner of paradise, where you can carve out moments of deep relaxation.<br/><br/></li>

<li>The rooms, with period furnishings, tiled floors and exposed wood beams, have been furnished with special care in order to ensure a pleasant and tranquil stay for our guests.<br/><br/></li>
</ul>
<br/>
<a href="https://m.casolaredibucciano.it/en/home_en.php" style="color:#900; font-weight:bold;">Mobile Version</a><br/><br/>
<h2><?php include_once('_ext/include/h2.php'); ?></h2>



<div class="clear:both;"></div>

<div id="social" style="margin-top:80px;">


<script type="text/javascript" src="_ext/js/iframe.js"></script>




<!-- <div style="float:left; width:160px; margin-left:30px; margin-top:10px; text-align:center;">
<script type="text/javascript" src="_ext/js/iframe_2.js"></script>
</div> -->


<div style="float:left; width:160px; margin-left:30px; margin-top:20px;">
<script type="text/javascript" src="_ext/js/iframe_3.js"></script>
</div>

<div style="float:left; width:160px; margin-left:30px; margin-top:20px;">
<div id="hc-ratingRatingHotel"> <div id="hc-ratingRatingHotel__inner"> <img id="hc-ratingRatingHotel__ribbon" src="https://media.datahc.com/ratinghotel/stellar2/ribbon.png"/> <span id="hc-ratingRatingHotel__year">2017</span> <span id="hc-ratingRatingHotel__award">ATTESTATO DI ECCELLENZA</span> <div id="hc-ratingRatingHotel__hotelink"> <a id="hc-ratingRatingHotel__hotelname" target="_blank" href="javascript:void(0)">Agriturismo Casolare di Bucciano</a> </div> <a id="hc-ratingRatingHotel__hclink" target="_blank" href="https://www.hotelscombined.it/">HotelsCombined</a> </div> <div id="hc-ratingRatingHotel__rating"> <span id="hc-ratingRatingHotel__number">9.2</span> <span id="hc-ratingRatingHotel__pipe"></span> <span id="hc-ratingRatingHotel__ratedby">Voto ospiti</span> </div> </div> <div id="hc-data__hotellink" style="display: none;">Agriturismo_Casolare_di_Bucciano</div> <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"> </script> <script>(function(){var rand = Math.floor((Math.random() * 99999999) + 1); function loadjscssfile(a,b){if("js"==b){var c=document.createElement("script");c.setAttribute("type","text/javascript"),c.setAttribute("src",a)}else if("css"==b){var c=document.createElement("link");c.setAttribute("rel","stylesheet"),c.setAttribute("type","text/css"),c.setAttribute("href",a)}"undefined"!=typeof c&&document.getElementsByTagName("head")[0].appendChild(c)} loadjscssfile('https://media.datahc.com/ratinghotel/stellar2/styles.css?v' + rand, 'css'); loadjscssfile('https://media.datahc.com/ratinghotel/stellar2/script.js?v' + rand, 'js'); })(); </script>
</div>

</div>

</div>




<div id="home_dx">

<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_100_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(1)
</div>


<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_105_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(2)
</div>

<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_102_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(3)
</div>


<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5642/prodotti-oleari.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_110_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(4)
</div>


<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_101_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(5)
</div>


<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5642/prodotti-oleari.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
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
<a href="https://390679.freecomm.biz/" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'" style="color:#fff;">
VISIT OUR E-SHOP</a>&nbsp;&nbsp;<img src="_ext/img/icona_li.png" alt="<?php include('_ext/include/alt.php'); ?>" />

</div>

<br/><br/>

<iframe width="410" height="230" src="https://www.youtube.com/embed/QBrhLbL3x1g?ecver=1&rel=0" frameborder="0" allowfullscreen></iframe>

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










<?php if($idl=='_deu'){?>




<div id="fb-root"></div>
<script type="text/javascript">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/all.js#xfbml=1&amp;appId=259098687437182";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div id="striscia_top">
<h1><?php include_once('_ext/include/h1.php'); ?></h1>
</div>

<div id="container_large">

<div id="container">

<div id="menu_alto" style="text-align:left; font-size:130%;">
<a href="https://www.agriturismosangimignano.de/de/sonderangebote-lastminute-fur-familienurlaub-toskana.php">ANGEBOTE</a>
<?php
echo ' <a href="https://www.casolaredibucciano.it" title=""><img src="_ext/img/flag_ita.jpg" alt=""></a>';
echo '&nbsp;&nbsp;&nbsp;<a href="https://www.casolaredibucciano.eu" title=""><img src="_ext/img/flag_eng.jpg" alt=""></a>';
?>	
	
</div>

<div id="logo">
<?php include_once('_ext/include/logo.php'); ?>
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


<!--<div id="box">




</div>-->

<div class="clear_float"></div>

<div id="simple_booking" style="margin-top:-20px;">
<?php include_once('_ext/include/simple_booking_1.php'); ?>
</div>

<div id="content_wide">

<div id="content">

<div id="home_sx">

<img src="_ext/img/agriturismo_toscana_12.jpg" style="float:right; margin-left:20px; margin-bottom:15px;" alt="<?php include('_ext/include/alt.php'); ?>" class="img_rounded" /><ul style="margin:0; padding:0; margin-left:15px;">
<li>Das Bauernhaus Casolare di Bucciano ist eine Behausung dem sechzehnten Jahrhundert, liebevoll restauriert, völlig von der Natur, Weinberge und Olivenhainen umgeben. Mit herrlichem Blick auf San Gimignano und von seinen Türmen. In dieser familiengeführten Unterkunft erwarten Sie rustikal eingerichtete Zimmer im Stil der Toskana. Auf dem Anwesend werden die Weinsorten Vernaccia und Chianti hergestellt. <br/><br/></li> 

<li>Das Agriturismo verfügt über einen Garten mit Tischen, Stühlen und einem saisonalen Schwimmbad. In den öffentlichen Bereichen steht kostenlos WLAN zur Verfügung.<br/><br/></li>


<li>Jedes Zimmer verfügt über Sichtbalkendecken und Terrakottaböden. Manche der Zimmer können Sie direkt vom Garten aus erreichen.<br/><br/></li>

<li>Das Frühstücksbuffet umfasst regionale Produkte wie Käse, Schinken und Salami, selbst gebackenen Kuchen und selbst gemachte Marmeladen. Olivenöl und Marmeladen sind zum Kauf erhältlich.<br/><br/></li>

<li>Das Frühstücksbuffet umfasst regionale Produkte wie Käse, Schinken und Salami, selbst gebackenen Kuchen und selbst gemachte Marmeladen. Olivenöl und Marmeladen sind zum Kauf erhältlich.<br/><br/></li>

<li><a href="https://www.casolaredibucciano.eu" style="color:#900; font-weight:bold; text-decoration:none;">Weitere Informationen finden<br />
Sie in der englischen Version</a><br/><br/></li>
</ul>
<br/>
<a href="https://m.casolaredibucciano.it/en/home_en.php" style="color:#900; font-weight:bold;">Mobile Version</a><br/><br/>
<h2><?php include_once('_ext/include/h2.php'); ?></h2>



<div class="clear:both;"></div>

<div id="social" style="margin-top:80px;">


<script type="text/javascript" src="_ext/js/iframe.js"></script>




<!-- <div style="float:left; width:160px; margin-left:30px; margin-top:10px; text-align:center;">
<script type="text/javascript" src="_ext/js/iframe_2.js"></script>
</div> -->


<div style="float:left; width:160px; margin-left:30px; margin-top:20px;">
<script type="text/javascript" src="_ext/js/iframe_3.js"></script>
</div>

<div style="float:left; width:160px; margin-left:30px; margin-top:20px;">
<div id="hc-ratingRatingHotel"> <div id="hc-ratingRatingHotel__inner"> <img id="hc-ratingRatingHotel__ribbon" src="https://media.datahc.com/ratinghotel/stellar2/ribbon.png"/> <span id="hc-ratingRatingHotel__year">2017</span> <span id="hc-ratingRatingHotel__award">ATTESTATO DI ECCELLENZA</span> <div id="hc-ratingRatingHotel__hotelink"> <a id="hc-ratingRatingHotel__hotelname" target="_blank" href="javascript:void(0)">Agriturismo Casolare di Bucciano</a> </div> <a id="hc-ratingRatingHotel__hclink" target="_blank" href="https://www.hotelscombined.it/">HotelsCombined</a> </div> <div id="hc-ratingRatingHotel__rating"> <span id="hc-ratingRatingHotel__number">9.2</span> <span id="hc-ratingRatingHotel__pipe"></span> <span id="hc-ratingRatingHotel__ratedby">Voto ospiti</span> </div> </div> <div id="hc-data__hotellink" style="display: none;">Agriturismo_Casolare_di_Bucciano</div> <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"> </script> <script>(function(){var rand = Math.floor((Math.random() * 99999999) + 1); function loadjscssfile(a,b){if("js"==b){var c=document.createElement("script");c.setAttribute("type","text/javascript"),c.setAttribute("src",a)}else if("css"==b){var c=document.createElement("link");c.setAttribute("rel","stylesheet"),c.setAttribute("type","text/css"),c.setAttribute("href",a)}"undefined"!=typeof c&&document.getElementsByTagName("head")[0].appendChild(c)} loadjscssfile('https://media.datahc.com/ratinghotel/stellar2/styles.css?v' + rand, 'css'); loadjscssfile('https://media.datahc.com/ratinghotel/stellar2/script.js?v' + rand, 'js'); })(); </script>
</div>

</div>

</div>




<div id="home_dx">

<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_100_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(1)
</div>


<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_105_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(2)
</div>

<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_102_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(3)
</div>


<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5642/prodotti-oleari.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_110_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(4)
</div>


<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5531/prodotti-vinicoli.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_101_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(5)
</div>


<div class="bottiglia">
<a href="https://390679.freecomm.biz/catalogo/5642/prodotti-oleari.html" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'">
<img src="_ext/img/agriturismo_toscana_115_small.jpg" alt="<?php include('_ext/include/alt.php'); ?>"  /></a><br/><br/>
(6)
</div>


<div class="divide_vini"></div>

Hier können Sie die Produkte des Unternehmens zu probieren, Azienda Agricola Signano:<br/>

<p style="margin-left:30px; line-height:1.6em;">

(1) <strong>Rosato</strong>,<br/>
(2) <strong>Chianti Colli Senesi</strong>,<br/> 
(3) <strong>San Gimignano Vernaccia</strong>,<br/>
(4) <strong>San Gimignano Rosso</strong>,<br/>
(5) <strong>Vin Santo</strong>,<br/>
(6) <strong>Olivenöl extra vergine</strong>.</p>



<div id="e_shop">
<a href="https://390679.freecomm.biz/" title="<?php include('_ext/include/alt.php'); ?>" onclick="this.target='_blank'" style="color:#fff;">
BESUCHEN SIE UNSERE E-SHOP</a>&nbsp;&nbsp;<img src="_ext/img/icona_li.png" alt="<?php include('_ext/include/alt.php'); ?>" />

</div>

<br/><br/>

<iframe width="410" height="230" src="https://www.youtube.com/embed/QBrhLbL3x1g?ecver=1&rel=0" frameborder="0" allowfullscreen></iframe>

<br /><br /><br/>



<!--<div id="offerte">
<div class="titolo_angebote_home_deu">
<a href="https://www.agriturismosangimignano.de/de/sonderangebote-lastminute-fur-familienurlaub-toskana.php" class="offerte_home_deu"><span  style="font-size:24px; color:#993300;">ANGEBOTE</span></a></div><br/>
<div class="titolo_offerta_home_deu"><a href="https://www.agriturismosangimignano.de/de/sonderangebote-lastminute-fur-familienurlaub-toskana.php">TITOLO OFFERTA</a></div>
<a href="https://www.agriturismosangimignano.de/de/sonderangebote-lastminute-fur-familienurlaub-toskana.php"><img src="_ext/img/casolare_di_bucciano_1.jpg" alt="Casolare di Bucciano" style="width:200px; float:left; margin-right:15px;"/></a>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br/><br/>
<a href="https://www.agriturismosangimignano.de/de/sonderangebote-lastminute-fur-familienurlaub-toskana.php">Alle Angebote &raquo;</a>



</div>-->





</div>


<div class="clear_float"></div>

</div>
</div>

<div id="indirizzo_wide">
<div id="indirizzo">
<?php include_once('_ext/include/indirizzo.php'); ?>
</div>
</div>


<!-- Google Code per il tag di remarketing -->
<!--------------------------------------------------
I tag di remarketing possono non essere associati a informazioni di identificazione personale o inseriti in pagine relative a categorie sensibili. Ulteriori informazioni e istruzioni su come impostare il tag sono disponibili alla pagina: https://google.com/ads/remarketingsetup
--------------------------------------------------->

<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 949759680;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/949759680/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>	

<?php } ?>
</body>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/google_analytics.php");?>
</html>
