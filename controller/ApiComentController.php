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
        /* $coments = $this->productModel->getComents(); */
        if($coments){
            return $this->apiView->response($coments, 200);
        }else{
            return $this->apiView->response("no coments", 200);
        }
    }

    /* function getComent($params = []){
        $id = $params[":ID"];
        $coments = $this->productModel->getComentByProduct($id);
        if($coments){
            return $this->apiView->response($coments, 200);
        }else{
            return $this->apiView->response("fail to get coment", 400);
        }
    } */

    function setComent($params = []){
        $idproduct = $params['ID'];
        $iduser = $params['ID'];
        if(!empty($this->data->coment) && !empty($this->data->rate)){
            $coment = $this->data->coment;
            $rate = $this->data->rate;
            $date = date('Y-m-d');
            $coments = $this->productModel->setComentByProduct($idproduct,$iduser,$coment,$rate,$date);
            if($coments){
                return $this->apiView->response("OK", 200);
            }else{
                return $this->apiView->response("fail to set coment", 400);
            }
        }
    }

    function deleteComent($params = []){
        $id = $params[":ID"];
        $this->productModel->deleteComent($id);
        return $this->apiView->response('ok',200);       
    }
}
