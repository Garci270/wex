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
    function inicio(){
        $productos = $this->model->getProductosSlider();
        $this->view->inicio($productos);
    }
    function mostrarProductos(){
        $productos = $this->model->getProductos();
        $this->view->mostrarProductos($productos);
    }
   /*  function mostrarProductosSlider(){
        $this->view->mostrarProductosSlider($productos);
    } */
    function mostrarCategorias(){
        $categorias = $this->model->getCategorias();
        $this->view->mostrarCategorias($categorias);
    }
}