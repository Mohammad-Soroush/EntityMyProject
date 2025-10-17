<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalPrice extends Model
{
    use HasFactory;
    protected $fillable =[
        'HourlyRate',
        'PriceofHourlyrate',
        'Discount',
        'Tax',
        'overallservice',
        'Reliablity',
        'Punctuality',
        'Solution'
        ];
}
