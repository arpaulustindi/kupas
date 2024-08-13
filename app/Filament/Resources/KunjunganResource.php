<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KunjunganResource\Pages;
use App\Filament\Resources\KunjunganResource\RelationManagers;
use App\Models\Kunjungan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Radio;

use Haruncpi\LaravelIdGenerator\IdGenerator;

class KunjunganResource extends Resource
{
    protected static ?string $model = Kunjungan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function canCreate(): bool
    {
        return false;
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tiket')
                    ->default(IdGenerator::generate(['table' => 'kunjungans', 'field' => 'tiket', 'length' => 8, 'prefix' => '#' . date('ym')]))
                    ->required()
                    ->readonly()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nik')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_pengunjung')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('narapidana')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('barang_bawaan')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('hubungan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jumlah_pengunjung')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('tanggal_kunjungan')
                    ->required(),
                Radio::make('sesi_kunjungan')
                    ->options([
                        '1' => 'Sesi 1',
                        '2' => 'Sesi 2',
                    ]),
                TimePicker::make('waktu_status')
                    ->required(),
                Forms\Components\Toggle::make('diperiksa')
                    ->required(),
                Forms\Components\TextInput::make('status_periksa')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('antrian')
                    ->required()
                    ->numeric(),
                TimePicker::make('waktu_antrian')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tiket')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_pengunjung')
                    ->searchable(),
                Tables\Columns\TextColumn::make('narapidana')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hubungan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah_pengunjung')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_kunjungan')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sesi_kunjungan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('waktu_status'),
                Tables\Columns\IconColumn::make('diperiksa')
                    ->boolean(),
                Tables\Columns\TextColumn::make('status_periksa')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('antrian')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('waktu_antrian'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                /*Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),*/]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKunjungans::route('/'),
            'create' => Pages\CreateKunjungan::route('/create'),
            'edit' => Pages\EditKunjungan::route('/{record}/edit'),
        ];
    }
}
