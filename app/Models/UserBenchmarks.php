<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBenchmarks extends Model
{
    use HasFactory;

    protected $table = 'usersbenchmarks';

    public $timestamps = true;

    protected $fillable = ['id','user','exercise','date','reps','weightDistance'];  
}
