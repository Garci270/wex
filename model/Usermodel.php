<?php
class UserModel{
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpespecial','root','');
    }
    function setUsuer($name,$userName,$userEmail, $password, $level){
        $query = $this->db->prepare('INSERT INTO usuario(nombre, nombre_usuario, email, clave, nivel) VALUES (?,?,?,?,?)');
        $query->execute(array($name,$userName,$userEmail,$password, $level));
    }
    function getUsers(){
        $query = $this->db->prepare('SELECT * FROM usuario');
        $users = $query->fetch(PDO::FETCH_OBJ);
        return $users;
    }
    function getUsuer($email){
        $query = $this->db->prepare('SELECT * FROM usuario WHERE email =?');
        $query->execute(array($email));
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function setUserLevel($level){
        $query = $this->db->prepare('UPDATE usuario SET nivel=? WHERE idusuario=?');
        $query->execute(array($level));
    }

    function deleteUser($id){
        $query = $this->db->prepare('DELETE FROM usuario WHERE id=?');
        $query->execute(array($id));
    }
}