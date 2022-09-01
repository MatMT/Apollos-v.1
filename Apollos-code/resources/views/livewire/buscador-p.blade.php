<div>
    <form wire:submit.prevent='BuscarDatosForm' autocomplete="off">
        <div class="input-b flex gap-2">
            <i class="fi fi-rr-search mt-1"></i>
            <label for="buscarpor">
                <input type="text" name="BuscarPor" id="" class="font-cuerpo" wire:model='termino'>
            </label>
        </div>
    </form>
</div>
