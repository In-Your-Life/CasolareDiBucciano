<?php



for($i=0;$i<=18;$i++) {
	
	if ($idp==0) {

		if (($idl=="_ita") and ($i==$idp)) echo '<a href="javascript:Preferiti()"><img src="_ext/img/'.$preferiti_ita[$i].'" alt="'.$alt_ita[$i].'"/><br/>aggiungi ai Preferiti</a>';
		
				
	} else {
		
		if (($idl=="_ita") and ($i==$idp)) echo '<a href="javascript:Preferiti()"><img src="../_ext/img/'.$preferiti_ita[$i].'" alt="'.$alt_ita[$i].'"/><br/>aggiungi ai Preferiti</a>';
		
		
	}
	
	
	
	
	
	
	if ($idp==0) {

		if (($idl=="_eng") and ($i==$idp)) echo '<a href="javascript:Preferiti()"><img src="_ext/img/'.$preferiti_eng[$i].'" alt="'.$alt_eng[$i].'"/><br/>add to Favorite</a>';
		
				
	} else {
		
		if (($idl=="_eng") and ($i==$idp)) echo '<a href="javascript:Preferiti()"><img src="../_ext/img/'.$preferiti_eng[$i].'" alt="'.$alt_eng[$i].'"/><br/>add to Favorite</a>';
		
		
	}
		
		}
		
?>
