<x-app-layout>
    <div style="width: 80%; background-color: white; display: flex;flex-direction: column; margin-left: 10%;margin-right: 10%;margin-top: 3%" class="overflow-hidden shadow-sm sm:rounded-lg">
        <div style="text-align: center;height: 700px" >
            @livewire("list-chat")
        </div>
        <div>
            @livewire("chat")
        </div>
    </div>
    

</x-app-layout>