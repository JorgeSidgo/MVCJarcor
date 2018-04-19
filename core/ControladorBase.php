<?php 

class ControladorBase
{

	function __construct()
	{
		require_once 'EntidadBase.php';
		require_once 'ModeloBase.php';

		foreach (glob("model/*.php") as $archivo) {
			require_once $archivo;
		}
	}

	public function view($vista, $datos)
	{
		foreach ($datos as $id_assoc => $valor) {
			${$id_assoc} = $valor;
		}

		require_once 'AyudaVistas.php';

		$helper = new AyudaVistas();

		$data = '../view/'.$vista.'View.php';

		require_once $data;
	}

	public function redirect($controlador = CONTROLADOR_DEFECTO, $accion = ACCION_DEFECTO)
	{
		header('location:index.php?controller='.$controlador.'&action='.$action);
	}
}