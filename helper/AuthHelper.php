<?php
class AuthHelper{
    function checkLogIn(){
        session_start();
        if(!isset($_SESSION["email"])){
            header("Location: ".BASE_URL."ingresar");
        }
    }

    function checkLevel(){
        session_start();
        if((!isset($_SESSION["email"]))&&($_SESSION["level"] == 1)){
            return true;
        }else{
            return false;
        }
    }

}
