<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taskers extends Model
{
    use HasFactory;
    protected $fillable =[
        'result',
        'namesoftaskers',
        'kind',
        'price',
        'rate',
        'resevation_time',
        'location',
        'Top pro',
        'review_count'
    ];
}
