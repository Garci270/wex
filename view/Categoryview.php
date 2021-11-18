<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
class CategorysView{
    function showCategorys($productos, $categorias, $user){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('categorias',$categorias);
        $smarty->assign('productos',$productos);
        $smarty->assign('bandera',false);
        $smarty->assign('user',$user);
        $smarty->display('templates/productos.tpl');
    }
    function editCategory($categorias, $categoria){
        $smarty = new Smarty();
        $smarty->assign('categorias',$categorias);
        $smarty->assign('titulo',"WEX");
        $smarty->assign('categoria',$categoria);
        $smarty->assign('bandera',false);
        $smarty->display('templates/user/editarcategoria.tpl');
    }
    function addCategory(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('bandera',true);
        $smarty->display('templates/user/agregarcategoria.tpl');
    }
}