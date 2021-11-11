<?php
require_once "./model/Usermodel.php";
require_once "./view/Userview.php";
require_once "./view/Productview.php";
require_once "./model/Productmodel.php";
require_once "./model/Categorymodel.php";
require_once "./helper/AuthHelper.php";

class UserController{
    private $userModel;
    private $productModel;
    private $categoryModel;
    private $userView;
    private $productView;
    private $authHelper;
    function __construct(){
        $this->userModel = new UserModel();
        $this->productModel = new ProductsModel();
        $this->categoryModel = new CategorysModel();
        $this->userView = new UsuarioView();
        $this->productView = new ProductsView();
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
        $products = $this->productModel->getProducts(0);
        $categorys = $this->categoryModel->getCategorys(0);
        if($this->authHelper->checkLogIn()){
            if ($this->authHelper->checkLevel()) {
                if($categorys && $products){
                    return $this->userView->userStart($products, $categorys);
                }else{
                }
            }else{
                $user = true;
                return $this->productView->inicio($products, $categorys, $user);
            }
        }
        
    }

    function setUser(){
        if(!empty($_POST['email']) && !empty($_POST['nombre'])  && !empty($_POST['nombre_usuario'])&& !empty($_POST['contrasena'])){
            $email=$_POST['email'];
            $password= password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
            $name=$_POST['nombre'];
            $userName=$_POST['nombre_usuario'];
            $level = 0;
            $user = $this->userModel->setUser($name,$userName,$email, $password, $level);
            if ($user) {
                return $this->userView->logIn();
            }else{
            }
        }
    }

    function getUser(){
        if((!empty($_POST['email']) || !empty($_POST['nombre_usuario'])) && !empty($_POST['contrasena'])){
            $userEmail=$_POST['email'];
            $userName = $_POST['nombre_usuario'];
            $password=$_POST['contrasena'];
            if(!empty($_POST['email'])){
                $user = $this->userModel->getUserByMail($userEmail);
            }elseif (!empty($_POST['nombre_usuario'])) {
                $user = $this->userModel->getUser($userName);
            }elseif (!empty($_POST['email']) && !empty($_POST['nombre_usuario'])) {
                $user = $this->userModel->getUserByMail($userEmail);
            }
            if($user && password_verify($password,($user->clave))){
                session_start();
                $_SESSION['email'] = $userEmail;
                $_SESSION['level'] = $user->nivel;
                $_SESSION['nombre_usuario'] = $userName;
                return $this->userView->home();
            }else{
                return $this->userView->logIn("Acceso denegado!");
            }
        }
    }

    function goToAddUser(){
        $this->authHelper->checkLogIn();
        $this->authHelper->checkLevel();
        $this->userView->showAddUsers();
    }

    function goToEditUser($id){
        $this->authHelper->checkLogIn();
        $this->authHelper->checkLevel();
        $users = $this->userModel->getUsers();
        $user = false;
        if($id>0){
            $user = $this->userModel->getUserById($id)[0];
        }
        $this->userView->showEditUsers($users, $user);
    }

    function editUser($id){
        $this->authHelper->checkLogIn();
        $this->authHelper->checkLevel();
        if(!empty($_POST['nivel']) && $_POST['nivel'] >= 0 && $_POST['nivel'] <= 1){
            $level = $_POST['nivel'];
            if($id>0){
                $this->userModel->setUserLevel($id, $level);
                $this->userView->home();
            }
        }else{
            $this->goToEditUser($id);
        }
    }

    function AddUser(){
        $this->authHelper->checkLogIn();
        $this->authHelper->checkLevel();
        if(!empty($_POST['email']) && !empty($_POST['nombre'])&& !empty($_POST['contrasena'])&& !empty($_POST['nivel'])&& !empty($_POST['nombre_usuario'])){
            $email=$_POST['email'];
            $password= password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
            $name=$_POST['nombre'];
            $userName=$_POST['nombre_usuario'];
            $level=intval($_POST['nivel']);
            if($level >= 0 && $level <= 1){
                $this->userModel->setUser($name,$userName,$email, $password, $level);
                return $this->userView->home();
            }else{
            }
        }else{
            $this->userView->home();
        }
    }

    function deleteUser($id){
        $this->authHelper->checkLogIn();
        $this->authHelper->checkLevel();
        $this->userModel->deleteUser($id);
        $this->userView->home();
    }
}
