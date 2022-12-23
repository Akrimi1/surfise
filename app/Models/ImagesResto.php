<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesResto extends Model
{
    use HasFactory;

    use HasFactory;
    public $table = "imagesresto";

    public $fillable = [
        'idRestaurant',
        'path'
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurants::class, 'idRestaurant');
    }
}
