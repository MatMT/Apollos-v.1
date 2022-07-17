const profile = document.getElementById('profile');
const menu = document.getElementById("menu");
const pantalla = document.getElementById("scre");

profile.addEventListener('click', ()=>{
    menu.style.cssText = 'display: block;';
})

pantalla.addEventListener('dblclick', ()=>{
    menu.style.cssText = 'display: none;';
})