<?php

class Conexion
{
	private $_bd = 'gestionalumnos' ;
	private $_server = 'localhost' ;
	private $_user = 'root' ;
	private $_pass = '';


	public function conectar(){

		$conn = new mysqli($this->_server, $this->_user, $this->_pass,$this->_bd);
		if ($conn->connect_error) {
		 	die("Connection failed: " . $conn->connect_error);
		}

		return $conn;
	}


}


$obj = new Conexion();
