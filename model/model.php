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
    function setProducto(){
   
        $query = $this->db->prepare("INSERT INTO");
        $query->execute(array()); 
    }
    
    function borrarProducto($id){
        $sentencia = $this->db->prepare("DELETE FROM articulo WHERE id=?");
        $sentencia->execute(array($id));
    }

    function actualizarProducto($id){
        $sentencia = $this->db->prepare("UPDATE FROM articulo WHERE id=?");
        $sentencia->execute(array($id));
    }
}