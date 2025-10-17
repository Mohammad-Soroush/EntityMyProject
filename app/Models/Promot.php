<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promot extends Model
{
    protected $fillable =[
        'code',
        'OFF'
    ];
    use HasFactory;
}
