<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
class ProductsView{

    public function response($data, $status) {
        header("Content-Type: application/json");
        header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));
        echo json_encode($data);
    }
    
    private function _requestStatus($code){
        $status = array(
            200 => "OK",
            404 => "Not found",
            500 => "Internal Server Error",
            501 => "Internal Error in Tasks web"
          );
          return (isset($status[$code]))? $status[$code] : $status[500];
    }

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
    function editarProducto($productos, $categorias, $producto){
        $smarty = new Smarty();
        $smarty->assign('categorias',$categorias);
        $smarty->assign('titulo',"WEX");
        $smarty->assign('productos',$productos);
        $smarty->assign('producto',$producto);
        $smarty->assign('bandera',false);
        $smarty->display('templates/user/editarproducto.tpl');
    }
}