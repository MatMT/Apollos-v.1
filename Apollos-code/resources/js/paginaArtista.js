
/* ------ Esconder listas con JS ------- */


// Obtner todos los div de la clase songs-list

var clasePadre = document.getElementById('lista-canciones')
var cantidadDiv = clasePadre.getElementsByClassName('fila-content');

const see_more = document.getElementById("mostrar");
const hide = document.getElementById("ocultar");

var alturadiv = cantidadDiv[0].offsetHeight;

var totalaltura = alturadiv * cantidadDiv.length;

if(totalaltura > clasePadre.offsetHeight){
    see_more.classList.add("active");
}


// Hacer más grande el div


see_more.addEventListener("click", function(){
    let objeto = clasePadre.offsetHeight;
    clasePadre.classList.add("active");
    
    see_more.style.color = "black";
    hide.classList.add("active");
})

hide.addEventListener("click", function(){
    
    clasePadre.classList.remove("active");
    
    see_more.style.color = "white";
    hide.classList.remove("active");
})


// Favoritos

var corazonV = document.getElementById("fav");


/* --- Cambiar fondo de degradado */


var container = document.getElementById("section-scroll");
var bg = "linear-gradient(180deg,rgba(255, 255, 255, 0) 10%,rgba(12, 12, 12, 0.3) 60%,rgba(12, 12, 12, 1) 90%)";

container.style.setProperty('--bg-new', bg)


