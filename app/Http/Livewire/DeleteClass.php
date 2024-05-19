<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeleteClass extends Component
{

    public function showClass(){

        $classes = booking::all();

        return view('admin.admin', compact('classes'));

    }
    
    

    public function render()
    {
        return view('Livewire.delete-class');
    }
}
?>
