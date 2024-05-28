<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\chatpost;
use App\Models\User;

use Carbon\Carbon;

class ListChat extends Component
{
    public $messages =[];

    protected $listeners = ["receipt"];

    public $datapost;
    public $nameUsers = [];

    public function mount(){

        $messages = [];
        
    }

    public function receipt($message){

        $this->messages[] = $message;
        
    }

    public function render()
    {
        $this->dataPost = chatpost::select(['id','user','date','post'])->get();
        

        
        foreach ($this->dataPost as $data) {  
            $queryUser = User::where('id',$data->user)->first(); 
            array_push($this->nameUsers,$queryUser->name);
            
            $data->date = Carbon::parse(strtotime($data->date))->formatLocalized('%d-%m-%Y %H:%m');
        }
        
        
        return view('livewire.list-chat')
        -> with('dataPost',$this->dataPost)
        -> with('nameUsers',$this->nameUsers);
    }

    public function deletePost($idPost){

        chatpost::where([
            'id' => $idPost,
        ])->delete();

        return redirect()->route('chat');
    }


    
}
