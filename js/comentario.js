"use strict"
window.addEventListener('DOMContentLoaded', (event)=>{
    
    const API_URL = "api/comentarios";
    
    /* document.querySelector("#send-coment").addEventListener("click", addComent); */
    let app = new Vue({
        el: '#app-coments',
        data: {
            coments : []
        },
        methods: {
            deleteComent: async function (id) {
                let response = await fetch(API_URL+'/'+id, {
                    method:'DELETE',
                    headers: {
                        'Content-type': 'application/json'
                    }
                });
                if(response.ok){
                    getComent()
                } 
            }
        }
    })
    
    async function getComent() {
        try {
            let response = await fetch(API_URL+'/'+getUrl());
            let coments = await response.json();
            console.log(coments);
            if(coments == "no coments"){
                app.coments = false;
            }else{
                app.coments = coments;                
            }
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
   
    function getUrl(){
        //Se obtiene el valor de la URL desde el navegador
        let actual = window.location+'';
        //Se realiza la división de la URL
        let split = actual.split("/");
        //Se obtiene el ultimo valor de la URL
        let id = split[split.length-1];
        return id;
    }
    getUrl();
    
    getComent();
})
