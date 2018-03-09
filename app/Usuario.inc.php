<?php

class Usuario {

	private $id_usuario;
	private $nombre;
	private $apellido;
	private $username;
	private $clave;

	public function __construct($id_usuario, $nombre, $apellido, $username, $clave)
	{
		$this -> id = $id_usuario;
		$this -> nombre = $nombre;
		$this -> apellido = $apellido;
		$this -> usuario = $username;
		$this -> clave = $clave;
	}

/* GET */

	public function get_id() {
		return $this -> id;
	}

	public function get_nombre() {
		return $this -> nombre;
	}

	public function get_apellido() {
		return $this -> apellido;
	}

	public function get_usuario() {
		return $this -> usuario;
	}

	public function get_clave() {
		return $this -> clave;
	}

/* SET */

	public function set_nombre($nombre) {
		$this -> nombre = $nombre;
	}

	public function set_apellido($apellido) {
		$this -> apellido = $apellido;
	}


	public function set_usuario($usuario) {
		return $this -> usuario;
	}

	public function set_clave($clave) {
		return $this -> clave;
	}
}
 ?>