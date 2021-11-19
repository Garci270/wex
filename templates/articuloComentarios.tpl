{literal}
    <div id="app-coments">
        <div class="row" v-if="coments.length > 0">
            <div v-for="coment in coments">
                <div class="m-4 col-3">
                    <div class="card m-auto" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Usuario: <span class="text-muted">{{coment.nombreU}}</span></h5>
                            <h5 class="card-title">Comentario</h5>
                            <h6 class="card-title text-muted">{{coment.comentario}}</h6>
                            <h5 class="card-title">Puntuacion</h5>
                            <h6 class="card-title text-muted">{{coment.puntuacion}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
{/literal}