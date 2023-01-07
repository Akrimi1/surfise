<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Images;
use App\Models\Categories;
use App\Models\Subcategories;

class Vendors extends Model
{
    use HasFactory;

    protected $fillable=[
        'vendor_type',
        'business_name',
        'address',
        'country',
        'website',
        'zipcode',
        'state',
        'like',
        'dislike',
        'phone',
        'description',
        'workingDays',
        'workingHours',
        'logo',  

    ];
      
    public function images(){
        return $this->hasMany(Images::class, 'idVendor');
    } 
    public function equipments(){
        return $this->hasMany(Equipments::class, 'idVendor');
    } 
}
