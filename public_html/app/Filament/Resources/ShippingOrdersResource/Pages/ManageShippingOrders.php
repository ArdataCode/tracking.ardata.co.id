<?php

namespace App\Filament\Resources\ShippingOrdersResource\Pages;

use App\Filament\Resources\ShippingOrdersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Database\Eloquent\Model;

class ManageShippingOrders extends ManageRecords
{
    protected static string $resource = ShippingOrdersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

}