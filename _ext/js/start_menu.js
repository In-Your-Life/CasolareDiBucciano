<script type="text/javascript">
function startmenu()
{
	document.getElementById('sotto_menu').style.display = "none";
}

function menufunc(menuId)
{
	if(document.getElementById(menuId).style.display == "none")
	{
		startmenu();
		document.getElementById(menuId).style.display = "block";
	}
	else
	{
		startmenu();
	}
}
</script>