let days = document.getElementById('days');
let hours = document.getElementById("hours");
let minutes = document.getElementById("minutes");
let seconds = document.getElementById("seconds");

let dd = document.getElementById('dd');
let hh = document.getElementById("hh");
let mm = document.getElementById("mm");
let ss = document.getElementById("ss");

let endDate = '01/01/2024 00:00:00';

let x = setInterval(function () {
    let now = new Date(endDate).getTime();
    let countDown = new Date().getTime();
    let distance = now - countDown;

    // Calculos de días, horas, minutos y segundos

    let d = Math.floor(distance / (1000 * 60 * 60 * 24));
    let h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let s = Math.floor((distance % (1000 * 60)) / 1000);

    // Muestra los resultados en los elementos

    days.innerHTML = d + "<br><span>Días</span>";
    hours.innerHTML = h + "<br><span>Horas</span>";
    minutes.innerHTML = m + "<br><span>Minutos</span>";
    seconds.innerHTML = s + "<br><span>Segundos</span>";

    // Animamos el stroke

    dd.style.strokeDashoffset = 440 - (440 * d) / 365; // 365 días del año
    hh.style.strokeDashoffset = 440 - (440 * h) / 24; // 24 horas del día
    mm.style.strokeDashoffset = 440 - (440 * m) / 60; // 60 minutos de la hora
    ss.style.strokeDashoffset = 440 - (440 * s) / 60; // 60 segundos del minuto

    // Si la cuenta atrás llega a 0 mostrar el mensaje de felicitación

    if (distance < 0) {
        clearInterval(x);
        document.getElementById('time').style.display = "none";
        document.querySelector(".newYear").style.display = "block";
    }

})
