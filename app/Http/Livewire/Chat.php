<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\chatpost;



class Chat extends Component
{

    public $name;
    public $date;
    public $message;

    //Se ejecuta una vez al crear el controlador
    public function mount(){
        $this->name = "";
        $this->date = "";
        $this->message = "";
    }
    public function render()
    {
        return view('livewire.chat');
    }

    public function sendMessage(){

        $this->validate([
            //"name" => "required",
            "message" => "required"
        ]);

        $dataSend = [
            "user" => Auth::user()->id,
            "date" => Carbon::now(),
            "message" => $this->message
        ];

        //$this->emit("receipt", $dataSend);

        event(new \App\Events\sendMessage(Auth::user()->id,Carbon::now(),$this->message));
        
        
        //Save post db
        chatpost::create([
            'user' => Auth::user()->id,
            'date' => Carbon::now(),
            'post' => $this->message,
        ]);
    }

    
}
