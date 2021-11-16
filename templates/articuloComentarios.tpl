{literal}
    {foreach from=$coments item=$coment}    
        <div class="m-4">
            <div class="card m-auto" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$coment->usuario}}</h5>
                    <h5 class="card-title">{{$coment->comentario}}</h5>
                    <h5 class="card-title">{{$coment->puntuacion}}</h5>
                </div>
                {if $admin}
                <div class="card-footer">
                    <a id="delete" class="btn btn-danger mt-2">Eliminar</a>
                </div>
                {/if}
            </div>
        </div> 
    {/foreach}
{/literal}
<script src="js/comentario.js"></script>