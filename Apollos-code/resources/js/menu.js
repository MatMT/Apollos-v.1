
const profile = document.getElementById('profile');
const menu = document.getElementById("menu");
const pantalla = document.getElementById("scre");

document.getElementById('profile').addEventListener('click', result)


function result(){
    let profile_toggle = document.getElementById('profile');
    let menu = document.getElementById("menu");

    profile_toggle.classList.toggle('active');
    menu.classList.toggle('active');

}
/*profile.addEventListener('click', ()=>{
    menu.style.cssText = 'display: block;';
})

pantalla.addEventListener('dblclick', ()=>{
    menu.style.cssText = 'display: none;';
})*/