<?php 

class Conectar
{
	private $driver;
	private $host;
	private $user;
	private $pass;
	private $database;
	private $charset;

	function __construct()
	{
		$dataCon = require_once 'config/database.php';

		$this->driver 	= $dataCon["driver"];
		$this->host   	= $dataCon["host"];
		$this->user   	= $dataCon["user"];
		$this->pass   	= $dataCon["pass"];
		$this->database = $dataCon["database"];
		$this->charset  = $dataCon["charset"];
	}

	public function conexion()
	{
		if(($this->driver == 'mysql') || ($this->driver == null))
		{
			$con = new mysqli($this->host, $this->user, $this->pass, $this->database);

			$con->query("SET NAMES '".$this->charset."'");
		} 

		return $con;
	}

}