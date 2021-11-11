<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>{$titulo}</title>
</head>
<body>
{include file="templates/user/navusuario.tpl"}
<div class="container-fluid">
    <div class="col-12 p-4">
        <div class="row">
            <div class="m-auto">
                <a class="btn agregarP" href="agregarProd">Agregar Producto</a>
                <a class="btn agregarC" href="agregarCat">Agregar Categoria</a>
                <a class="btn agregarC" href="agregarUsuario">Agregar Usuario</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="m-auto">
            <div class="row">
                <div class="card m-2">
                    <div class="card-body">
                        <h5 class="card-title">Cantidad de Productos</h5>
                    </div>
                    <div class="card-footer">
                        <h6 class="card-title">{$productos|@count}</h6>
                    </div>
                </div>
                <div class="card m-2">
                    <div class="card-body">
                        <h5 class="card-title">Cantidad de Categorias</h5>
                    </div>
                    <div class="card-footer">
                        <h6 class="card-title">{$categorias|@count}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{include file="templates/footer.tpl"}