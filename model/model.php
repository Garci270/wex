<?php
class Model{
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpespecial','root','');
    }
    function getProductos(){
        //1 abrir la conexion
        //2 ejecutar la consulta SQL(2 subpasos = prepare y execute)
        $query = $this->db->prepare('SELECT * FROM articulo');
        $query->execute();
    
        //3 Obtener los datos de la consulta
        $productos = $query->fetchAll(PDO::FETCH_OBJ); //devuelve un arreglo con todos los pagos
    
        //4 cerrar la conexion, en caso de PDO no es necesario
        //retornar la conexion
        return $productos;
    }
    function getProductosSlider(){
        $query = $this->db->prepare('SELECT * FROM articulo WHERE Precio_1 < 40');
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
    function setProducto(){
        //enviar producto
        $query = $this->db->prepare("INSERT INTO");
        $query->execute(array()); 
    }
    
    function borrarProducto($id){
        //borrar producto con id
        $sentencia = $this->db->prepare("DELETE FROM articulo WHERE id=?");
        $sentencia->execute(array($id));
    }

    function actualizarProducto($id){
        //actualizar productao con id
        $sentencia = $this->db->prepare("UPDATE FROM articulo WHERE id=?");
        $sentencia->execute(array($id));
    }
    function getCategorias(){
        //1 abrir la conexion
        //2 ejecutar la consulta SQL(2 subpasos = prepare y execute)
        $query = $this->db->prepare('SELECT * FROM categoria');
        $query->execute();
    
        //3 Obtener los datos de la consulta
        $categoria = $query->fetchAll(PDO::FETCH_OBJ); //devuelve un arreglo con todos los pagos
    
        //4 cerrar la conexion, en caso de PDO no es necesario
        //retornar la conexion
        return $categoria;
    }
}