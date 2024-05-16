<?php

namespace App\Filament\Resources\DropPointResource\Pages;

use App\Filament\Resources\DropPointResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageDropPoints extends ManageRecords
{
    protected static string $resource = DropPointResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
