<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Prueba Laboral</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<body>

<div>
	<div>
		<?php echo anchor('/usercontroller/create', 'Crear Usuario');?>
	</div>

	<div id="body">
		<?php
		if ($users) {
			?>
			<table class="datatable">
				<thead>
				<tr>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Telefono</th>
					<th>dirección</th>
				</tr>
				</thead>
				<tbody>
				<?php
				$i = 0;
				foreach ($users as $user) {
					$col_class = ($i % 2 == 0 ? 'odd_col' : 'even_col');
					$i++;
					?>
					<tr class="<?php echo $col_class; ?>">
						<td>
							<?php
							echo $user->name; ?>
						</td>
						<td>
							<?php echo $user->email; ?>
						</td>
						<td>
							<?php echo $user->telefono; ?>
						</td>
						<td>
							<?php echo $user->direccion; ?>
						</td>
						<td>
							<?php echo anchor('/usercontroller/update/' . $user->_id, 'Actualizar'); ?>

							<?php echo anchor('/usercontroller/delete/' . $user->_id, 'Eliminar', array('onclick' => "return confirm('Deseas eliminar este registro')")); ?>
						</td>
					</tr>
					<?php
				}
				?>
				</tbody>
			</table>
			<?php
		} else {
			echo '<div style="color:red;"><p>No Record Found!</p></div>';
		}
		?>
	</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>
