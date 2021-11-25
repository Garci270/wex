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
{include file="templates/user/navusuario.tpl"}
<div class="container-fluid">
    <div class="col-12">
        <div class="row">
            <div class="m-2">
                <div class="m-auto">
                    <div class="row">
                        <select class="custom-select col-10" id="selCategoria">
                        <option value="-1" selected>Seleccione una categoria</option>
                        {foreach from=$categorys item=$item}
                            <option value="{$item->idcategoria}">{$item->Descripcion}</option>
                        {/foreach}
                        </select>
                        <button type="button" class="btn btn-secondary col-2" id="editar"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="m-5">
{if $category}
    <form action="editarCategoria/{$category->idcategoria}" method="POST" enctype="multipart/form-data">  
        <div class="card m-auto" style="width: 18rem;">
            <img src="{$category->url_imagen}" class="card-img-top" alt="..." >
            <input type="file" name="categoryFile" id="imageToUpload">
            <div class="card-body">
                <h5 class="card-title">{$category->Descripcion}</h5>
                <input type="text" name="descripcion" class="form-control" value="{$category->Descripcion}">
                <div class="card-footer">
                    <a href="eliminarCat/{$category->idcategoria}" class="btn btn-danger mt-2">Eliminar</a>
                    <a href="eliminarProdsCat/{$category->idcategoria}" class="btn btn-danger mt-2">Eliminar Productos</a>
                    <button type="submit" class="btn btn-danger mt-2">Editar</a>
                </div>
            </div>
        </div>
    </form>
{/if}

</div>
<script src="js/category.js"></script>
{if $category}
    {include file="templates/footer.tpl"}
{else}
    <script src="https://kit.fontawesome.com/538a82c3ca.js" crossorigin="anonymous"></script>
{/if}