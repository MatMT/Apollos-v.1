// Contenedores
var contenedor_1 = document.getElementById("info");
var contenedor_2 = document.getElementById("password");

// Opciones
var opcion1 = document.getElementById("opcion1");
var opcion2 = document.getElementById("opcion2");

// Titulos
var titulo1 = document.getElementById("TitleSect1");
var titulo2 = document.getElementById("TitleSect2");

console.log(opcion1);

opcion1.addEventListener('click', () => {
    contenedor_2.classList.add("desactive");
    contenedor_1.classList.remove("desactive");

    titulo1.classList.add("font-bold");
    titulo2.classList.remove("font-bold");
})

opcion2.addEventListener('click', () => {
    contenedor_1.classList.add("desactive");
    contenedor_2.classList.remove("desactive");

    titulo2.classList.add("font-bold");
    titulo1.classList.remove("font-bold");
})