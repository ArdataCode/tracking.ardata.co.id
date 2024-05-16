<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\ShippingRates;

class ShippingOrders extends Model
{
    use HasFactory;

    public $table = "shipping_orders";

    protected $fillable = [
        'awb',
        'sender',
        'from',
        'recipient',
        'phone',
        'address',
        'city',
        'province',
        'postalcode',
        'delivery_date',
        'goods_name',
        'goods_type',
        'weight',
        'unit_size',
        'services_type',
        'price',
        'other_costs',
        'other_costs_notes',
        'total',
        'status',
        'receipt_date',
        'notes',
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->awb = 'AWB-'.strtoupper(Str::random(7));
            $ongkir = ShippingRates::where([
                ['from', '=', $model->from],
                ['to', '=', $model->city],
                ['service_id', '=', $model->services_type],
             ])->first();
            if (!$ongkir) {
                return 'Terjadi kesalahan hitung ongkir...';
            }
            $model->price = $ongkir->price;
            $total = $model->weight*$ongkir->price; //berat x biaya kirim
            $model->total = $total+$model->other_costs; //harga total + biaya lainnya
            if ($model->price == 0) {
                return 'Terjadi kesalahan hitung ongkir...';
            }
        });

        self::created(function($model){
            //
        });

        self::updating(function($model){
            $ongkir = ShippingRates::where([
                ['from', '=', $model->from],
                ['to', '=', $model->city],
                ['service_id', '=', $model->services_type],
             ])->first();
            if (!$ongkir) {
                return 'Terjadi kesalahan hitung ongkir...';
            }
            $model->price = $ongkir->price;
            $total = $model->weight*$ongkir->price; //berat x biaya kirim
            $model->total = $total+$model->other_costs; //harga total + biaya lainnya
            if ($model->price == 0) {
                return 'Terjadi kesalahan hitung ongkir...';
            }
        });

        self::updated(function($model){
            //
        });

        self::deleting(function($model){
            //
        });

        self::deleted(function($model){
            //
        });
    }

    public function Customer()
    {
        return $this->belongsTo(Customer::class, 'sender');
    }

    public function GoodsType()
    {
        return $this->belongsTo(GoodsType::class, 'goods_type');
    }

    public function ServicesType()
    {
        return $this->belongsTo(ServicesType::class, 'services_type');
    }

    public function ShippingTrackers()
    {
        return $this->hasMany(ShippingTrackers::class, 'id');
    }

    public function ShippingRates()
    {
        return $this->belongsTo(ShippingRates::class, 'city');
    }

    public function Regency()
    {
        return $this->belongsTo(Regency::class, 'city');
    }

    public function KotaAsal()
    {
        return $this->belongsTo(Regency::class, 'from');
    }

    public function KotaTujuan()
    {
        return $this->belongsTo(Regency::class, 'city');
    }

}