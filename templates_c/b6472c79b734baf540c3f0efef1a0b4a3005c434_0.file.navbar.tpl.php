<?php
/* Smarty version 3.1.39, created on 2021-09-28 19:57:59
  from 'C:\xampp\htdocs\tpeespecial\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61539df7baec30_82484206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6472c79b734baf540c3f0efef1a0b4a3005c434' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\navbar.tpl',
      1 => 1632869877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61539df7baec30_82484206 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid bg-orange">
<div class="col-6 text-white">
<p class="p-2">Estas comprando en <strong>WEX</strong></p>
</div>
<hr class="text-white">
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href=""><img src="./assets/img/logo_transparent.png" alt="" class="logoNav"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="inicio">Inico</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="Productos">Categorias</a>
        </li>
        <div class="disp">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="fas fa-user"></i></a>
              <ul class="dropdown-menu">
              <li><a class="dropdown-item " href="#"><i class="fas fa-sign-in-alt m-2"></i>Ingresar</a></li>
              <li><a class="dropdown-item " href="#"><i class="fas fa-user-plus m-2" aria-hidden="true"></i>Registrarse</a></li>
              </ul>
            </li>
          <li class="nav-item">
            <a class="nav-link float-right text-white" href="Carrito"><i class="fas fa-shopping-cart"></i></a>
          </li>
        </div>
      </ul>
    </div>
  </div>
</nav>
<?php }
}
