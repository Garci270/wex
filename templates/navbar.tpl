<div class="container-fluid bg-orange">
  <div class="col-12 text-white">
    <p class="pt-2">Estas comprando en <strong>WEX</strong> Telefono: (2314552547) | Localidad: <strong>Bolivar</strong></p>
    <hr class="text-white bg-orange">
  </div>
  <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="inicio"><img src="./assets/img/logo_transparent.png" alt="" class="logoNav"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="Categorias/0">Categorias</a>
          </li>
          <div class="disp">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i></a>
                <ul class="dropdown-menu">
                {if $user}
                  <li><a class="dropdown-item " href="cerrar"><i class="fas fa-sign-out-alt"></i>Salir</a></li>
                {else}
                  <li><a class="dropdown-item " href="ingresar"><i class="fas fa-sign-in-alt m-2"></i>Ingresar</a></li>
                  <li><a class="dropdown-item " href="registrarse"><i class="fas fa-user-plus m-2" aria-hidden="true"></i>Registrarse</a></li>
                {/if}
                </ul>
              </li>
          </div>
        </ul>
      </div>
  </nav>
  </div>
<div class="container-fluid">
  <div class="cats row">
    <div class="m-auto row">
      {foreach from=$categorias item=$item}
        <div class="catBox p-2">
          <a class="text-muted" href="Categorias/{$item->idcategoria}"><img src="{$item->url_imagen}" class="cat-img-nav m-auto" alt="...">{$item->Descripcion}</a>
        </div>
      {/foreach}
    </div>
  </div>
</div>


