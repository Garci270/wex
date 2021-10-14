<?php
class AuthHelper{
    function checkearIngreso(){
        session_start();
        if(!isset($_SESSION["email"])){
            header("Location: ".BASE_URL."ingresar");
        }
    }

}
