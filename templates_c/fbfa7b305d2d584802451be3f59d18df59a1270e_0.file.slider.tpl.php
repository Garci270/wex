<?php
/* Smarty version 3.1.39, created on 2021-09-30 14:14:31
  from 'C:\xampp\htdocs\tpeespecial\templates\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155f0776e1687_98910879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbfa7b305d2d584802451be3f59d18df59a1270e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpeespecial\\templates\\slider.tpl',
      1 => 1633022070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6155f0776e1687_98910879 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid mb-5">
  <div class="row text-center"> 
    <div class="col-12">    
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">      
          <div class="carousel-item active col-12">
            <div class="row">
              <div class="col-2">
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="<?php echo $_smarty_tpl->tpl_vars['productos']->value[0]->url_imagen;?>
" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[0]->Marca;?>
</p>
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[0]->categoria;?>
</p>
                  <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['productos']->value[0]->Descripcion;?>
</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">$<?php echo $_smarty_tpl->tpl_vars['productos']->value[0]->Precio_1;?>
</p>
                  <a href="#" class="btn btn-danger"><i class="fas fa-shopping-cart"></i></a>
                  <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['productos']->value[0]->idarticulo;?>
" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="<?php echo $_smarty_tpl->tpl_vars['productos']->value[1]->url_imagen;?>
" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[1]->Marca;?>
</p>
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[1]->categoria;?>
</p>
                  <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['productos']->value[1]->Descripcion;?>
</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">$<?php echo $_smarty_tpl->tpl_vars['productos']->value[1]->Precio_1;?>
</p>
                  <a href="#" class="btn btn-danger"><i class="fas fa-shopping-cart"></i></a>
                  <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['productos']->value[1]->idarticulo;?>
" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="<?php echo $_smarty_tpl->tpl_vars['productos']->value[2]->url_imagen;?>
" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[2]->Marca;?>
</p>
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[2]->categoria;?>
</p>
                  <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['productos']->value[2]->Descripcion;?>
</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">$<?php echo $_smarty_tpl->tpl_vars['productos']->value[2]->Precio_1;?>
</p>
                  <a href="#" class="btn btn-danger"><i class="fas fa-shopping-cart"></i></a>
                  <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['productos']->value[2]->idarticulo;?>
" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="<?php echo $_smarty_tpl->tpl_vars['productos']->value[3]->url_imagen;?>
" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[3]->Marca;?>
</p>
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[3]->categoria;?>
</p>
                  <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['productos']->value[3]->Descripcion;?>
</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">$<?php echo $_smarty_tpl->tpl_vars['productos']->value[3]->Precio_1;?>
</p>
                  <a href="#" class="btn btn-danger"><i class="fas fa-shopping-cart"></i></a>
                  <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['productos']->value[3]->idarticulo;?>
" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="col-2">
              </div>
              <div class="col-2">
              </div>
            </div>
          </div>
          <div class="carousel-item col-12">
            <div class="row">
            <div class="col-2">
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="<?php echo $_smarty_tpl->tpl_vars['productos']->value[4]->url_imagen;?>
" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[4]->Marca;?>
</p>
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[4]->categoria;?>
</p>
                  <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['productos']->value[4]->Descripcion;?>
</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">$<?php echo $_smarty_tpl->tpl_vars['productos']->value[4]->Precio_1;?>
</p>
                  <a href="#" class="btn btn-danger"><i class="fas fa-shopping-cart"></i></a>
                  <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['productos']->value[4]->idarticulo;?>
" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="<?php echo $_smarty_tpl->tpl_vars['productos']->value[5]->url_imagen;?>
" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[5]->Marca;?>
</p>
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[5]->categoria;?>
</p>
                  <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['productos']->value[5]->Descripcion;?>
</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">$<?php echo $_smarty_tpl->tpl_vars['productos']->value[5]->Precio_1;?>
</p>
                  <a href="#" class="btn btn-danger"><i class="fas fa-shopping-cart"></i></a>
                  <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['productos']->value[5]->idarticulo;?>
" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="<?php echo $_smarty_tpl->tpl_vars['productos']->value[6]->url_imagen;?>
" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[6]->Marca;?>
</p>
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[6]->categoria;?>
</p>
                  <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['productos']->value[6]->Descripcion;?>
</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">$<?php echo $_smarty_tpl->tpl_vars['productos']->value[6]->Precio_1;?>
</p>
                  <a href="#" class="btn btn-danger"><i class="fas fa-shopping-cart"></i></a>
                  <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['productos']->value[6]->idarticulo;?>
" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="<?php echo $_smarty_tpl->tpl_vars['productos']->value[7]->url_imagen;?>
" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[7]->Marca;?>
</p>
                  <p class="card-text text-muted"><?php echo $_smarty_tpl->tpl_vars['productos']->value[7]->categoria;?>
</p>
                  <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['productos']->value[7]->Descripcion;?>
</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">$<?php echo $_smarty_tpl->tpl_vars['productos']->value[7]->Precio_1;?>
</p>
                  <a href="#" class="btn btn-danger"><i class="fas fa-shopping-cart"></i></a>
                  <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['productos']->value[7]->idarticulo;?>
" class="btn btn-danger">Detalle</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <i class="fas fa-chevron-left text-danger"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <i class="fas fa-chevron-right text-danger"></i>
          <span class="sr-only text-danger">Next</span>
        </a>
      </div>
    </div>
  </div>
</div><?php }
}
