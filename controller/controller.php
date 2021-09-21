<?php
require_once "./model/model.php";
require_once "./view/view.php";
class Controller{
    private $model;
    private $view;
    function __construct(){
        $this->model = new Model();
        $this->view = new View();
    }
}