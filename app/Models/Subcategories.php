<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Subcategories extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'idCategory',
        'subcategory'
    ];

    public function category(){
        return $this->belongsTo(Categories::class, 'idCategory');
    }
    public function equipment(){
        return $this->hasOne(Equipments::class);
    }
}
