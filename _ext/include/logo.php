<?php



for($i=0;$i<=19;$i++) {
	
	if ($idp==0) {

		if (($idl=="_ita") and ($i==$idp)) echo '<a href="http://www.casolaredibucciano.it" title="'.$alt_ita[$i].'"><img src="_ext/img/'.$logo_ita[$i].'" alt="'.$alt_ita[$i].'" /></a><br />
<span class="frase_logo">Agriturismo a San Gimignano in Toscana</span>';
	
	} else {
		
	if (($idl=="_ita") and ($i==$idp)) echo '<a href="http://www.casolaredibucciano.it" title="'.$alt_ita[$i].'"><img src="../_ext/img/'.$logo_ita[$i].'" alt="'.$alt_ita[$i].'" /></a><br />
<span class="frase_logo">Agriturismo a San Gimignano in Toscana</span>';
		
		
	}
	
	
	
	
	
	
	if ($idp==0) {

		if (($idl=="_eng") and ($i==$idp)) echo '<a href="http://www.casolaredibucciano.eu" title="'.$alt_eng[$i].'"><img src="_ext/img/'.$logo_eng[$i].'" alt="'.$alt_eng[$i].'" /></a><br />
<span class="frase_logo">Agriturismo in San Gimignano - Tuscany</span>';
	
	} else {
		
	if (($idl=="_eng") and ($i==$idp)) echo '<a href="http://www.casolaredibucciano.eu" title="'.$alt_eng[$i].'"><img src="../_ext/img/'.$logo_eng[$i].'" alt="'.$alt_eng[$i].'" /></a><br />
<span class="frase_logo">Agriturismo in San Gimignano - Tuscany</span>';
		
		
	
		}
		
		
		
		
		
		
		if ($idp==0) {

		if (($idl=="_deu") and ($i==$idp)) echo '<a href="http://www.agriturismosangimignano.de" title="'.$alt_eng[$i].'"><img src="_ext/img/'.$logo_eng[$i].'" alt="'.$alt_eng[$i].'" /></a><br />
<span class="frase_logo">Agriturismo in San Gimignano - Toskana</span>';
	
	}
		
		
}
		
?>
