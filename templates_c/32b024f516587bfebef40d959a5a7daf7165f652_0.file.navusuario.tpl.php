<?php
/* Smarty version 3.1.39, created on 2021-11-22 15:55:57
  from 'C:\xampp\htdocs\tpeespecial\templates\user\navusuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619be7bd2a2879_78201737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32b024f516587bfebef40d959a5a7daf7165f652' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\user\\navusuario.tpl',
      1 => 1637607313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619be7bd2a2879_78201737 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid bg-orange">
  <div class="col-12 text-white">
    <p class="pt-2">Estas editando en <strong>WEX</strong> Telefono: (2314552547) | Localidad: <strong>Bolivar</strong></p>
    <hr class="text-white bg-orange">
  </div>
  <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="inicioUsuario"><img src="./assets/img/logo_transparent.png" alt="" class="logoNav"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="editarCategorias/0">Categorias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="editarProductos/0">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="editarUsuarios/0">Usuarios</a>
          </li>
          <div class="disp">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i></a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item " href="cerrar"><i class="fas fa-sign-out-alt"></i>Salir</a></li>
                </ul>
              </li>
          </div>
        </ul>
      </div>
  </nav>
  </div>

<?php }
}
