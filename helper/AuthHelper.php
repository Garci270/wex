<?php
class AuthHelper{
    function checkLogIn(){
        session_start();
        if(!isset($_SESSION["email"]) && !isset($_SESSION["nombre_usuario"])){
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
