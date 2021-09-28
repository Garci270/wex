<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>{$titulo}</title>
</head>
<body>
{include file="navbar.tpl"}
<div class="m-3">
    <img src="assets/img/bannerabarrotes.jpg" class="banner-inicio" alt="">
</div>
<div class="bg-grey m-2">
    <div class="container-fluid">
        <div class="row px-4 py-3 text-secondary">
            <div class="col-md-3 text-center">
                <div class="row col-md-12 pointer">
                    <img src="assets/img/service4.png" class="iconServ m-auto" alt="">
                    <p class="textServ">Pago en efectivo</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="row col-md-12 pointer">
                    <img src="assets/img/service3.png" class="iconServ m-auto" alt="">
                    <p class="textServ">Ofertas</p>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="row col-md-12 mt-auto pointer">
                    <img src="assets/img/service1.png" class="iconServ m-auto" alt="">
                    <p class="textServ">Envio a destino</p>
                </div>  
            </div>
            <div class="col-md-3 text-center">
                <div class="row col-md-12 pointer">
                    <img src="assets/img/service2.png" class="iconServ m-auto" alt="">
                    <p class="textServ">Retiro en sucursal 24hs</p>
                </div>
            </div>    
        </div>
    </div>
</div>
{include file="slider.tpl"}
{include file="footer.tpl"}

