<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";

class UsuarioView{
    function logIn(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('bandera',false);
        $smarty->display('templates/ingresar.tpl');
    }

    function home(){
        header("Location: ".BASE_URL."inicioUsuario");
    } 
    function userStart($productos, $categorias, $users){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('bandera',true);
        $smarty->assign('productos',$productos);
        $smarty->assign('categorias',$categorias);
        $smarty->assign('users',$users);
        $smarty->display('templates/user/iniciousuario.tpl');
    }
    function showRegister(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('bandera',false);
        $smarty->display('templates/registro.tpl');
    }

    function showAddUsers(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('bandera',false);
        $smarty->display('templates/user/agregarusuario.tpl');
    }

    function showEditUsers($users, $user){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('users',$users);
        $smarty->assign('user',$user);
        $smarty->assign('bandera',true);
        $smarty->display('templates/user/editarusuario.tpl');
    }

    function showError($error,$user){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('error',$error);
        $smarty->assign('user',$user);
        $smarty->assign('bandera',true);
        $smarty->display('templates/error.tpl');
    }

}
