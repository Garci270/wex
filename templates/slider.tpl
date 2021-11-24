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
                <img src="{$products[0]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$products[0]->Marca}</p>
                  <p class="card-text text-muted">{$products[0]->categoria}</p>
                  <h5 class="card-title">{$products[0]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamanioPrecio">${$products[0]->Precio_1}</p>
                  <a href="detalle/{$products[0]->idarticulo}" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="{$products[1]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$products[1]->Marca}</p>
                  <p class="card-text text-muted">{$products[1]->categoria}</p>
                  <h5 class="card-title">{$products[1]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamanioPrecio">${$products[1]->Precio_1}</p>
                  <a href="detalle/{$products[1]->idarticulo}" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="{$products[2]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$products[2]->Marca}</p>
                  <p class="card-text text-muted">{$products[2]->categoria}</p>
                  <h5 class="card-title">{$products[2]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamanioPrecio">${$products[2]->Precio_1}</p>
                  <a href="detalle/{$products[2]->idarticulo}" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="{$products[3]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$products[3]->Marca}</p>
                  <p class="card-text text-muted">{$products[3]->categoria}</p>
                  <h5 class="card-title">{$products[3]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamanioPrecio">${$products[3]->Precio_1}</p>
                  <a href="detalle/{$products[3]->idarticulo}" class="btn btn-danger">Detalle</a>
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
                <img src="{$products[4]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$products[4]->Marca}</p>
                  <p class="card-text text-muted">{$products[4]->categoria}</p>
                  <h5 class="card-title">{$products[4]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamanioPrecio">${$products[4]->Precio_1}</p>
                  <a href="detalle/{$products[4]->idarticulo}" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="{$products[5]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$products[5]->Marca}</p>
                  <p class="card-text text-muted">{$products[5]->categoria}</p>
                  <h5 class="card-title">{$products[5]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamanioPrecio">${$products[5]->Precio_1}</p>
                  <a href="detalle/{$products[5]->idarticulo}" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="{$products[6]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$products[6]->Marca}</p>
                  <p class="card-text text-muted">{$products[6]->categoria}</p>
                  <h5 class="card-title">{$products[6]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamanioPrecio">${$products[6]->Precio_1}</p>
                  <a href="detalle/{$products[6]->idarticulo}" class="btn btn-danger">Detalle</a>
                </div>
              </div>
              <div class="card tamanioSlider p-1 col-2">
                <img src="{$products[7]->url_imagen}" class="card-img-top mt-2 img-slider m-auto" alt="...">
                <div class="card-body">
                  <p class="card-text text-muted">{$products[7]->Marca}</p>
                  <p class="card-text text-muted">{$products[7]->categoria}</p>
                  <h5 class="card-title">{$products[7]->Descripcion}</h5>
                </div>
                <div class="card-footer">
                  <p class="card-text tamanioPrecio">${$products[7]->Precio_1}</p>
                  <a href="detalle/{$products[7]->idarticulo}" class="btn btn-danger">Detalle</a>
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