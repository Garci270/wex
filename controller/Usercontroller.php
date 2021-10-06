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
        /* $this->authHelper->checkearIngreso(); */
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
        $categorias = $this->model->getCategorias();
        $productos = $this->model->getProductos(0);
        $producto = false;
        if($id>0){
            $producto = $this->model->getProductos($id)[0];
        }
        $this->userView->editarProducto($productos, $categorias, $producto);
    }

    function editarCategoria($id){
        $categorias = $this->model->getCategorias(0);
        $categoria = false;
        if($id>0){
            $categoria = $this->model->getCategorias($id)[0];
        }
        $this->userView->editarCategoria($categorias, $categoria);
    }

    function getUsuario(){
        if(!empty($_POST['email'])&& !empty($_POST['contrasena'])){
            $userEmail=$_POST['email'];
            $contrasena=$_POST['contrasena'];
            $user = $this->userModel->getUsuario($userEmail);
            if($user && password_verify($contrasena,($user->clave))){
                $this->userView->inicioUsuario();
            }else{
                $this->userView->ingresar("Acceso denegado!");
            }
        }
    }

    function eliminarProducto($id){
        $productos = $this->userModel->borrarProducto($id);

    }
}

