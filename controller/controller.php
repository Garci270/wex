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
        $productos = $this->model->getProductos();
        $this->view->mostrarProductos($productos);
    }
    function mostrarProducto($id){
        $producto = $this->model->getProductoDetalle($id);
        $this->view->mostrarDetalleProducto($producto);
    }
    function mostrarCategorias(){
        /* $categorias = $this->model->getCategorias();
        $this->view->mostrarCategoriasNav($categorias); */
    }
}