<?php
/* Smarty version 3.1.39, created on 2021-11-11 20:50:17
  from 'C:\xampp\htdocs\tpeespecial\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618dac39ab8dd1_96674698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '869b437fe72f7c0515a0711a6befb9875709df81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\registro.tpl',
      1 => 1636668394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_618dac39ab8dd1_96674698 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="m-4">
            <form action="registro" method="POST">
            <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" placeholder="Escribe tu nombre" name="nombre" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre de Usuario</label>
                    <input type="text" class="form-control" placeholder="Escribe tu nombre de usuario" name="nombre_usuario" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>  
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" placeholder="Escribe tu email" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu email con nadie.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Contraseña</label>
                    <input type="password" class="form-control" placeholder="Escribe tu contraseña" id="exampleInputPassword1" name="contrasena">
                </div>
                <button type="submit" class="col-2 btn btn-danger">Registrarse</button>
                <a href="ingresar" class="col-2 btn btn-danger">Iniciar Sesion</a>
                <a href="inicio" class="col-2 btn btn-danger">Inicio</a>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
