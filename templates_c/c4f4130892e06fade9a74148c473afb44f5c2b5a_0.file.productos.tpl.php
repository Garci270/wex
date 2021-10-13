<?php
/* Smarty version 3.1.39, created on 2021-10-13 18:43:45
  from 'C:\xampp\htdocs\tpeespecial\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616753117eaec2_99038519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4f4130892e06fade9a74148c473afb44f5c2b5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\productos.tpl',
      1 => 1634161371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_616753117eaec2_99038519 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <div class="m-auto col-3">
                <div class="card p-6" style="width: 18rem;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value->url_imagen;?>
" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</h5>
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['producto']->value->Marca;?>
</h5>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['producto']->value->Descripcion;?>
</p>
                        <div class="card-footer">
                            <p class="card-text tamañoPrecio">$<?php echo $_smarty_tpl->tpl_vars['producto']->value->Precio_1;?>
</p>
                            <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['producto']->value->idarticulo;?>
" class="btn btn-danger">Detalle</a>
                        </div>
                    </div>
                </div>
            </div>  
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>        
    </div>    
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
