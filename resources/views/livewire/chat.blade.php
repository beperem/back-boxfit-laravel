<div style="display: flex; flex-direction: row;">
    <!--<div class="form-group" style="color: gainsboro">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" wire:model="name">
        @error("name") <small style="color: red;">{{$message}}</small>@enderror
    </div>-->

    <div class="form-group overflow-hidden shadow-sm sm:rounded-lg bg-white" style=" width: 100%;"   >
        
        <input type="text" class="form-control" id="message" wire:model="message" style="width: 100%;border-color: white">
        @error("message") <small style="color: red;">{{$message}}</small>@enderror
    </div>
    <x-primary-button wire:click="sendMessage" style="background-color: lightblue;color: black ">Enviar</x-primary-button>
</div>
