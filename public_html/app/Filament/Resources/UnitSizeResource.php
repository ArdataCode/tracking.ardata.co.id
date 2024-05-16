<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UnitSizeResource\Pages;
use App\Filament\Resources\UnitSizeResource\RelationManagers;
use App\Models\UnitSize;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UnitSizeResource extends Resource
{
    protected static ?string $model = UnitSize::class;

    protected static ?string $slug = 'unit-size';

    protected static ?string $navigationLabel = 'Satuan Unit';

    protected static ?string $modelLabel = 'Unit Size';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Master Data';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->columnSpan('full')->label('Satuan Unit'),
                Forms\Components\Select::make('status')
                    ->options([
                        '0' => 'Inactive',
                        '1' => 'Active',
                    ])->required()->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable()->label('Satuan Unit'),
                Tables\Columns\BadgeColumn::make('status')
                    ->enum([
                    '0' => 'Inactive',
                    '1' => 'Active',
                    ])
                    ->colors([
                        'danger' => static fn ($state): bool => $state === 0,
                        'success' => static fn ($state): bool => $state === 1,
                    ]),
                ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                //Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageUnitSizes::route('/'),
        ];
    }    
}
