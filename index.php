<?php

require_once 'config/global.php';

require_once 'core/ControladorBase.php';

require_once 'core/ControladorFrontal.func.php';

if(isset($_GET["controller"]))
{
	$controllerObj = cargarController($_GET["controller"]);

	lanzarAccion($controllerObj);
}
else{
	$controllerObj = cargarController(CONTROLADOR_DEFECTO);
	lanzarAccion($controllerObj);
}