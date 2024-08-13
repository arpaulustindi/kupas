<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Support\Carbon;
use Filament\Tables\Columns\Layout\Group;
use Filament\Tables\Actions\Action;


class ManageAntrian extends Page implements HasTable
{
    use InteractsWithTable;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Manage Antrian';
    protected static string $view = 'filament.pages.manage-antrian';
    protected static ?string $title = 'Manage Antrian Hari Ini';
    protected static ?string $navigationGroup = 'Petugas';

    protected function getTableQuery(): Builder
    {
        return \App\Models\Kunjungan::query()
            ->whereDate('tanggal_kunjungan', Carbon::today())
            ->where('diperiksa', true)
            ->whereIn('status_periksa', [-1, 1]);
    }

    protected function getTableColumns(): array
    {
        return [

            Tables\Columns\TextColumn::make('tiket')
                ->searchable(),
            Tables\Columns\TextColumn::make('nik')
                ->searchable(),
            Tables\Columns\TextColumn::make('nama_pengunjung')
                ->searchable(),
            Tables\Columns\TextColumn::make('narapidana')
                ->searchable(),
            /*Tables\Columns\TextColumn::make('hubungan')
                ->searchable(),
            Tables\Columns\TextColumn::make('jumlah_pengunjung')
                ->numeric()
                ->sortable(),
            Tables\Columns\TextColumn::make('tanggal_kunjungan')
                ->date()
                ->sortable(),*/
            Tables\Columns\TextColumn::make('sesi_kunjungan')
                ->numeric()
                ->sortable(),

            Tables\Columns\IconColumn::make('diperiksa')
                ->boolean(),
                Tables\Columns\TextColumn::make('status_periksa')
                ->sortable()
                ->badge()
                ->formatStateUsing(function ($state) {
                    return match ($state) {
                        -2 => 'Ditolak',
                        -1 => 'Diterima Sebagian',
                        0  => 'Belum Diperiksa',
                        1  => 'Diterima',
                        default => 'Tidak Diketahui',
                    };
                })
                ->color(function ($state) {
                    return match ($state) {
                        -2 => 'danger', // Merah
                        -1 => 'warning', // Oranye
                        0  => 'gray', // Hitam
                        1  => 'success', // Hijau
                        default => 'gray', // Default untuk tidak diketahui
                    };
                }),
            Tables\Columns\TextColumn::make('waktu_status'),
            Tables\Columns\TextColumn::make('antrian')
                ->sortable()
                ->badge()
                ->formatStateUsing(function ($state) {
                    return match ($state) {
                        0 => 'Belum',
                        1 => 'Antri',
                        2  => 'Masuk',
                        3  => 'Selesai',
                        default => 'Tidak Diketahui',
                    };
                })
                ->color(function ($state) {
                    return match ($state) {
                        0 => 'gray', // Merah
                        1 => 'danger', // Oranye
                        2  => 'warning', // Hitam
                        3  => 'success', // Hijau
                        default => 'gray', // Default untuk tidak diketahui
                    };
                }),
            Tables\Columns\TextColumn::make('waktu_antrian'),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            Action::make('Antri')
                ->label('Antri')
                ->action(function ($record) {
                    $record->update([
                        'antrian' => 1,
                        'waktu_antrian' => Carbon::now(),
                    ]);
                })
                ->requiresConfirmation()
                ->visible(fn ($record) => $record->antrian === 0),

            Action::make('Masuk')
                ->label('Masuk')
                ->action(function ($record) {
                    $record->update([
                        'antrian' => 2,
                        'waktu_antrian' => Carbon::now(),
                    ]);
                })
                ->requiresConfirmation()
                ->visible(fn ($record) => $record->antrian === 1),

            Action::make('Selesai')
                ->label('Selesai')
                ->action(function ($record) {
                    $record->update([
                        'antrian' => 3,
                        'waktu_antrian' => Carbon::now(),
                    ]);
                })
                ->requiresConfirmation()
                ->visible(fn ($record) => $record->antrian === 2),
        ];
    }

    protected function getTableBulkActions(): array
    {
        return [
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
        ];
    }
}
