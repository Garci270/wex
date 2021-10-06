<?php
require_once "controller/controller.php";
require_once "controller/Usercontroller.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'inicio'; // acción por defecto si no envían
}

$params = explode('/', $action);
$controller = new Controller();
$userController = new UserController();

switch($params[0]){
    case 'inicio': 
        $controller->inicio();
        /* $controller->mostrarProductosSlider(); */
        break;
    case 'inicioUsuario': 
        $userController->inicio();
        break;
    case 'Productos':
        $controller->mostrarProductos(); 
        break;
    case 'Categorias': 
            $controller->mostrarItemCategorias($params[1]); 
            break;
    case 'detalle':
        $controller->mostrarProducto($params[1]); 
        break;
    case 'ingresar':
        $userController->ingresar();
        break;
    case 'cerrar': 
        $userController->salir(); 
        break;
    case 'verificarIngreso': 
        $userController->getUsuario(); 
        break;
    case 'registrarse': 
        $controller->registrarse(); 
        break;
    case 'registro': 
        $userController->setUsuario(); 
        break;
    case 'editarProductos':
        $userController->editarProducto($params[1]); 
        break; 
    case 'editarCategorias':
        $userController->editarCategoria($params[1]); 
        break;       
    default: 
        echo('404 Page not found'); 
        break;
}