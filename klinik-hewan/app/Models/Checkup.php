<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkup extends Model
{
    protected $table = 'checkups';

    protected $fillable = [
        'catatan_pemeriksaan',
        'tratement_id',
    ];

    public function treatment()
    {
        return $this->belongsTo(Treatement::class,'tratement_id');
    }

}
