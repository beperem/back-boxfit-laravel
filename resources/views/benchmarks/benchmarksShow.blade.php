<x-app-layout> 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-gray-900 dark:text-gray-100">
                    <div style="background-color: white; display: flex;flex-direction: column; " class=" bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"  >
                        <div style="text-align: center">
                            <x-input-label class="py-6 underline" style="font-size: xx-large">{{ $exercise->exercise}}</x-input-label>
                            <x-input-label class="text-xl pb-3">Introduce tu nuevo logro</x-input-label>
                            <form method="POST" name="saveDataBenchmark" action="{{ route('addBenchmark') }}">
                                @csrf
                                <div class="pb-3">
                                    <x-input-label>Fecha</x-input-label>
                                    <x-text-input type="date" name="date" class="text-gray-800" />
                                </div>
                                <div class="pb-3">
                                    <x-input-label>Repeticiones</x-input-label>
                                    <x-text-input type="number" name="reps" class="text-gray-800" />
                                </div>
                                @if($exercise->type == 1)
                                    <div class="pb-3">
                                        <x-input-label>Peso</x-input-label>
                                        <x-text-input type="number" name="weight" class="text-gray-800" />
                                    </div>
                                @endif

                                @if($exercise->type == 2 || $exercise->type == 3 || $exercise->type == 4)
                                    <div class="pb-3">
                                        <x-input-label>Tiempo (seg)</x-input-label>
                                        <x-text-input type="number" name="weight" class="text-gray-800" />
                                    </div>
                                @endif
                                
                                <div class="pb-1">
                                    <x-primary-button type="submit" name="addBenchmark" style="background-color: lightblue;color: black">Guardar</x-primary-button>
                                    <input type="hidden" name="exercise" value="{{ $exercise->id }}">
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h2 style="color: black; text-align: center; font-size: x-large">Historial</h2>
                        <div style="background-color: white; display: flex;" class="mt-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"  >
                            
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
                                <div style="display: flex;flex-wrap: wrap">
                                    
                            
                                    <table>
                                        @if(count($data) != 0)
                                            
                                            <tr style="background-color: gainsboro">
                                                <th class="p-2">Fecha</th>
                                                <th class="p-2">Repeticiones</th>
                                                @if($exercise->type == 1)
                                                    <th class="p-2">Peso</th>
                                                @endif

                                                @if($exercise->type == 2 || $exercise->type == 3 || $exercise->type == 4)
                                                    <th class="p-2">Tiempo (seg)</th>
                                                @endif
                                                
                                            </tr>
                                            @foreach ($data as $benchmark)
                                            
                                                
                                                    <tr style="text-align: center" >
                                                        <td >{{ $benchmark->date }}</td>
                                                        <td>{{ $benchmark->reps }}</td>
                                                        <td>{{ $benchmark->weightDistance }}</td>
                                                    </tr>
                                        
                                            @endforeach
                                        @else
                                            <x-input-label >No existen aun registros</x-input-label>
                                        @endif
                                    </table>
                                    
                            
                                
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>