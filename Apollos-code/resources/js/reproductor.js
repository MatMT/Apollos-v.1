/**Boton de darle like */

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

// VARIABLES PARA ACTULIZAR EL TIEMPO

var current_time = document.getElementById("current")

// VARIABLES PARA MANEJAR EL TIEMPO

var segundos;
var minutos;
var horas;


/* Reproducción enserie de las canciones */

reproducir();

// Obtenr la posición de la canción dentro del arreglo

function reproducir() {
    
    // numero de veces que se llama la función actually_time
    const num_time = 1000;

    audio.load();
    audio.play();
    audio.volume = 0.3;
    

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
    
}

// Control de la barra del tiempo 

function time_continue() {
    if(audio.ended == false){
        var total = parseInt(audio.currentTime*wth_line/audio.duration);

        line_progress.style.width = total + "px"; 
    }
}

function posicionamiento(posicionamiento){
    
    var click = posicionamiento.pageX-line_progress.offsetLeft;

    var nuevoTiempo = click*audio.duration/wth_line;

    alert(nuevoTiempo)

    audio.currentTime = nuevoTiempo;

    line_progress.style.width = click + "px";
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
