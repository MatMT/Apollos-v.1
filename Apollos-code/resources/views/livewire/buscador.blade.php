<div>
    <form wire:submit.prevent='BuscarDatosForm' autocomplete="off">
        <div class="contenedor-input">
            <button type="submit">
                <i class="fi fi-rs-search text-xl mx-2 mr-4"></i>
            </button>
            <label for="buscarpor">
                <input type="text" name="BuscarPor" id="" placeholder="Buscar Artista, canción, álbum"
                    wire:model='termino'>
            </label>
        </div>
    </form>
</div>
