<?php

namespace App\Filament\Resources\GoodsTypeResource\Pages;

use App\Filament\Resources\GoodsTypeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageGoodsTypes extends ManageRecords
{
    protected static string $resource = GoodsTypeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
