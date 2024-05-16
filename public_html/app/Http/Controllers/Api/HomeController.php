<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DropPoint;
use App\Models\Regency;
use App\Models\ShippingOrders;
use App\Models\ShippingRates;
use App\Models\ShippingTrackers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function trackGet($awb)
    {
        $orders = ShippingOrders::with(['KotaAsal', 'KotaTujuan', 'ShippingTrackers', 'Customer'])->where('awb', $awb)->firstOrFail();
        
        $data = ShippingTrackers::where('shipping_id', $orders->id)->get();
        $last = $data->last();
        $status = $last ? $last->status : 'Pending';
        
        return response()->json([
            'status'    => '200',
            'message'   => 'Data found',
            'track'     => $orders,
            'data'      => $data,
            'last'      => $status,
        ]);
    }

    public function checkRate()
    {
        $data = ShippingRates::with(['RegencyFrom', 'RegencyTo'])->get();
        $from = $data->unique('from')->pluck('RegencyFrom');
        $to = $data->unique('to')->pluck('RegencyTo');

        return response()->json([
            'status'    => '200',
            'message'   => 'Data found',
            'from'      => $from,
            'to'        => $to,
        ]);
    }
    
    public function checkRateGet($from, $to)
    {
        $rate = ShippingRates::where([
            ['from', '=', $from],
            ['to', '=', $to],
        ])->orderBy('service_id', 'asc')->with('ServicesType')->get();

        $asal = Regency::find($from);
        $tujuan = Regency::find($to);

        if ($rate->isEmpty()) {
            $asalName = $asal ? $asal->name : null;
            $tujuanName = $tujuan ? $tujuan->name : null;

            return response()->json([
                'status'    => '200',
                'message'   => 'Data not found',
                'rate'      => [],
                'asal'      => $asalName,
                'tujuan'    => $tujuanName,
            ]);
        }

        return response()->json([
            'status'    => '200',
            'message'   => 'Data found',
            'rate'      => $rate,
            'asal'      => $asal->name,
            'tujuan'    => $tujuan->name,
        ]);
    }



    public function locationGet()
    {
        $data = DropPoint::all();
        
        return response()->json([
            'status'    => '200',
            'message'   => 'Data found',
            'data'      => $data,
        ]);
    }
}
