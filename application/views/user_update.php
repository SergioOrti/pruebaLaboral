<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actualizar Usuario</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<div id="container">
	<h1>Actualizar Usuario</h1>

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
		<input type="hidden" id="id_user" value="<?php echo isset($user)?$user->_id:set_value('_id'); ?>" />
		<h5>Nombre Completo</h5>
		<input type="text" id="usuario" name="name" value="<?php echo isset($user)?$user->name:set_value('name'); ?>" size="50" />

		<h5>Correo</h5>
		<input type="text" id="email" name="email" value="<?php echo isset($user)?$user->email:set_value('email'); ?>" size="50" />

		<h5>Contraseña</h5>
		<input type="text" id="password" name="password" value="<?php echo isset($user)?$user->password:set_value('password'); ?>" size="50" />

		<h5>Telefono</h5>
		<input type="number" id="telefono" name="telefono" value="<?php echo isset($user)?$user->telefono:set_value('telefono'); ?>" size="50" />

		<h5>Dirección</h5>
		<input type="text" id="direccion" name="direccion" value="<?php echo isset($user)?$user->direccion:set_value('direccion'); ?>" size="50" />

		<p><input type="submit" id="actualizar" name="submit" value="Submit"/></p>

		<?php echo form_close(); ?>
	</div>
</div>
<script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="http://localhost/pruebatrabajo/assets/js/create_user.js"></script>
</body>
</html>
