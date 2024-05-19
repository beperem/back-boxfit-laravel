
    <div style="display: flex; flex-wrap: wrap">
          
        @csrf
        @foreach ($classes as $class)
            
        
            <div style="margin: 10px">
                {{ $class->date }} <br> {{ $class->time}} <br> {{ $class->alumn }}<br>
                
                <button type="submit" value="{{ $class->id}}" wire:click="delete({{ $class->id }})" > Eliminar</button>
                
               
            </div>
        @endforeach
       
    </div>

