<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
class View{
   function inicio(){
       $smarty = new Smarty();
       $smarty->assign('titulo',"WEX");
       $smarty->display('templates/inicio.tpl');
   }
   function mostrarProductos($productos){
    $smarty = new Smarty();
    $smarty->assign('titulo',"WEX");
    $smarty->assign('productos',$productos);
    $smarty->display('templates/productos.tpl');
   }
   function mostrarProductosSlider($productos){
    $smarty = new Smarty();
    $smarty->assign('productos',$productos);
    $smarty->display('templates/slider.tpl');
   }
   function mostrarCategorias($categoria){
    var_dump($categoria);
   }
}