<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingRates extends Model
{
    use HasFactory;

    public $table = "shipping_rates";

    protected $fillable = [
        'from',
        'to',
        'service_id',
        'price',
        'estimate',
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            // $data = '{"EXDHEMAT":'.
            // '['.$model->price1.', "'.$model->estimate1.'"], "EXDREG":'.
            // '['.$model->price2.', "'.$model->estimate2.'"]}';
            // $model->data = $data;
        });

        self::updating(function($model){
            // $data = '{"EXDHEMAT":'.
            // '['.$model->price1.', "'.$model->estimate1.'"], "EXDREG":'.
            // '['.$model->price2.', "'.$model->estimate2.'"]}';
            // $model->data = $data;
        });
    }

    public function ShippingOrders()
    {
        return $this->hasMany(ShippingOrders::class, 'to');
    }

    public function RegencyFrom()
    {
        return $this->belongsTo(Regency::class, 'from');
    }

    public function RegencyTo()
    {
        return $this->belongsTo(Regency::class, 'to');
    }

    public function ServicesType()
    {
        return $this->belongsTo(ServicesType::class, 'service_id');
    }

}
