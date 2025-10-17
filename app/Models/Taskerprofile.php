<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taskerprofile extends Model
{
    use HasFactory;
    protected $fillable =[
        'Top pro',
        'name',
        'mounting service',
        'price',
        'rate',
        'hour',
        'Expirence and Specialities',
        'Customer rating',
        'rateNumber'
    ];
}
