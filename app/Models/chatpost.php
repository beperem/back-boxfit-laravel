<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chatpost extends Model
{
    use HasFactory;

    protected $table = 'chats';

    public $timestamps = true;

    protected $fillable = ['id','user','date','post'];    
}