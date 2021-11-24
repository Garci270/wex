<?php

require_once "libs/smarty-3.1.39/Router.php";
require_once "controller/ApiComentController.php";


$router = new Router();

$router->addRoute("comentarios/:ID", "GET", "ApiComentController", "getComents");
$router->addRoute("comentarios/:ID/:VALOR", "GET", "ApiComentController", "getComentsByRate");
$router->addRoute("comentarios/:ID/:USUARIO", "POST", "ApiComentController", "setComent");
$router->addRoute("comentarios/:ID", "DELETE", "ApiComentController", "deleteComent");


$router->route($_GET["resource"], $_SERVER["REQUEST_METHOD"]);
