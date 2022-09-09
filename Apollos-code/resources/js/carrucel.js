
/*Carrucel para Artistas Generales*/
const fila = document.querySelector('.slider-2');
const items = document.querySelector('.card');

const fecha_izquierda = document.getElementById('flecha-izquierda-2');
const fecha_derecha = document.getElementById('flecha-derecha-2');


// Event Listener

fecha_derecha.addEventListener('click', () => {

    fila.scrollLeft += fila.offsetWidth;

})

fecha_izquierda.addEventListener('click', () => {

    fila.scrollLeft -= fila.offsetWidth;

})


/*-------- Segundo Carrucel -------- */

const fila_2 = document.querySelector('.slider-3');
const items_2 = document.querySelector('.card-3');

const fecha_izquierda_2 = document.getElementById('flecha-izquierda-3');
const fecha_derecha_2 = document.getElementById('flecha-derecha-3');

fecha_derecha_2.addEventListener('click', () => {

    fila_2.scrollLeft += fila.offsetWidth;

})

fecha_izquierda_2.addEventListener('click', () => {

    fila_2.scrollLeft -= fila.offsetWidth;

})

/*-------- Tercer Carrucel -------- 

const fila_3 = document.querySelector('.slider-3');
const items_3 = document.querySelector('.card-3');

const fecha_izquierda_3 = document.getElementById('flecha-izquierda-3');
const fecha_derecha_3 = document.getElementById('flecha-derecha-3');

fecha_derecha_3.addEventListener('click', () => {

    fila_3.scrollLeft += fila.offsetWidth;

})

fecha_izquierda_3.addEventListener('click', () => {

    fila_3.scrollLeft -= fila.offsetWidth;

})*/