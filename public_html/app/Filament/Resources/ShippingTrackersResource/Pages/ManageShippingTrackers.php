<?php

namespace App\Filament\Resources\ShippingTrackersResource\Pages;

use App\Filament\Resources\ShippingTrackersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageShippingTrackers extends ManageRecords
{
    protected static string $resource = ShippingTrackersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

}