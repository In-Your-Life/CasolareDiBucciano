<?php
$ch = curl_init();
// set URL and other appropriate options
$admin_old = $_POST[admin_old]==1 ? true : false; //se $admin_old è true: AMMINISTRAZIONE CON GLI SCRIPT PHP DEL CMS LOCALI(presenti in ogni dominio)

curl_setopt($ch, CURLOPT_URL, "http://www.inyourlife.com/_ext/scripts/ajax_services.php?az=11&OP=".$_POST[OP]);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// grab URL and pass it to the browser
$ret = curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);
//******END CURL*******
//echo $ret;
if($ret!="-1")
{
	$url = strtolower($ret);
	if(strpos($url,"www.")===0)
	 list(,$url) = explode("www.",$url); //toglie la stringa www. iniziale	
	
	session_start();
	$_SESSION["url_server"] = $admin_old ? hash("sha512","2RkWLBQeYlml") : "/home/{$url}/public_html/";
	$_SESSION["login_verified"] = "TRUE";
	
	//se l'admin è locale (NON E' IL TIPO 0 su tb_domini) allora vai al verify locale
	//, altrimenti va al verify.php nella dir corrente (su amministrazione.inyourlife.info)
	header("Location: ".($admin_old ? "http://www.{$url}/admin/verify.php" : "verify.php"));
}
else
{
	die();	
}
?>