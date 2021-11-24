<?php
require_once "./view/apiview.php";
require_once "./view/Userview.php";
require_once "./helper/AuthHelper.php";
require_once "./model/Productmodel.php";
abstract class ApiController {
    protected $userView;
    protected $authHelper;
    protected $productModel;
    protected $apiView;
    private $data; 
    
    public function __construct() {
        $this->productModel = new ProductsModel();
        $this->authHelper = new AuthHelper();
        $this->userView = new UserView();
        $this->apiView = new ApiView();
        $this->data = file_get_contents("php://input"); 
    }

    function getData(){ 
        return json_decode($this->data); 
    }  
}