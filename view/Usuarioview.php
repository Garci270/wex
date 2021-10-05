<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";

class UsuarioView{
    function ingresar($error){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('bandera',true);
        $smarty->assign('error', $error);
        $smarty->display('templates/ingresar.tpl');
    }
    
    /* function inicio(){
        header("Location: ".BASE_URL."inicio");
    } */
    function inicioUsuario(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('bandera',true);
        $smarty->display('templates/user/iniciousuario.tpl');
    }
    function editarProducto($productos, $categorias, $producto){
        $smarty = new Smarty();
        $smarty->assign('categorias',$categorias);
        $smarty->assign('titulo',"WEX");
        $smarty->assign('productos',$productos);
        $smarty->assign('producto',$producto);
        $smarty->assign('bandera',false);
        $smarty->display('templates/user/editarproducto.tpl');
    }
    function editarCategoria($categorias, $categoria){
        $smarty = new Smarty();
        $smarty->assign('categorias',$categorias);
        $smarty->assign('titulo',"WEX");
        $smarty->assign('categoria',$categoria);
        $smarty->assign('bandera',false);
        $smarty->display('templates/user/editarcategoria.tpl');
    }

}
