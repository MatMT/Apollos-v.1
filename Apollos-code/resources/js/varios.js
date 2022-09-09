

/*----- MOdificar PlayList ----- */

var btn_lapiz = document.getElementById("lapiz");
var overway3 = document.getElementById("over");
var content = document.getElementById("coverxd")
var close = document.getElementById("btn-close-2");


// btn_lapiz.addEventListener('click', function (){
//     overway3.classList.add("active");
//     content.classList.add("active");
// })

// close.addEventListener("click", function(){
//     overway3.classList.remove("active");
//     content.classList.remove("active");
// })



/* Botones del reproductor */

const trespuntitos = document.getElementById("trespuntitos");
const reportar = document.getElementById("other-icons");

trespuntitos.addEventListener("click", function(){
    reportar.classList.toggle("active");
})



