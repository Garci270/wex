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
                    <select class="custom-select" id="selCategoria">
                    <option value="-1" selected>Seleccione una categoria</option>
                    {foreach from=$categorias item=$item}
                        <option value="{$item->idcategoria}">{$item->Descripcion}</option>
                    {/foreach}
                    </select>
                    <button type="button" class="btn btn-secondary" id="editar"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="m-4">
{if $categoria}
    <div class="card m-auto" style="width: 18rem;">
        <img src="{$categoria->url_imagen}" class="card-img-top" alt="...">
        <input type="text" placeholder="Escribe la url" class="form-control">
        <div class="card-body">
            <h5 class="card-title">{$categoria->Descripcion}</h5>
            <input type="text" class="form-control" placeholder="Escribe el Titulo">
            <div class="card-footer">
                <a href="eliminar" class="btn btn-danger">Eliminar</a>
                <a href="editar" class="btn btn-danger">Editar</a>
            </div>
        </div>
    </div>
{/if}

</div>
<script src="js/categoria.js"></script>

{include file="templates/footer.tpl"}