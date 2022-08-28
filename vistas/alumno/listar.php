<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>LISTA DE ALUMNOS</h1>
<table border="1">
	<tr>
		<td>firstname</td>
		<td>lastname</td>
		<td>email</td>
		<td>acciones</td>
	</tr>

	<?php while($row = $result->fetch_assoc()) {  ?>
    <tr>
		<td><?php echo $row['nombre'] ?></td>
		<td><?php echo $row["ap"] ?></td>
		<td><?php echo $row["correo"] ?></td>
		<td><a href="../controllers/GestionAlumnosControllers.php?action=editarAlumno&idAlumno=<?php echo $row['id'] ?>">Editar</a> - <a href="">Eliminar</a></td>
	</tr>
  	<?php } ?>

</table>
</body>
</html>