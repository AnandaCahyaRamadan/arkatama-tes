<?php

namespace App\Models;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owners';

    protected $fillable = [
        'name',
    ];

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
