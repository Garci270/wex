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
                    <div class="row">
                        <select class="custom-select col-10" id="selArticulo">
                        <option value="-1" selected>Seleccione un artículo</option>
                        {foreach from=$productos item=$item}
                            <option value="{$item->idarticulo}">{$item->Descripcion}</option>
                        {/foreach}
                        </select>
                        <button type="button" class="btn btn-secondary col-1" id="editar"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="m-4">
{if $producto}
    <form action="actualizarProd/{$producto->idarticulo}" method="POST">  
        <div class="card m-auto" style="width: 18rem;">
            <img src="{$producto->url_imagen}" class="card-img-top" alt="...">
            <input type="text" value="{$producto->url_imagen}"  class="form-control" readonly>
            <div class="card-body">
                <h5 class="card-title">{$producto->categoria}</h5>
                <select class="custom-select mb-2" name="categoria">
                {foreach from=$categorias item=$categoria}
                    {if $producto->idcategoria == $categoria->idcategoria}
                        <option value="{$categoria->idcategoria}" selected>{$categoria->Descripcion}</option>                    
                    {else}
                        <option value="{$categoria->idcategoria}">{$categoria->Descripcion}</option>                                        
                    {/if}
                {/foreach}
                </select>
                <h5 class="card-title">{$producto->Marca}</h5>
                <input type="text" name="marca" class="form-control" value="{$producto->Marca}">
                <p class="card-text">{$producto->Descripcion}</p>
                <input type="text" name="descripcion" class="form-control" value="{$producto->Descripcion}">
                <div class="card-footer">
                <p class="card-text tamañoPrecio">${$producto->Precio_1}</p>
                <input type="text" name="precio" class="form-control" value="{$producto->Precio_1}">
                    <a href="eliminarProd/{$producto->idarticulo}" class="btn btn-danger mt-2">Eliminar</a>
                    <button type="submit" class="btn btn-danger mt-2">Editar</a>
                </div>
            </div>
        </div>
    </form>
{/if}
</div>
<script src="js/producto.js"></script>
{if $producto}
    {include file="templates/footer.tpl"}
{else}
    <script src="https://kit.fontawesome.com/538a82c3ca.js" crossorigin="anonymous"></script>
{/if}

