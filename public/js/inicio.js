"use strict";

const items = document.querySelectorAll('.item');

function activeLink() {  
    items.forEach(item => {
        item.classList.remove('active');        
    });
    this.classList.add('active');
}


items.forEach(item => { 
    item.addEventListener('mouseover', activeLink);
}); 

