<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
class ProductsView{
    function home($products, $categorys, $user){
       $smarty = new Smarty();
       $smarty->assign('categorys',$categorys);
       $smarty->assign('products',$products);
       $smarty->assign('flag',false);
       $smarty->assign('user',$user);
       $smarty->assign('title',"WEX");
       $smarty->display('templates/inicio.tpl');
    }

    function showProducts($products, $user){
        $smarty = new Smarty();
        $smarty->assign('title',"WEX");
        $smarty->assign('products',$products);
        $smarty->assign('flag',false);
        $smarty->assign('user',$user);
        $smarty->display('templates/productos.tpl');
    }
    
    function showDetailProduct($products, $categorys, $user){
        $smarty = new Smarty();
        $smarty->assign('categorys',$categorys);
        $smarty->assign('title',"WEX");
        $smarty->assign('products',$products);
        $smarty->assign('flag',false);
        $smarty->assign('user',$user);
        $smarty->display('templates/productodetalle.tpl');
    }
    function addProduct($categorys){
        $smarty = new Smarty();
        $smarty->assign('categorys',$categorys);
        $smarty->assign('title',"WEX");
        $smarty->assign('flag',false);
        $smarty->display('templates/user/agregarproducto.tpl');
    }
    function editProduct($products, $categorys, $product, $admin){
        $smarty = new Smarty();
        $smarty->assign('categorys',$categorys);
        $smarty->assign('title',"WEX");
        $smarty->assign('products',$products);
        $smarty->assign('product',$product);
        $smarty->assign('admin',$admin);
        $smarty->assign('flag',false);
        $smarty->display('templates/user/editarproducto.tpl');
    }
}