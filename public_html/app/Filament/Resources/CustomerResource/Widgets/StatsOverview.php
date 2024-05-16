<?php

namespace App\Filament\Resources\CustomerResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Customer;
use App\Models\ShippingOrders;
use App\Models\ShippingTrackers;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 0;

    protected function getCards(): array
    {
        $cust = Customer::count();
        $order = ShippingOrders::count();
        $progress = ShippingOrders::where('status', 'progress')->count();
        $delivered = ShippingOrders::where('status', 'delivered')->count();
        return [
            Card::make('Total Customer', $cust),
            Card::make('Total Pengiriman', $order),
            Card::make('On Progress', $progress),
            Card::make('Delivered', $delivered),
        ];
    }

}