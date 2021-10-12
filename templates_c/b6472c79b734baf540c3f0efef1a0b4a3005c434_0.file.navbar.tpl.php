<?php
/* Smarty version 3.1.39, created on 2021-10-12 15:25:36
  from 'C:\xampp\htdocs\tpeespecial\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165d320f334a6_59841953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6472c79b734baf540c3f0efef1a0b4a3005c434' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\navbar.tpl',
      1 => 1634063131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6165d320f334a6_59841953 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid bg-orange">
  <div class="col-12 text-white">
    <p class="pt-2">Estas comprando en <strong>WEX</strong> Telefono: (2314552547)</p>
    <p class="">Localidad: <strong>Bolivar</strong></p>
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
                <li><a class="dropdown-item " href="ingresar"><i class="fas fa-sign-in-alt m-2"></i>Ingresar</a></li>
                <li><a class="dropdown-item " href="registrarse"><i class="fas fa-user-plus m-2" aria-hidden="true"></i>Registrarse</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link float-right text-white" href="Carrito"><i class="fas fa-shopping-cart"></i></a>
              </li>
          </div>
        </ul>
      </div>
  </nav>
  </div>
<div class="container-fluid">
  <div class="cats row">
    <div class="m-auto row">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <div class="catBox p-2">
          <a class="text-muted" href="Categorias/<?php echo $_smarty_tpl->tpl_vars['item']->value->idcategoria;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->url_imagen;?>
" class="cat-img-nav m-auto" alt="..."><?php echo $_smarty_tpl->tpl_vars['item']->value->Descripcion;?>
</a>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
</div>


<?php }
}
