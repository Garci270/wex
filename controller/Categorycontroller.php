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
        $catP = $this->categoryModel->getProductsCat($id);
        $categorys = $this->categoryModel->getCategorys(0);
        if($catP && $categorys){
            return $this->categoryView->showCategorys($catP, $categorys);
        }else{
            return $this->categoryView->response("fail to load product by category", 400);
        }
        
    }

    function deleteCategory($id){
        $this->authHelper->checkLevel();
        $delete = $this->categoryModel->deleteCategory($id);
        if($delete){
            return $this->userView->home();
        }else{
            return $this->categoryView->response("fail to load product by category", 400);
        }
    }

    function updateCategory($id){
        $this->authHelper->checkLevel();
        if(!empty($_POST['descripcion'])&& !empty($_POST['imagen'])){
            $description = $_POST['descripcion'];
            $urlImage = $_POST['imagen'];
            $update = $this->categoryModel->updateCategory($description,$urlImage,$id);
            if($update){
                return $this->userView->home();
            }else{
                return $this->categoryView->response("fail to load product by category", 400);
            }
        }
    }

    function addCategory(){
        $this->authHelper->checkLevel();
        if(!empty($_POST['descripcion'])&& !empty($_POST['imagen'])){
            $description = $_POST['descripcion'];
            $urlImage = $_POST['imagen'];
            $addCategory = $this->categoryModel->addCategory($description,$urlImage);
            if ($addCategory) {
                return $this->userView->home();
            }else{
                return $this->categoryView->response("fail to load product by category", 400);
            }
        }
    }
    function editCategory($id){
        $this->authHelper->checkLevel();
        $categorys = $this->categoryModel->getcategorys(0);
        $category = false;
        if($id>0){
            $category = $this->categoryModel->getcategorys($id)[0];
        }
        if($category && $categorys){
            return $this->categoryView->editCategory($categorys, $category);
        }else{
            return $this->categoryView->response("fail to load product by category", 400);
        }
    }

    function goToAddCategory(){
        $this->authHelper->checkLevel();
        $this->categoryView->addCategory();
    }
}