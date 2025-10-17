<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taskquestions extends Model
{
    use HasFactory;
    protected $fillable = [
      'taskLocation',
      'Neighborhood',
        'how many',
       'type of wall for tv',
       'Tv mount or provider',
        'cable concealment',
        'Any information'
    ];
}
