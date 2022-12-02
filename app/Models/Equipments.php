<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
    use HasFactory;

    public $fillable = [
        'idCategory',
        'idVendor',
        'ref',
        'name',
        'type',
        'description',
        'details'
    ];

    public function images()
    {
        return $this->hasMany(Images::class, 'idEquipment', 'id');
    }

    public function videos()
    {
        return $this->hasMany(Videos::class, 'idEquipment', 'id');
    }

    public function ratings(){
        return $this->hasMany(Ratings::class, 'idEquipment', 'id');
    }

    public function category(){
        return $this->belongsTo(Categories::class);
    }

    public function vendor(){
        return $this->belongsTo(Vendors::class);
    }

}
