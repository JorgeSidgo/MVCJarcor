<?php

class ControladorFrontalFunc
{

	private $controller;

	public function __construct($ctrl)
	{
		$this->controller = $ctrl;
	}

	public function cargarController()
	{
		$controlador = ucwords($this->controller).'Controller';

		$strFileController = 'controller/'.$controlador.'.php';

		if(!is_file($strFileController))
		{
			$strFileController = 'controller/'.ucwords(CONTROLADOR_DEFECTO).'Controller.php';
		}

		require_once $strFileController;

		$controllerObj = new $controlador();

		return $controllerObj;
	}

	public function cargarAccion($controllerObj, $action)
	{
		$accion = $action;
		$controllerObj = $controllerObj."Controller";
		$controllerObj = new $controllerObj();
		$controllerObj->$accion();
	}

	public function lanzarAccion()
	{
		$controllerObj = $this->controller;
		if(isset($_GET["accion"]) && method_exists($controllerObj, $_GET["action"]))
		{
			$this->cargarAccion($controllerObj, $GET["action"]);
		}	
		else
		{
			$this->cargarAccion($controllerObj, ACCION_DEFECTO);
		}
	}
}
