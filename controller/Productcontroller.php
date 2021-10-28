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
        $products = $this->productModel->getProductsSlider();
        $categorys = $this->categoryModel->getCategorys(0);
        if($products && $categorys){
            return $this->productView->inicio($products,$categorys);
        }else{
            return $this->productView->response("fail to load products and categorys", 400);
        }
    }
    function showProducts(){
        if ($this->authHelper->checkLogIn()) {
            $user = true;
        }
        $products = $this->productModel->getProducts(0);
        $user = false;
        if($products){
            return $this->productView->mostrarProductos($products, $user);
        }else{
            return $this->productView->response("fail to load products", 400);
        }
        
    }
    function showProduct($id){
        if ($this->authHelper->checkLogIn()) {
            $user = true;
        }
        $categorys = $this->categoryModel->getCategorys(0);
        $product = $this->productModel->getProductDetail($id);
        $user = false;
        if($product){
            return $this->productView->mostrarDetalleProducto($product, $categorys, $user);
        }else{
            return $this->productView->response("fail to load product by category", 400);
        }
    }

    function editProduct($id){
        $this->authHelper->checkLevel();
        $categorys = $this->categoryModel->getCategorys(0);
        $products = $this->productModel->getProducts(0);
        $product = false;
        if($id>0){
            $product = $this->productModel->getProducts($id)[0];
        }
        if($product){
            return $this->productView->editarProducto($products, $categorys, $product);
        }else{
            return $this->productView->response("fail to load product by category", 400);
        }
    }

    function goToAddProduct(){
        $this->authHelper->checkLevel();
        $categorys = $this->categoryModel->getCategorys(0);
        if($categorys){
            return $this->productView->agregarProducto($categorys);;
        }else{
            return $this->productView->response("fail to load product by category", 400);
        }
        
    }
    function updateProduct($id){
        $this->authHelper->checkLevel();
        if(!empty($_POST['categoria'])&& !empty($_POST['descripcion'])&& !empty($_POST['precio'])&& !empty($_POST['marca'])&& !empty($_POST['imagen'])){
            $category = $_POST['categoria'];
            $description = $_POST['descripcion'];
            $brand = $_POST['marca'];
            $price = $_POST['precio'];
            $image = $_POST['imagen'];
            $update = $this->productModel->updateProduct($description, $price,$brand, $category, $id,$image);
            if($update){
                $this->userView->home();
            }else{
                return $this->productView->response("fail to load product by category", 400);
            }
        }
    }

    function addProduct(){
        $this->authHelper->checkLevel();
        if(!empty($_POST['categoria'])&& !empty($_POST['descripcion'])&& !empty($_POST['precio'])&& !empty($_POST['marca'])&& !empty($_POST['imagen'])){
            $category = $_POST['categoria'];
            $description = $_POST['descripcion'];
            $brand = $_POST['marca'];
            $price = $_POST['precio'];
            $image = $_POST['imagen'];
            $addProduct = $this->productModel->addProduct($description, $price,$brand, $category,$image);
            if($addProduct){
                return $this->userView->home();
            }else{
                return $this->productView->response("fail to load product by category", 400);
            }
        }
    }
    function deleteProduct($id){
        $this->authHelper->checkLevel();
        $deleteProduct = $this->productModel->deleteProduct($id);
        if($deleteProduct){
            return $this->userView->home();
        }else{
            return $this->productView->response("fail to load product by category", 400);
        }
        
    }
}