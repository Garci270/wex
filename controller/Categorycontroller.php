<?php
require_once "./view/Userview.php";
require_once "./model/Categorymodel.php";
require_once "./view/Categoryview.php";
require_once "./helper/AuthHelper.php";
class categorysController{
    private $categoryModel;
    private $categoryView;
    private $userView;
    private $authHelper;
    function __construct(){
        $this->categoryModel = new CategorysModel();
        $this->categoryView = new CategorysView();
        $this->userView = new UsuarioView();
        $this->authHelper = new AuthHelper();
    }
    function showItemsCategorys($id){
        if ($this->authHelper->checkLogIn()) {
            $user = true;
        }else{
            $user = false;
        }
        $catP = $this->categoryModel->getProductsCat($id);
        $categorys = $this->categoryModel->getCategorys(0);
        return $this->categoryView->showCategorys($catP, $categorys, $user);
        
    }

    function deleteCategory($id){
        $this->authHelper->checkLogIn();
        $this->authHelper->checkLevel();
        $this->categoryModel->deleteCategory($id);
        return $this->userView->home();
    }

    function updateCategory($id){
        $this->authHelper->checkLogIn();
        $this->authHelper->checkLevel();
        if(!empty($_POST['descripcion'])&& !empty($_POST['imagen'])){
            $description = $_POST['descripcion'];
            $urlImage = $_POST['imagen'];
            $this->categoryModel->updateCategory($description,$urlImage,$id);
            return $this->userView->home();
           
        }
    }

    function addCategory(){
        $this->authHelper->checkLogIn();
        $this->authHelper->checkLevel();
        if(!empty($_POST['descripcion'])&& !empty($_POST['imagen'])){
            $description = $_POST['descripcion'];
            $urlImage = $_POST['imagen'];
            $this->categoryModel->addCategory($description,$urlImage);
            return $this->userView->home();
        }
    }
    function editCategory($id){
        $this->authHelper->checkLogIn();
        $this->authHelper->checkLevel();
        $categorys = $this->categoryModel->getcategorys(0);
        $category = false;
        if($id>0){
            $category = $this->categoryModel->getcategorys($id)[0];
        }
        return $this->categoryView->editCategory($categorys, $category);
    }

    function goToAddCategory(){
        $this->authHelper->checkLogIn();
        $this->authHelper->checkLevel();
        $this->categoryView->addCategory();
    }
}