<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    public $fillable = [
        'idEquipment',
        'idVendor',
        'path'
    ];

    public function equipment(){
        return $this->belongsTo(Equipments::class, 'idEquipment');
    }
    
    public function vendor(){
        return $this->belongsTo(Vendors::class, 'idVendor');
    }
   
}
