


<div >
    <div class="text-center">
        <x-input-label class="text-xl text-gray-200 text-center">Dia</x-input-label>
        <x-text-input type="date" name="date" id="date" class="form-control" wire:model='date' wire:change='showClass()' />
    </div>
    <div class="text-center" style="display: flex; flex-direction: row;flex-wrap: wrap">

                @foreach ($classes as $class)
                    <div style="margin: 10px" style="display: flex; flex-direction: row;" >
                        <x-input-label class="text-left" > Dia: {{ $class->date }} <br>Hora: {{ $class->time}} <br>Alumnos: {{ $class->alumn}} <br></x-input-label>
                        <x-danger-button type="button" value="{{ $class->id}}" wire:click="delete({{ $class->id}})" > Eliminar</x-danger-button>
                    </div>
                @endforeach

    </div>
        
</div>


