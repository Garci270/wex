<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
class CategoriasView{
    function mostrarCategorias($productos, $categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('categorias',$categorias);
        $smarty->assign('productos',$productos);
        $smarty->assign('bandera',false);
        $smarty->display('templates/productos.tpl');
    }
    function editarCategoria($categorias, $categoria){
        $smarty = new Smarty();
        $smarty->assign('categorias',$categorias);
        $smarty->assign('titulo',"WEX");
        $smarty->assign('categoria',$categoria);
        $smarty->assign('bandera',false);
        $smarty->display('templates/user/editarcategoria.tpl');
    }
    function agregarCategoria(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('bandera',true);
        $smarty->display('templates/user/agregarcategoria.tpl');
    }
}