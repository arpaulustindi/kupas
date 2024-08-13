<?php

namespace App\Filament\Pages;

use App\Models\Kunjungan;
use Filament\Pages\Page;
use Filament\Forms;
use Filament\Pages\Actions\ButtonAction;
use Filament\Notifications\Notification;

class VerifyKunjungan extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.verify-kunjungan';
    protected static ?string $navigationLabel = 'Pemeriksaan Kunjungan';
    protected static ?string $navigationGroup = 'Petugas';
    protected static ?string $slug = 'verify-kunjungan';

    public $tiket;
    public $kunjungan;
    public $status_kunjungan;
    public $nik;
    public $nama_pengunjung;
    public $narapidana;
    public $barang_bawaan;
    public $hubungan;
    public $jumlah_pengunjung;
    public $tanggal_kunjungan;
    public $sesi_kunjungan;
    public $waktu_status;
    public $waktu_antrian;
    public $diperiksa;


    public function mount()
    {
        $this->nik = '';
        $this->nama_pengunjung = '';
        $this->narapidana = '';
        $this->barang_bawaan = '';
        $this->hubungan = '';
        $this->jumlah_pengunjung = '';
        $this->tanggal_kunjungan = '';
        $this->sesi_kunjungan = '';
        $this->status_kunjungan = '';
        $this->waktu_status = now();
        $this->waktu_antrian = now();
        $this->diperiksa = true;
        $this->kunjungan = null;
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make('tiket')
                ->label('Tiket')
                ->required()
                ->reactive(),
                //->afterStateUpdated(fn($state) => $this->checkTiket($state)),
            Forms\Components\TextInput::make('nik')
                ->label('NIK')
                ->disabled()
                ->visible(fn() => $this->kunjungan !== null),
            Forms\Components\TextInput::make('nama_pengunjung')
                ->label('Nama Pengunjung')
                ->disabled()
                ->visible(fn() => $this->kunjungan !== null),
            Forms\Components\TextInput::make('narapidana')
                ->label('Narapidana')
                ->disabled()
                ->visible(fn() => $this->kunjungan !== null),
            Forms\Components\TextInput::make('barang_bawaan')
                ->label('Barang Bawaan')
                ->disabled()
                ->visible(fn() => $this->kunjungan !== null),
            Forms\Components\TextInput::make('hubungan')
                ->label('Hubungan')
                ->disabled()
                ->visible(fn() => $this->kunjungan !== null),
            Forms\Components\TextInput::make('jumlah_pengunjung')
                ->label('Jumlah Pengunjung')
                ->disabled()
                ->visible(fn() => $this->kunjungan !== null),
            Forms\Components\DatePicker::make('tanggal_kunjungan')
                ->label('Tanggal Kunjungan')
                ->disabled()
                ->visible(fn() => $this->kunjungan !== null),
            Forms\Components\TextInput::make('sesi_kunjungan')
                ->label('Sesi Kunjungan')
                ->disabled()
                ->visible(fn() => $this->kunjungan !== null),
            Forms\Components\Radio::make('status_kunjungan')
                ->label('Status Kunjungan')
                ->options([
                    '-2' => 'Ditolak',
                    '-1' => 'Ditolak Sebagian',
                    '1' => 'Diterima',
                ])
                ->visible(fn() => $this->kunjungan !== null)
                ->required(),
        ];
    }

    public function checkTiket($tiket)
    {
        $this->kunjungan = Kunjungan::where('tiket', $tiket)->first();
        if ($this->kunjungan) {
            $this->nik = $this->kunjungan->nik;
            $this->nama_pengunjung = $this->kunjungan->nama_pengunjung;
            $this->narapidana = $this->kunjungan->narapidana;
            $this->barang_bawaan = $this->kunjungan->barang_bawaan;
            $this->hubungan = $this->kunjungan->hubungan;
            $this->jumlah_pengunjung = $this->kunjungan->jumlah_pengunjung;
            $this->tanggal_kunjungan = $this->kunjungan->tanggal_kunjungan;
            $this->sesi_kunjungan = $this->kunjungan->sesi_kunjungan;
            $this->status_kunjungan = $this->kunjungan->status_periksa;
            $this->updateFormData();
        } else {
            $this->kunjungan = null;
            $this->status_kunjungan = null;
            Notification::make()
                ->title('Tiket tidak ditemukan')
                ->danger()
                ->send();
        }
    }

    public function submit()
    {
        if ($this->kunjungan) {
            $this->kunjungan->update([
                'status_periksa' => $this->status_kunjungan,
                'diperiksa' => true,
                'waktu_status' => now(),
                'waktu_antrian' => now(),
            ]);

            Notification::make()
                ->title('Status kunjungan berhasil diubah')
                ->success()
                ->send();
        }
    }

    protected function updateFormData()
    {
        if ($this->kunjungan) {
            $this->form->fill([
                'nik' => $this->kunjungan->nik,
                'nama_pengunjung' => $this->kunjungan->nama_pengunjung,
                'narapidana' => $this->kunjungan->narapidana,
                'barang_bawaan' => $this->kunjungan->barang_bawaan,
                'hubungan' => $this->kunjungan->hubungan,
                'jumlah_pengunjung' => $this->kunjungan->jumlah_pengunjung,
                'tanggal_kunjungan' => $this->kunjungan->tanggal_kunjungan,
                'sesi_kunjungan' => $this->kunjungan->sesi_kunjungan,
            ]);
        }
    }

    protected function getActions(): array
    {
        return [
            ButtonAction::make('check_ticket')
                ->label('Cek Tiket')
                ->color('primary')
                ->icon('heroicon-o-eye') // Pastikan ikon ini valid
                ->action('checkTicketAction')
                ->disabled(fn() => empty($this->tiket)),

            ButtonAction::make('submit')
                ->label('Ubah Status')
                ->action('submit')
                ->requiresConfirmation()
                ->color('primary')
                ->disabled(fn() => !$this->kunjungan),
        ];
    }

    public function checkTicketAction()
    {
        $this->checkTiket($this->tiket);
    }
}
