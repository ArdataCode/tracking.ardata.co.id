<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicesTypeResource\Pages;
use App\Filament\Resources\ServicesTypeResource\RelationManagers;
use App\Models\ServicesType;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServicesTypeResource extends Resource
{
    protected static ?string $model = ServicesType::class;

    protected static ?string $slug = 'services-type';

    protected static ?string $navigationLabel = 'Jenis Layanan';

    protected static ?string $modelLabel = 'Services';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Master Data';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->columnSpan('full')->label('Jenis Layanan'),
                Forms\Components\Textarea::make('description')
                    ->rows(3)->columnSpan('full')->label('Deskripsi'),
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
                Tables\Columns\TextColumn::make('name')->sortable()->searchable()->label('Jenis Layanan'),
                Tables\Columns\TextColumn::make('description')->searchable()->label('Deskripsi')->limit(50),
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
            'index' => Pages\ManageServicesTypes::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return true;
    }

}