<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    

    //Contacto
    
    public function contact(Request $request){

        Mail::to($receivers)->send(new EmergencyCallReceived($call));

    }
}
