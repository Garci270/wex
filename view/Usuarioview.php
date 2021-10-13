<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";

class UsuarioView{
    function ingresar(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('bandera',true);
        $smarty->display('templates/ingresar.tpl');
    }

    function inicio(){
        header("Location: ".BASE_URL."inicioUsuario");
    } 
    function inicioUsuario($productos, $categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('bandera',true);
        $smarty->assign('productos',$productos);
        $smarty->assign('categorias',$categorias);
        $smarty->display('templates/user/iniciousuario.tpl');
    }
    function mostrarRegistrarse(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('bandera',true);
        $smarty->display('templates/registro.tpl');
    }

}
