<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserBenchmarks;
use App\Models\Benchmark;
use DateTime;

class ShowBenchmarksController extends Controller
{
    //
    public $data = [];
    public $exercise;

    public function show($benchmark){

        $this->data = UserBenchmarks::where('user',Auth::user()->id)
                                    ->where('exercise',$benchmark)
                                    ->get();

        $this->exercise = Benchmark::where('id',$benchmark)->first();

        foreach ($this->data as $row) {  
            
            $fecha = $row->date;

            $dt = new DateTime($fecha);

            $row->date = $dt->format('d-m-Y');
        }
        
        return view ('benchmarks.benchmarksShow')
                ->with('data',$this->data)
                ->with('exercise', $this->exercise);                                    

    }

    public function newBenchmark(Request $request){

        UserBenchmarks::create([
            'user' => Auth::user()->id,
            'exercise' => $request->exercise,
            'date' => $request->date,
            'reps' => $request->reps,
            'weightDistance' => $request->weight
        ]);

        return redirect()->route('benchmarks');

    }
}
