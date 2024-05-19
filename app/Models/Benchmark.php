<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benchmark extends Model
{
    use HasFactory;

    protected $table = 'benchmarks';

    public $timestamps = true;

    protected $fillable = ['id','exercise','type'];  
}
