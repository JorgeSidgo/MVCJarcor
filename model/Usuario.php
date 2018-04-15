<?php

class Usuario extends EntidadBase
{
	private $id;
	private $nombre;
	private $apellido;
	private $email;
	private $password;

	public function __construct()
	{
		$table = "usuarios";
		parent:: __construct($table);
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nom)
	{
		$this->nombre = $nom;
	}

	public function getApellido()
	{
		return $this->apellido;
	}

	public function setApellido($ape)
	{
		$this->apellido = $ape;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setPassword($pass)
	{
		$this->password = $pass;
	}

	public function save()
	{
		$query = "INSERT INTO usuarios (id, nombre apellido, email, password)
					VALUES(null, 
					'".$this->nombre."',
					'".$this->apellido."',
					'".$this->email."',
					'".$this->password."');";
		$save = $this->getDb()->query($query);

		$this->getDb->error;

		return $save;
	}
}