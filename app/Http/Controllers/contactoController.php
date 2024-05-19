<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    

    public function contact(Request $request){

        Mail::to($receivers)->send(new EmergencyCallReceived($call));

    }
}
