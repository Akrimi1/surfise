<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
{
    use HasFactory;

    protected $fillable=[
        'vendor_name',
        'description',
        'country',
        'state',
        'longitude',
        'latitude'       
    ];

    public function equipments(){
        return $this->hasMany(Equipments::class, 'idVendors');
    }
}
