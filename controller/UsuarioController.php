<?php

class UsuarioController extends ControladorBase
{
	public function __construct()
	{
		parent:: __construct();
	}

	public function indexAction()
	{
		$usuario = new Usuario();

		$allUsers = $usuario->getAll();

		$this->view("index", array("allUsers" => $allUsers));
	}

	public function crear()
	{
		if(isset($_POST["nombre"]))
		{
			$usuario = new Usuario();

			$usuario->setNombre($_POST["nombre"]);
			$usuario->setApellido($_POST["apellido"]);
			$usuario->setEmail($_POST["email"]);
			$usuario->setPassword($_POST["password"]);

			$save = $usuario->save();
		}
		$this->redirect("Usuario", "index");
	}

	public function borrar()
	{
		if(isset($_GET["id"]))
		{
			$id = (int)$_GET["id"];
			$usuario = new Usuario();

			$usuario->deleteById($id);
		}

		$this->redirect();
	}
}