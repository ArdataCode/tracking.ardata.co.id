<?php

namespace App\Filament\Resources\UnitSizeResource\Pages;

use App\Filament\Resources\UnitSizeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageUnitSizes extends ManageRecords
{
    protected static string $resource = UnitSizeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
