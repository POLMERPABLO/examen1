<?php  
/*echo "<h1>hola PHP</h1>";*/
date_default_timezone_set('America/Lima');
echo date("Y-m-d H:i:s");
for ($n=1; $n<=6 ; $n++) { 
	echo "<h$n style='color:#$n$nf$n;'>Cabecera nivel $n</h$n>";
	# code...
}
?>