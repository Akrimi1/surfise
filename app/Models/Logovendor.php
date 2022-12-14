<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logovendor extends Model
{
    use HasFactory;
    public $fillable=[
        'idVendor',
        'path'
    ];

    public function vendor(){
        return $this->belongsTo(Vendors::class, 'idVendor');
    }
}
