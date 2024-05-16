<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesType extends Model
{
    use HasFactory;

    public $table = "services_type";

    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    public function ShippingOrders()
    {
        return $this->hasMany(ShippingOrders::class, 'id');
    }

    public function ShippingRates()
    {
        return $this->hasMany(ShippingRates::class, 'id');
    }

}