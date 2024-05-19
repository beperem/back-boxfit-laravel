<x-app-layout> 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-black dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div style="background-color: black; width: 80%;margin-left: 10%; padding-bottom: 20px ">
                    <div style="display: flex;flex-wrap: wrap">
                        @foreach ($games as $type)
                            <div style="width: 150px; height: 150px; background-color: gainsboro; color: black; margin: 40px;border-radius: 20%; text-align: center">
                                <a href="{{ route('showBenchmarks', ['id' => $type->id]) }}">{{ $type->exercise}}</a>
                            </div>
                        @endforeach  
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>