<?php
require_once "./model/Usermodel.php";
require_once "./view/Usuarioview.php";
require_once "./model/Productosmodel.php";
require_once "./view/Productosview.php";
require_once "./model/Categoriasmodel.php";
require_once "./view/Categoriasview.php";
require_once "./helper/AuthHelper.php";
class ProductosController{
    private $userModel;
    private $productoModel;
    private $categoriaModel;
    private $productoView;
    private $categoriaView;
    private $userView;
    private $authHelper;
    function __construct(){
        $this->userModel = new UserModel();
        $this->productoModel = new ProductosModel();
        $this->categoriaModel = new CategoriasModel();
        $this->productoView = new ProductosView();
        $this->categoriaView = new CategoriasView();
        $this->userView = new UsuarioView();
        $this->authHelper = new AuthHelper();
    }
    function inicio(){
        $productos = $this->productoModel->getProductosSlider();
        $categorias = $this->categoriaModel->getCategorias(0);
        $this->productoView->inicio($productos,$categorias);
    }
    function mostrarProductos(){
        $productos = $this->productoModel->getProductos(0);
        $this->productoView->mostrarProductos($productos);
    }
    function mostrarProducto($id){
        $categorias = $this->categoriaModel->getCategorias(0);
        $producto = $this->productoModel->getProductoDetalle($id);
        $this->productoView->mostrarDetalleProducto($producto, $categorias);
    }

    function editarProducto($id){
        $this->authHelper->checkearIngreso();
        $categorias = $this->categoriaModel->getCategorias(0);
        $productos = $this->productoModel->getProductos(0);
        $producto = false;
        if($id>0){
            $producto = $this->productoModel->getProductos($id)[0];
        }
        $this->productoView->editarProducto($productos, $categorias, $producto);
    }

    function agregarProd(){
        $this->authHelper->checkearIngreso();
        $categorias = $this->categoriaModel->getCategorias(0);
        $this->productoView->agregarProducto($categorias);
    }
    function actualizarProducto($id){
        $this->authHelper->checkearIngreso();
        if(!empty($_POST['categoria'])&& !empty($_POST['descripcion'])&& !empty($_POST['precio'])&& !empty($_POST['marca'])){
            $categoria = $_POST['categoria'];
            $descripcion = $_POST['descripcion'];
            $marca = $_POST['marca'];
            $precio = $_POST['precio'];
            $this->productoModel->actualizarProducto($descripcion, $precio,$marca, $categoria, $id);
            $this->userView->inicio();
        }
    }

    function agregarProducto(){
        $this->authHelper->checkearIngreso();
        if(!empty($_POST['categoria'])&& !empty($_POST['descripcion'])&& !empty($_POST['precio'])&& !empty($_POST['marca'])&& !empty($_POST['imagen'])){
            $categoria = $_POST['categoria'];
            $descripcion = $_POST['descripcion'];
            $marca = $_POST['marca'];
            $precio = $_POST['precio'];
            $imagen = $_POST['imagen'];
            $this->productoModel->agregarProducto($descripcion, $precio,$marca, $categoria,$imagen);
            $this->userView->inicio();
        }
    }
    function eliminarProducto($id){
        $this->authHelper->checkearIngreso();
        $this->productoModel->borrarProducto($id);
        $this->userView->inicio();
    }
    /* function mostrarItemCategorias($id){
        $catP = $this->model->getProductosCat($id);
        $categorias = $this->model->getCategorias(0);
        $this->view->mostrarCategorias($catP, $categorias);
    } */
    /* function registrarse(){
        $this->view->mostrarRegistrarse();
    } */
}