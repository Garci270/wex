{literal}
    <div id="app-coments">
        <h5 class="card-title">Danos tu opinion</h5>
        <input type="text" name="coment" id="coment" class="form-control" placeholder="Deje un comentario del producto aqui">
        <h5>Puntua</h5>
        <select class="form-control text-center" name="rate" id="rate">
            <option value="-1">Selecciona una puntuacion</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button  v-on:click="addComent" class="btn btn-danger mt-2">Comentar</button>
    </div>
{/literal}