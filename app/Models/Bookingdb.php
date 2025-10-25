<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookingdb extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameUser',
        'mounting',
        'Date',
        'Time',
        'location',
        'hour_rate',
        'Priceforhourrate',
        'tax',
        'Promo_code'
    ];
}
