<?php
/* Smarty version 3.1.39, created on 2021-11-24 21:34:55
  from 'C:\xampp\htdocs\tpeespecial\templates\user\editarcategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619eda2f673fa8_32757961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53e80510e5cf2da50a9939ce5de44ae76e2314c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\user\\editarcategoria.tpl',
      1 => 1637800478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/user/navusuario.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619eda2f673fa8_32757961 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php $_smarty_tpl->_subTemplateRender("file:templates/user/navusuario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
    <div class="col-12">
        <div class="row">
            <div class="m-2">
                <div class="m-auto">
                    <div class="row">
                        <select class="custom-select col-10" id="selCategoria">
                        <option value="-1" selected>Seleccione una categoria</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorys']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->idcategoria;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->Descripcion;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <button type="button" class="btn btn-secondary col-2" id="editar"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="m-5">
<?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
    <form action="editarCategoria/<?php echo $_smarty_tpl->tpl_vars['category']->value->idcategoria;?>
" method="POST" enctype="multipart/form-data">  
        <div class="card m-auto" style="width: 18rem;">
            <img src="<?php echo $_smarty_tpl->tpl_vars['category']->value->url_imagen;?>
" class="card-img-top" alt="..." >
            <input type="file" name="categoryFile" id="imageToUpload">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['category']->value->Descripcion;?>
</h5>
                <input type="text" name="descripcion" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->Descripcion;?>
">
                <div class="card-footer">
                    <a href="eliminarCat/<?php echo $_smarty_tpl->tpl_vars['category']->value->idcategoria;?>
" class="btn btn-danger mt-2">Eliminar</a>
                    <small class="form-text text-muted">Debes eliminar todos los productos antes de eliminar la categoria.</small>
                    <a href="eliminarProdsCat/<?php echo $_smarty_tpl->tpl_vars['category']->value->idcategoria;?>
" class="btn btn-danger mt-2">Eliminar Productos</a>
                    <button type="submit" class="btn btn-danger mt-2">Editar</a>
                </div>
            </div>
        </div>
    </form>
<?php }?>

</div>
<?php echo '<script'; ?>
 src="js/category.js"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['category']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/538a82c3ca.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php }
}
}
