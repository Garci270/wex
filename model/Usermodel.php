<?php
class UserModel{
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpespecial','root','');
    }
    function setUsuario($nombre,$userEmail, $contrasena){
        $query = $this->db->prepare('INSERT INTO usuario(nombre, email, clave) VALUES (?,?,?)');
        $query->execute(array($nombre,$userEmail,$contrasena));
    }
    function getUsuario($email){
        $query = $this->db->prepare('SELECT * FROM usuario WHERE email =?');
        $query->execute(array($email));
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }
    function setProducto(){
        //enviar producto
        $query = $this->db->prepare("INSERT INTO articulo");
        $query->execute(array()); 
    }
    
    function borrarProducto($id){
        //borrar producto con id
        $sentencia = $this->db->prepare("DELETE  FROM articulo WHERE idarticulo=?");
        $sentencia->execute(array($id));
    }

    function actualizarProducto($descripcion,$precio,$marca,$categoria,$id){
        //actualizar productao con id
        $sentencia = $this->db->prepare("UPDATE articulo SET Descripcion=?, Precio_1=?, Marca=?, idcategoria=? WHERE idarticulo =?");
        $sentencia->execute(array($descripcion,$precio,$marca,$categoria,$id));
    }

    function agregarProducto($descripcion,$precio,$marca,$categoria,$imagen){
        //actualizar producto con id
        $sentencia = $this->db->prepare("INSERT INTO articulo (Descripcion, Precio_1, url_imagen, Marca, idcategoria) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($descripcion,$precio,$imagen,$marca,$categoria));
    }

    function borrarCategoria($id){
        //borrar producto con id
        $sentencia = $this->db->prepare("DELETE  FROM categoria WHERE idcategoria=?");
        $sentencia->execute(array($id));
    }

    function actualizarCategoria($descripcion, $urlImagen, $id){
        $sentencia = $this->db->prepare("UPDATE categoria SET Descripcion=?, url_imagen=? WHERE idcategoria=?");
        $sentencia->execute(array($descripcion, $urlImagen, $id));
    }

    function agregarCategoria($descripcion, $urlImagen){
        $sentencia = $this->db->prepare("INSERT INTO categoria (Descripcion, url_imagen) VALUES (?,?)");
        $sentencia->execute(array($descripcion, $urlImagen));
    }
}