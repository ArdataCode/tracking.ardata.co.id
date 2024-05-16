<?php

namespace App\Filament\Resources\CustomerResource\Widgets;
use Filament\Widgets\LineChartWidget;
use App\Models\ShippingOrders;
use Carbon\Carbon;

class ShippingOrdersChart extends LineChartWidget
{
    protected static ?string $heading = 'Statistik Pengiriman';

    protected static ?int $sort = 2;

    protected function getType(): string
    {
        return 'line';
    }

    protected function getData(): array
    {
        $data = ShippingOrders::select('id', 'created_at')
        ->get()
        ->groupBy(function($date) {
        return Carbon::parse($date->created_at)->format('m');
        });
        $mcount = [];
        $totaldata = [];

        foreach ($data as $key => $value) {
        $mcount[(int)$key] = count($value);
        }

        for($i = 1; $i <= 12; $i++){
            if(!empty($mcount[$i])){
                $totaldata[$i] = $mcount[$i];    
            }else{
                $totaldata[$i] = 0;    
            }
        }

        return [
            'datasets' => [
                [
                    'label' => 'Pengiriman',
                    'data' => [$totaldata[1], $totaldata[2], $totaldata[3], $totaldata[4], $totaldata[5], $totaldata[6], $totaldata[7], $totaldata[8], $totaldata[9], $totaldata[10], $totaldata[11], $totaldata[12]],
                    'fill' => 'start',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        ];
    }
}