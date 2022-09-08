/* Colores para la barra de reproducción */

var myColors = ['#700353', '#454092', '#ff0054', '#ff5c0a', '#ffce47'];
var rand = Math.floor(Math.random()*myColors.length);
var rValue = myColors[rand];
console.log(rValue)


/* Funciones del Reproductor */

const audio = document.getElementById("audio");
const btn_play = document.getElementById("play");
const btn_pause = document.getElementById("pause");
const btn_next = document.getElementById("next");
const btn_back = document.getElementById("back");

var line_time = document.getElementById("down");
// Ancho de la linea de tiempo
var wth_line = line_time.offsetWidth;

var line_progress = document.getElementById("up");

// cambio de colores de la barra de tiempo

line_progress.style.background = rValue;

// VARIABLES PARA ACTULIZAR EL TIEMPO

var current_time = document.getElementById("current")

// VARIABLES PARA MANEJAR EL TIEMPO

var segundos;
var minutos;
var horas;


// VARIABLES PARA CONTROLAR EL VOLUMEN 

var barra_volumen = document.getElementById("volumen2");
var wdt_vol = barra_volumen.offsetWidth;
var range_vol = document.getElementById("vol");






// Icocno de audio

var volumen = document.getElementById("volumen");
var volchange = document.getElementById("vol");

volumen.style.color = rValue;
volchange.style.background = rValue;


/* Reproducción enserie de las canciones */

reproducir();

// Obtenr la posición de la canción dentro del arreglo

function reproducir() {
    
    // numero de veces que se llama la función actually_time
    const num_time = 1000;

    audio.load();
    audio.volume = 0.5;
    audio.play();
    
    //barra_volumen.addEventListener('click', volumen_control, false);


    /* Colocar Evantos  */

    btn_pause.addEventListener('click', function(){
        
        audio.pause();
        
        btn_pause.classList.remove("active");
        btn_play.classList.add("active");
        
    })

    btn_play.addEventListener('click', function(){
        
        audio.play();
        
        btn_play.classList.remove("active");
        btn_pause.classList.add("active");
        
    })


    const cancion_actual = document.getElementById("cancion_actual");

    var actual = cancion_actual.innerHTML;

    var posicion = parseInt(actual);

    // arreglo de las canciones de la lista 

    var tracks = document.getElementsByTagName("article");
    
    
    audio.addEventListener('ended', function(e){

        if(posicion+1 == tracks.length){
            let repetir_ciclo = tracks[0];

            let get_url = repetir_ciclo.getAttribute("href");

            window.location= get_url;

        }else{
            let siguiente = tracks[posicion + 1];
        

            let url_next_song = siguiente.getAttribute("href");

            window.location = url_next_song;
        }
    })

    btn_next.addEventListener('click', function(){
        if(posicion+1 == tracks.length){
            let repetir_ciclo = tracks[0];

            let get_url = repetir_ciclo.getAttribute("href");

            window.location= get_url;

        }else{
            let siguiente = tracks[posicion + 1];
        

            let url_next_song = siguiente.getAttribute("href");

            window.location = url_next_song;
        }
    })

    btn_back.addEventListener('click', function(){
        if(posicion == 0){

            let num_canciones = tracks.length;

            let hacia_atras = tracks[num_canciones-1];

            let get_url = hacia_atras.getAttribute("href");

            window.location= get_url;

        }else{
            let siguiente = tracks[posicion - 1];
        

            let url_next_song = siguiente.getAttribute("href");

            window.location = url_next_song;
        }
    })

    line_time.addEventListener('click', posicionamiento, false);
    line_time.addEventListener("click", tim, false);
    var load;

    if(audio.paused == false){
        btn_pause.classList.add("active");
    
        load = setInterval(time_continue, 1);
        tmer = setInterval(printTime, num_time);
    }

    var siempre;

    siempre = setInterval(widthBarra, num_time);
    
}

// Control de la barra del tiempo 

function time_continue() {
    if(audio.ended == false){
        var total = parseInt(audio.currentTime*wth_line/audio.duration);

        var porcentaje = (total*100)/wth_line;
        line_progress.style.width = porcentaje + "%"; 
    }
}

function posicionamiento(posicionamiento){
    
    alert(line_progress.offsetLeft)
    var click = posicionamiento.pageX-line_progress.offsetLeft;

    var nuevoTiempo = click*audio.duration/wth_line;


    audio.currentTime = nuevoTiempo;

    line_progress.style.width =  (click) + "px";
}

function tim(posicion) {
    if(audio.ended==false){
        var raton = posicion.pageX-line_progress.offsetLeft;

        var nuevoTiempo = raton*audio.duration/wth_line;

        duracion = nuevoTiempo;

        horas = parseInt(duracion/3600);
        minutos = parseInt(duracion/60) - horas * 60;

        segundos = parseInt((duracion / 60 - (horas*60))*60) - (minutos * 60);

        if(segundos < 10){
            current_time.innerHTML = minutos.toString() + ":0" + segundos.toString();
        }else{
            current_time.innerHTML = minutos.toString() + ":" + segundos.toString();
        }
    }
}



// Visualización de los minutos que transcurren
function printTime(){
    //seg = pista.currentTime;
    
    if (audio.currentTime > 0){
        var actualSegundos = audio.currentTime.toFixed(0);
        var actual = secondsToString(actualSegundos);
        
        var duracion = actual;
        current_time.innerHTML = duracion;
    }


}

function secondsToString(seconds) {
    var hour="";
    if (seconds > 3600){
        hour = Math.floor(seconds / 3600);
        hour = (hour < 10)? '0' + hour : hour;
        hour+=":"
    }


    var minute = Math.floor((seconds / 60) % 60);
    minute = (minute < 10)? + minute : minute;
    var second = seconds % 60;
    second = (second < 10)? '0' + second : second;
    return hour  + minute + ':' + second;
}

// Obtener siempre el ancho del div

function widthBarra(){
    var newWidth;

    newWidth = line_time.offsetWidth;

    wth_line = newWidth;

}


function volumen_control(volumen_control){

    let rango = volumen_control.pageX-barra_volumen.offsetLeft;

    nuevoVolumen = (rango * 1)/wdt_vol;


    audio.volume = nuevoVolumen;

    range_vol.style.width =  rango + "px";

}
