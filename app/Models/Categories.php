<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipments;
use App\Models\Subcategories;

class Categories extends Model
{
    use HasFactory;

    protected $fillabel = [
        'category'
    ];

    public function equipments(){
        return $this->hasMany(Equipments::class, 'idCategory');
    }
    public function categories(){
        return $this->hasMany(Subcategories::class, 'idCategory');
    }

}
