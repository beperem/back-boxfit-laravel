<div style="color: black;overflow: auto;max-height: 100%" class=" py-12 bg-gray-100 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">


    @foreach ($dataPost as $message)
        @if($message->user == Auth::user()->id)

          <div  class="mt-4 sm:rounded-lg overflow-hidden shadow-sm" style="max-width: 40%; " >
              <x-input-label class="text-xl" style="text-align: left; background-color: lightgreen; padding: 5px">{{$message->post}}   </x-input-label>
              <x-input-label class="text-xs" style="text-align: left; background-color: lightgreen; padding: 5px">{{$nameUsers[$loop->index]}} - {{$message->date}}</x-input-label>
              @if(Auth::user()->privileges == 1)
                <x-nav-link wire:click="deletePost({{$message->id}})"  style="background-color: lightgreen; width: 100%; height: 100%; padding-top: 10px">
                  <x-input-label class="text-xs" style="text-align: left; color:red">Eliminar</x-input-label>
                </x-nav-link>
              @endif
              
              
          </div>
        @else
        
          
          <div  style="text-align: right;display: flex;flex-direction: column;align-items: flex-end " class="" >
            <div class=" overflow-hidden shadow-sm sm:rounded-lg" style="width: 40%">
              <x-input-label class="text-xl" style="text-align: right; background-color: lightblue; padding: 5px  ">{{$message->post}}   </x-input-label>
              <x-input-label class="text-xs " style="text-align: right; background-color: lightblue; padding: 5px ">{{$nameUsers[$loop->index]}} - {{$message->date}}</x-input-label>
              @if(Auth::user()->privileges == 1)
              <x-input-label style="text-align: right;">
                  <x-nav-link wire:click="deletePost({{$message->id}})"  style="background-color: lightblue; width: 100%; height: 100%; padding-top: 10px; text-align: right">
                    <x-input-label class="text-xs" style="text-align: right; color:red">Eliminar</x-input-label>
                  </x-nav-link>
              </x-input-label>
              @endif
            </div>
              
              
          </div>
        
      @endif
        
        
    @endforeach

    
</div>
<script>

  // Enable pusher logging - don't include this in production
  Pusher.logToConsole = true;

  var pusher = new Pusher('c4758bded688cee9f2be', {
    cluster: 'eu'
  });

  var channel = pusher.subscribe('boxfitChannel');
  channel.bind('boxfitEvent', function(data) {
      window.livewire.emit("receipt",data);
      //alert(JSON.stringify(data));
  });
</script>
