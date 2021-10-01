<?php
require_once "./model/model.php";
require_once "./model/Usermodel.php";
require_once "./view/view.php";
require_once "./view/Usuarioview.php";

class UserController{
    private $model;
    private $userModel;
    private $view;
    private $userView;
    function __construct(){
        $this->model = new Model();
        $this->userModel = new UserModel();
        $this->view = new View();
        $this->userView = new UsuarioView();
    }
    function salir(){
        session_start();
        session_destroy();
        $this->userView->ingresar("Te deslogueaste!");
    }
    function ingresar(){
        $this->userView->ingresar();
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
                $this->userView->inicio();
            }else{
                $this->userView->ingresar("Acceso denegado!");
            }
        }
    }
}

