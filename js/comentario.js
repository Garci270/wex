"use strict"
const API_URL = "api/comentarios";

document.querySelector(".send-coment").addEventListener("click", addComent);

let app = new Vue({
    el: "#app",
    data: {
        coments: [], // this->smarty->assign("coments",  $coments)
    },
}); 

async function getComent() {
    // fetch para traer todas las tareas
    try {
        let response = await fetch(API_URL);
        let coments = await response.json();
        app.coments = coments;
    } catch (e) {
        console.log(e);
    }
}

async function addComent() {
    try {
        let response = await fetch(API_URL);
        let coments = await response.json();
    } catch (e) {
        console.log(e);
    }
}

getComent();
