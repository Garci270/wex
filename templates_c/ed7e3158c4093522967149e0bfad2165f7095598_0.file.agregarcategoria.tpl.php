<?php
/* Smarty version 3.1.39, created on 2021-11-24 00:44:53
  from 'C:\xampp\htdocs\tpeespecial\templates\user\agregarcategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619db535390125_37425907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed7e3158c4093522967149e0bfad2165f7095598' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\user\\agregarcategoria.tpl',
      1 => 1637722438,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/user/navusuario.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_619db535390125_37425907 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="m-4">
    <form action="agregarCategoria" method="POST" enctype="multipart/form-data">  
        <div class="card m-auto" style="width: 18rem;">
            <h5 class="card-title">Imagen</h5>
            <input type="file" name="categoryFile" id="imageToUpload">
            <div class="card-body">
                <h5 class="card-title">Categoria</h5>
                <input type="text" name="descripcion" class="form-control" placeholder="Escribe el Nombre">
                <div class="card-footer">
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
