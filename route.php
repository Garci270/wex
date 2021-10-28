<?php
require_once "controller/Productcontroller.php";
require_once "controller/Usercontroller.php";
require_once "controller/Categorycontroller.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'inicio'; // acción por defecto si no envían
}

$params = explode('/', $action);
$productsController = new ProductosController();
$userController = new UserController();
$categorysController = new CategorysController();

switch($params[0]){
    case 'inicio': 
        $productsController->home();
        break;
    case 'inicioUsuario': 
        $userController->home();
        break;
    case 'Productos':
        $productsController->showProducts(); 
        break;
    case 'Categorias': 
        $categorysController->showItemsCategorys($params[1]); 
        break;
    case 'detalle':
        $productsController->showProduct($params[1]); 
        break;
    case 'ingresar':
        $userController->logIn();
        break;
    case 'cerrar': 
        $userController->logOut(); 
        break;
    case 'verificarIngreso': 
        $userController->getUser(); 
        break;
    case 'registrarse': 
        $userController->regist(); 
        break;
    case 'registro': 
        $userController->setUser(); 
        break;
    case 'editarProductos':
        $productsController->editProduct($params[1]); 
        break; 
    case 'editarCategorias':
        $categorysController->editCategory($params[1]); 
        break; 
    case 'editarCategoria':
        $categorysController->updateCategory($params[1]); 
        break; 
    case 'eliminarProd':
        $productsController->deleteProduct($params[1]);
        break;
    case 'actualizarProd':
        $productsController->updateProduct($params[1]);
        break;   
    case 'eliminarCat':
        $categorysController->deleteCategory($params[1]);
        break;
    case 'agregarProd':
        $productsController->goToAddProduct();
        break;
    case 'agregarProducto':
        $productsController->addProduct();
        break;   
    case 'agregarCat':
        $categorysController->goToAddCategory();
        break; 
    case 'agregarCategoria':
        $categorysController->addCategory();
        break;      
    default: 
        echo('404 Page not found'); 
        break;
}