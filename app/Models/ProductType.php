<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;
    public $table="product_type";
    public $fillable = [
        'product_type'
    ];
    public function equipment(){
        return $this->belongsTo(Equipments::class, 'idEquipment');
    }

}
