<?php 	
//require_once($_SERVER['DOCUMENT_ROOT']."/google_analytics.php");
require_once($_SERVER['DOCUMENT_ROOT']."/admin/_parametri.php");
// $codice_analitycs="";
echo "
<!-- Google Analytics -->
<script>
var _gaq = _gaq || [];
_gaq.push(['_setAccount', '".$codice_analitycs."']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>
<!-- End Google Analytics -->
";

?>
