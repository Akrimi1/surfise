<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;


    public $fillable = [
        'idCategory',
        'idSubCategory',
        'idVendor',
        'reference',
        'like',
        'dislike',
        'name',
        'rating',
        'description'
    ];


    public function imagespord()
    {
        return $this->hasMany(ImagesProd::class, 'idProduct');
    }

    public function videospord()
    {
        return $this->hasMany(VideosProd::class, 'idProduct');
    }
    
    public function category(){
        return $this->belongsTo(Categories::class, 'idCategory');
    }
    public function subcategory(){
        return $this->belongsTo(Subcategories::class, 'idSubCategory');
    }

    public function vendor(){
        return $this->belongsTo(Vendors::class, 'idVendor');
    }

}
