document.addEventListener("DOMContentLoaded", function () {
    let hr = document.querySelector("#hrs");
    let mn = document.querySelector("#min");
    let sc = document.querySelector("#sec");

    let day = new Date();
    let hh = day.getHours() * 30;
    let mm = day.getMinutes() * 6;
    let ss = day.getSeconds() * 6;

    setInterval(() => {
        day = new Date();
        hh = day.getHours() * 30;
        mm = day.getMinutes() * 6;
        ss = day.getSeconds() * 6;

        hr.style.transform = `rotateZ(${hh + mm / 12}deg)`;
        mn.style.transform = `rotateZ(${mm}deg)`;
        sc.style.transform = `rotateZ(${ss}deg)`;

        // Reloj Digital
        let hour = document.getElementById("horas");
        let minute = document.getElementById("minutos");
        let second = document.getElementById("segundos");
        let ampm = document.getElementById("ampm");

        let h = day.getHours();
        let m = day.getMinutes();
        let s = day.getSeconds();
        let am = h >= 12 ? "PM" : "AM";

        h = h % 12;
        h = h ? h : 12; // El '0' se muestra como '12'
        h = h < 10 ? "0" + h : h;
        m = m < 10 ? "0" + m : m;
        s = s < 10 ? "0" + s : s;

        hour.innerText = h;
        minute.innerText = m;
        second.innerText = s;
        ampm.innerText = am;
    }, 1000);
});
