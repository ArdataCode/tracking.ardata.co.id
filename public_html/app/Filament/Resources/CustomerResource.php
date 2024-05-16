<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\Customer;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\Select;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\SelectFilter;
use App\Models\ShippingRates;
use App\Models\Regency;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationLabel = 'Customer';

    protected static ?string $modelLabel = 'Customer';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Manage Data';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category')
                    ->options([
                        'personal' => 'Personal',
                        'corporate' => 'Corporate',
                    ])->required()->label('Kategori'),
                Forms\Components\TextInput::make('name')->required()->label('Nama'),
                Forms\Components\TextInput::make('email')->required()->label('Email'),
                Forms\Components\TextInput::make('phone')->required()->label('No Telp'),
                Forms\Components\TextInput::make('province')->required()->label('Provinsi'),
                Forms\Components\Select::make('city')
                    ->label('Kota / Kab')
                    ->options(Regency::query()->pluck('name', 'id'))
                    ->required()
                    ->searchable(),
                Forms\Components\TextInput::make('district')->required()->label('Kecamatan'),
                Forms\Components\TextInput::make('subdistrict')->required()->label('Kelurahan'),
                Forms\Components\TextInput::make('address')->required()->label('Alamat'),
                Forms\Components\TextInput::make('postalcode')->required()->numeric()->label('Kode Pos'),
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
                Tables\Columns\BadgeColumn::make('category')
                    ->enum([
                    'personal' => 'Personal',
                    'corporate' => 'Corporate',
                    ])->sortable()->label('Kategori'),
                Tables\Columns\TextColumn::make('name')->sortable()->searchable()->label('Nama'),
                Tables\Columns\TextColumn::make('email')->searchable()->label('Email'),
                Tables\Columns\TextColumn::make('phone')->searchable()->label('No Telp'),
                Tables\Columns\TextColumn::make('Regency.name')->searchable()->sortable()->label('Kota / Kab'),
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
                SelectFilter::make('category')
                ->options([
                    'personal' => 'Personal',
                    'corporate' => 'Corporate',
                ])->label('Kategori'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ManageCustomers::route('/'),
        ];
    }

}