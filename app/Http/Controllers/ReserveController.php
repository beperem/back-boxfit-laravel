<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\UserBooking;

class ReserveController extends Controller
{
    public $date;

    //Actualizar reserva

    public function update($date){

        return view('class.reserve', compact('classes'));
    }

    public function now(){
        return carbon::now()->format('Y-m-d');
    }
}
