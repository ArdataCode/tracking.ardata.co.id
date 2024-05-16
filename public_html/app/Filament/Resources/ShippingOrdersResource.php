<?php

namespace App\Filament\Resources;

use Closure;
use App\Filament\Resources\ShippingOrdersResource\Pages;
use App\Filament\Resources\ShippingOrdersResource\RelationManagers;
use App\Models\ShippingOrders;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
use Filament\Forms\Components\Hidden;
use Livewire\TemporaryUploadedFile;
use Carbon\Carbon;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use App\Models\ShippingRates;
use App\Models\Customer;
use App\Models\ServicesType;
use App\Models\GoodsType;
use App\Models\Regency;
use App\Models\UnitSize;

class ShippingOrdersResource extends Resource
{
    protected static ?string $model = ShippingOrders::class;

    protected static ?string $navigationLabel = 'Pengiriman';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Manage Data';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('awb')->required()->hiddenOn('create')->label('No Resi')->columnSpan('full'),
                Forms\Components\Select::make('sender')
                    ->label('Customer')
                    ->options(Customer::query()->where('status','1')->pluck('name', 'id'))
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn($state, callable $set) => $set('from', Customer::find($state)?->city))
                    ->searchable(),
                Forms\Components\Hidden::make('from')
                    ->label('ID Kota Asal')
                    ->disabled()
                    ->dehydrated()
                    ->required(),
                Forms\Components\TextInput::make('recipient')->required()->label('Nama Penerima'),
                Forms\Components\Select::make('city')
                    ->label('Kota Tujuan')
                    ->options(Regency::query()->pluck('name', 'id'))
                    ->required()
                    ->preload()
                    ->reactive()
                    ->dehydrated()
                    ->afterStateUpdated(fn ($state, callable $set) => $set('city', Regency::find($state)?->id))
                    ->searchable(),
                Forms\Components\TextInput::make('phone')->required()->label('No Telp'),
                Forms\Components\TextInput::make('address')->required()->label('Alamat'),
                Forms\Components\TextInput::make('province')->required()->label('Provinsi'),
                Forms\Components\TextInput::make('postalcode')->required()->numeric()->label('Kode Pos'),
                Forms\Components\Select::make('goods_type')
                    ->options(GoodsType::query()->where('status','1')->pluck('name', 'id'))
                    ->required()
                    ->searchable()
                    ->label('Jenis Barang'),
                Forms\Components\Select::make('services_type')
                    ->label('Jenis Layanan')
                    ->required()
                    ->reactive()
                    //->hiddenOn('edit')
                    ->options(function (callable $get) {
                        //if ($get('from') AND $get('city')) {

                            $ongkir = ShippingRates::where([
                                ['from', '=', $get('from')],
                                ['to', '=', $get('city')],
                             ])->orderBy('id', 'asc')->get();

                            if ($ongkir->count() == 1) {
                                $data = ShippingRates::with('ServicesType')->where([
                                    ['from', '=', $get('from')],
                                    ['to', '=', $get('city')],
                                ])->orderBy('id', 'asc')->first();
                                return [$data->ServicesType->id => $data->ServicesType->name];

                            }elseif ($ongkir->count() == 2) {
                                $data1 = ShippingRates::with('ServicesType')->where([
                                    ['from', '=', $get('from')],
                                    ['to', '=', $get('city')],
                                ])->orderBy('id', 'asc')->first();
                                $data2 = ShippingRates::with('ServicesType')->where([
                                    ['from', '=', $get('from')],
                                    ['to', '=', $get('city')],
                                ])->orderBy('id', 'desc')->first();
                                return [$data1->ServicesType->id => $data1->ServicesType->name, $data2->ServicesType->id => $data2->ServicesType->name];
                                
                            }elseif ($ongkir->count() == 3) {
                                $data1 = ShippingRates::with('ServicesType')->where([
                                    ['from', '=', $get('from')],
                                    ['to', '=', $get('city')],
                                ])->orderBy('id', 'asc')->first();
                                $data2 = ShippingRates::with('ServicesType')->where([
                                    ['from', '=', $get('from')],
                                    ['to', '=', $get('city')],
                                ])->orderBy('id', 'desc')->skip(1)->first();
                                $data3 = ShippingRates::with('ServicesType')->where([
                                    ['from', '=', $get('from')],
                                    ['to', '=', $get('city')],
                                ])->orderBy('id', 'desc')->first();
                                return [$data1->ServicesType->id => $data1->ServicesType->name, $data2->ServicesType->id => $data2->ServicesType->name, $data3->ServicesType->id => $data3->ServicesType->name];
                            }elseif ($ongkir->count() == 4) {
                                $data1 = ShippingRates::with('ServicesType')->where([
                                    ['from', '=', $get('from')],
                                    ['to', '=', $get('city')],
                                ])->orderBy('id', 'asc')->first();
                                $data2 = ShippingRates::with('ServicesType')->where([
                                    ['from', '=', $get('from')],
                                    ['to', '=', $get('city')],
                                ])->orderBy('id', 'desc')->skip(1)->first();
                                $data3 = ShippingRates::with('ServicesType')->where([
                                    ['from', '=', $get('from')],
                                    ['to', '=', $get('city')],
                                ])->orderBy('id', 'desc')->skip(2)->first();
                                $data4 = ShippingRates::with('ServicesType')->where([
                                    ['from', '=', $get('from')],
                                    ['to', '=', $get('city')],
                                ])->orderBy('id', 'desc')->first();
                                return [$data1->ServicesType->id => $data1->ServicesType->name, $data2->ServicesType->id => $data2->ServicesType->name, $data3->ServicesType->id => $data3->ServicesType->name, $data4->ServicesType->id => $data4->ServicesType->name];
                            }

                        // } else {
                        //     return ServicesType::query()->pluck('name', 'id');
                        // }
                    }),

                Forms\Components\TextInput::make('goods_name')->required()->label('Keterangan Barang'),
                Forms\Components\TextInput::make('weight')->required()->numeric()->label('Ukuran Unit'),
                Forms\Components\Select::make('unit_size')
                    ->options(UnitSize::query()->where('status','1')->pluck('name', 'name'))
                    ->required()
                    ->searchable()
                    ->label('Satuan Unit'),

                Forms\Components\TextInput::make('price')->required()->hiddenOn('create')->label('Biaya Kirim')->disabled(),
                Forms\Components\TextInput::make('other_costs')->numeric()->required()->default(0)->label('Biaya Lainnya'),
                Forms\Components\TextInput::make('other_costs_notes')->label('Keterangan Biaya Lainnya'),
                Forms\Components\DatePicker::make('delivery_date')->required()->displayFormat('Y-m-d')->label('Tgl Pengiriman'),
                Forms\Components\DatePicker::make('receipt_date')->displayFormat('Y-m-d')->label('Tgl Penerimaan'),
                Forms\Components\TextInput::make('notes')->label('Notes'),
                Forms\Components\TextInput::make('total')->required()->hiddenOn('create')->label('Total Biaya')->disabled(),
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'progress' => 'On Progress',
                        'delivered' => 'Delivered',
                    ])->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\BadgeColumn::make('Customer.category')
                    ->enum([
                    'personal' => 'Personal',
                    'corporate' => 'Corporate',
                    ])
                    ->colors([
                        'secondary' => static fn ($state): bool => $state === 'personal',
                        'success' => static fn ($state): bool => $state === 'corporate',
                    ])->sortable()->searchable()->label('Category'),

                Tables\Columns\TextColumn::make('awb')->sortable()->searchable()->label('No Resi'),
                Tables\Columns\TextColumn::make('Customer.name')->searchable()->label('Customer'),
                Tables\Columns\TextColumn::make('recipient')->searchable()->label('Penerima'),
                Tables\Columns\TextColumn::make('phone')->searchable()->label('No Telp'),
                Tables\Columns\BadgeColumn::make('status')
                    ->enum([
                    'pending' => 'Pending',
                    'progress' => 'On Progress',
                    'delivered' => 'Delivered',
                    ])
                    ->colors([
                        'danger' => static fn ($state): bool => $state === 'pending',
                        'warning' => static fn ($state): bool => $state === 'progress',
                        'success' => static fn ($state): bool => $state === 'delivered',
                    ])->sortable(),
                Tables\Columns\TextColumn::make('delivery_date')->label('Tanggal Kirim'),
                Tables\Columns\TextColumn::make('servicestype.name')->sortable()->label('Layanan'),
                ])
                ->filters([
                SelectFilter::make('sender')->relationship('Customer', 'name')->searchable()->label('Customer'),
                SelectFilter::make('status')
                ->options([
                    'pending' => 'Pending',
                    'progress' => 'On Progress',
                    'delivered' => 'Delivered',
                ])->label('Status'),
                SelectFilter::make('services_id')->relationship('ServicesType', 'name')->label('Layanan'),

                Tables\Filters\Filter::make('delivery_date')
                    ->form([
                        Forms\Components\DatePicker::make('published_from')
                            ->placeholder(fn ($state): string => now()->format('Y-m-d'))->label('Range Tgl Kirim'),
                        Forms\Components\DatePicker::make('published_until')
                            ->placeholder(fn ($state): string => now()->format('Y-m-d'))->label('Sampai dengan'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['published_from'] ?? null,
                                fn (Builder $query, $date): Builder => $query->whereDate('delivery_date', '>=', $date),
                            )
                            ->when(
                                $data['published_until'] ?? null,
                                fn (Builder $query, $date): Builder => $query->whereDate('delivery_date', '<=', $date),
                            );
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];
                        if ($data['published_from'] ?? null) {
                            $indicators['published_from'] = 'Range tgl kirim: ' . Carbon::parse($data['published_from'])->format('Y-m-d');
                        }
                        if ($data['published_until'] ?? null) {
                            $indicators['published_until'] = 'Sampai dengan: ' . Carbon::parse($data['published_until'])->format('Y-m-d');
                        }
                        return $indicators;
                    }),
            ])
            ->actions([
                Tables\Actions\Action::make('preview')
                    ->label('Preview')
                    ->action(fn() => $this->record)
                    ->modalContent(fn ($record) => view('shipping-orders-preview', ['record' => $record]))->modalHeading('Preview')->modalButton('Oke')->icon('heroicon-o-ticket')->color('secondary'),
                Tables\Actions\Action::make('print')
                    ->label('Cetak')
                    ->url(fn (ShippingOrders $record): string => url('admin/shipping-orders/print', $record->awb))
                    ->openUrlInNewTab()->icon('heroicon-o-printer')->color('success'),

                Tables\Actions\Action::make('track')
                    ->label('Lacak')
                    ->url(fn (ShippingOrders $record): string => url('admin/shipping-trackers?tableFilters[awb][value]='.$record->awb.'&tableFilters[shipping_id][value]='.$record->id))
                    ->icon('heroicon-o-cube')->color('info'),

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
            'index' => Pages\ManageShippingOrders::route('/'),
        ];
    }

}