<?php
/* Smarty version 3.1.39, created on 2021-11-11 18:42:55
  from 'C:\xampp\htdocs\tpeespecial\templates\user\iniciousuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618d8e5feb74b2_31358721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45cec60ed8cb0df0ab8103819a67b3ac2ba3ec44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\user\\iniciousuario.tpl',
      1 => 1636666249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/user/navusuario.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_618d8e5feb74b2_31358721 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="m-auto">
                <a class="btn agregarP" href="agregarProd">Agregar Producto</a>
                <a class="btn agregarC" href="agregarCat">Agregar Categoria</a>
                <a class="btn agregarC" href="agregarUsuario">Agregar Usuario</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="m-auto">
            <div class="row">
                <div class="card m-2">
                    <div class="card-body">
                        <h5 class="card-title">Cantidad de Productos</h5>
                    </div>
                    <div class="card-footer">
                        <h6 class="card-title"><?php echo count($_smarty_tpl->tpl_vars['productos']->value);?>
</h6>
                    </div>
                </div>
                <div class="card m-2">
                    <div class="card-body">
                        <h5 class="card-title">Cantidad de Categorias</h5>
                    </div>
                    <div class="card-footer">
                        <h6 class="card-title"><?php echo count($_smarty_tpl->tpl_vars['categorias']->value);?>
</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
