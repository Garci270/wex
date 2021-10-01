<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
class View{
    function inicio($productos, $categorias){
       $smarty = new Smarty();
       $smarty->assign('categorias',$categorias);
       $smarty->assign('productos',$productos);
       $smarty->assign('titulo',"WEX");
       $smarty->display('templates/inicio.tpl');
    }

    function mostrarProductos($productos){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('productos',$productos);
        $smarty->display('templates/productos.tpl');
    }
    
    function mostrarDetalleProducto($productos, $categorias){
        $smarty = new Smarty();
        $smarty->assign('categorias',$categorias);
        $smarty->assign('titulo',"WEX");
        $smarty->assign('productos',$productos);
        $smarty->display('templates/productodetalle.tpl');
    }
   
    function mostrarCategorias($productos, $categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('categorias',$categorias);
        $smarty->assign('productos',$productos);
        $smarty->display('templates/productos.tpl');
    }

    function mostrarRegistrarse(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->display('templates/registro.tpl');
    }
}