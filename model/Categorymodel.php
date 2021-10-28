<?php
class categorysModel{
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpespecial','root','');
    }
    function getProductsCat($id){
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
    function getCategorys($id){
        if($id>0){
            $query = $this->db->prepare('SELECT * FROM categoria WHERE idcategoria=?');
        }else{
            $query = $this->db->prepare('SELECT * FROM categoria');
        }
        $query->execute(array($id));
        $categoria = $query->fetchAll(PDO::FETCH_OBJ);
        return $categoria;
    }

    function deleteCategory($id){
        $sentencia = $this->db->prepare("DELETE  FROM categoria WHERE idcategoria=?");
        $sentencia->execute(array($id));
    }

    function updateCategory($description, $urlImage, $id){
        $sentencia = $this->db->prepare("UPDATE categoria SET Descripcion=?, url_imagen=? WHERE idcategoria=?");
        $sentencia->execute(array($description, $urlImage, $id));
    }

    function addCategory($description, $urlImage){
        $sentencia = $this->db->prepare("INSERT INTO categoria (Descripcion, url_imagen) VALUES (?,?)");
        $sentencia->execute(array($description, $urlImage));
    }
}