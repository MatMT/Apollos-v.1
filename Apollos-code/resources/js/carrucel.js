
/*Carrucel para Artistas */
const fila = document.querySelector('.contenedor-carousel');
const items = document.querySelector('.card');

const fecha_izquierda = document.getElementById('flecha-izquierda');
const fecha_derecha = document.getElementById('flecha-derecha');

// Event Listener

fecha_derecha.addEventListener('click', () =>{
    
    fila.scrollLeft += fila.offsetWidth;

})

fecha_izquierda.addEventListener('click', () =>{
    
    fila.scrollLeft -= fila.offsetWidth;

})


/*-------- Segundo Carrucel -------- */

