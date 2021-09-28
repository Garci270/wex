<?php
/* Smarty version 3.1.39, created on 2021-09-27 21:15:17
  from 'C:\xampp\htdocs\tpeespecial\templates\inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61525e9594ef39_64759551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a867c0ee55fd85ca5bcb4b778038c77cb969e801' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\inicio.tpl',
      1 => 1632787272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:slider.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61525e9594ef39_64759551 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="m-3">
    <img src="assets/img/bannerabarrotes.jpg" class="banner-inicio" alt="">
</div>
<div class="bg-grey m-2">
    <div class="container-fluid">
        <div class="row px-4 py-3 text-secondary">
            <div class="col-md-3 text-center">
                <div class="row col-md-12 pointer">
                    <img src="assets/img/service4.png" class="iconServ m-auto" alt="">
                    <p class="textServ">Pago en efectivo</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="row col-md-12 pointer">
                    <img src="assets/img/service3.png" class="iconServ m-auto" alt="">
                    <p class="textServ">Ofertas</p>
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
<?php $_smarty_tpl->_subTemplateRender("file:slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
