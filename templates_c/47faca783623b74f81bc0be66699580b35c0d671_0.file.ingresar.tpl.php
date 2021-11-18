<?php
/* Smarty version 3.1.39, created on 2021-11-17 21:20:54
  from 'C:\xampp\htdocs\tpeespecial\templates\ingresar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61959c660c59c3_04313365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47faca783623b74f81bc0be66699580b35c0d671' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\ingresar.tpl',
      1 => 1637194849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61959c660c59c3_04313365 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="container-fluid">
    <div class="m-auto">
        <img src="assets/img/logo_transparent.png" class="tamanioImgIngresar" alt="">
    </div>
    <div class="card tamanioIngresar m-auto">
        <div class="m-5">
            <form action="verificarIngreso" method="POST">  
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" placeholder="Escribe tu email" name="email">
                    <small id="" class="form-text text-muted">Puedes ingresar con email o con nombre de usuario.</small>
                </div>
                <div class="form-group">
                    <label for="">Nombre Usuario</label>
                    <input type="text" class="form-control" placeholder="Escribe tu nombre de usuario" name="nombre_usuario">
                    <small id="" class="form-text text-muted">Puedes ingresar con email o con nombre de usuario.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Escribe tu contraseña" id="exampleInputPassword1" name="contrasena">
                </div>
                <div class="">
                <button type="submit" class="col-2 btn btn-danger">Ingresar</button>
                <a href="registrarse" class="col-2 btn btn-danger">Registrarse</a>
                <a href="inicio" class="col-2 btn btn-danger">Inicio</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
