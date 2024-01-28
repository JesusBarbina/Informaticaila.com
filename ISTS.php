<?php 	
$conexion =mysqli_connect('localhost','id21546463_salvadorbarbina','Sa.060800','id21546463_informaticaila');

$usuario = utf8_decode($_POST['usuario']);
$contrasena= utf8_decode($_POST['contrasena']);



$sql="SELECT Usuario,Contrasena from AlumnosTS where usuario='$usuario' and contrasena='$contrasena';";

$result=mysqli_query($conexion,$sql);
if ($result->num_rows>0) { ?>
	<script>
	window.location.href='PrincipalTS.html';
	</script>
	<?php 
}else{ ?>
	<script>
	window.location.href='IS3SEC.html';
	</script>
	<?php 
}
?>