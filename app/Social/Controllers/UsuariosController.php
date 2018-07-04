<?php
namespace Social\Controllers;

use Social\Core\App;
use Social\Core\Route;
use Social\View\View;
use Social\Model\Usuarios;


class UsuariosController{

  public function index()
  {
       require App::$viewPath . "/abm/index.php";
    $usuarios = Usuarios::traerUsuarios();
    View::render ('abm/index', ['usuarios' => $usuarios]);

  }

}
