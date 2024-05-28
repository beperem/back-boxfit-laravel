<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\booking;
use DateTime;

class ShowClass extends Component
{
    
    public $date;
    public $classes = [];

    //Muestra las clases de una determinada fecha

    public function showClass(){
        
        $this->classes = booking::where('date',$this->date)->get();

        foreach ($this->classes as $data) {  
            
            $fecha = $data->date;

            $dt = new DateTime($fecha);

            $data->date = $dt->format('d-m-Y');
        }
                
        return view('livewire.show-class')->with('classes', $this->classes);


    }

    //Borra la clase indicada
    
    public function delete($id){

        booking::where('id',$id)->delete();
        return redirect()->route('admin')->with('message','Clase eliminada!');
    }
}
