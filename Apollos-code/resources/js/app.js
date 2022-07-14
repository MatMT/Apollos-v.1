// Dropzone
import Dropzone from 'dropzone';

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Sube aquí tu imagen y tu canción',
    acceptedFiles: '.png, .jpg, .jpeg, .mp3',
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivos',
    autoProcessQueue: false,
    uploadMultiple: true,
    parallelUploads: 2,
    maxFiles: 2,
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

            // Clase de Css propia de Dropzone
            imagenPublicada.previewElement.classList.add('dz-success', 'dz-complete');
        }
    }
})

dropzone.on('success', function (file, response) {
    document.querySelector('[name="imagen"]').value = response.imagen;
})

dropzone.on('removedfile', function () {
    document.querySelector('[name="imagen"]').value = '';
})
