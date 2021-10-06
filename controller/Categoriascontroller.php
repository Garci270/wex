<?php
require_once "./model/Usermodel.php";
require_once "./view/Usuarioview.php";
require_once "./model/Productosmodel.php";
require_once "./view/Productosview.php";
require_once "./model/Categoriasmodel.php";
require_once "./view/Categoriasview.php";
require_once "./helper/AuthHelper.php";
class CategoriasController{
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
    function mostrarItemCategorias($id){
        $catP = $this->categoriaModel->getProductosCat($id);
        $categorias = $this->categoriaModel->getCategorias(0);
        $this->categoriaView->mostrarCategorias($catP, $categorias);
    }

    function eliminarCategoria($id){
        $this->authHelper->checkearIngreso();
        $this->categoriaModel->borrarCategoria($id);
        $this->userView->inicio();
    }

    function actualizarCategoria($id){
        $this->authHelper->checkearIngreso();
        if(!empty($_POST['descripcion'])&& !empty($_POST['imagen'])){
            $descripcion = $_POST['descripcion'];
            $urlImagen = $_POST['imagen'];
            $this->categoriaModel->actualizarCategoria($descripcion,$urlImagen,$id);
            $this->userView->inicio();
        }
    }

    function agregarCategoria(){
        $this->authHelper->checkearIngreso();
        if(!empty($_POST['descripcion'])&& !empty($_POST['imagen'])){
            $descripcion = $_POST['descripcion'];
            $urlImagen = $_POST['imagen'];
            $this->categoriaModel->agregarCategoria($descripcion,$urlImagen);
            $this->userView->inicio();
        }
    }
    function editarCategoria($id){
        $this->authHelper->checkearIngreso();
        $categorias = $this->categoriaModel->getCategorias(0);
        $categoria = false;
        if($id>0){
            $categoria = $this->categoriaModel->getCategorias($id)[0];
        }
        $this->categoriaView->editarCategoria($categorias, $categoria);
    }

    function agregarCat(){
        $this->authHelper->checkearIngreso();
        $this->categoriaView->agregarCategoria();
    }
}