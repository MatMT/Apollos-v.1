
// Contenedores

var contenedor_1 = document.getElementById("caja-1");
var contenedor_2 = document.getElementById("caja-2");
var contenedor_3 = document.getElementById("caja-3");
var contenedor_4 = document.getElementById("caja-4");


//Opciones
var opcion1 = document.getElementById("op1");
var opcion2 = document.getElementById("op2");
var opcion3 = document.getElementById("op3");
var opcion4 = document.getElementById("op4");


opcion1.addEventListener('click', () =>{
    

    opcion2.classList.add("remove");
    opcion3.classList.add("remove");
    opcion4.classList.add("remove");

    opcion1.classList.remove("remove");

    contenedor_2.classList.remove("active");
    contenedor_3.classList.remove("active");
    contenedor_4.classList.remove("active");

    contenedor_1.classList.add("active");
})

opcion2.addEventListener('click', () =>{
    

    opcion1.classList.add("remove");
    opcion3.classList.add("remove");
    opcion4.classList.add("remove");

    opcion2.classList.remove("remove");


    contenedor_1.classList.remove("active");
    contenedor_3.classList.remove("active");
    contenedor_4.classList.remove("active");
    
    contenedor_2.classList.add("active");

})

opcion3.addEventListener('click', () =>{
    

    opcion1.classList.add("remove");
    opcion2.classList.add("remove");
    opcion4.classList.add("remove");

    opcion3.classList.remove("remove");

    contenedor_2.classList.remove("active");
    contenedor_1.classList.remove("active");
    contenedor_4.classList.remove("active");

    contenedor_3.classList.add("active");

})

opcion4.addEventListener('click', () =>{
    

    opcion1.classList.add("remove");
    opcion2.classList.add("remove");
    opcion3.classList.add("remove");

    opcion4.classList.remove("remove");

    contenedor_2.classList.remove("active");
    contenedor_3.classList.remove("active");
    contenedor_1.classList.remove("active");

    contenedor_4.classList.add("active");

})
