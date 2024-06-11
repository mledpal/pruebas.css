"use strict";

let grocery = document.getElementById('grocery');

document.addEventListener('DOMContentLoaded' , () => {
    
    grocery.addEventListener('submit', addItem);

})


function addItem(e) {
    e.preventDefault();

    let data = this.elements.writeList.value;
    let list = document.querySelector('ol');
    let item = document.createElement('li');
    let text = document.createElement('p');

    let rmvBtn = document.createElement('span');
    rmvBtn.classList.add('remove');    
    rmvBtn.addEventListener('click', deleteItem);

    text.textContent = data;
    this.elements.writeList.value = "";

    item.append(text);
    item.append(rmvBtn);
    item.addEventListener('click', doneItem);
    
    list.append(item);
}

function deleteItem(e) {
    this.parentElement.remove();
}

function doneItem(e) {
    this.classList.toggle('done');
}