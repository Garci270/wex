<div class="container-fluid mb-5">
  <div class="row text-center"> 
    <div class="col-12">
    <h4 class="pb-3">Productos mas Vendidos</h4>
    <hr>    
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">      
          <div class="carousel-item active col-12">
            <div class="row">
              <div class="col-2">
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="{$productos[0]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$productos[0]->Marca}</p>
                  <p class="card-text text-muted">{$productos[0]->categoria}</p>
                  <h5 class="card-title">{$productos[0]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">${$productos[0]->Precio_1}</p>
                  <a href="detalle/{$productos[0]->idarticulo}" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="{$productos[1]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$productos[1]->Marca}</p>
                  <p class="card-text text-muted">{$productos[1]->categoria}</p>
                  <h5 class="card-title">{$productos[1]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">${$productos[1]->Precio_1}</p>
                  <a href="detalle/{$productos[1]->idarticulo}" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="{$productos[2]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$productos[2]->Marca}</p>
                  <p class="card-text text-muted">{$productos[2]->categoria}</p>
                  <h5 class="card-title">{$productos[2]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">${$productos[2]->Precio_1}</p>
                  <a href="detalle/{$productos[2]->idarticulo}" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="{$productos[3]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$productos[3]->Marca}</p>
                  <p class="card-text text-muted">{$productos[3]->categoria}</p>
                  <h5 class="card-title">{$productos[3]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">${$productos[3]->Precio_1}</p>
                  <a href="detalle/{$productos[3]->idarticulo}" class="btn btn-danger">Detalle</a>
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
                <img src="{$productos[4]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$productos[4]->Marca}</p>
                  <p class="card-text text-muted">{$productos[4]->categoria}</p>
                  <h5 class="card-title">{$productos[4]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">${$productos[4]->Precio_1}</p>
                  <a href="detalle/{$productos[4]->idarticulo}" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="{$productos[5]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$productos[5]->Marca}</p>
                  <p class="card-text text-muted">{$productos[5]->categoria}</p>
                  <h5 class="card-title">{$productos[5]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">${$productos[5]->Precio_1}</p>
                  <a href="detalle/{$productos[5]->idarticulo}" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="{$productos[6]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$productos[6]->Marca}</p>
                  <p class="card-text text-muted">{$productos[6]->categoria}</p>
                  <h5 class="card-title">{$productos[6]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">${$productos[6]->Precio_1}</p>
                  <a href="detalle/{$productos[6]->idarticulo}" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="{$productos[7]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$productos[7]->Marca}</p>
                  <p class="card-text text-muted">{$productos[7]->categoria}</p>
                  <h5 class="card-title">{$productos[7]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamañoPrecio">${$productos[7]->Precio_1}</p>
                  <a href="detalle/{$productos[7]->idarticulo}" class="btn btn-danger">Detalle</a>
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
</div>