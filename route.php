<?php
require_once "controller/controller.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'inicio'; // acción por defecto si no envían
}

$params = explode('/', $action);
$controller = new Controller();

switch($params[0]){
    case 'inicio': 
        $controller->inicio();
        /* $controller->mostrarProductosSlider(); */
        break;
    case 'Productos':
        $controller->mostrarProductos(); 
        break;
    case 'Categorias': 
        if(isset($params[1])){
            $controller->mostrarItemCategorias($params[1]); 
            break;
        }else{
            $controller->mostrarItemCategorias(0); 
            break;
        }
    case 'detalle':
        $controller->mostrarProducto($params[1]); 
        break;
    default: 
        echo('404 Page not found'); 
        break;
}