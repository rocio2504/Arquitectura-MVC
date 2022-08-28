<h1>FORMULARIO DE EDICION DE ALUMNOS</h1>

<?php 

// if(isset($_GET['res'])){

// 	if ($_GET['res'] == 'exito') {
// 		$msg = 'El registro se guardo satisfactoriamente';
// 	}

// }else{
// 	$msg = "";

// }

?>

<?php if(!empty($msg)){  ?>
<span style="color:green;"><strong><?php echo $msg ?></strong></span>
<?php } ?>

<form action="GestionAlumnosControllers.php?action=actualizarAlumno" method="POST">
	
	<?php while($row = $result->fetch_assoc()) {  ?>
	Nombre<input type="text" name="nombre" value="<?php echo $row['nombre'] ?>"><br>
	Ap<input type="text" name="ap" value="<?php echo $row['ap'] ?>"><br>
	Correo<input type="text" name="correo" value="<?php echo $row['correo'] ?>"><br>
	<input type="hidden" name="idAlumno" value="<?php echo $row['id'] ?>" >


	<?php } ?>

	<input type="submit" name="">
</form>
