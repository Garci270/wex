<?php
class UserModel{
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpespecial','root','');
    }
    function setUser($name,$userName,$userEmail, $password, $level){
        $query = $this->db->prepare('INSERT INTO usuario(nombre, nombre_usuario, email, clave, nivel) VALUES (?,?,?,?,?)');
        $query->execute(array($name,$userName,$userEmail,$password,$level));
    }
    function getUsers(){
        $query = $this->db->prepare('SELECT * FROM usuario');
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }
    function getUserByMail($email){
        $query = $this->db->prepare('SELECT * FROM usuario WHERE email =?');
        $query->execute(array($email));
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function getUser($userName){
        $query = $this->db->prepare('SELECT * FROM usuario WHERE nombre_usuario =?');
        $query->execute(array($userName));
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function getUserById($id){
        $query = $this->db->prepare('SELECT * FROM usuario WHERE idusuario =?');
        $query->execute(array($id));
        $user = $query->fetchAll(PDO::FETCH_OBJ);
        return $user;
    }

    function setUserLevel($id,$level){
        $query = $this->db->prepare('UPDATE usuario SET nivel=? WHERE idusuario=?');
        $query->execute(array($level,$id));
    }

    function deleteUser($id){
        $query = $this->db->prepare('DELETE FROM usuario WHERE idusuario=?');
        $query->execute(array($id));
    }

    function setAdmin($name,$userName,$userEmail, $password, $level){
        $query = $this->db->prepare('INSERT INTO usuario(nombre, nombre_usuario, email, clave, nivel) VALUES (?,?,?,?,?)');
        $query->execute(array($name,$userName,$userEmail,$password,$level));
    }
}