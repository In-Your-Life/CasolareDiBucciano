<?php
$ftp_host = '213.229.100.154';
$ftp_id = 'ut_casbuc1';
$ftp_pw = 'yAfx54*6';
$user = 'us_casbuc1';
$password = 'Trpy84@0';
$database = 'db_casbuc1_';
$host = '213.229.100.154';
$codice_analitycs = 'UA-32581493-38';
?>
<?php
// Dati necessari alla creazione della pagina di amministrazione.com
$azienda = "casolaredibucciano";

//$url_azienda = "../";  //per il locale
$url_azienda = "http://www.casolaredibucciano.it/";  //per il definitivo
$urlpath = "/home/casolaredibucciano/public_html";

$url_server_file = "file"; 

$valore_sessione = "stf";
$titolo = "Amministrazione ".$azienda;

// Dati necessari alla connessione FTP
//$ftp_host = "localhost"; 
//$ftp_id = "casolaredibucciano";
//$ftp_pw = "oppli097uth";


// Dati necessari alla connessione del Database

//$user = "casolaredibuccia";
//$password = "oppli097uth";
//$database = "casolaredibucciano";
//$host = "localhost";

// Mi connetto al Database
$connessione=mysql_connect($host, $user, $password);
mysql_select_db($database, $connessione) or die ("Non riesco a collegarmi al DB");
$query="SET NAMES utf8";
$result=mysql_query($query) or die(mysql_error());

//setta il charset per lo scambio dati tra php e mysql a utf8
mysql_set_charset('utf8');

// Dati per l'invio mail
$email_azienda = "info@casolaredibucciano.com";
$url_admin = $url_azienda."admin";

// Lingue
$lingua['ita'] 					= 		1; // Italiano
$lingua['eng'] 					= 		1; // Inglese
$lingua['fra'] 					= 		0; // Francese
$lingua['deu'] 					= 		0; // Tedesco
$lingua['hol']		 			= 		0; // Olandese
$lingua['spa'] 					= 		0; // Spagnolo
$lingua['por']		 			= 		0; // Portoghese


//INDICA QUALI SONO I NOMI DEI MODULI (tra i presenti) DEFINITI standard e con la stessa struttura
// vengono gestiti dallo stesso script
$standardMod=array("offerte","prezzi","paragrafi","fotogallery"); 

// Moduli


$moduli['offerte'] 				= 		1; // prodotti
$moduli['stagioni'] 				= 		0; // prodotti
$moduli['prezzi'] 				= 		1; // prodotti
$moduli['paragrafi'] 				= 		1; // prodotti
$moduli['fotogallery'] 				= 		1; // prodotti

//$moduli['sottotipologie'] 			= 		1; // sottotipologie

// abilitazione alla modifica/inserimento di nuove tipologie da parte dell'utente
$handle_tipologie['offerte']		    	    = 		0; // 
$handle_tipologie['paragrafi']		    	    = 		0; // 
$handle_tipologie['fotogallery']		    	    = 		0; // 


//numero massimo di file per elemento
$maxfile['offerte'] 				= 	0; // immobili
$maxfile['prezzi'] 				= 	0; // immobili
$maxfile['paragrafi'] 				= 	0; // immobili
$maxfile['fotogallery'] 				= 	1; // immobili

$maxstagioni					=	1; // 1 in caso di stagione unica
$rev='3.1';
?>
