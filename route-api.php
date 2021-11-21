<?php

require_once "libs/smarty-3.1.39/Router.php";
require_once "controller/ApiComentController.php";

// crea el router

$router = new Router();

// ejemplo aplicar similar para el ecommerce
$router->addRoute("comentarios/:ID", "GET", "ApiComentController", "getComents");
$router->addRoute("comentarios/:ID", "GET", "ApiComentController", "getComentByDate");
$router->addRoute("comentarios/:ID", "GET", "ApiComentController", "getComentByDateAsc");
$router->addRoute("comentarios/:ID", "GET", "ApiComentController", "getComentByRate");
$router->addRoute("comentarios/:ID", "GET", "ApiComentController", "getComentByRateAsc");
$router->addRoute("comentarios/:ID", "POST", "ApiComentController", "setComent");
$router->addRoute("comentarios/:ID", "DELETE", "ApiComentController", "deleteComent");


// rutea
$router->route($_GET["resource"], $_SERVER["REQUEST_METHOD"]);
