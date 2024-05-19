<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Benchmark;

class WeigthController extends Controller
{
    //
    

    public $weigth = [];

    public function show(){

        $this->weigth = Benchmark::where('type',1)->get();

        return view('benchmarks.weigth')
            ->with('weigth',$this->weigth);

    }
}
