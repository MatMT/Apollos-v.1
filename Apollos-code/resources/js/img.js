// Dropzone
import Dropzone from 'dropzone';
Dropzone.autoDiscover = false;

// Espacio para imagenes
const DropzoneImg = new Dropzone('#dropzone_img', {
    dictDefaultMessage: 'Sube tu <b>imagen</b> aquí',
    acceptedFiles: '.png, .jpg, .jpeg',
    addRemoveLinks: true,
    dictRemoveFile: `<span class='remove-dz-img'><img src="../../assets/icons/removeIconWht.png"></span>`,
    maxFiles: 1,
    uploadMultiple: false,
    // maxFilesize: , // 2 MB

    // En caso de haber subido la imagen anteriormente lo restablecerá - Callback
    init: function () {
        if (document.querySelector('[name="imagen"]').value.trim()) {
            // Objeto - permite  asignar valores
            const imagenPublicada = {}
            imagenPublicada.size = 100000; // Valor de prueba
            imagenPublicada.name = document.querySelector('[name="imagen"]').value;

            // Opciones propias de dropzone - se asigna inmediatamente y se manda a llamar
            this.options.addedfile.call(this, imagenPublicada)
            // thumbnail = imagen pequeña
            this.options.thumbnail.call(this, imagenPublicada, `/storage/uploads/imagenes/${imagenPublicada.name}`);

            // Clase de Css propia de Dropzone
            imagenPublicada.previewElement.classList.add('dz-success', 'dz-complete');
        }
    }
});

// Asigna el valor de la imagen al input hiden - recibe respuesta del controlador
DropzoneImg.on('success', function (file, response) {
    document.querySelector('[name="imagen"]').value = response.imagen;
});

// Remueve el valor de la imagen al input hiden
DropzoneImg.on('removedfile', function () {
    document.querySelector('[name="imagen"]').value = '';
});