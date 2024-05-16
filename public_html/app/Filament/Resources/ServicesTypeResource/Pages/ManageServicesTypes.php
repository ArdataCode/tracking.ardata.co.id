<?php

namespace App\Filament\Resources\ServicesTypeResource\Pages;

use App\Filament\Resources\ServicesTypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageServicesTypes extends ManageRecords
{
    protected static string $resource = ServicesTypeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
