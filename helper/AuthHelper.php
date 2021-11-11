<?php
class AuthHelper{
    function checkLogIn(){
        session_start();
        if(!isset($_SESSION["email"]) && !isset($_SESSION["nombre_usuario"])){
           /*  header("Location: ".BASE_URL."ingresar"); */
           return false;
        }else{
            return true;
        }
    }

    function checkLevel(){
        if($_SESSION["level"] == '1'){
            return true;
        }else{
            return false;
        }
    }

}
