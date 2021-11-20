<?php
/* Smarty version 3.1.39, created on 2021-11-19 23:41:38
  from 'C:\xampp\htdocs\tpeespecial\templates\productodetalle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61986062024ba3_73512515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7cf94d974d4bcb5911148683db6acff571a177b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\productodetalle.tpl',
      1 => 1637376095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:comentarios.tpl' => 1,
    'file:templates/articuloComentarios.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61986062024ba3_73512515 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"><?php echo '</script'; ?>
>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="m-4">
        <div class="card m-auto" style="width: 18rem;">
            <img src="<?php echo $_smarty_tpl->tpl_vars['productos']->value[0]->url_imagen;?>
" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['productos']->value[0]->categoria;?>
</h5>
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['productos']->value[0]->Marca;?>
</h5>
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['productos']->value[0]->Descripcion;?>
</p>
                <div class="card-footer">
                    <p class="card-text tamañoPrecio">$<?php echo $_smarty_tpl->tpl_vars['productos']->value[0]->Precio_1;?>
</p>
                    <a href="inicio" class="btn btn-danger">Inicio</a>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender("file:comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php }?>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/articuloComentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
<?php echo '<script'; ?>
 src="js/comentario.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
