"use strict";

let sec = document.querySelectorAll('section'); 
let links = document.querySelectorAll('nav a');

window.onscroll = () => {
    sec.forEach(section => {
        
        let top = window.scrollY;
        let offset = section.offsetTop - 60;
        let height = section.offsetHeight;
        let id = section.getAttribute('id');

        console.log(`
            Top : ${top}\n
            Offset : ${offset}\n
            Height : ${height}\n 
            Id : ${id}
        `)

        if (top >= offset && top < offset + height) {
            links.forEach(link => {
                link.classList.remove('active');
                document.querySelector(`nav a[href*=${id} ]`).classList.add('active');
            })
        }
    })
}