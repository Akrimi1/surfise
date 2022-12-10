<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    public $fillable = [
        'idEquipement',
        'path'
    ];

    public function equipment(){
        return $this->belongsTo(Equipments::class);
    }
}
