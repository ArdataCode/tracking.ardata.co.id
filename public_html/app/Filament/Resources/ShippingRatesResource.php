<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShippingRatesResource\Pages;
use App\Filament\Resources\ShippingRatesResource\RelationManagers;
use App\Models\ShippingRates;
use App\Models\ServicesType;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Tables\Filters\SelectFilter;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use App\Models\Regency;

class ShippingRatesResource extends Resource
{
    protected static ?string $model = ShippingRates::class;

    protected static ?string $navigationLabel = 'Ongkos Kirim';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Manage Data';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('from')
                    ->label('Asal')
                    ->options(Regency::query()->pluck('name', 'id'))
                    ->required()
                    ->searchable(),
                Forms\Components\Select::make('to')
                    ->label('Tujuan')
                    ->options(Regency::query()->pluck('name', 'id'))
                    ->required()
                    ->searchable(),
                Forms\Components\Section::make('Ongkos Kirim')
                    ->schema([
                        Forms\Components\Select::make('service_id')
                            ->label('Layanan')
                            ->options(ServicesType::query()->where('status','1')->pluck('name', 'id'))
                            ->required()
                            ->searchable()
                            ->columns(2),
                        Forms\Components\TextInput::make('price')->required()->numeric()->label('Harga (per Kg/m3)')->columns(2),
                        Forms\Components\TextInput::make('estimate')->required()->label('Estimasi')->columns(2),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('RegencyFrom.name')->searchable()->sortable()->label('Asal'),
                Tables\Columns\TextColumn::make('RegencyTo.name')->searchable()->sortable()->label('Tujuan'),
                Tables\Columns\TextColumn::make('ServicesType.name')->searchable()->sortable()->label('Layanan'),
                Tables\Columns\TextColumn::make('price')->searchable()->sortable()->label('Harga (/Kg)'),
                Tables\Columns\TextColumn::make('estimate')->searchable()->label('Estimasi'),
                ])

            ->filters([
                SelectFilter::make('from')->relationship('RegencyFrom', 'name')->searchable()->label('Asal'),
                SelectFilter::make('to')->relationship('RegencyTo', 'name')->searchable()->label('Tujuan'),
                SelectFilter::make('services_id')->relationship('ServicesType', 'name')->label('Layanan'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->modalHeading('Edit Data'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                ExportBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageShippingRates::route('/'),
        ];
    }

}