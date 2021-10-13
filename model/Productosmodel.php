<?php
class ProductosModel{
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

    /* function setProducto(){
        $query = $this->db->prepare("INSERT INTO articulo");
        $query->execute(array()); 
    } */
    
    function borrarProducto($id){
        $sentencia = $this->db->prepare("DELETE  FROM articulo WHERE idarticulo=?");
        $sentencia->execute(array($id));
    }

    function actualizarProducto($descripcion,$precio,$marca,$categoria,$id){
        $sentencia = $this->db->prepare("UPDATE articulo SET Descripcion=?, Precio_1=?, Marca=?, idcategoria=? WHERE idarticulo =?");
        $sentencia->execute(array($descripcion,$precio,$marca,$categoria,$id));
    }

    function agregarProducto($descripcion,$precio,$marca,$categoria,$imagen){
        $sentencia = $this->db->prepare("INSERT INTO articulo (Descripcion, Precio_1, url_imagen, Marca, idcategoria) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($descripcion,$precio,$imagen,$marca,$categoria));
    }
}