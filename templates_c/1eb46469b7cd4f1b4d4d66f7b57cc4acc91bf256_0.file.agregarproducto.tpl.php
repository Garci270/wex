<?php
/* Smarty version 3.1.39, created on 2021-11-23 16:02:10
  from 'C:\xampp\htdocs\tpeespecial\templates\user\agregarproducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619d3ab289f772_62525238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1eb46469b7cd4f1b4d4d66f7b57cc4acc91bf256' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\user\\agregarproducto.tpl',
      1 => 1637693941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/user/navusuario.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619d3ab289f772_62525238 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="m-4">
    <form action="agregarProducto" method="POST" enctype="multipart/form-data">  
        <div class="card m-auto" style="width: 18rem;">
            <h5 class="card-title">Imagen</h5>
            <input type="file" name="productFile" id="imageToUpload">
            <div class="card-body">
                <h5 class="card-title">Categoria</h5>
                <select class="custom-select mb-2" name="categoria">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->idcategoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->Descripcion;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <h5 class="card-title">Marca</h5>
                <input type="text" name="marca" class="form-control" placeholder="Escribe la Marca">
                <p class="card-text">Detalle</p>
                <input type="text" name="descripcion" class="form-control" placeholder="Escribe el Detalle">
                <div class="card-footer">
                <p class="card-text tamañoPrecio">Precio</p>
                <input type="text" name="precio" class="form-control" placeholder="Ingrese el Precio">
                    <button type="submit" class="btn btn-danger mt-2">Agregar</button>
                    <a href="inicioUsuario" class="btn btn-danger mt-2">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
