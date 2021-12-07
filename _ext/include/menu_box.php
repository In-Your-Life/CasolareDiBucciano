<?php

if ($idl=="_ita") {
	

		if($idp==0) {
			
			
		
			
			echo '<div id="box1">';
				echo '<ul id="nav">';
				if (($idp>=1) and  ($idp<=3)) {
echo '<li ><a href="#" style="color:#fff;" class="select">&raquo;&nbsp;AZIENDA AGRICOLA</a>';
echo '<ul>';
for($i=1;$i<=3;$i++) {
	echo '<li><a href="it/'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:underline; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_ita[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';
				} else {
					
				echo '<li><a href="#" style="color:#fff;" class="select">&raquo;&nbsp;AZIENDA AGRICOLA</a>';
echo '<ul>';
for($i=1;$i<=3;$i++) {
	echo '<li><a href="it/'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_ita[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';	
				
				}		
echo '</div>';

echo '<div id="box2">';
echo '<ul id="nav_2">';
				if (($idp>=4) and  ($idp<=6)) {
echo '<li><a href="#" style="color:#fff" class="select">&raquo;&nbsp;AGRITURISMO</a>';
echo '<ul>';
for($i=4;$i<=6;$i++) {
	echo '<li><a href="it/'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:underline; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_ita[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';
				} else {
					
				echo '<li><a href="#" style="color:#fff;" class="select">&raquo;&nbsp;AGRITURISMO</a>';
echo '<ul>';
for($i=4;$i<=6;$i++) {
	echo '<li><a href="it/'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_ita[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';	
				
				}
echo '</div>';

echo '<div id="box3">';
			echo '<ul id="nav_3">';
for($i=8;$i<=8;$i++) {
	if ($idp==8) {
echo '<li><a href="it/'.$href_ita[$i].'" title="'.$alt_ita[$i].'"  style="color:#fff;" class="select">&raquo;&nbsp;'.$label_ita[$i].'</a></li>';
	} else {
echo '<li><a href="it/'.$href_ita[$i].'" title="'.$alt_ita[$i].'"  style="color:#fff;" class="select">&raquo;&nbsp;'.$label_ita[$i].'</a></li>';		
	}
}
echo '</ul></div>';

echo '<div id="box4">';
echo '<ul id="nav_4">';
for($i=9;$i<=9;$i++) {
	if ($idp==9) {
echo '<li><a href="it/'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="color:#fff;" class="select">&raquo;&nbsp;'.$label_ita[$i].'</a></li>';
	} else {
echo '<li><a href="it/'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="color:#fff;" class="select">&raquo;&nbsp;'.$label_ita[$i].'</a></li>';		
	}
}
echo '</ul></div>';


echo '<div id="box5">';
				echo '<ul id="nav_5">';
				if (($idp>=11) and  ($idp<=15)) {
echo '<li><a href="it/'.$href_ita[$i].'" style="color:#fff;" class="select"><a href="it/'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="color:#fff;">&raquo;&nbsp;'.$label_ita[$i].'</a>';
echo '<ul>';
for($i=11;$i<=15;$i++) {
	echo '<li><a href="it/'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:underline; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_ita[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';
				} else {
					
				echo '<li><a href="it/'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="color:#fff;" class="select">&raquo;&nbsp;'.$label_ita[$i].'</a>';
echo '<ul>';
for($i=11;$i<=15;$i++) {
	echo '<li><a href="it/'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_ita[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';	
				
				}		
echo '</div>';


	
		} else {
			
			
			
			
			
				
			echo '<div id="box1_int">';
				echo '<ul id="nav">';
				if (($idp>=1) and  ($idp<=3)) {
echo '<li><a href="#" style="color:#333;" class="select">&raquo;&nbsp;AZIENDA AGRICOLA</a>';
echo '<ul>';
for($i=1;$i<=3;$i++) {
 if($idp==$i) {
	echo '<li><a href="'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:underline; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_ita[$i].'</a></li>';
} else {
	echo '<li><a href="'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_ita[$i].'</a></li>';
	
}}
echo '</ul><div class="clear"></div></li></ul>';


				} else {
					
				echo '<li><a href="#" style="color:#fff;" class="select">&raquo;&nbsp;AZIENDA AGRICOLA</a>';
echo '<ul>';
for($i=1;$i<=3;$i++) {
	echo '<li><a href="'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_ita[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';	
				
				}		
echo '</div>';

echo '<div id="box2_int">';
				echo '<ul id="nav_2">';
				if (($idp>=4) and  ($idp<=6)) {
echo '<li><a href="#" style="color:#333;" class="select">&raquo;&nbsp;AGRITURISMO</a>';
echo '<ul>';
for($i=4;$i<=6;$i++) {
 if($idp==$i) {
	echo '<li><a href="'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:underline; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_ita[$i].'</a></li>';
} else {
	echo '<li><a href="'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_ita[$i].'</a></li>';
	
}}
echo '</ul><div class="clear"></div></li></ul>';


				} else {
					
				echo '<li><a href="#" style="color:#fff;" class="select">&raquo;&nbsp;AGRITURISMO</a>';
echo '<ul>';
for($i=4;$i<=6;$i++) {
	echo '<li><a href="'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_ita[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';	
				
				}		
echo '</div>';
echo '<div id="box3_int">';
			echo '<ul id="nav_3">';
for($i=8;$i<=8;$i++) {
	if ($idp==8) {
echo '<li><a href="'.$href_ita[$i].'" title="'.$alt_ita[$i].'"  style="color:#333;" class="select">&raquo;&nbsp;'.$label_ita[$i].'</a></li>';
	} else {
echo '<li><a href="'.$href_ita[$i].'" title="'.$alt_ita[$i].'"  style="color:#fff;" class="select">&raquo;&nbsp;'.$label_ita[$i].'</a></li>';		
	}
}
echo '</ul></div>';

echo '<div id="box4_int">';
echo '<ul id="nav_4">';
for($i=9;$i<=9;$i++) {
	if ($idp==9) {
echo '<li><a href="'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="color:#333;" class="select">&raquo;&nbsp;'.$label_ita[$i].'</a></li>';
	} else {
echo '<li><a href="'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="color:#fff;" class="select">&raquo;&nbsp;'.$label_ita[$i].'</a></li>';		
	}
}
echo '</ul></div>';


echo '<div id="box5_int">';
				echo '<ul id="nav_5">';
				if (($idp>=10) and  ($idp<=15)) {
echo '<li><a href="'.$href_ita[$i].'" style="color:#ccc;" class="select">&raquo;&nbsp;'.$label_ita[$i].'</a>';
echo '<ul>';
for($i=11;$i<=15;$i++) {
	if($idp==$i) {
	echo '<li><a href="'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:underline; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_ita[$i].'</a></li>';
} else {
	echo '<li><a href="'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_ita[$i].'</a></li>';
	
}}
echo '</ul><div class="clear"></div></li></ul>';
				} else {
					
				echo '<li><a href="'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="color:#fff;" class="select">&raquo;&nbsp;'.$label_ita[$i].'</a>';
echo '<ul>';
for($i=11;$i<=15;$i++) {
	echo '<li><a href="'.$href_ita[$i].'" title="'.$alt_ita[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_ita[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';	
				
				}		
echo '</div>';	
			
		
		}
		
}









if ($idl=="_eng") {
	

		if($idp==0) {
			
			
		
			
			echo '<div id="box1">';
				echo '<ul id="nav">';
				if (($idp>=1) and  ($idp<=3)) {
echo '<li ><a href="#" style="color:#fff;" class="select">&raquo;&nbsp;THE FARM</a>';
echo '<ul>';
for($i=1;$i<=3;$i++) {
	echo '<li><a href="en/'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:underline; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_eng[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';
				} else {
					
				echo '<li><a href="#" style="color:#fff;" class="select">&raquo;&nbsp;THE FARM</a>';
echo '<ul>';
for($i=1;$i<=3;$i++) {
	echo '<li><a href="en/'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_eng[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';	
				
				}		
echo '</div>';

echo '<div id="box2">';
echo '<ul id="nav_2">';
				if (($idp>=4) and  ($idp<=6)) {
echo '<li><a href="#" style="color:#fff" class="select">&raquo;&nbsp;AGRITURISMO</a>';
echo '<ul>';
for($i=4;$i<=6;$i++) {
	echo '<li><a href="en/'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:underline; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_eng[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';
				} else {
					
				echo '<li><a href="#" style="color:#fff;" class="select">&raquo;&nbsp;AGRITURISMO</a>';
echo '<ul>';
for($i=4;$i<=6;$i++) {
	echo '<li><a href="en/'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_eng[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';	
				
				}
echo '</div>';

echo '<div id="box3">';
			echo '<ul id="nav_3">';
for($i=8;$i<=8;$i++) {
	if ($idp==8) {
echo '<li><a href="en/'.$href_eng[$i].'" title="'.$alt_eng[$i].'"  style="color:#fff;" class="select">&raquo;&nbsp;'.$label_eng[$i].'</a></li>';
	} else {
echo '<li><a href="en/'.$href_eng[$i].'" title="'.$alt_eng[$i].'"  style="color:#fff;" class="select">&raquo;&nbsp;'.$label_eng[$i].'</a></li>';		
	}
}
echo '</ul></div>';

echo '<div id="box4">';
echo '<ul id="nav_4">';
for($i=9;$i<=9;$i++) {
	if ($idp==9) {
echo '<li><a href="en/'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="color:#fff;" class="select">&raquo;&nbsp;'.$label_eng[$i].'</a></li>';
	} else {
echo '<li><a href="en/'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="color:#fff;" class="select">&raquo;&nbsp;'.$label_eng[$i].'</a></li>';		
	}
}
echo '</ul></div>';


echo '<div id="box5">';
				echo '<ul id="nav_5">';
				if (($idp>=11) and  ($idp<=15)) {
echo '<li><a href="en/'.$href_eng[$i].'" style="color:#fff;" class="select"><a href="it/'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="color:#fff;">&raquo;&nbsp;'.$label_eng[$i].'</a>';
echo '<ul>';
for($i=11;$i<=15;$i++) {
	echo '<li><a href="en/'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:underline; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_eng[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';
				} else {
					
				echo '<li><a href="en/'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="color:#fff;" class="select">&raquo;&nbsp;'.$label_eng[$i].'</a>';
echo '<ul>';
for($i=11;$i<=15;$i++) {
	echo '<li><a href="en/'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_eng[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';	
				
				}		
echo '</div>';


	
		} else {
			
			
			
			
			
				
			echo '<div id="box1_int">';
				echo '<ul id="nav">';
				if (($idp>=1) and  ($idp<=3)) {
echo '<li><a href="#" style="color:#333;" class="select">&raquo;&nbsp;THE FARM</a>';
echo '<ul>';
for($i=1;$i<=3;$i++) {
 if($idp==$i) {
	echo '<li><a href="'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:underline; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_eng[$i].'</a></li>';
} else {
	echo '<li><a href="'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_eng[$i].'</a></li>';
	
}}
echo '</ul><div class="clear"></div></li></ul>';


				} else {
					
				echo '<li><a href="#" style="color:#fff;" class="select">&raquo;&nbsp;THE FARM</a>';
echo '<ul>';
for($i=1;$i<=3;$i++) {
	echo '<li><a href="'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_eng[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';	
				
				}		
echo '</div>';

echo '<div id="box2_int">';
				echo '<ul id="nav_2">';
				if (($idp>=4) and  ($idp<=6)) {
echo '<li><a href="#" style="color:#333;" class="select">&raquo;&nbsp;AGRITURISMO</a>';
echo '<ul>';
for($i=4;$i<=6;$i++) {
 if($idp==$i) {
	echo '<li><a href="'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:underline; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_eng[$i].'</a></li>';
} else {
	echo '<li><a href="'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_eng[$i].'</a></li>';
	
}}
echo '</ul><div class="clear"></div></li></ul>';


				} else {
					
				echo '<li><a href="#" style="color:#fff;" class="select">&raquo;&nbsp;AGRITURISMO</a>';
echo '<ul>';
for($i=4;$i<=6;$i++) {
	echo '<li><a href="'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_eng[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';	
				
				}		
echo '</div>';
echo '<div id="box3_int">';
			echo '<ul id="nav_3">';
for($i=8;$i<=8;$i++) {
	if ($idp==8) {
echo '<li><a href="'.$href_eng[$i].'" title="'.$alt_eng[$i].'"  style="color:#333;" class="select">&raquo;&nbsp;'.$label_eng[$i].'</a></li>';
	} else {
echo '<li><a href="'.$href_eng[$i].'" title="'.$alt_eng[$i].'"  style="color:#fff;" class="select">&raquo;&nbsp;'.$label_eng[$i].'</a></li>';		
	}
}
echo '</ul></div>';

echo '<div id="box4_int">';
echo '<ul id="nav_4">';
for($i=9;$i<=9;$i++) {
	if ($idp==9) {
echo '<li><a href="'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="color:#333;" class="select">&raquo;&nbsp;'.$label_eng[$i].'</a></li>';
	} else {
echo '<li><a href="'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="color:#fff;" class="select">&raquo;&nbsp;'.$label_eng[$i].'</a></li>';		
	}
}
echo '</ul></div>';


echo '<div id="box5_int">';
				echo '<ul id="nav_5">';
				if (($idp>=10) and  ($idp<=15)) {
echo '<li><a href="'.$href_eng[$i].'" style="color:#ccc;" class="select">&raquo;&nbsp;'.$label_eng[$i].'</a>';
echo '<ul>';
for($i=11;$i<=15;$i++) {
	if($idp==$i) {
	echo '<li><a href="'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:underline; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_eng[$i].'</a></li>';
} else {
	echo '<li><a href="'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_eng[$i].'</a></li>';
	
}}
echo '</ul><div class="clear"></div></li></ul>';
				} else {
					
				echo '<li><a href="'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="color:#fff;" class="select">&raquo;&nbsp;'.$label_eng[$i].'</a>';
echo '<ul>';
for($i=11;$i<=15;$i++) {
	echo '<li><a href="'.$href_eng[$i].'" title="'.$alt_eng[$i].'" style="background-color:#EDEBE7;  font-weight:bold; text-decoration:none; background-image:url(_ext/img/icona_menu.jpg); background-repeat:no-repeat; background-position:right center;">'.$label_eng[$i].'</a></li>';
}
echo '</ul><div class="clear"></div></li></ul>';	
				
				}		
echo '</div>';	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		}
		
}
		
	
?>