<div id="app-coments">
    {if $user}
        <div class="m-2">
                <button class="btn btn-danger" v-on:click="getComentByDate">Ver por fecha Descendiente</button>
                <button class="btn btn-danger" v-on:click="getComentByDate">Ver por fecha Ascendiente</button>
                <button class="btn btn-danger" v-on:click="getComentByRate">Ver por puntaje Descendiente</button>
                <button class="btn btn-danger" v-on:click="getComentByRate">Ver por puntaje Ascendiente</button>
        </div> 
    {/if}
    <div class="row" v-if="coments">
        <div v-for="coment in coments">
            <div class="m-4 col-3">
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