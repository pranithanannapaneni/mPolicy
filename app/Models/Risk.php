<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'question1',
        'question2',
        'question3',
        'question4',
        'question5',
        'score'
    ];


}
