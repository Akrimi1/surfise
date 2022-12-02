<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillabel = [
        'category'
    ];

    public function equipments(){
        return $this->hasMany(Equipments::class, 'idCategory');
    }

}
