<?php
require_once "controller/Productoscontroller.php";
require_once "controller/Usercontroller.php";
require_once "controller/Categoriascontroller.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'inicio'; // acción por defecto si no envían
}

$params = explode('/', $action);
$productosController = new ProductosController();
$userController = new UserController();
$categoriasController = new CategoriasController();

switch($params[0]){
    case 'inicio': 
        $productosController->inicio();
        /* $controller->mostrarProductosSlider(); */
        break;
    case 'inicioUsuario': 
        $userController->inicio();
        break;
    case 'Productos':
        $productosController->mostrarProductos(); 
        break;
    case 'Categorias': 
        $categoriasController->mostrarItemCategorias($params[1]); 
        break;
    case 'detalle':
        $productosController->mostrarProducto($params[1]); 
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
        $userController->registrarse(); 
        break;
    case 'registro': 
        $userController->setUsuario(); 
        break;
    case 'editarProductos':
        $productosController->editarProducto($params[1]); 
        break; 
    case 'editarCategorias':
        $categoriasController->editarCategoria($params[1]); 
        break; 
    case 'editarCategoria':
        $categoriasController->actualizarCategoria($params[1]); 
        break; 
    case 'eliminarProd':
        $productosController->eliminarProducto($params[1]);
        break;
    case 'actualizarProd':
        $productosController->actualizarProducto($params[1]);
        break;   
    case 'eliminarCat':
        $categoriasController->eliminarCategoria($params[1]);
        break;
    case 'agregarProd':
        $productosController->agregarProd();
        break;
    case 'agregarProducto':
        $productosController->agregarProducto();
        break;   
    case 'agregarCat':
        $categoriasController->agregarCat();
        break; 
    case 'agregarCategoria':
        $categoriasController->agregarCategoria();
        break;      
    default: 
        echo('404 Page not found'); 
        break;
}