<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipments;

class Vendors extends Model
{
    use HasFactory;

    protected $fillable=[
        'vendor_name',
        'logo',
        'photo',
        'description',
        'country',
        'state',
        'longitude',
        'latitude'       
    ];

    public function equipments(){
        return $this->hasMany(Equipments::class);
    }    
}
