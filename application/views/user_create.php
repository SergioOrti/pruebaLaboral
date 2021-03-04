<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Prueba - Crear Usuario</title>
	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase.js"></script>
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-firestore.js"></script>

	<!-- TODO: Add SDKs for Firebase products that you want to use
		 https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-analytics.js"></script>

	<script>
		var firebaseConfig = {
			apiKey: "AIzaSyAm1UNih01LWeQi8UpT785OQpONf6YKM8Y",
			authDomain: "usuarios-examen.firebaseapp.com",
			projectId: "usuarios-examen",
			storageBucket: "usuarios-examen.appspot.com",
			messagingSenderId: "1042752487025",
			appId: "1:1042752487025:web:6a5a1066c0ea146a8da5d0",
			measurementId: "G-1Y7LGTREWM"
		};
		firebase.initializeApp(firebaseConfig);
		firebase.analytics();
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>
<body>
<div id="container">
	<h1>Crear Usuario</h1>

	<div>
		<?php echo anchor('/usercontroller', 'Regresar');?>
	</div>

	<div id="body">
		<?php
		if (isset($error)) {
			echo '<p style="color:red;">' . $error . '</p>';
		} else {
			echo validation_errors();
		}
		?>

		<?php
		$attributes = array('name' => 'form', 'id' => 'form');
		echo form_open($this->uri->uri_string(), $attributes);
		?>

		<h5>Nombre Completo</h5>
		<input type="text" id="usuario" name="name" size="50" />

		<h5>Dirección de Correo</h5>
		<input type="text" id="email" name="email"  size="50" />

		<h5>Contraseña</h5>
		<input type="password" id="password" name="password" size="50" />

		<h5>Telefono</h5>
		<input type="number" id="telefono" name="telefono" size="50" />

		<h5>Dirección</h5>
		<input type="text" id="direccion" name="direccion" size="50" />

		<p><input type="submit" id="guardarusuario" name="submit" value="Submit"/></p>

		<?php echo form_close(); ?>
	</div>
</div>
<script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
<script src="http://localhost/pruebatrabajo/assets/js/create_user.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>
