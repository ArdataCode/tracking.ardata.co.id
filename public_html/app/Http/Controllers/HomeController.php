<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;
use Session;
use Auth;
use Hash;
use Route;
use Redirect;
use App\Models\Pages;
use App\Models\ShippingOrders;
use App\Models\ShippingTrackers;
use App\Models\ShippingRates;
use App\Models\DropPoint;
use Storage;
use Validator;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class HomeController extends Controller
{

    public function frontpage () {
        return view('frontend.index');
    }

     public function trackCheck (Request $request) {
        if (!$request->awb) {
            return response()->json([
                'status'    => '404',
                'message'   => 'Data not found',
            ]);
        }
        return redirect('/track/'.$request->awb);
    }

    public function trackGet ($awb) {
        $orders = ShippingOrders::with('KotaAsal')->with('ShippingTrackers')->where('awb', $awb)->first();
        if (!$orders) {
            return redirect('/?result=no');
        }
        $data = ShippingTrackers::where('shipping_id', $orders->id)->get();
        $last = ShippingTrackers::where('shipping_id', $orders->id)->orderBy('created_at', 'desc')->where('shipping_id', $orders->id)->first();
        if ($last) {
            $status = $last->status;
        } else {
          $status = 'Pending';
        }
        return view('frontend.track-result', [
            'track' => $orders,
            'data'  => $data,
            'last'  => $status,
        ]);
    }

    public function checkRate () {
        $data = ShippingRates::all();
        $from = $data->unique('from');
        $to = $data->unique('to');
        return view('frontend.check-rate-index', [
            'from'  => $from,
            'to'    => $to,
        ]);
    }

    public function checkRateSubmit (Request $request) {
        if (!$request->from) {
            return response()->json([
                'status'    => '404',
                'message'   => 'Data not found',
            ]);
        }
        return redirect('/rate/'.$request->from.'/'.$request->to);
    }

    public function checkRateGet ($from, $to) {
        $rate = ShippingRates::where([
            ['from', '=', $from],
            ['to', '=', $to],
         ])->OrderBy('service_id','asc')->get();
        if (!$rate) {
            return redirect('/rate/?result=no');
        }

        $asal = Regency::where([
            ['id', '=', $from],
         ])->first();
        $tujuan = Regency::where([
            ['id', '=', $to],
         ])->first();

        $asal = $asal->name;
        $tujuan = $tujuan->name;
        $data = ShippingRates::all();
        $from = $data->unique('from');
        $to = $data->unique('to');
        return view('frontend.check-rate-result', [
            'from'      => $from,
            'to'        => $to,
            'rate'      => $rate,
            'asal'      => $asal,
            'tujuan'    => $tujuan,
        ]);
    }

    public function checkLocation () {
        return view('frontend.check-location-index');
    }

    public function checkLocationSubmit (Request $request) {
        if (!$request->city) {
            return response()->json([
                'status'    => '404',
                'message'   => 'Data not found',
            ]);
        }
        return redirect('/location/'.$request->city);
    }

    public function checkLocationGet ($city) {
        $data = DropPoint::where([
            ['city', '=', $city],
            ['status', '=', 1],
         ])->OrderBy('no', 'asc')->get();
        if (!$data->count() > 0) {
            return redirect('/location/?result=no');
        }
        return view('frontend.check-location-result', [
            'data'  => $data,
        ]);
    }

    public function pageAbout () {
        return view('frontend.page-about');
    }

    public function ShippingOrdersPrint ($awb) {
       $data = ShippingOrders::with('Regency')->where('awb', $awb)->first();
        if (!$data) {
            return response()->json([
                'status'    => '404',
                'message'   => 'Data not found',
            ]);
        }
        return view('shipping-orders-print', [
            'title' => 'Cetak Resi',
            'd'     => $data,
        ]);
    }

}