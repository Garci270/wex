"use strict" 

let btnEdit = document.querySelector("#editar");
btnEdit.addEventListener("click", traerUsuario);


function traerUsuario(){
    let id = document.querySelector("#selUser").value;
    if(id>0){
        location.replace("editarUsuarios/"+id);
    }
}