<?php
require_once "./model/Usermodel.php";
require_once "./view/Userview.php";
require_once "./model/Productmodel.php";
require_once "./model/Categorymodel.php";
require_once "./helper/AuthHelper.php";

class UserController{
    private $userModel;
    private $productModel;
    private $categoryModel;
    private $userView;
    private $authHelper;
    function __construct(){
        $this->userModel = new UserModel();
        $this->productModel = new ProductsModel();
        $this->categoryModel = new CategorysModel();
        $this->userView = new UsuarioView();
        $this->authHelper = new AuthHelper();
    }
    function regist(){
        $this->userView->showRegister();
    }
    function logOut(){
        session_start();
        session_destroy();
        $this->userView->logIn();
    }
    function logIn(){
        $this->userView->logIn(null);
    }
    function home(){
        if ($this->authHelper->checkLevel()) {
            $products = $this->productModel->getProducts(0);
            $categorys = $this->categoryModel->getCategorys(0);
            if($categorys && $products){
                return $this->userView->userStart($products, $categorys);
            }else{
                return $this->userView->response("fail to load product by category", 400);
            }
        }
        
    }

    function setUser(){
        if(!empty($_POST['email']) && !empty($_POST['nombre'])&& !empty($_POST['contrasena'])){
            $email=$_POST['email'];
            $password= password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
            $name=$_POST['nombre'];
            $userName=$_POST['nombre_usuario'];
            $level = "";
            $user = $this->userModel->setUsuer($name,$userName,$email, $password, $level);
            if ($user) {
                return $this->userView->logIn();
            }else{
                return $this->userView->response("fail to load product by category", 400);
            }
        }
    }

    function getUser(){
        if(!empty($_POST['email'])&& !empty($_POST['contrasena'])){
            $userEmail=$_POST['email'];
            $password=$_POST['contrasena'];
            $user = $this->userModel->getUsuer($userEmail);
            if($user && password_verify($password,($user->clave))){
                session_start();
                $_SESSION['email'] = $userEmail;
                $_SESSION['level'] = $user->nivel;
                return $this->userView->home();
            }else{
                return $this->userView->logIn("Acceso denegado!");
            }
        }
    }

    function getUsers(){
        $this->authHelper->checkLevel();
        $users = $this->userModel->getUsers();
        $this->userView->showUsers($users);
    }

    function deleteUser($id){
        $this->authHelper->checkLevel();
        $this->userModel->deleteUser($id);
        $this->userView->home();
    }
}
