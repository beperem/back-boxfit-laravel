<x-app-layout>
    <div style="color: gainsboro; text-align: center; font-size: x-large">
        <x-input-label class="text-white pt-6 pb-0" style="font-size: xx-large">Bienvenido a Boxfit</x-input-label>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-gray-900 dark:text-gray-100">
                    <div style="background-color: white; display: flex;flex-direction: column; " class=" bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"  >
                        <div style="" class="py-0 pt-0">
                            <a href=""><img src={{URL::asset('/img/box/1.jpg')}}></a>
                        </div>
                        <div style="" class="py-0 pt-0">
                            <a href=""><img src={{URL::asset('/img/box/3.png')}}></a>
                        </div>
                        <div style="" class="py-0 pt-0">
                            <a href=""><img src={{URL::asset('/img/box/4.jpg')}}></a>
                        </div>
                        <div style="" class="py-0 pt-0">
                            <a href=""><img src={{URL::asset('/img/box/5.jpg')}}></a>
                        </div>
                        
                    </div>
                    <div class="mt-6">
                        <h2 style="color: black; text-align: center; font-size: x-large">Contacto</h2>
                        <div style="background-color: white; display: flex;" class="mt-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"  >
                            
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
                                <form name="contact" method="POST" action="" class="w-full max-w-lg" >
                                    <div class="flex flex-wrap ">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                First Name
                                            </label>
                                            <input type="text" name="name" id="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  placeholder="Nombre">
                                        </div>
                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                                Telefono
                                                </label>
                                                <input type="tel" name="phone" id="phone" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  placeholder="Telefono"><br>
                                            </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                            Email
                                            </label>
                                            <input type="email" name="email" id="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap ">
                                        <div class="w-full  px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                            Tu pregunta
                                            </label>
                                            <textarea style="height: 100px; resize: none " class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  placeholder="Cuentanos..."></textarea><br>
                                        </div>
                                    </div>
                                    <x-primary-button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Enviar</x-primary-button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h2 style="color: black; text-align: center; font-size: x-large">Localizacion</h2>
                        <div  class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div>
                                
                                <x-maps-leaflet :centerPoint="['lat' => 42.461926, 'long' => -2.419808]" :zoomLevel="17" :markers="[['lat' => 42.461926, 'long' => -2.419808]]"></x-maps-leaflet>
                                
                            </div>
                        </div>
                    </div>
</div>
</div>
</div>
</div>
    </div>
</x-app-layout>
