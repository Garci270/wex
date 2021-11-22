<div id="app-coments">
        <div class="m-2" v-if="coments">
            <select name="" id="" class="form-control">
                <option value="">Seleccionar filtro</option>
                <option value="">Ver por fecha Descendiente</option>
                <option value="">Ver por fecha Ascendiente</option>
                <option value="">Ver por puntaje Descendiente</option>
                <option value="">Ver por puntaje Ascendiente</option>
            </select>
        </div> 
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
                    <div class="card-footer">
                        <button v-on:click="deleteComent(coment.idcomentario)" class="btn btn-danger mt-2 btn-delete-coment">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>