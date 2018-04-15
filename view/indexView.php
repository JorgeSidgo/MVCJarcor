<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>MVC con PHP y MySQL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
	<form action="<?php echo $helper->url("usuarios", "crear"); ?>" method="POST" class="col-lg-5">
		<h3>Añadir Usuario</h3>
		<hr/>
		Nombre: <input type="text" name="nombre" class="form-control">
		Apellido: <input type="text" name="apellido" class="form-control">
		E-mail: <input type="text" name="email" class="form-control">
		Contraseña: <input type="password" name="password" class="form-control">
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
	<div class="col-lg-7">
		<h3>Usuarios</h3>
		<hr>
	</div>
	<section class="col-lg-7 usuario" style="height:400px; overflow-y: scroll;">
		<?php foreach($allusers as $user) { ?>
		<?php echo $user->id; ?>
		<?php echo $user->nombre; ?>
		<?php echo $user->apellido; ?>
		<?php echo $user->email; ?>
		<div class="right">
			<a href="<?php echo $helper->url("usuarios","borrar"); ?>" id="<?php echo $user->id; ?>" class="btn btn-danger">Borrar</a>
		</div>
		<hr>
		<?php } ?>
	</section>
</body>
</html>