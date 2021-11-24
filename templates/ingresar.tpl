<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>{$title}</title>
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
{include file="footer.tpl"}