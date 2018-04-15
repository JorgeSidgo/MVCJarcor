<?php 

class UsuarioModelo extends ModeloBase
{
	private $table;

	public function __construct()
	{
		$this->table = "usuarios";

		parent:: __construct($this->table);
	}

	public function getUnUsuario()
	{
		$query = "SELECT * FROM usuarios where email = 'guillermo.jandres@gmai.com'";

		$usuario = $this->ejecutarSQL($query);

		return $usuario;
	}
}