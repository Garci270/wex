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
                        <select class="custom-select col-10" id="selUser">
                        <option value="-1">Seleccione un usuario</option>
                        {foreach from=$users item=$item}
                            <option value="{$item->idusuario}">{$item->email}</option>
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
{if $user}
    <form action="actualizarUsu/{$user->idusuario}" method="POST">  
        <div class="card m-auto" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{$user->nombre}</h5>
                <h5 class="card-title">{$user->nombre_usuario}</h5>
                <h5 class="card-title">{$user->email}</h5>
                <h5 class="card-title">Cambiar Nivel</h5>
                <input type="text" name="nivel" class="form-control" value="{$user->nivel}">
                <div class="card-footer">
                    <a href="eliminarUsu/{$user->idusuario}" class="btn btn-danger mt-2">Eliminar</a>
                    <button type="submit" class="btn btn-danger mt-2">Editar</a>
                </div>
            </div>
        </div>
    </form>
{/if}
</div>
<script src="js/user.js"></script>
{if $user}
    {include file="templates/footer.tpl"}
{else}
    <script src="https://kit.fontawesome.com/538a82c3ca.js" crossorigin="anonymous"></script>
{/if}
