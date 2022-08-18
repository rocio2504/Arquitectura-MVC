<?php


require_once("../models/AlumnoModel.php");

if(isset($_GET['action'])){

	$action = $_GET['action'];


	switch ($action) {
		case 'registrarAlumno':

			$view = 'alumno/nuevo.php';
			include("../vistas/layout.php");
			


			break;


		case 'procesarAlumno':

			$objAlumno = new AlumnoModel();
			$objAlumno->registrarAlumnos($_POST['nombre'],$_POST['ap'],$_POST['correo']);

			break;
		
		case 'listarAlumno':

			$objAlumno = new AlumnoModel();
			$result = $objAlumno->listarAlumnos();

			$view = 'alumno/listar.php';

			include("../vistas/layout.php");

			break;


		case 'editarAlumno':

			$objAlumno = new AlumnoModel();

			$idAlumno = $_GET['idAlumno'];


			$result = $objAlumno->getAlumnoById($idAlumno);



			$view = 'alumno/editar.php';

			include("../vistas/layout.php");

			break;


		case 'actualizarAlumno':

			$objAlumno = new AlumnoModel();
			$objAlumno->actualizarAlumno($_POST['nombre'],$_POST['ap'],$_POST['correo'],$_POST['idAlumno']);


			exit;

			break;


		case 'registrarCurso':
			echo 'registrarCurso';
			break;

		case 'listarCurso':
			echo 'listarCurso';
			break;


		default:
			echo 'NO SE ENCONTRO LA PAGINA';
			break;
	}



	 
}else{
	echo 'NO SE ENCONTRO LA PAGINA';
}
