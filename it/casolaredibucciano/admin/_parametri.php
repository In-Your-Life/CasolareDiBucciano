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
$ftp_host = "localhost"; 
$ftp_id = "casolaredibucciano";
$ftp_pw = "oppli097uth";


// Dati necessari alla connessione del Database

$user = "casolaredibuccia";
$password = "oppli097uth";
$database = "casolaredibucciano";
$host = "localhost";

// Mi connetto al Database
$connessione=mysql_connect($host, $user, $password);
mysql_select_db($database, $connessione) or die ("Non riesco a collegarmi al DB");

// Dati per l'invio mail
$email_azienda = "info@casolaredibucciano.com";
$url_admin = $url_azienda."admin";

// Lingue
$lingua['ita'] 					= 		1; // Italiano
$lingua['eng'] 					= 		0; // Inglese
$lingua['fra'] 					= 		0; // Francese
$lingua['deu'] 					= 		0; // Tedesco
$lingua['hol']		 			= 		0; // Olandese
$lingua['spa'] 					= 		0; // Spagnolo
$lingua['por']		 			= 		0; // Portoghese


//INDICA QUALI SONO I NOMI DEI MODULI (tra i presenti) DEFINITI standard e con la stessa struttura
// vengono gestiti dallo stesso script
$standardMod=array("offerte","prezzi","paragrafi"); 

// Moduli


$moduli['offerte'] 				= 		1; // prodotti

$moduli['stagioni'] 				= 		1; // prodotti

$moduli['prezzi'] 				= 		1; // prodotti

$moduli['paragrafi'] 				= 		1; // prodotti

//$moduli['sottotipologie'] 			= 		1; // sottotipologie




// abilitazione alla modifica/inserimento di nuove tipologie da parte dell'utente
$handle_tipologie['offerte']		    	    = 		0; // 


//numero massimo di file per elemento
$maxfile['offerte'] 				= 	0; // immobili

$maxfile['prezzi'] 				= 	0; // immobili

$maxstagioni					=	1; // 1 in caso di stagione unica
$rev='3';
?>
