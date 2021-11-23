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
<div class="container-fluid">
    <div class="m-auto">
        <img src="assets/img/logo_transparent.png" class="tamanioImgIngresar" alt="">
    </div>
    <div class="m-auto">
        <h5 class="title">{$error}</h5>
        {if $user}
            <a class="btn btn-danger" href="inicioUsuario">Inicio</a>
        {else}
            <a class="btn btn-danger" href="inicio">Inicio</a>
        {/if}
    </div>
</div>
{include file="footer.tpl"}
