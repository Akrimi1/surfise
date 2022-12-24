<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipments;
use App\Models\Images;

class Vendors extends Model
{
    use HasFactory;

    protected $fillable=[
        'business_type',
        'vendor_name',
        'profession',
        'certification',
        'logo',
        'like',
        'dislike',
        'rating',
        'description',
        'country',
        'state',
        'streetAddress',
        'zipcode',
        'email',
        'phone',
        'website',
        'workingDays',
        'workingHours',
        
        

    ];

    public function equipments(){
        return $this->hasMany(Equipments::class, 'idVendor');
    }    
    public function images(){
        return $this->hasMany(Images::class, 'idVendor');
    }    
}
