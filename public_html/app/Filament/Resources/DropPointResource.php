<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DropPointResource\Pages;
use App\Filament\Resources\DropPointResource\RelationManagers;
use App\Models\DropPoint;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class DropPointResource extends Resource
{
    protected static ?string $model = DropPoint::class;

    protected static ?string $slug = 'drop-point';

    protected static ?string $navigationLabel = 'Lokasi Drop Point';

    protected static ?string $modelLabel = 'Drop Point';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Master Data';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('no')->required()->columnSpan('full')->label('Nomor Urut'),
                Forms\Components\TextInput::make('city')->required()->columnSpan('full')->label('Kota / Kab'),
                Forms\Components\TextInput::make('address')->required()->columnSpan('full')->label('Alamat'),
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
                Tables\Columns\TextColumn::make('no')->sortable()->label('No Urut'),
                Tables\Columns\TextColumn::make('city')->sortable()->searchable()->label('Kota / Kab'),
                Tables\Columns\TextColumn::make('address')->searchable()->label('Alamat')->limit(50),
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
                Tables\Actions\DeleteBulkAction::make(),
                ExportBulkAction::make(),
            ])->defaultSort('no')->reorderable('no');
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageDropPoints::route('/'),
        ];
    }

}