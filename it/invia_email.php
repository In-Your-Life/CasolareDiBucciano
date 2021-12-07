<?php 
/*
session_start();

$mailtimestamp=time();
$formtimestamp=$_POST['formtimestamp'];
$sogliasecondi=5; //per debug
$sogliasecondi=20;

foreach ($_POST as $k=>$value) {
				$_SESSION[$k]=$value;
			}
unset($_SESSION["errmsg"]);

$l=$_POST["l"];
if ($l=='') {
	$l='ita';
}

$errmsg2["ita"]="Campo email obbligatorio!";
$errmsg2["eng"]="Email is mandatory!";
$errmsg2["deu"]="E-Mail ist erforderlich!";
$errmsg2["fra"]="E-Mail est obligatoires!";

$confirm["ita"]="conferma.php";
$confirm["eng"]="http://www.casolaredibucciano.eu/en/conferma.php";



$error=$_SERVER['HTTP_REFERER'];
$conferma=$confirm[$l];

$errore="";
$controllo=$_POST['controllo'];
if ($controllo!="") {
	$errore.=" robot:->".$controllo."<-";
}

if ($formtimestamp>0 and $mailtimestamp>0) {
	$differenza=$mailtimestamp-$formtimestamp;
	if ($differenza<$sogliasecondi) {
		$errore.=" tempi non rispettati ($differenza secondi < $sogliasecondi) -> robot";
	}
} else {
	$errore.=" tempi non rispettati -> robot";
}


if($errore){
	$emailDestinatario="support@inyourlife.info";
	$pntMail=new sentMail();
	$pntMail->setMittente($_SESSION['email']);
	$pntMail->setDestinatario($emailDestinatario);
	$text=stripslashes(htmlspecialchars($_POST['richieste_particolari'], ENT_QUOTES));
	$pntMail->setTesto("<b>Nome e Cognome:</b> ".$_SESSION['nome']."<br>
	<b>Telefono:</b> ".$_SESSION['telefono']."<br>
	<b>Numero adulti:</b> ".$_SESSION['n_adulti']."<br>
	<b>Numero bambini:</b> ".$_SESSION['n_bambini']."<br>
	<b>Arrivo:</b> ".$_SESSION['arrivo']."<br>
	<b>Partenza:</b> ".$_SESSION['partenza']."<br>
	
	<b>E-mail:</b> ".$_SESSION['email']."<br><b>Richieste:</b> ".$text."<br>".$errore);
	$pntMail->setOggetto('ERRORE: Richiesta inviata dal sito www.casolaredibucciano.it');
	$pntMail->inviaMail();
	header("location: /index.php");
} else {

if ($_POST['email']=='') {
			foreach ($_POST as $k=>$value) {
				$_SESSION[$k]=$value;
			}
			$_SESSION["errmsg"]=$errmsg2[$l];
			header("location: ".$error);
			exit;	
}

if ($_POST['copia_mittente']!=NULL) {
$email=$_POST['email'];
$emailDestinatario = "info@casolaredibucciano.com, support@inyourlife.info, ".$email;
//$emailDestinatario = "chiara.rostagno@inyourlife.info, $email";
} else {
$emailDestinatario = "info@casolaredibucciano.com, support@inyourlife.info";
//$emailDestinatario = "chiara.rostagno@inyourlife.info";
}
$pntMail=new sentMail();
$pntMail->setMittente($_SESSION['email']);
$pntMail->setDestinatario($emailDestinatario);
$text=stripslashes(htmlspecialchars($_POST['richieste_particolari'], ENT_QUOTES));
$pntMail->setTesto("<b>Nome e Cognome:</b> ".$_SESSION['nome']."<br>
	<b>Telefono:</b> ".$_SESSION['telefono']."<br>
	<b>Numero adulti:</b> ".$_SESSION['n_adulti']."<br>
	<b>Numero bambini:</b> ".$_SESSION['n_bambini']."<br>
	<b>Arrivo:</b> ".$_SESSION['arrivo']."<br>
	<b>Partenza:</b> ".$_SESSION['partenza']."<br>

<b>E-mail:</b> ".$_SESSION['email']."<br><b>Richieste:</b> ".$text."<br>");

$pntMail->setOggetto('Richiesta inviata dal sito www.casolaredibucciano.it');
if($pntMail->inviaMail()) {
	// va alla pagina di conferma 
		foreach ($_SESSION as $k=>$s) {
			$_SESSION[$k]='';
		}
		header("location: ".$conferma);
	
} else
	header("location: ".$error);
}

class sentMail{
	//dichiarazione delle propietà
	var $testo,$mittente,$destinatario,$oggetto,$errore,$titolo,$content,$replay,$nomeFile,$indFile,$fType,$inte;
	
	//metodo costruttore
	function sentMail(){		
		$this->destinatario=array();
		$this->errore=array();
		$this->content='multipart/alternative';
	}
	
	//metodo che imposta il mittende che invia la mail
	function setMittente($inMittende){
		$this->mittente=$inMittende;
	}
	
	//metodo che imposta il contenuto della mail
	function setTesto($inTesto){
		$this->testo=$inTesto;
	}
	
	//metodo che mimposta l'oggetto della mail
	function setOggetto($inOggetto){
		$this->oggetto=$inOggetto;
	}
	//metodo che imposta il nome del file
	function setNomeFile($inFile){
		$this->nomeFile=$inFile;
	}
	
	//metodo che imposta l'indirizzo del file
	function setIndFile($inFile){
		$this->indFile=$inFile;
	}
	
	//metodo che imposta il type del file
	function setFileType($inFile){
		$this->fType=$inFile;
	}
	
	//metodo che imposta la mail per la risposta
	function setReplay($inReplay){
		$this->replay=$inReplay;
	}
	
	//metodo che imposta il content delle mail
	function setContent($inCont){
		$this->content=$inCont;
	}
	
	//metodo che imposta il destinatario della mail
	function setDestinatario($inDestinatario){
		if(is_array($inDestinatario))
			$this->destinatario=$inDestinatario;
		else{
			$tmpDet=explode(',',$inDestinatario);
			$this->destinatario=$tmpDet;
		}
	}
	
	//metodo che imposta le intestazioni della mail
	function setInte($inValue){$this->inte=$inValue;}
	
	//metodo che imposta il titolo della mail
	function setTitolo($inTitolo){$this->titolo=$inTitolo;}
	
	//metodo che restitusce l'errore
	function getErrore(){return $this->errore;}
	
	//metodo che invia la mail
	function inviaMail(){
		$mess="<html><head>
		<meta http-equiv=Content-Type content=\"text/html; charset=iso-8859-1\">
		<title>$this->titolo</title>
		$this->inte
		</head>
		<body bgColor=#ffffff link=#333333 alink=#333333 vlink=#333333>
		$this->testo
		</body></html>";
		$intestazioni = "From: $this->mittente\n";
		($this->replay!='') ? $intestazioni.="Replay-to:".$this->replay."\n" : "\n";
		$intestazioni.="X-Mailer: Sismail Web Email Interface\nMIME-version: 1.0\nContent-type: $this->content;\n boundary=\"Message-Boundary\"\n";
		($this->nomeFile) ? $intestazioni.="\nContent-transfer-encoding: 7BIT\nX-attachments: $this->nomeFile" : '';
		$body_top="--Message-Boundary\n";
		$body_top.="Content-type: text/html; charset=iso-8859-1\n"; 
		$body_top.="Content-transfer-encoding: 7BIT\n"; 
		$body_top.="Content-description: Mail message body\n\n";  
		$msg_body=$body_top.$mess;
		if($this->nomeFile!=''){
			$f=fopen($this->indFile,'r');
			$contenuto=fread($f,filesize($this->indFile));
			$enco_att=chunk_split(base64_encode($contenuto));
			fclose($f);
			if($this->fType!='' && $this->indFile!=''){
				$msg_body .= "\n\n--Message-Boundary\n";
				$msg_body .= "Content-type: $this->fType; name=\"$this->nomeFile\"\n";
				$msg_body .= "Content-Transfer-Encoding: BASE64\n";
				$msg_body .= "Content-disposition: attachment; filename=\"$this->nomeFile\"\n\n";
				$msg_body .= "$enco_att\n";
				$msg_body .= "--Message-Boundary--\n";
			}
		}
		foreach($this->destinatario as $tmpIndex=>$tmpValue){
			if(!mail($tmpValue,$this->oggetto,$msg_body,$intestazioni))
				return FALSE;
		}
		return TRUE;
	}
}
*/
?>