<x-app-layout>
    
        
    
    <div style="background-color: white;  max-width: 70%; margin-left: 15%;" class=" bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-6"  >
        @if (session('message'))
            <div style="color: red" class="text-center">{{session('message')}}</div>
        @endif
        <div style="text-align: center; margin-top: 2%">
            <x-input-label class="text-xl text-gray-200 text-center mb-6">Creacion de horarios</x-input-label>
            
        </div>
        <form method="POST" name="adminClass" action="{{ route('newClass')}}" style="text-align: left">
            @csrf
            <div style="color: gainsboro;text-align: center;margin-top: 20px" >
                <div class="pb-3">
                    <x-input-label class="text-xl text-gray-200 text-center">Dia</x-input-label>
                    <x-text-input type="date" name="dates" id="dates" class="text-gray-800" />
                </div>
                <div class="pb-3">
                    <x-input-label class="text-xl text-gray-200 text-center">Hora</x-input-label>
                    <x-text-input type="time" name="time" id="time" class="text-gray-800" />
                </div>
                <div class="pb-3">
                    <x-input-label class="text-xl text-gray-200 text-center">Cantidad de alumnos</x-input-label> 
                    <x-text-input type="number" name="alumn" id="alumn" class="text-gray-800" />
                </div>
                <div class="pb-1">
                    <x-primary-button type="submit" name="addClass" style="background-color: lightblue; color: black"   >Añadir Clase</x-primary-button>
                <!-- <button type="submit" name="addClass" style="background-color: gainsboro; color: black"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"  >Añadir clase</button> -->
                </div>
                
            
        </form>
    </div>
    </div>
    <div style="background-color: white;  max-width: 70%; margin-left: 15%;" class="py-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-6"  >
    
        <x-input-label class="text-xl text-gray-200 text-center mb-6">Buscador de horarios de clases</x-input-label>
        
        @livewire('show-class')
        
    </div>
    
   
    
</x-app-layout>

