const Proyectos = document.querySelectorAll('.Proyecto');
let currentProyecto = 0;

function showProyecto(index) {
    Proyectos[currentProyecto].style.display = 'none';
    currentProyecto = (index + Proyectos.length) % Proyectos.length;
    Proyectos[currentProyecto].style.display = 'block';
}

function nextProyecto() {
    showProyecto(currentProyecto + 1);
}

function previousProyecto() {
    showProyecto(currentProyecto - 1);
}

// Iniciar el Proyector
showProyecto(currentProyecto);

// Controladores de flechas
document.querySelector('.next').addEventListener('click', nextProyecto);
document.querySelector('.prev').addEventListener('click', previousProyecto);
