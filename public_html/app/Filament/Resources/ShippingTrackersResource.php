<?php

namespace App\Filament\Resources;

use Closure;
use Illuminate\Http\Request;
use App\Filament\Resources\ShippingTrackersResource\Pages;
use App\Filament\Resources\ShippingTrackersResource\RelationManagers;
use App\Models\ShippingTrackers;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class ShippingTrackersResource extends Resource
{
    protected static ?string $model = ShippingTrackers::class;

    protected static ?string $navigationLabel = 'Lacak Resi';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Manage Data';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('shipping_id')
                    ->relationship('ShippingOrders', 'awb')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->label('No Resi'),
                Forms\Components\DatePicker::make('date')->displayFormat('Y-m-d')->required()->label('Tanggal'),
                Forms\Components\TimePicker::make('time')->withoutSeconds()->required()->label('Waktu'),
                Forms\Components\Select::make('status')
                    ->options([
                        'Pick Up' => 'Pick Up',
                        'Transit' => 'Transit',
                        'Delivery' => 'Delivery',
                        'Delivered' => 'Delivered',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('notes')->required()->label('Data')->columnSpan('full'),
                Forms\Components\FileUpload::make('receipt_photo')
                    ->disk('local')
                    ->directory('receipt_photo')
                    ->visibility('private')
                    ->label('Bukti Penerimaan')
                    //->hidden(fn (Closure $get) => $get('status') != "Delivered")
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ShippingOrders.awb')->searchable()->sortable()->label('No Resi'),

                Tables\Columns\TextColumn::make('ShippingOrders.Customer.name')->searchable()->sortable()->label('Customer'),

                Tables\Columns\TextColumn::make('date')->searchable()->label('Tanggal'),
                Tables\Columns\TextColumn::make('time')->searchable()->label('Waktu'),
                Tables\Columns\TextColumn::make('status')->searchable()->label('Status')->sortable(),
                Tables\Columns\TextColumn::make('notes')->searchable()->label('Data')->limit(),
                ])
            ->filters([
                SelectFilter::make('shipping_id')->relationship('ShippingOrders', 'awb')->searchable()->label('No Resi'),
                SelectFilter::make('status')
                ->options([
                    'Pick Up' => 'Pick Up',
                    'Transit' => 'Transit',
                    'Delivery' => 'Delivery',
                    'Delivered' => 'Delivered',
                ])->label('Status'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\EditAction::make()
                //     ->mutateRecordDataUsing (function (array $data): array {
                //         $req = 'tableFilters[awb][value]';
                //         $data['notes'] = $req;
                //         return $data;
                //     }),
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
            'index' => Pages\ManageShippingTrackers::route('/'),
        ];
    }

}