<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsType extends Model
{
    use HasFactory;

    public $table = "goods_type";

    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    public function ShippingOrders()
    {
        return $this->hasMany(ShippingOrders::class, 'id');
    }

}