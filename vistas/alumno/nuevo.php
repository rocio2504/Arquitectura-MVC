<h1>FORMULARIO REGISTRO DE ALUMNOS</h1>

<?php 

if(isset($_GET['res'])){

	if ($_GET['res'] == 'exito') {
		$msg = 'El registro se guardo satisfactoriamente';
	}

}else{
	$msg = "";

}

?>

<?php if(!empty($msg)){  ?>
<span style="color:green;"><strong><?php echo $msg ?></strong></span>
<?php } ?>

<form action="GestionAlumnosControllers.php?action=procesarAlumno" method="POST">
	
	Nombre<input type="text" name="nombre"><br>
	Ap<input type="text" name="ap"><br>
	Correo<input type="text" name="correo"><br>

	<input type="submit" name="">
</form>
