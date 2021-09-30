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
        $categorias = $this->model->getCategorias();
        $this->view->inicio($productos,$categorias);
    }
    function mostrarProductos(){
        $productos = $this->model->getProductos(0);
        $this->view->mostrarProductos($productos);
    }
    function mostrarProducto($id){
        $categorias = $this->model->getCategorias();
        $producto = $this->model->getProductoDetalle($id);
        $this->view->mostrarDetalleProducto($producto, $categorias);
    }
    function mostrarItemCategorias($id){
        $catP = $this->model->getProductos($id);
        $categorias = $this->model->getCategorias();
        $this->view->mostrarCategorias($catP, $categorias);
    }
}