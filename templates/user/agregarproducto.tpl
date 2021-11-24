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
<div class="m-4">
    <form action="agregarProducto" method="POST" enctype="multipart/form-data">  
        <div class="card m-auto" style="width: 18rem;">
            <h5 class="card-title">Imagen</h5>
            <input type="file" name="productFile" id="imageToUpload">
            <div class="card-body">
                <h5 class="card-title">Categoria</h5>
                <select class="custom-select mb-2" name="categoria">
                {foreach from=$categorys item=$category}
                    <option value="{$category->idcategoria}">{$category->Descripcion}</option>
                {/foreach}
                </select>
                <h5 class="card-title">Marca</h5>
                <input type="text" name="marca" class="form-control" placeholder="Escribe la Marca">
                <p class="card-text">Detalle</p>
                <input type="text" name="descripcion" class="form-control" placeholder="Escribe el Detalle">
                <div class="card-footer">
                <p class="card-text tamanioPrecio">Precio</p>
                <input type="text" name="precio" class="form-control" placeholder="Ingrese el Precio">
                    <button type="submit" class="btn btn-danger mt-2">Agregar</button>
                    <a href="inicioUsuario" class="btn btn-danger mt-2">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
</div>

{include file="templates/footer.tpl"}
