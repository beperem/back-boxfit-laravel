<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    public $timestamps = true;

    protected $fillable = ['id','date','time','alumn'];    
}
