<div class="text-gray-900">
    <div class="text-gray-900 text-center">
        <x-input-label class="text-xl text-gray-200 text-center">Elige el dia para ver las clases</x-input-label>
        <br>
        <x-text-input type="date" id="date" name="date"  wire:model="date"  class="form-control" wire:change="showClass()" />
    </div>

    
    @foreach ($classes as $class)
    <div class="bg-gray-100 sm:rounded-lg overflow-hidden shadow-sm mt-4">
        <x-input-label class="text-lg text-gray-200 pt-6 pb-0">Hora: {{$class->time}}</x-input-label>
        <br>
        <div style="display: flex; flex-wrap: wrap">
            @for ($i =0; $i < $class->alumn;$i++)
            @if($numAlumClass[$loop->index] > $i)
                
                    <div style="height: 40px; width: 40px; background-color:red; margin: 2px;">
                        
                    </div> 
                    <?php  
                                  
                    ?>
                @else
                
                <div style="height: 40px; width: 40px; background-color: gray; margin: 2px;">
                        
                </div>
                @endif   
                
               
                
            @endfor
        </div>
    </div>
    <div class="bg-gray-100 sm:rounded-lg overflow-hidden shadow-sm">
        @if($alumInClass[$loop->index] == true)
            <x-danger-button name="delete" wire:click="delete({{ $class->id }})">Borrar reserva</x-danger-button>
        @elseif($isFull[$loop->index] == false)
            <x-primary-button name="reserve" wire:click="reserve({{ $class->id }})" style="background-color: lightblue; color: black">Reservar</x-primary-button>
        @else
            <x-input-label class="text-xl text-gray-200 pt-6 pb-0">Clase llena</x-input-label>
        @endif
        
        
    </div>
@endforeach
    <br>
    @if (session('message'))
        <div>{{session('message')}}</div>
    @endif
</div> 