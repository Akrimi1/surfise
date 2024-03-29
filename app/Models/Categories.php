<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipments;
use App\Models\Subcategories;
use App\Models\Vendors;

class Categories extends Model
{
    use HasFactory;

    public $fillable = [
        'type',
        'category'
    ];

    public function equipments(){
        return $this->hasMany(Equipments::class, 'idCategory');
    }
    public function subcategories(){
        return $this->hasMany(Subcategories::class, 'idCategory');
    }

}
