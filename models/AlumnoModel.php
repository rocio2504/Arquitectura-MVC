<?php
require_once("../config/bd/conexion.php");


class AlumnoModel
{

	private $_nombre;
	private	$_ap;
	private $_correo;
	private $_celular;


	public function registrarAlumnos($nombre,$ap,$correo)
	{



		$objConexion = new Conexion();

		$conn = $objConexion->conectar();


		$this->_nombre = $nombre;
		$this->_ap = $ap;
		$this->_correo = $correo;


		$sql2 = "INSERT INTO alumno (nombre, ap, correo)
		VALUES ('$this->_nombre', '$this->_ap', '$this->_correo')";


		
		if ($conn->query($sql2) === TRUE) {
		  echo "New record created successfully";
		  header('Location: http://localhost/UNAC/PW/S11/ejercicio/controllers/GestionAlumnosControllers.php?action=registrarAlumno&res=exito');
		} else {
		  echo "Error: " . $sql2 . "<br>" . $conn->error;
		}

	}

	public function listarAlumnos()
	{
		$objConexion = new Conexion();
		$conn = $objConexion->conectar();

		$sql = "SELECT id,nombre, ap, correo FROM alumno";
		$result = $conn->query($sql);

		return $result;

	}


	public function getAlumnoById($id)
	{
		$objConexion = new Conexion();
		$conn = $objConexion->conectar();

		$sql = "SELECT id,nombre, ap, correo FROM alumno WHERE id = $id";
		$result = $conn->query($sql);

		return $result;

	}

	public function actualizarAlumno($nombre,$ap,$correo,$id)
	{

		$this->_nombre = $nombre;
		$this->_ap = $ap;
		$this->_correo = $correo;
		$this->_id = $id;

		$objConexion = new Conexion();
		$conn = $objConexion->conectar();

		$sql2 = "UPDATE alumno
		SET nombre = '$this->_nombre', 
			ap = '$this->_ap', 
			correo = '$this->_correo'
		WHERE 
			id = $this->_id
			";


		if ($conn->query($sql2) === TRUE) {
		  echo "New record created successfully";
		  header('Location: http://localhost/UNAC/PW/S13/ejercicio/controllers/GestionAlumnosControllers.php?action=listarAlumno');
		} else {
		  echo "Error: " . $sql2 . "<br>" . $conn->error;
		}

	}

}


// $objAlumno = new Alumno();
// $objAlumno->registrarAlumnos($_POST['nombre'],$_POST['ap'],$_POST['correo']);