"use strict"
window.addEventListener('DOMContentLoaded', (event)=>{
    
    const API_URL = "api/comentarios";
    
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
            },
            getComentByDate: async function() {
                try {
                    let response = await fetch(API_URL+'/'+getUrl());
                    let coments = await response.json();
                    if(coments == "no coments"){
                        app.coments = false;
                    }else{
                        app.coments = [];
                        app.coments = coments;                
                        console.log(app.coments);
                    }
                } catch (e) {
                    console.log(e);
                }
            },
            getComentByRate: async function() {
                try {
                    let response = await fetch(API_URL+'/'+getUrl());
                    let coments = await response.json();
                    if(coments == "no coments"){
                        app.coments = false;
                    }else{
                        app.coments = [];
                        app.coments = coments;                
                        console.log(app.coments);
                    }
                } catch (e) {
                    console.log(e);
                }
            }
        }
    })


    if(document.querySelector("#app-send")){
        let send = new Vue({
            el: '#app-send',
            data: {
            },
            methods: {
                addComent: async function () {
                    let coment = document.querySelector("#coment").value;
                    let rate = document.querySelector("#rate").value;
                    let data = {
                        coment: coment,
                        rate: rate
                    }
                    console.log(data);
                    try {
                        let response = await fetch(API_URL +'/'+getUrl(), {
                            method:'POST',
                            body: JSON.stringify(data),
                                headers: {
                                    'Content-type': 'application/json'
                                }
                        });
                        if(response.ok){
                            getComent();
                        }
                    } catch (e) {
                        console.log(e);
                    } 
                }
            }
        })
    }
    
    async function getComent() {
        try {
            let response = await fetch(API_URL+'/'+getUrl());
            let coments = await response.json();
            if(coments == "no coments"){
                app.coments = false;
            }else{
                app.coments = coments;                
                console.log(app.coments);
            }
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
