<?php
require_once "./controller/ApiController.php";
class ApiComentController extends ApiController{
    private $data;
    function __construct(){
        parent::__construct();
        $this->data = $this->getData();
    }

    function getComents($params = []){
        $id = $params[":ID"];
        $coments = $this->productModel->getComentByProduct($id);
        if($coments){
            return $this->apiView->response($coments, 200);
        }else{
            return $this->apiView->response("no coments", 200);
        }
    }

    function getComentsByRate($params = []){
        $id = $params[":ID"];
        $rate = $params[":VALOR"];
        if($rate==-1){
            $coments = $this->productModel->getComentByProduct($id);
        }
        else if($rate >= 1 && $rate <= 5){
            $coments = $this->productModel->getComentByRate($id, $rate);
        }else{
            return $this->apiView->response("no coments", 200);
        }
        if($coments){
            return $this->apiView->response($coments, 200);
        }else{
            return $this->apiView->response("no coments", 200);
        }
    }

    function setComent($params = []){
        $idproduct = $params[':ID'];
        $iduser = $params[':USUARIO'];
        if(!empty($this->data->coment) && !empty($this->data->rate) && $this->data->rate != -1){
            $coment = $this->data->coment;
            $rate = $this->data->rate;
            $date = date('Y-m-d');
            $this->productModel->setComentByProduct($idproduct,$iduser,$coment,$rate,$date);
            return $this->apiView->response("OK", 200);
        }else{
            return $this->apiView->response("error to upload coment", 400);
        }
    }

    function deleteComent($params = []){
        $id = $params[":ID"];
        $this->productModel->deleteComent($id);
        return $this->apiView->response('ok',200);       
    }
}
