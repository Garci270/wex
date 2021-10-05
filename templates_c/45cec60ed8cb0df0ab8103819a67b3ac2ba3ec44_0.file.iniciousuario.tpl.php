<?php
/* Smarty version 3.1.39, created on 2021-10-04 19:10:08
  from 'C:\xampp\htdocs\tpeespecial\templates\user\iniciousuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615b7bc088ed32_09302408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45cec60ed8cb0df0ab8103819a67b3ac2ba3ec44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\user\\iniciousuario.tpl',
      1 => 1633385397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/user/navusuario.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615b7bc088ed32_09302408 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:templates/user/navusuario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
    <div class="col-12 p-4">
        <div class="row">
            <div class="col-7">
                <img src="assets/img/productos_supermercado.jpg" class="banner-inicio" alt="">
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="assets/img/precaudos.png" class="tamanioPrecaudos" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="bg-grey m-2 mb-5">
        <div class="container-fluid">
            <div class="row px-4 py-3 text-secondary">
                <div class="col-md-3 text-center">
                    <div class="row col-md-12 pointer">
                        <img src="assets/img/service4.png" class="iconServ m-auto" alt="">
                        <p class="textServ">Cantidad Productos</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="row col-md-12 pointer">
                        <img src="assets/img/service3.png" class="iconServ m-auto" alt="">
                        <p class="textServ">Usuarios</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="row col-md-12 mt-auto pointer">
                        <img src="assets/img/service1.png" class="iconServ m-auto" alt="">
                        <p class="textServ">Envio a destino</p>
                    </div>  
                </div>
                <div class="col-md-3 text-center">
                    <div class="row col-md-12 pointer">
                        <img src="assets/img/service2.png" class="iconServ m-auto" alt="">
                        <p class="textServ">Retiro en sucursal 24hs</p>
                    </div>
                </div>    
            </div>
        </div>
    </div>
   </div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
