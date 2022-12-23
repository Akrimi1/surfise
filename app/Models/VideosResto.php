<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideosResto extends Model
{
    use HasFactory;

    use HasFactory;
    public $table = 'videosresto';

    public $fillable = [
        'idRestaurant',
        'path'
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurants::class, 'idRestaurant');
    }
}
