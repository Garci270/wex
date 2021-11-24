<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
class CategorysView{
    function showCategorys($products, $categorys, $user){
        $smarty = new Smarty();
        $smarty->assign('title',"WEX");
        $smarty->assign('categorys',$categorys);
        $smarty->assign('products',$products);
        $smarty->assign('flag',false);
        $smarty->assign('user',$user);
        $smarty->display('templates/productos.tpl');
    }
    function editCategory($categorys, $category){
        $smarty = new Smarty();
        $smarty->assign('categorys',$categorys);
        $smarty->assign('title',"WEX");
        $smarty->assign('category',$category);
        $smarty->assign('flag',false);
        $smarty->display('templates/user/editarcategoria.tpl');
    }
    function addCategory(){
        $smarty = new Smarty();
        $smarty->assign('title',"WEX");
        $smarty->assign('flag',true);
        $smarty->display('templates/user/agregarcategoria.tpl');
    }
}