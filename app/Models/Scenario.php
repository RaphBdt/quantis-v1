<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Scenario extends Model
{
    protected $fillable = [
        'name',
        'description',
        'start_year',
        'end_year',
        'favorite',
    ];

    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class);
    }
}
