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
}