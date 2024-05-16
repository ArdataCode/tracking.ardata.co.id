<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $table = "customers";

    protected $fillable = [
        'name',
        'category',
        'phone',
        'email',
        'province',
        'city',
        'district',
        'subdistrict',
        'address',
        'postalcode',
        'password',
        'status',
    ];

    public function ShippingOrders()
    {
        return $this->hasMany(ShippingOrders::class, 'id');
    }

    public function Regency()
    {
        return $this->belongsTo(Regency::class, 'city');
    }

}