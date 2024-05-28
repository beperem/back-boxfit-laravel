<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\booking;

class AdminClass extends Controller
{
    public $classes = [];

    //Añadir clase

    public function addClass(Request $request){

        booking::create([
            'date' => $request->dates,
            'time' => $request->time,
            'alumn' => $request->alumn
        ]);

        return redirect()->route('admin')->with('message','Clase agregada!');
        
    }
}
