<?php

namespace App\Filament\Resources\ShippingRatesResource\Pages;

use App\Filament\Resources\ShippingRatesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageShippingRates extends ManageRecords
{
    protected static string $resource = ShippingRatesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
