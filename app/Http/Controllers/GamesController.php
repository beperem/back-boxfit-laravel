<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Benchmark;

class GamesController extends Controller
{
    //

    public $games = [];

    public function show(){

        $this->games = Benchmark::where('type',4)->get();

        return view('benchmarks.games')
            ->with('games',$this->games);

    }
}
