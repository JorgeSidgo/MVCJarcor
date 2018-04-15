<?php

require_once 'config/global.php';

require_once 'core/ControladorBase.php';

require_once 'core/ControladorFrontal.func.php';


if(isset($_GET["controller"]))
{
	$cFF = new ControladorFrontalFunc($_GET["controller"]);
	$controllerObj = $cFF->cargarController();

	$cFFlanzarAccion($controllerObj);
}
else{
	$cFF = new ControladorFrontalFunc(CONTROLADOR_DEFECTO);
	$controllerObj = $cFF->cargarController();
	$cFF->lanzarAccion($controllerObj);
}