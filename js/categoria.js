"use strict" 

let btnEdit = document.querySelector("#editar");
btnEdit.addEventListener("click", traerCategoria);


function traerCategoria(){
    let id = document.querySelector("#selCategoria").value;
    if(id>0){
        location.replace("editarCategorias/"+id);
    }
}