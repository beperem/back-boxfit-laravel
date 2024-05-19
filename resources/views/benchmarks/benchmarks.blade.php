<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-black dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div style="display:flex;; flex-wrap: wrap; background-color: black; width: 80%;margin-left: 10%; padding-bottom: 20px ">
                    
                    <div class="py-12" style="width: 300px;height: 300px;">
                        <a href="{{ url('/weigth') }}" class=" text-lg text-gray-200 :text-gray-500 underline">
                        <div style="color: azure; text-align: center;">Pesos</div>
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm " style="border-radius: 50%;">
                                <div class="text-gray-900 dark:text-gray-100">
                                    <img src="img/pesos-modified.png">
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    
                    <div class="py-12" style="width: 300px;height: 300px;">
                        <a href="{{ url('/distance') }}" class=" text-lg text-gray-200 :text-gray-500 underline">
                        <div style="color: azure; text-align: center;">Distancias</div>
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm " style="border-radius: 50%;">
                                <div class="text-gray-900 dark:text-gray-100">
                                    <img src="img/running-modified.png">
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    
                

                    <div class="py-12" style="width: 300px;height: 300px;">
                        <a href="{{ url('/challenge') }}" class=" text-lg text-gray-200 :text-gray-500 underline">
                        <div style="color: azure; text-align: center;">Desafios</div>
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm" style="border-radius: 50%;">
                                <div class="text-gray-900 dark:text-gray-100">
                                    <img src="img/desafio-modified.png">
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="py-12" style="width: 300px;height: 300px;">
                        <a href="{{ url('/games') }}" class=" text-lg text-gray-200 :text-gray-500 underline">
                        <div style="color: azure; text-align: center;">Crossfit Games</div>
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm " style="border-radius: 50%;">
                                <div class="text-gray-900 dark:text-gray-100">
                                    <img src="img/crossfit_games-modified.png">
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</x-app-layout>