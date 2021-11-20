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
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</head>
<body>
{include file="navbar.tpl"}
    <div class="m-4">
        <div class="card m-auto" style="width: 18rem;">
            <img src="{$productos[0]->url_imagen}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{$productos[0]->categoria}</h5>
                <h5 class="card-title">{$productos[0]->Marca}</h5>
                <p class="card-text">{$productos[0]->Descripcion}</p>
                <div class="card-footer">
                    <p class="card-text tamañoPrecio">${$productos[0]->Precio_1}</p>
                    <a href="inicio" class="btn btn-danger">Inicio</a>
                    {if $user}
                        {include file="comentarios.tpl"}
                    {/if}
                </div>
            </div>
        </div>
        {include file="templates/articuloComentarios.tpl"}
    </div>
<script src="js/comentario.js"></script>
{include file="footer.tpl"}