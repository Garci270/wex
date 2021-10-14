<?php
require_once "./model/Usermodel.php";
require_once "./view/Usuarioview.php";
require_once "./model/Productosmodel.php";
require_once "./model/Categoriasmodel.php";
require_once "./helper/AuthHelper.php";

class UserController{
    private $userModel;
    private $productoModel;
    private $categoriaModel;
    private $userView;
    private $authHelper;
    function __construct(){
        $this->userModel = new UserModel();
        $this->productoModel = new ProductosModel();
        $this->categoriaModel = new CategoriasModel();
        $this->userView = new UsuarioView();
        $this->authHelper = new AuthHelper();
    }
    function registrarse(){
        $this->userView->mostrarRegistrarse();
    }
    function salir(){
        session_start();
        session_destroy();
        $this->userView->ingresar();
    }
    function ingresar(){
        $this->userView->ingresar(null);
    }
    function inicio(){
        $productos = $this->productoModel->getProductos(0);
        $categorias = $this->categoriaModel->getCategorias(0);
        $this->authHelper->checkearIngreso();
        $this->userView->inicioUsuario($productos, $categorias);
    }

    function setUsuario(){
        if(!empty($_POST['email']) && !empty($_POST['nombre'])&& !empty($_POST['contrasena'])){
            $email=$_POST['email'];
            $contrasena= password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
            $nombre=$_POST['nombre'];
            $this->userModel->setUsuario($nombre,$email, $contrasena);
            $this->userView->ingresar();
        }
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
}

