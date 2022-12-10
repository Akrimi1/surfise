<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;

    public $fillable=[
        'idEquipment',
        'rating'

    ];

    public function equipment(){
        return $this->belongsTo(Equipments::class);
    }
}
