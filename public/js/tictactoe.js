"use strict";


function allowDrop(event) {
    event.preventDefault();    
}

function drag(event) {
    event.dataTransfer.setData("text", event.target.id);
}

function drop(event) {
    event.preventDefault();    

    let data = event.dataTransfer.getData("text");
    event.target.appendChild(document.getElementById(data));
}

document.addEventListener('DOMContentLoaded', () => {

    let fichas = document.querySelectorAll('.cross, .circle');
    let tablero = document.querySelectorAll('.dropBox');

    fichas.forEach((f) => {
        f.addEventListener('dragstart', drag);
    })

    tablero.forEach((celda) => {
        celda.addEventListener('drop', drop);
        celda.addEventListener('dragover', allowDrop);
    })

});