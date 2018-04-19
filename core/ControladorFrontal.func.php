<?php

function cargarController($controller)
{
	$controlador = ucwords($controller).'Controller';

	$strFileController = 'controller/'.$controlador.'.php';

	if(!is_file($strFileController))
	{
		$strFileController = 'controller/'.ucwords(CONTROLADOR_DEFECTO).'Controller.php';
	}

	require_once $strFileController;

	$controllerObj = new $controlador();

	return $controllerObj;
}

function cargarAccion($controller, $action)
{
	$accion = $action;
	$controllerObj = new $controller();
	$controllerObj->$accion();
}

function lanzarAccion($controller)
{
	$controllerObj = new $controller();
	if(isset($_GET["accion"]) && method_exists($controllerObj, $_GET["action"]))
	{
		cargarAccion($controllerObj, $GET["action"]);
	}	
	else
	{
		cargarAccion($controllerObj, ACCION_DEFECTO);
	}
}