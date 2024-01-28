<?php 
if (isset($_FILES['file'])) {
	if (move_uploaded_file($_FILES['file']['tmp_name'],'./1SSegundoTrimestre/' . $_FILES['file']['name'])) {

		echo '<script>
		alert("El docuemnto ha sido enviado con exito");
		window.location.href="PrincipalPS.html";
		</script>';
	} else {
		echo '<script>
		alert("El docuemnto no pudo ser enviado, Intenta de nuevo");
		window.location.href="PrincipalPS.html";
		</script>';

	}
}
