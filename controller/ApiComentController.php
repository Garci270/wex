<?php
require_once "./view/Userview.php";
require_once "./helper/AuthHelper.php";
require_once "./model/Productmodel.php";

class comentController{
    private $authHelper;
    private $productModel;
    function __construct(){
        $this->productModel = new ProductsModel();
        $this->authHelper = new AuthHelper();
    }
    function getComents(){
        $coments = $this->productModel->getComentByProduct();
        if($coments){
            /* return $this->productView->mostrarProductos($products); */
        }else{
            return $this->productView->response("fail to load products", 400);
        }
    }
    function getComent($id){
        $coments = $this->productModel->getComentByProduct();
        if($coments){
            /* return $this->productView->mostrarProductos($products); */
        }else{
            return $this->productView->response("fail to load products", 400);
        }
    }
    function setComent($idproduct,$iduser,$coment,$rate,$date){
        $coments = $this->productModel->setComentByProduct($idproduct,$iduser,$coment,$rate,$date);
        if($coments){
            /* return $this->productView->mostrarProductos($products); */
        }else{
            return $this->productView->response("fail to load products", 400);
        }
    }
    function deleteComent($id){
        $coment = $this->productModel->deleteComent($id);
        if($coment){
            /* return $this->productView->mostrarProductos($products); */
        }else{
            return $this->productView->response("fail to load products", 400);
        }
    }
}