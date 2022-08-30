
const profile = document.getElementById('profile');
const menu = document.getElementById("menu");
const pantalla = document.getElementById("scre");

document.getElementById('profile').addEventListener('click', result)



function result(){
    let profile_toggle = document.getElementById('perfil');
    let menu = document.getElementById("menu");
    let contenedor = document.getElementById("opciones");

    menu.classList.toggle("active");  
}



/*profile.addEventListener('click', ()=>{
    menu.style.cssText = 'display: block;';
})

pantalla.addEventListener('dblclick', ()=>{
    menu.style.cssText = 'display: none;';
})*/


/*------- ------ Reproductor ----------- ---------*/

const div_player = document.getElementById("player");
const btn_show = document.getElementById("show");
const btn_hidde = document.getElementById("hidde");
const box_con_list = document.getElementById("list");
const lista_can = document.getElementById("canciones-lista");

btn_show.addEventListener('click', function(){
    div_player.classList.add("activer");

    setTimeout(() => {
        box_con_list.classList.add("active");
        lista_can.classList.add("active");
    }, 500);

    box_con_list.classList.add("largo");
    
})

btn_hidde.addEventListener('click', function(){
    
    
    box_con_list.classList.remove("active");
    lista_can.classList.remove("active");

    setTimeout(() => {
        div_player.classList.remove("activer");
        box_con_list.classList.remove("largo");
        
    }, 500);
    
       
})