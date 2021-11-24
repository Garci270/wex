<?php
/* Smarty version 3.1.39, created on 2021-11-24 00:07:12
  from 'C:\xampp\htdocs\tpeespecial\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619dac608a4f89_59376635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4f4130892e06fade9a74148c473afb44f5c2b5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\productos.tpl',
      1 => 1637722874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619dac608a4f89_59376635 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <div class="m-auto col-3">
                <div class="card m-4" style="width: 16rem;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->url_imagen;?>
" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->categoria;?>
</h5>
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->Marca;?>
</h5>
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value->Descripcion;?>
</p>
                        <div class="card-footer">
                            <p class="card-text tamanioPrecio">$<?php echo $_smarty_tpl->tpl_vars['product']->value->Precio_1;?>
</p>
                            <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['product']->value->idarticulo;?>
" class="btn btn-danger">Detalle</a>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                                <p class="text-muted">En detalle ahora puedes comentar!</p>
                            <?php } else { ?>
                                <p class="text-muted">En detalle puedes ver los comentarios!</p>
                            <?php }?>
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
