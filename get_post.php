<?php

if(isset($_POST))
{
	///file_put_contents("form_session.txt", "");
	foreach ($_POST as $k=>$value) 
	{
		//$_SESSION[$k]=$value;
		
		$var=fopen("form_session.txt","a+");
		fwrite($var, $k."<-->".$value."|-|");
		fclose($var);
	}
	
	
}

?>