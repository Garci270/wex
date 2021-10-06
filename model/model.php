<?php
class Model{
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpespecial','root','');
    }
    function getProductos($id){
        if($id>0){
            $query = $this->db->prepare('SELECT a.*, c.Descripcion as categoria FROM articulo a, categoria c WHERE a.idcategoria = c.idcategoria AND a.idarticulo =?');
        }
        else{
            $query = $this->db->prepare('SELECT a.*, c.Descripcion as categoria FROM articulo a, categoria c WHERE a.idcategoria = c.idcategoria ORDER BY a.Descripcion');
        }
        $query->execute(array($id));
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
    function getProductosCat($id){
        if($id>0){
            $query = $this->db->prepare('SELECT a.*, c.Descripcion as categoria FROM articulo a, categoria c WHERE a.idcategoria = c.idcategoria AND a.idcategoria =?');
        }
        else{
            $query = $this->db->prepare('SELECT a.*, c.Descripcion as categoria FROM articulo a, categoria c WHERE a.idcategoria = c.idcategoria ORDER BY a.Descripcion');
        }
        $query->execute(array($id));
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
    function getProductosSlider(){
        $query = $this->db->prepare('SELECT a.*, c.Descripcion as categoria FROM articulo a, categoria c WHERE a.idcategoria = c.idcategoria ORDER BY a.Descripcion AND idarticulo <= 24');
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
    function getProductoDetalle($id){
        $query = $this->db->prepare('SELECT a.*, c.Descripcion as categoria FROM articulo a, categoria c WHERE a.idcategoria = c.idcategoria  AND idarticulo =?');
        $query->execute(array($id));
        $producto = $query->fetchAll(PDO::FETCH_OBJ);
        return $producto;
    }
    function getCategorias($id){
        if($id>0){
            $query = $this->db->prepare('SELECT * FROM categoria WHERE idcategoria=?');
        }else{
            $query = $this->db->prepare('SELECT * FROM categoria');
        }
        $query->execute(array($id));
        $categoria = $query->fetchAll(PDO::FETCH_OBJ);
        return $categoria;
    }
}