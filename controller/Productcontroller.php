<?php
require_once "./view/Userview.php";
require_once "./model/Productmodel.php";
require_once "./view/Productview.php";
require_once "./model/Categorymodel.php";
require_once "./helper/AuthHelper.php";
class ProductosController{
    private $productModel;
    private $categoryModel;
    private $productView;
    private $userView;
    private $authHelper;
    function __construct(){
        $this->productModel = new ProductsModel();
        $this->categoryModel = new CategorysModel();
        $this->productView = new ProductsView();
        $this->userView = new UsuarioView();
        $this->authHelper = new AuthHelper();
    }

    function home(){
        if ($this->authHelper->checkLogIn()) {
            $user = true;
        }else{
            $user = false;
        }
        $products = $this->productModel->getProductsSlider();
        $categorys = $this->categoryModel->getCategorys(0);
        return $this->productView->inicio($products,$categorys, $user);
    }

    function showProducts(){
        if ($this->authHelper->checkLogIn()) {
            $user = true;
        }else{
            $user = false;
        }
        $products = $this->productModel->getProducts(0);
        return $this->productView->mostrarProductos($products, $user);
    }

    function showProduct($id){
        if ($this->authHelper->checkLogIn()) {
            $user = true;
        }else{
            $user = false;
        }
        $categorys = $this->categoryModel->getCategorys(0);
        $product = $this->productModel->getProductDetail($id);
        return $this->productView->mostrarDetalleProducto($product, $categorys, $user);
    }

    function editProduct($id){
        if($this->authHelper->checkLogIn() &&  $this->authHelper->checkLevel()){
            $categorys = $this->categoryModel->getCategorys(0);
            $products = $this->productModel->getProducts(0);
            $product = false;
            if($id>0){
                $product = $this->productModel->getProducts($id)[0];
            }
            return $this->productView->editarProducto($products, $categorys, $product, true);
        }else{
            $error = "asegurate de que eres usuario admin";
            $this->userView->showError($error, false);
        }
    }

    function goToAddProduct(){
        if($this->authHelper->checkLogIn() &&  $this->authHelper->checkLevel()){
            $user = true;
            $categorys = $this->categoryModel->getCategorys(0);
            return $this->productView->agregarProducto($categorys);
        }else{
            $error = "asegurate de que eres usuario admin";
            $this->userView->showError($error, false);
        }
        
    }

    function updateProduct($id){
        if($this->authHelper->checkLogIn() &&  $this->authHelper->checkLevel()){
            $user = true;
            if(!empty($_POST['categoria'])&& !empty($_POST['descripcion'])&& !empty($_POST['precio'])&& !empty($_POST['marca'])&& !empty($_FILES['productFile']["name"])){
                if($_FILES['productFile']['type'] == "image/jpg" || $_FILES['productFile']['type'] == "image/jpeg" || $_FILES['productFile']['type'] == "image/png" ){
                    $image = $_FILES['productFile'];
                    $category = $_POST['categoria'];
                    $description = $_POST['descripcion'];
                    $brand = $_POST['marca'];
                    $price = $_POST['precio'];
                    $this->productModel->updateProduct($description, $price,$brand, $category, $id,$image);
                    $this->userView->home();
                }else{
                    $error = "asegurate de que subes una imagen!";
                    $this->userView->showError($error, $user);
                }
            }else{
                $error = "asegurate de completar bien los campos!";
                $this->userView->showError($error, $user);
            }
        }else{
            $error = "asegurate de que eres usuario admin";
            $this->userView->showError($error, false);
        }
    }

    function addProduct(){
        if($this->authHelper->checkLogIn() &&  $this->authHelper->checkLevel()){
            $user = true;
            if(!empty($_POST['categoria'])&& !empty($_POST['descripcion'])&& !empty($_POST['precio'])&& !empty($_POST['marca'])&& !empty($_FILES['productFile']["name"])){
                if($_FILES['productFile']['type'] == "image/jpg" || $_FILES['productFile']['type'] == "image/jpeg" || $_FILES['productFile']['type'] == "image/png" ){
                $image = $_FILES['productFile'];
                $category = $_POST['categoria'];
                $description = $_POST['descripcion'];
                $brand = $_POST['marca'];
                $price = $_POST['precio'];
                $this->productModel->addProduct($description, $price,$brand, $category,$image);
                return $this->userView->home();
                }else{
                    $error = "asegurate de que subes una imagen!";
                    $this->userView->showError($error, $user);
                }
            }else{
                $error = "asegurate de completar bien los campos!";
                $this->userView->showError($error, $user);
            }
        }else{
            $error = "asegurate de que eres usuario admin";
            $this->userView->showError($error, false);
        }
    }

    function deleteProduct($id){
        if($this->authHelper->checkLogIn() &&  $this->authHelper->checkLevel()){
            $this->productModel->deleteProduct($id);
            return $this->userView->home();
        }else{
            $error = "asegurate de que eres usuario admin";
            $this->userView->showError($error, false);
        }
        
    }
}