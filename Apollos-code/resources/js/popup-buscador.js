var btn_popup_buscador = document.getElementById("buscar");
var buscador_popup = document.getElementById("overlay_2");
var popup_buscador = document.getElementById("popup_2");
var btn_cerrar = document.getElementById("btn-close");


btn_popup_buscador.addEventListener('click', function(){
    buscador_popup.classList.add("active");
    popup_buscador.classList.add("active");
})


btn_cerrar.addEventListener('click', function(){
    buscador_popup.classList.remove("active");
    popup_buscador.classList.remove("active");
})

