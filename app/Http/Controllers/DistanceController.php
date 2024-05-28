<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Benchmark;

class DistanceController extends Controller
{
    //Mostrar benchmarks de tipo distancia

    public $distances = [];

    public function show(){

        $this->distances = Benchmark::where('type',2)->get();

        return view('benchmarks.distance')
            ->with('distances',$this->distances);

    }
}
