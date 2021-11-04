<?php
require_once "libs/smarty-3.1.39/libs/Smarty.class.php";
class CategorysView{
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