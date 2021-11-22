<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
class ProductsView{
    function inicio($productos, $categorias, $user){
       $smarty = new Smarty();
       $smarty->assign('categorias',$categorias);
       $smarty->assign('productos',$productos);
       $smarty->assign('bandera',false);
       $smarty->assign('user',$user);
       $smarty->assign('titulo',"WEX");
       $smarty->display('templates/inicio.tpl');
    }

    function mostrarProductos($productos, $user){
        $smarty = new Smarty();
        $smarty->assign('titulo',"WEX");
        $smarty->assign('productos',$productos);
        $smarty->assign('bandera',false);
        $smarty->assign('user',$user);
        $smarty->display('templates/productos.tpl');
    }
    
    function mostrarDetalleProducto($productos, $categorias, $user){
        $smarty = new Smarty();
        $smarty->assign('categorias',$categorias);
        $smarty->assign('titulo',"WEX");
        $smarty->assign('productos',$productos);
        $smarty->assign('bandera',false);
        $smarty->assign('user',$user);
        $smarty->display('templates/productodetalle.tpl');
    }
    function agregarProducto($categorias){
        $smarty = new Smarty();
        $smarty->assign('categorias',$categorias);
        $smarty->assign('titulo',"WEX");
        $smarty->assign('bandera',false);
        $smarty->display('templates/user/agregarproducto.tpl');
    }
    function editarProducto($productos, $categorias, $producto, $admin){
        $smarty = new Smarty();
        $smarty->assign('categorias',$categorias);
        $smarty->assign('titulo',"WEX");
        $smarty->assign('productos',$productos);
        $smarty->assign('producto',$producto);
        $smarty->assign('admin',$admin);
        $smarty->assign('bandera',false);
        $smarty->display('templates/user/editarproducto.tpl');
    }
}