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
{include file="navbar.tpl"}
<div class="container-fluid">
    <div class="row">
        {foreach from=$productos item=$producto}
            <div class="m-auto col-3">
                <div class="card p-10" style="width: 16rem;">
                    <img src="{$producto->url_imagen}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{$producto->categoria}</h5>
                        <h5 class="card-title">{$producto->Marca}</h5>
                        <p class="card-text">{$producto->Descripcion}</p>
                        <div class="card-footer">
                            <p class="card-text tamañoPrecio">${$producto->Precio_1}</p>
                            <a href="detalle/{$producto->idarticulo}" class="btn btn-danger">Detalle</a>
                            {if $user}
                                <h5 class="card-title">Danos tu opinion</h5>
                                <input type="text" name="coment" class="form-control" placeholder="Deje un comentario del producto aqui">
                                <h5>Puntua el producto</h5>
                                <select class="form-control" name="rate" id="">
                                    <option value="1">Selecciona una puntuacion</option>
                                </select>
                            {/if}
                        </div>
                    </div>
                </div>
            </div>  
        {/foreach}        
    </div>    
</div>
{include file="footer.tpl"}