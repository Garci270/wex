<?php
require_once "./model/model.php";
require_once "./model/Usermodel.php";
require_once "./view/view.php";
require_once "./view/Usuarioview.php";

class UserController{
    private $userModel;
    private $model;
    private $userView;
    private $authHelper;
    function __construct(){
        $this->authHelper = new AuthHelper();
        $this->userModel = new UserModel();
        $this->model = new Model();
        $this->userView = new UsuarioView();
    }
    function salir(){
        $erorr = "Te deslogueaste!";
        session_start();
        session_destroy();
        $this->userView->ingresar($erorr);
    }
    function ingresar(){
        $this->userView->ingresar(null);
    }
    function inicio(){
        $this->authHelper->checkearIngreso();
        $this->userView->inicioUsuario();
    }

    function setUsuario(){
        if(!empty($_POST['email']) && !empty($_POST['nombre'])&& !empty($_POST['contrasena'])){
            $error = "Te has registrado correctamente!";
            $email=$_POST['email'];
            $contrasena= password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
            $nombre=$_POST['nombre'];
            $this->userModel->setUsuario($nombre,$email, $contrasena);
            $this->userView->ingresar($error);
        }
    }

    function editarProducto($id){
        $this->authHelper->checkearIngreso();
        $categorias = $this->model->getCategorias(0);
        $productos = $this->model->getProductos(0);
        $producto = false;
        if($id>0){
            $producto = $this->model->getProductos($id)[0];
        }
        $this->userView->editarProducto($productos, $categorias, $producto);
    }

    function agregarProd(){
        $this->authHelper->checkearIngreso();
        $categorias = $this->model->getCategorias(0);
        $this->userView->agregarProducto($categorias);
    }

    function editarCategoria($id){
        $this->authHelper->checkearIngreso();
        $categorias = $this->model->getCategorias(0);
        $categoria = false;
        if($id>0){
            $categoria = $this->model->getCategorias($id)[0];
        }
        $this->userView->editarCategoria($categorias, $categoria);
    }

    function agregarCat(){
        $this->authHelper->checkearIngreso();
        $this->userView->agregarCategoria();
    }


    function getUsuario(){
        if(!empty($_POST['email'])&& !empty($_POST['contrasena'])){
            $userEmail=$_POST['email'];
            $contrasena=$_POST['contrasena'];
            $user = $this->userModel->getUsuario($userEmail);
            if($user && password_verify($contrasena,($user->clave))){
                session_start();
                $_SESSION['email'] = $userEmail;
                $this->userView->inicio();
            }else{
                $this->userView->ingresar("Acceso denegado!");
            }
        }
    }

    function eliminarProducto($id){
        $this->authHelper->checkearIngreso();
        $this->userModel->borrarProducto($id);
        $this->userView->inicio();
    }

    function actualizarProducto($id){
        $this->authHelper->checkearIngreso();
        if(!empty($_POST['categoria'])&& !empty($_POST['descripcion'])&& !empty($_POST['precio'])&& !empty($_POST['marca'])){
            $categoria = $_POST['categoria'];
            $descripcion = $_POST['descripcion'];
            $marca = $_POST['marca'];
            $precio = $_POST['precio'];
            $this->userModel->actualizarProducto($descripcion, $precio,$marca, $categoria, $id);
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
            $this->userModel->agregarProducto($descripcion, $precio,$marca, $categoria,$imagen);
            $this->userView->inicio();
        }
    }

    function eliminarCategoria($id){
        $this->authHelper->checkearIngreso();
        $this->userModel->borrarCategoria($id);
        $this->userView->inicio();
    }

    function actualizarCategoria($id){
        $this->authHelper->checkearIngreso();
        if(!empty($_POST['descripcion'])&& !empty($_POST['imagen'])){
            $descripcion = $_POST['descripcion'];
            $urlImagen = $_POST['imagen'];
            $this->userModel->actualizarCategoria($descripcion,$urlImagen,$id);
            $this->userView->inicio();
        }
    }

    function agregarCategoria(){
        $this->authHelper->checkearIngreso();
        if(!empty($_POST['descripcion'])&& !empty($_POST['imagen'])){
            $descripcion = $_POST['descripcion'];
            $urlImagen = $_POST['imagen'];
            $this->userModel->agregarCategoria($descripcion,$urlImagen);
            $this->userView->inicio();
        }
    }
}

