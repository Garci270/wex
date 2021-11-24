<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";

class UserView{
    function logIn(){
        $smarty = new Smarty();
        $smarty->assign('title',"WEX");
        $smarty->assign('flag',false);
        $smarty->display('templates/ingresar.tpl');
    }

    function home(){
        header("Location: ".BASE_URL."inicioUsuario");
    } 
    function userStart($products, $categorys, $users){
        $smarty = new Smarty();
        $smarty->assign('title',"WEX");
        $smarty->assign('flag',true);
        $smarty->assign('products',$products);
        $smarty->assign('categorys',$categorys);
        $smarty->assign('users',$users);
        $smarty->display('templates/user/iniciousuario.tpl');
    }
    function showRegister(){
        $smarty = new Smarty();
        $smarty->assign('title',"WEX");
        $smarty->assign('flag',false);
        $smarty->display('templates/registro.tpl');
    }

    function showAddUsers(){
        $smarty = new Smarty();
        $smarty->assign('title',"WEX");
        $smarty->assign('flag',false);
        $smarty->display('templates/user/agregarusuario.tpl');
    }

    function showEditUsers($users, $user){
        $smarty = new Smarty();
        $smarty->assign('title',"WEX");
        $smarty->assign('users',$users);
        $smarty->assign('user',$user);
        $smarty->assign('flag',true);
        $smarty->display('templates/user/editarusuario.tpl');
    }

    function showError($error,$user){
        $smarty = new Smarty();
        $smarty->assign('title',"WEX");
        $smarty->assign('error',$error);
        $smarty->assign('user',$user);
        $smarty->assign('flag',true);
        $smarty->display('templates/error.tpl');
    }

}
