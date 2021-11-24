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
        $this->userView = new UserView();
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
        if($this->authHelper->checkLogIn() &&  $this->authHelper->checkLevel()){
            $this->categoryModel->deleteCategory($id);
            return $this->userView->home();
        }else{
            $error = "asegurate de que eres usuario admin";
            $this->userView->showError($error, false);
        }
    }

    function updateCategory($id){
        if($this->authHelper->checkLogIn() &&  $this->authHelper->checkLevel()){
            $user = true;
            if(!empty($_POST['descripcion'])&& !empty($_FILES['categoryFile']['name'])){
                if($_FILES['categoryFile']['type'] == "image/jpg" || $_FILES['categoryFile']['type'] == "image/jpeg" || $_FILES['categoryFile']['type'] == "image/png" ){
                $description = $_POST['descripcion'];
                $image = $_FILES['categoryFile'];
                $this->categoryModel->updateCategory($description,$image,$id);
                return $this->userView->home();
                }else{
                    $error = "asegurate de que subes una imagen";
                    $this->userView->showError($error, $user);
                }
            }else{
                $error = "asegurate de completar bien todos los campos";
                $this->userView->showError($error, $user);
            }
        }else{
            $error = "asegurate de que eres usuario admin";
            $this->userView->showError($error, false);
        }
    }

    function addCategory(){
        if($this->authHelper->checkLogIn() &&  $this->authHelper->checkLevel()){
            $user = true;
            if(!empty($_POST['descripcion'])&& !empty($_FILES['categoryFile']['name'])){
                if($_FILES['categoryFile']['type'] == "image/jpg" || $_FILES['categoryFile']['type'] == "image/jpeg" || $_FILES['categoryFile']['type'] == "image/png" ){
                $description = $_POST['descripcion'];
                $image = $_FILES['categoryFile'];
                $this->categoryModel->addCategory($description,$image);
                return $this->userView->home();
                }else{
                    $error = "asegurate de que subes una imagen";
                    $this->userView->showError($error, $user);
                }
            }else{
                $error = "asegurate de completar bien todos los campos";
                $this->userView->showError($error, $user);
            }
        }else{
            $error = "asegurate de que eres usuario admin";
            $this->userView->showError($error, false);
        }
    }
    function editCategory($id){
        if($this->authHelper->checkLogIn() &&  $this->authHelper->checkLevel()){
            $categorys = $this->categoryModel->getcategorys(0);
            $category = false;
            if($id>0){
                $category = $this->categoryModel->getcategorys($id)[0];
            }
            return $this->categoryView->editCategory($categorys, $category);
        }else{
            $error = "asegurate de que eres usuario admin";
            $this->userView->showError($error, false);
        }
    }

    function goToAddCategory(){
        if($this->authHelper->checkLogIn() &&  $this->authHelper->checkLevel()){
            $this->categoryView->addCategory();
        }else{
            $error = "asegurate de que eres usuario admin";
            $this->userView->showError($error, false);
        }
    }
}