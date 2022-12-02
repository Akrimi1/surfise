<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;

    protected $fillabel=[
        'idEquipment',
        'path'
    ];

    public function equipment(){
        return $this->belongsTo(Equipments::class);
    }
}
