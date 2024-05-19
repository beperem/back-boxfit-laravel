<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBooking extends Model
{
    use HasFactory;

    protected $table = 'usersbookings';

    public $timestamps = true;

    protected $fillable = ['id','class','user'];
}
