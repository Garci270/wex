"use strict" 

let btnEdit = document.querySelector("#editar");

btnEdit.addEventListener("click", getProduct);


function getProduct(){
    let id = document.querySelector("#selArticulo").value;
    if(id>0){
        location.replace("editarProductos/"+id);
    }
}