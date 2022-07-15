// Dropzone
import Dropzone from 'dropzone';

Dropzone.autoDiscover = false;

const DropzoneImg = new Dropzone('#dropzone_img', {
    dictDefaultMessage: 'Sube tu <b>imagen</b> aquí',
    acceptedFiles: '.png, .jpg, .jpeg',
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiple: false,
    maxFilesize: 2, // 2 MB

    // Callback al ser inicializado
    // init: function () {
    //     // En caso de haber subido la imagen anteriormente lo restablecerá
    //     if (document.querySelector('[name="imagen"]').value.trim()) {
    //         // Objeto - permite  asignar valores
    //         const imagenPublicada = {}
    //         imagenPublicada.size = 1234;
    //         imagenPublicada.name = document.querySelector('[name="imagen"]').value;

    //         // Opciones propias de dropzone - se asigna inmediatamente y se manda a llamar
    //         this.options.addedfile.call(this, imagenPublicada)
    //         // thumbnail = imagen pequeña
    //         this.options.thumbnail.call(this, imagenPublicada, `/uploads/${imagenPublicada.name}`);

    //         // Clase de Css propia de Dropzone
    //         imagenPublicada.previewElement.classList.add('dz-success', 'dz-complete');
    //     }
    // }
});

// Asigna el valor de la imagen al input hiden
DropzoneImg.on('success', function (file, response) {
    document.querySelector('[name="imagen"]').value = response.imagen;
});

// Remueve el valor de la imagen al input hiden
DropzoneImg.on('removedfile', function () {
    document.querySelector('[name="imagen"]').value = '';
});

// ---

const DropzoneMp3 = new Dropzone('#dropzone_audio', {
    dictDefaultMessage: 'Sube tu <b>canción</b> aquí',
    acceptedFiles: '.mp3',
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiple: false,
    maxFilesize: 6, // 6 MB

    // Callback al ser inicializado
    init: function () {
        // En caso de haber subido la imagen anteriormente lo restablecerá
        if (document.querySelector('[name="imagen"]').value.trim()) {
            // Objeto - permite  asignar valores
            const imagenPublicada = {}
            imagenPublicada.size = 1234;
            imagenPublicada.name = document.querySelector('[name="imagen"]').value;

            // Opciones propias de dropzone - se asigna inmediatamente y se manda a llamar
            this.options.addedfile.call(this, imagenPublicada)

            // thumbnail = imagen pequeña
            this.options.thumbnail.call(this, imagenPublicada, `/uploads/${imagenPublicada.name}`);

            // this.options.thumbnail.call(this, imagenPublicada, `../../storage/app/uploads/imagenes/${imagenPublicada.name}`);

            // Clase de Css propia de Dropzone
            imagenPublicada.previewElement.classList.add('dz-success', 'dz-complete');
        }
    }
});

// Asigna el valor de la imagen al input hiden
DropzoneMp3.on('success', function (file, response) {
    document.querySelector('[name="song"]').value = response.song;
});

// Remueve el valor de la imagen al input hiden
DropzoneMp3.on('removedfile', function () {
    document.querySelector('[name="song"]').value = '';
});