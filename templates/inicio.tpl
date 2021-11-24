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
    <div class="col-12 p-4">
        <div class="row">
            <div class="col-7">
                <img src="assets/img/productos_supermercado.jpg" class="banner-inicio" alt="">
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="assets/img/precaudos.png" class="tamanioPrecaudos" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="bg-grey m-2 mb-5">
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
</div>

{include file="footer.tpl"}

