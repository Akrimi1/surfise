<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'logo',
        'website',
        'workingHours',
    ];


    public function imagesresto()
    {
        return $this->hasMany(ImagesResto::class, 'idRestaurant');
    }

    public function videosresto()
    {
        return $this->hasMany(VideosResto::class, 'idRestaurant');
    }
}
