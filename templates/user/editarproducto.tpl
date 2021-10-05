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
    <div class="col-12">
        <div class="row">
            <div class="m-2">
                <div class="m-auto">
                    <select class="custom-select" id="selArticulo">
                    <option value="-1" selected>Seleccione un artículo</option>
                    {foreach from=$productos item=$item}
                        <option value="{$item->idarticulo}">{$item->Descripcion}</option>
                    {/foreach}
                    </select>
                    <button type="button" class="btn btn-secondary" id="editar"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="m-4">
{if $producto}
    <div class="card m-auto" style="width: 18rem;">
        <img src="{$producto->url_imagen}" class="card-img-top" alt="...">
        <input type="text" placeholder="Escribe la url" class="form-control">
        <div class="card-body">
            <h5 class="card-title">{$producto->categoria}</h5>
            <select class="custom-select mb-2">
            {foreach from=$categorias item=$categoria}
                <option selected>{$categoria->Descripcion}</option>
            {/foreach}
            </select>
            <h5 class="card-title">{$producto->Marca}</h5>
            <input type="text" class="form-control" placeholder="Escribe la Marca">
            <p class="card-text">{$producto->Descripcion}</p>
            <input type="text" class="form-control" placeholder="Escribe el Detalle">
            <div class="card-footer">
            <p class="card-text tamañoPrecio">${$producto->Precio_1}</p>
            <input type="number" class="form-control" placeholder="Escribe el Precio aqui">
                <a href="eliminar" class="btn btn-danger">Eliminar</a>
                <a href="editar" class="btn btn-danger">Editar</a>
            </div>
        </div>
    </div>
{/if}

</div>
<script src="js/producto.js"></script>

{include file="templates/footer.tpl"}
