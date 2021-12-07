<?php include_once('_ext/include/dominio.php');
require('admin/_parametri.php');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php
$idp = 12;
$idl = "_ita";
$lingua= "";
include('_ext/include/title.php'); ?></title>
<meta name="Keywords" content="<?php include_once('_ext/include/keywords.php'); ?>" />
<meta name="Description" content="<?php include_once('_ext/include/description.php'); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="_ext/css/style.css" />
<link rel="stylesheet" type="text/css" href="_ext/css/layout_1.css" />
<link rel="shortcut icon" href="favicon.ico"/>
<script src="_ext/js/prototype.js" type="text/javascript"></script>
<script src="_ext/js/scriptaculous.js?load=effects" type="text/javascript"></script>
<script src="_ext/js/lightbox.js" type="text/javascript"></script>
<link rel="stylesheet" href="_ext/css/lightbox.css" type="text/css" media="screen" />
<style type="text/css">
.tabella_grande_prezzi{
font-size:10px;

}

.contenitore_tabella_grande_prezzi{

margin-left:0px;
border:1px solid #9BC3F6;  
float:left;

display:block;
}

.td_intestaz_tab_grande_prezzi {
text-align:center;
background-image:url(img/fondo_table_sfumato.jpg);
color:#000000;
font-weight:bolder;
font-size:12px;
border-bottom:1px solid #9BC3F6;
border-collapse:collapse;
}

.td_tabella_grande_prezzi {
text-align:center;
border:0px solid #9BC3F6;
padding:1px;
border-bottom:1px solid #9BC3F6;
}




.barra_periodi_stagionali_tabella_grande{
background-color:#9BC3F6;
padding:2px 5px;
color:#333333;
font-weight:bold;
font-size:11px;
}

#menu_stagioni
{
float:left;
position:relative;
top:2px;
width:900px;
margin-left:40px;
}

.menu_stagioni_ON, .menu_stagioni_OFF{
float:left;
border-bottom:0px;
width:102px;
height:24px;
text-align:center;
padding-top:4px;
font-weight:bold;
margin-right:10px;

}

.menu_stagioni_ON a:link, .menu_stagioni_OFF a:link, .menu_stagioni_ON a, .menu_stagioni_OFF a{text-decoration:none; color:#333333; }

/*i pulsanti della stagione selezionata e non selezionata si diversificano solo per il colore di sfondo*/
.menu_stagioni_ON{ background-image:url(img/fondo_stagione_unica_on.jpg); background-repeat:no-repeat;} 
.menu_stagioni_OFF{background-image:url(img/fondo_stagione_unica.jpg); background-repeat:no-repeat;}

</style>
</head>

<body>

<div id="header">

        <div id="striscia_top">
        <h1><?php include_once('_ext/include/h1.php'); ?></h1>
        </div>
        
        <div id="logo">
        <?php include_once('_ext/include/logo.php'); ?>
        </div>
        
        <div id="menu_lingua">
        <?php include_once('_ext/include/lingua.php'); ?>
        </div>
        
        <div id="menu_top">
        <?php include_once('_ext/include/menu_top.php'); ?>
        </div>

</div>


<div id="container">

		<div id="col_menu_vert_interna">

                <div id="menu_vert">
                  <?php     
                $idmv = 5;
                include_once('_ext/include/menu_vert.php');
                ?>
                </div>
        
  </div>

       <div id="dx">
       
       <div id="titolo_top_prezzi">
       <br/>
      PREZZI
       </div>
       
       <div id="animazione">
       <!--[if !IE]> -->
                <object type="application/x-shockwave-flash"
                  data="_ext/flash/animazione_prezzi.swf" width="611" height="199">
                <!-- <![endif]-->
                
                <!--[if IE]>
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
                  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
                  width="611" height="199">
                  <param name="movie" value="_ext/flash/animazione_prezzi.swf" />
                <!--><!--dgx-->
                  <param name="loop" value="true" />
                  <param name="menu" value="false" />
                
                  <img src="_ext/flash/appartamenti_campagna_toscana.jpg" alt="<?php include('_ext/include/alt.php'); ?>" />
                </object>
                <!-- <![endif]-->
       </div>
       <?php 
	  // $url=$_SERVER['REQUEST_URI'];
	   //$conta=strtolower(substr($url,strrpos($url,"/")+1));
	   //echo $conta;
	   
	   ?>
         <div id="content_interna">
         <?php 
//include "_ext/include/_parametri.php"; 
?>
           <?php 
		   
		 $lingua_attuale = "ita";
		   
		include("_ext/include/prezzi.inc.php");
		
		$pdis->printPricesTable('menu_stagioni','menu_stagioni_ON','menu_stagioni_OFF','contenitore_tabella_grande_prezzi','barra_periodi_stagionali_tabella_grande'
							    ,10,20,'tabella_grande_prezzi','td_intestaz_tab_grande_prezzi','td_tabella_grande_prezzi');
	
?>
         <br />
  <br />
  <br />  <br />
  <br />
  <br />
  <br clear="all" />
  <br />
  <br />
<p>
<p>
<p>
<p>
<p>
<p>
  <?php
$queryNews="SELECT * FROM tb_paragrafi WHERE visibile='si' ";
$selectNews=mysql_query($queryNews);
while($modNews=mysql_fetch_array($selectNews)){
$titolo = $modNews['titolo'.$lang];
$testo = $modNews['descrizione'.$lang];
$foto1 = $modNews['foto'];
if($foto1 != ""){ 	
$path = "file/".$foto1; ?>
<div style="float:right; border:#CC3333 solid 1px; margin-left:5px;">
    
    </div><?php 
}
if($titolo != ""){ 
	echo "<strong>".$titolo."</strong>";
}
echo "<br /><br />";
if($testo != ""){
	echo $testo;

}
} ?>
          </p></div>
       </div>

       <div id="divide_bottom">
       &nbsp;
       </div>
       
        <div id="footer">
        <?php include_once('_ext/include/footer.php'); ?>
        </div>
        
</div>  

      
        <div id="w3c">
        <?php include_once('_ext/include/w3c.php'); ?>
        </div>


</body>
</html>
