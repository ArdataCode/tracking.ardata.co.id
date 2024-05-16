<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ShippingTrackers;
use App\Models\ShippingOrders;

class ShippingTrackers extends Model
{
    use HasFactory;

    public $table = "shipping_trackers";

    protected $fillable = [
        'shipping_id',
        'date',
        'time',
        'status',
        'notes',
        'receipt_photo',
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $latest = ShippingTrackers::orderBy('date','desc')->first();
            $latestdate = $latest->date;
            if ($model->status == 'Delivered') {
                $update = ShippingOrders::where('id', $model->shipping_id)
                    ->update([
                        'status'        => 'delivered',
                        'receipt_date'  => $latestdate,
                    ]);
            } else {
                $update = ShippingOrders::where('id', $model->shipping_id)
                    ->update([
                        'status'        => 'progress',
                        'receipt_date'  => $latestdate,
                    ]);
            }
        });

        self::created(function($model){
            //
        });

        self::updating(function($model){
            $latest = ShippingTrackers::orderBy('date','desc')->first();
            $latestdate = $latest->date;
            if ($model->status == 'Delivered') {
                $update = ShippingOrders::where('id', $model->shipping_id)
                    ->update([
                        'status'        => 'delivered',
                        'receipt_date'  => $latestdate,
                    ]);
            } else {
                $update = ShippingOrders::where('id', $model->shipping_id)
                    ->update([
                        'status'        => 'progress',
                        'receipt_date'  => $latestdate,
                    ]);
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

    public function ShippingOrders()
    {
        return $this->belongsTo(ShippingOrders::class, 'shipping_id');
    }

}