"use strict";

let password = document.getElementById('password');
let togglePassword = document.getElementById('toggle');

function showHide()  {
    if(password.type === 'password') {
        password.setAttribute('type', 'text');
        togglePassword.style.backgroundImage = "url('../img/novisible.png')";

    }
    else {
        password.setAttribute('type', 'password');
        togglePassword.style.backgroundImage = "url('../img/visible.png')";
    }
}

document.addEventListener("DOMContentLoaded", () => {
    togglePassword.addEventListener('click', showHide);
});
