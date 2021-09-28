<?php
/* Smarty version 3.1.39, created on 2021-09-27 20:57:49
  from 'C:\xampp\htdocs\tpeespecial\templates\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61525a7d9db679_99074852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbfa7b305d2d584802451be3f59d18df59a1270e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\slider.tpl',
      1 => 1632787065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61525a7d9db679_99074852 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
        <div class="row carousel-item active" data-bs-interval="10000">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <div class="box-one col-3">
            <img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value->url_imagen;?>
" class="d-block image-producto">
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
      </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div><?php }
}
