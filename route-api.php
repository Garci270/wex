<?php

require_once 'libs/Router.php';
require_once "controller/ApiComentController.php";

// crea el router
$router = new Router();

// ejemplo aplicar similar para el ecommerce
$router->addRoute('comentarios', 'GET', 'ApiComentController', 'getComents');
$router->addRoute('comentarios/:ID', 'GET', 'ApiComentController', 'getComent');
$router->addRoute('enviarComentario/:ID', 'POST', 'ApiComentController', 'setComent');
$router->addRoute('eliminarComentario/:ID', 'DELETE', 'ApiComentController', 'deleteComent');


// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
