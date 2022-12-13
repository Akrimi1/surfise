<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vendors;


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
        return $this->hasMany(Images::class);
    }

    public function videos()
    {
        return $this->hasMany(Videos::class);
    }

    public function ratings(){
        return $this->hasMany(Ratings::class);
    }

    public function category(){
        return $this->belongsTo(Categories::class, 'idCategory');
    }

    public function vendor(){
        return $this->belongsTo(Vendors::class, 'idVendor');
    }

}
