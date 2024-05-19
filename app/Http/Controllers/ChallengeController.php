<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Benchmark;

class ChallengeController extends Controller
{
    //

    public $challenges = [];

    public function show(){

        $this->challenges = Benchmark::where('type',3)->get();

        return view('benchmarks.challenge')
            ->with('challenges',$this->challenges);

    }
}
