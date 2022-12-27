<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Equipments extends Model
{
    use HasFactory;

    public $fillable = [
        'idCategory',
        'idSubCategory',
        //'idVendor',
        'product_type',
        'product_name',
        'brand_name',
        'website',
        'logo',
        'description'
    ];


    public function images()
    {
        return $this->hasMany(Images::class, 'idEquipment');
    }
    public function product_types()
    {
        return $this->hasMany(ProductType::class, 'idEquipment');
    }

    public function videos()
    {
        return $this->hasMany(Videos::class, 'idEquipment');
    }
    
    public function category(){
        return $this->belongsTo(Categories::class, 'idCategory');
    }
    public function subcategory(){
        return $this->belongsTo(Subcategories::class, 'idSubCategory');
    }

    /*
    public function vendor(){
        return $this->belongsTo(Vendors::class, 'idVendor');
    }*/

}
