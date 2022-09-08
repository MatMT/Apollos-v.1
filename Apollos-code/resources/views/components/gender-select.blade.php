<label for="genero" class="genero mb-2 block uppercase text-gray-800 font-bold">{{__('Genre')}}</label>
    <select name="genero" id="genero" form="song_up"
        class="border p-3 w-full rounded-lg text-gray-800 @error('genero') border-red-500  @enderror">
        <option value="" selected disabled> {{__('Select musical genre')}}
        </option>
        {{-- Operador ternario para antiguo select --}}
        <option value="pop"         {{ old('genero') == 'pop' ? 'selected' : '' }}>Pop</option>
        <option value="rock"        {{ old('genero') == 'rock' ? 'selected' : '' }}>Rock</option>
        <option value="electronic"  {{ old('genero')  == 'electronic' ? 'selected' : '' }}>{{__('Electronic')}}</option>
        <option value="instrumental"{{ old('genero') == 'instrumental' ? 'selected' : '' }}>Instrumental</option>
        <option value="metal"       {{ old('genero') == 'metal' ? 'selected' : '' }}>Metal</option>
        <option value="bachata"     {{ old('genero') == 'bachata' ? 'selected' : '' }}>Bachata</option>
        <option value="salsa"       {{ old('genero') == 'salsa' ? 'selected' : '' }}>Salsa</option>
        <option value="indie"       {{ old('genero') == 'indie' ? 'selected' : '' }}>Indie</option>
        <option value="lo-fi"       {{ old('genero') == 'lo-fi' ? 'selected' : '' }}>Lo-Fi</option>
        <option value="hip hop"     {{ old('genero') == 'hip hop' ? 'selected' : '' }}>Hip hop</option>
        <option value="reggeaton"   {{ old('genero') == 'reggaeton' ? 'selected' : '' }}>Reggeaton</option>
        <option value="cumbia"      {{ old('genero') == 'cumbia' ? 'selected' : '' }}>Cumbia</option>
        <option value="rap"         {{ old('genero') == 'rap' ? 'selected' : '' }}>Rap</option>
        <option value="trap"        {{ old('genero') == 'trap' ? 'selected' : '' }}>Trap</option>
    </select>