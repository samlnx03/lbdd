<?php
session_start();
if(isset($_SESSION['numveces'])){
	// no es la primera vez
	$_SESSION['numveces']++;
	//ssion_register("numveces");
}
else {
	$_SESSION['numveces']=1;
	//session_register("numveces");
}
?>
<html>
<body>
<?php
echo "Has accedido a esta pagina <b>{$_SESSION['numveces']}</b> veces<br>\n";
?>
</body>
</html>

