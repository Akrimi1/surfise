<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Equipments extends Model
{
    use HasFactory;

    public $fillable = [
        'idCategory',
        'idSubCategory',
        'idVendor',
        'ref',
        'name',
        'type',
        'rating',
        'description',
        'details'
    ];

    public function images()
    {
        return $this->hasMany(Images::class, 'idEquipment');
    }

    public function videos()
    {
        return $this->hasMany(Videos::class, 'idEquipment');
    }

    

    public function category(){
        return $this->belongsTo(Categories::class, 'idCategory');
    }
    public function subcategory(){
        return $this->belongsTo(Subcategories::class, 'idSubCategory');
    }

    public function vendor(){
        return $this->belongsTo(Vendors::class, 'idVendor');
    }

}
