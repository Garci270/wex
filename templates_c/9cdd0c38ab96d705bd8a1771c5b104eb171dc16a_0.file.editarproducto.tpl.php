<?php
/* Smarty version 3.1.39, created on 2021-11-17 20:04:23
  from 'C:\xampp\htdocs\tpeespecial\templates\user\editarproducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61958a779acd74_76720591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cdd0c38ab96d705bd8a1771c5b104eb171dc16a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\user\\editarproducto.tpl',
      1 => 1637190261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/user/navusuario.tpl' => 1,
    'file:templates/user/editarComentario.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61958a779acd74_76720591 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php $_smarty_tpl->_subTemplateRender("file:templates/user/navusuario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
    <div class="col-12">
        <div class="row">
            <div class="m-2">
                <div class="m-auto">
                    <div class="row">
                        <select class="custom-select col-10" id="selArticulo">
                        <option value="-1" selected>Seleccione un artículo</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->idarticulo;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->Descripcion;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <button type="button" class="btn btn-secondary col-1" id="editar"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="m-4">
<?php if ($_smarty_tpl->tpl_vars['producto']->value) {?>
    <form action="actualizarProd/<?php echo $_smarty_tpl->tpl_vars['producto']->value->idarticulo;?>
" method="POST">  
        <div class="card m-auto" style="width: 18rem;">
            <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value->url_imagen;?>
" class="card-img-top" alt="...">
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->url_imagen;?>
" name="imagen"  class="form-control">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</h5>
                <select class="custom-select mb-2" name="categoria">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['producto']->value->idcategoria == $_smarty_tpl->tpl_vars['categoria']->value->idcategoria) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->idcategoria;?>
" selected><?php echo $_smarty_tpl->tpl_vars['categoria']->value->Descripcion;?>
</option>                    
                    <?php } else { ?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->idcategoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->Descripcion;?>
</option>                                        
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['producto']->value->Marca;?>
</h5>
                <input type="text" name="marca" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->Marca;?>
">
                <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['producto']->value->Descripcion;?>
</p>
                <input type="text" name="descripcion" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->Descripcion;?>
">
                <div class="card-footer">
                    <p class="card-text tamañoPrecio">$<?php echo $_smarty_tpl->tpl_vars['producto']->value->Precio_1;?>
</p>
                    <input type="text" name="precio" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->Precio_1;?>
">
                    <a href="eliminarProd/<?php echo $_smarty_tpl->tpl_vars['producto']->value->idarticulo;?>
" class="btn btn-danger mt-2">Eliminar</a>
                    <button type="submit" class="btn btn-danger mt-2">Editar</button>
                </div>
            </div>
        </div>
        </form>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/user/editarComentario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
</div>
<?php echo '<script'; ?>
 src="js/producto.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/comentario.js"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['producto']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/538a82c3ca.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php }?>

<?php }
}
