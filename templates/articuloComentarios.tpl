<div id="app-coments">
    {if $user}
        <div class="m-2">
            <select name="" id=""  @change="getComentByRate($event, {$products[0]->idarticulo})"  class="form-control">
                <option value="-1">Seleccionar Puntaje</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div> 
    {/if}
    <div class="row" v-if="coments">
        <div v-for="coment in coments">
            <div class="m-1 col-3">
                <div class="card m-auto" style="width: 18rem;">
                    {literal}
                        <div class="card-body">
                            <h5 class="card-title">Usuario: <span class="text-muted">{{ coment.nombreU }}</span></h5>
                            <h5 class="card-title">Comentario</h5>
                            <h6 class="card-title text-muted">{{ coment.comentario }}</h6>
                            <h5 class="card-title">Puntuacion</h5>
                            <h6 class="card-title text-muted">{{ coment.puntuacion }}</h6>
                        </div>
                    {/literal}
                    </div>
                </div>
            </div>
        </div> 
    </div> 