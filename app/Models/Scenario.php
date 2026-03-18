<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scenario extends Model
{
    protected $fillable = [
        'name',
        'description',
        'start_year',
        'end_year',
        'favorite',
    ];
}
