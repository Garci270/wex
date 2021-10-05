"use strict" 

let btnEdit = document.querySelector("#editar");
btnEdit.addEventListener("click", traerProducto);


function traerProducto(){
    let id = document.querySelector("#selArticulo").value;
    if(id>0){
        location.replace("editarProductos/"+id);
    }
}