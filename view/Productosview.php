<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
class ProductosView{
    function inicio($productos, $categorias){
       $smarty = new Smarty();
       $smarty->assign('categorias',$categorias);
       $smarty->assign('productos',$productos);
       $smarty->assign('bandera',false);
       $smarty->assign('titulo',"WEX");
       $smarty->display('templates/inicio.tpl');
    }

    function mostrarProductos($productos){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('productos',$productos);
        $smarty->assign('bandera',false);
        $smarty->display('templates/productos.tpl');
    }
    
    function mostrarDetalleProducto($productos, $categorias){
        $smarty = new Smarty();
        $smarty->assign('categorias',$categorias);
        $smarty->assign('titulo',"WEX");
        $smarty->assign('productos',$productos);
        $smarty->assign('bandera',false);
        $smarty->display('templates/productodetalle.tpl');
    }
    function agregarProducto($categorias){
        $smarty = new Smarty();
        $smarty->assign('categorias',$categorias);
        $smarty->assign('titulo',"WEX");
        $smarty->assign('bandera',false);
        $smarty->display('templates/user/agregarproducto.tpl');
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
   
    /* function mostrarCategorias($productos, $categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('categorias',$categorias);
        $smarty->assign('productos',$productos);
        $smarty->assign('bandera',false);
        $smarty->display('templates/productos.tpl');
    } */

    /* function mostrarRegistrarse(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('bandera',true);
        $smarty->display('templates/registro.tpl');
    } */
}