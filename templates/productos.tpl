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
{include file="navbar.tpl"}
<div class="container-fluid">
    <div class="row">
        {foreach from=$products item=$product}
            <div class="m-auto col-3">
                <div class="card m-4" style="width: 16rem;">
                    <img src="{$product->url_imagen}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{$product->categoria}</h5>
                        <h5 class="card-title">{$product->Marca}</h5>
                        <p class="card-text">{$product->Descripcion}</p>
                        <div class="card-footer">
                            <p class="card-text tamanioPrecio">${$product->Precio_1}</p>
                            <a href="detalle/{$product->idarticulo}" class="btn btn-danger">Detalle</a>
                            {if $user}
                                <p class="text-muted">En detalle ahora puedes comentar!</p>
                            {else}
                                <p class="text-muted">En detalle puedes ver los comentarios!</p>
                            {/if}
                        </div>
                    </div>
                </div>
            </div>  
        {/foreach}        
    </div>    
</div>
{include file="footer.tpl"}