<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';

    protected $fillable = [
        'nama',
        'jenis',
        'usia',
        'berat',
        'kode_hewan',
        'owner_id',
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class,'owner_id');
    }

    public function tratements()
    {
        return $this->hasMany(Treatement::class);
    }
}
