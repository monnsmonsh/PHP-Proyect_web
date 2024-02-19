<?php

require_once "controllers/routes.controller.php";
require_once "controllers/cursos.controller.php";
require_once "controllers/clientes.controller.php";


$rutas = new ControllerRoutes();
$rutas ->inicio();

//$rutas = new ControllerCursos();
//$rutas ->index();

?>