// Read a page's GET URL variables and return them as an associative array.
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');

    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }

    return vars;
}
var hash = getUrlVars(); 
if (!(hash['m']=='no')) {
	// Valuto tramite la funzione checkmobile ed eventualmente 
	//reindirizzo alla versione mobile del mio sito
	if (checkmobile(navigator.userAgent)) window.parent.location="http://m.casolaredibucciano.it"
}

//Funzione
function checkmobile(nameApp) {
//alert(nameApp);
//Se e un browser Explorer allora poni la funzione a False
//Setto l'array dei browser dei dispositivi mobile
browser_mobile = new Array("Camino","2.0 MMP","240x320","400X240","Alcatel","Android","AU-MIC","AUDIOVOX-","AvantGo","BlackBerry","Blazer","Cellphone","Danger hiptop","DoCoMo/","Ericsson","EudoraWeb","Googlebot-Mobile","Handheld","HTC_HD2_T58585 Opera","IEMobile","iPad","iPhone","iPod","Klondike","KYOCERA/","LG-","LG/","LGE","MIDP-","MMEF20","MOT-","MSN Mobile Proxy","NetFront","Newt","Nitro","Nokia","Novarra-Vision","Opera Mini","Palm","PalmOS","PalmSource","Panasonic-","PlayStation Portable","portalmmm","Profile/MIDP-","SAGEM-","SAMSUNG","Samsung-","SGH-","SHARP-","SIE-","Smartphone","Sony","SymbianOS","Symbian OS","TS21i-","UP.Browser","UP.Link","webOS","Windows CE","Windows Mobile","Windows Phone","WinWAP","XV6875","YahooSeeker/")
//Scorro l'array se lo userAgent rileva un browser mobile allora restituisco true
for(i=0;i<browser_mobile.length;i++){
//alert(browser_mobile[i]+"\n"+nameApp.indexOf(browser_mobile[i]));
if(nameApp.indexOf(browser_mobile[i]) != -1) return true;
}
//in tutti gli altri casi restituisco falso (Firefox,Opera,etc)
return false;
}
