<?php
if (($_SERVER["HTTP_HOST"]=="www.casolaredibucciano.eu") or ($_SERVER["HTTP_HOST"]=="casolaredibucciano.eu")) {
	header("HTTP/1.1 301 Moved Permanently"); 
	header("Location: http://www.casolaredibucciano.it/it/policy_it.php");
	die();
}
session_start();



$idl = "_ita";
$idp = 18;
include_once('../_ext/include/allarray.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Policy Cookie casolare di bucciano></title>
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
Policy sui Cookie
</div>

<div id="policy" style="background-color:#fff; width:100%; max-height:500px; overflow: scroll; padding: 4px;
    border:1px solid #EEE; border-right:0 solid;">
<br><br>
I nostri siti Web (www.casolaredibucciano.it - www.casolaredibucciano.eu) fanno uso di cookie allo scopo di migliorare l'esperienza online di tutti i nostri utenti. 
<br><br>
All'interno della nostra Policy sui Cookie descriviamo cosa sono i cookie e in che modo vengono usati sul nostro sito internet. 
Ti invitiamo a consultare la nostra Privacy Policy per ulteriori informazioni su come vengono usati i dati personali degli utenti che si collegano ai nostri siti internet e sull'importanza con cui consideriamo la protezione della tua privacy.
<br><br>
Il nostro sito web e i servizi in esso contenuti non possono essere usati senza la presenza di Cookie e pertanto nell'utilizzare la nostra piattaforma Web, acconsenti all'uso di Cookie in conformit&agrave; con i termini di detta politica.  
<br><br><br>

<strong>Cosa sono i Cookie?</strong>
<br><br>
I Cookie sono file di testo che contengono stringhe di testo di piccola dimensione inviate da un server Web ad un client (di solito un browser) e poi rimandati indietro dal client al server (senza subire modifiche) ogni volta che il client accede alla stessa porzione dello stesso dominio Web.
I Cookie non contengono alcuna informazione in grado di identificare direttamente un utente, tuttavia, le informazioni personali conservate nel nostro sito possono essere collegate, da parte nostra, alle informazioni memorizzate nei Cookie e ottenute dai Cookie.
<br><br><br>


<strong>Uso dei Cookie</strong>
<br><br>
Le informazioni che otteniamo in seguito all'uso dei nostri Cookie sono utilizzate per i seguenti scopi:<ul>
<li>Per riconoscere il computer dell'utente quando visita il nostro sito Web</li>
<li>Per migliorare l'usabilit&agrave; del sito Web</li>
<li>Per analizzare l'utilizzo del sito Web</li>
<li>Per amministrare questo sito Web</li>
<li>Per prevenire le frodi e migliorare la sicurezza del sito Web</li>
<li>Per personalizzare il nostro sito Web (con messaggi mirati che possono essere di interesse per l'utente)</li>
<li>Per tenere traccia della navigazione dell'utente durante la sua visita</li>
</ul><br><br>

<strong>L'abilitazione dei Cookie &egrave; sicura?</strong><br>
<br>
S&igrave;. I Cookie contengono solo piccole porzioni di dati e non possono eseguire alcuna operazione in maniera autonoma. Ti raccomandiamo di configurare il browser Web in modo tale da accettare Cookie provenienti dal nostro sito.

<br><br><br>



<strong>Come puoi modificare le impostazioni per i Cookie?</strong><br><br>

Per modificare le impostazioni riguardo ai Cookie, devi variare le impostazioni del browser che utilizzi. Dato che i browser vengono aggiornati di frequente e le piattaforme che li supportano sono sempre pi&ugrave; numerose, non &egrave; possibile fornire un'unica guida idonea a tutte le versioni di browser e dispositivi.
Tuttavia i seguenti collegamenti rimandano ad una ricerca Google con le opportune parole chiave relative alla modifica dei Cookie per ogni principale browser. Personalizza la ricerca inserendo la versione del browser e la
piattaforma che utilizzi (PC, MAC, iPhone, Android, BlackBerry eccetera).
<ul >
<li>Internet Explorer</li>
<li>Mozilla Firefox</li>
<li>Chrome</li>
<li>Safari</li>
</ul><br><br>

<strong>Quanti tipi di Cookie esistono?</strong>
<br><br>
Sul nostro sito Web vengono utilizzati tre tipi diversi di Cookie:

<ul>
<li><strong>Cookie di sessione</strong>:  file temporanei che vengono memorizzati solo per la durata della sessione di navigazione sul sito Web. Il browser Web normalmente li elimina alla chiusura.</li>
<li><strong>Cookie persistenti</strong>: la durata di questi file supera la sessione del browser (ad esempio, se si esegue l'accesso a un sito Web, questo riconosce l'utente alla sua visita successiva). I Cookie persistenti consentono funzionalit&agrave; come avvisi di benvenuto, mantenimento degli oggetti nel carrello (in caso di acquisti online), riconoscimento delle preferenze come lingue, colori eccetera.</li>
<li><strong>Cookie di terze parti</strong>: durante la navigazione del nostro sito Web, l'utente potrebbe trasmettere Cookie a terze parti non legate alla nostra azienda. Se si accede a una pagina Web con contenuti incorporati, ad esempio YouTube, potrebbero essere trasmessi dei Cookie da e verso tale sito. Non abbiamo il controllo di questi Cookie, pertanto ti consigliamo di consultare i siti Web di terze parti per maggiori informazioni riguardanti i Cookie di cui fanno uso e come gestirli.</li>
</ul>

<br><br>










<strong>Cookie presenti sul nostro sito internet</strong><br><br>

Di seguito viene riportato un elenco dei Cookie utilizzati dal nostro sito, con una spiegazione del singolo utilizzo:
<ul>
<li>Proprietario Tipo di Cookie Utilizzo</li>
<li>Questo sito Temporaneo Sessione</li>
<li>Google Persistente Statistiche utilizzo</li>
<li>Facebook Persistente Login</li>
<li>Twitter Persistente Login</li>
<li>Blocco dei Cookie.</li></ul>
<br>

Tutti i browser consentono di rifiutare i Cookie. Dato che i browser vengono aggiornati di frequente e le piattaforme che li supportano sono sempre pi&ugrave; numerose, non &egrave; possibile fornire un'unica guida idonea a tutte le versioni di browser e dispositivi.
<br>
Il blocco dei Cookie, tuttavia, pu&ograve; avere un impatto negativo sull'usabilit&agrave; di molti siti Web.
<br><br><br>

<strong>Eliminazione dei Cookie</strong><br><br>

&Egrave; possibile eliminare i Cookie gi&agrave; memorizzati sul proprio computer. Dato che i browser vengono aggiornati di frequente e le piattaforme che li supportano sono sempre pi&ugrave; numerose, non &egrave; possibile fornire un'unica guida idonea a tutte le versioni di browser e dispositivi.
<br>
Questa azione pu&ograve; avere conseguenze negative riguardo l'usabilit&agrave; di molti siti Web.
<br><br><br>


<strong>Altre tecnologie presenti sul nostro sito</strong><br><br>

<em>Google Analytics</em>
<br>

Google Analytics &egrave; uno strumento di analisi di Google che aiuta i proprietari di siti web e app a capire come i visitatori interagiscono con i contenuti di loro propriet&agrave;. Si pu&ograve; utilizzare un set di cookie per raccogliere informazioni e generare statistiche di utilizzo del sito web senza identificazione personale dei singoli visitatori da parte di Google.<br><br>

<em>Google Maps</em><br>
Google Maps &egrave; un servizio di visualizzazione di mappe gestito da Google Inc. che migliora notevolmente l'esperienza degli utenti sul nostro sito web. Google Maps, infatti, fornisce informazioni dettagliate sulla localizzazione di uno specifico esercizio commerciale o attivit&agrave; ricettiva presente sul territorio.<br><br>

</div> <!--fine policy-->




<br/><br/>
<h2><?php include_once('../_ext/include/h2.php'); ?></h2>


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
