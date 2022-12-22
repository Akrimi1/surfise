<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesProd extends Model
{
    use HasFactory;
    public $table = "imagesprod";

    public $fillable = [
        'idProduct',
        'path'
    ];

    public function product(){
        return $this->belongsTo(Products::class, 'idProduct');
    }
}
