<?php

namespace App\Livewire;

use App\Models\Kunjungan;
use Livewire\Component;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Barryvdh\DomPDF\Facade\Pdf;

class RegisterKunjungan extends Component
{
    public $nik, $nama_pengunjung, $narapidana, $barang_bawaan, $hubungan, $jumlah_pengunjung, $tanggal_kunjungan, $sesi_kunjungan, $waktu_status, $status_periksa, $antrian, $waktu_antrian, $diperiksa;
    public function submit()
    {
        $this->validate([
            'nik' => 'required|max:255',
            'nama_pengunjung' => 'required|max:255',
            'narapidana' => 'required|max:255',
            'barang_bawaan' => 'required',
            'hubungan' => 'required|max:255',
            'jumlah_pengunjung' => 'required|numeric',
            'tanggal_kunjungan' => 'required|date',
            'sesi_kunjungan' => 'required'
            /*'waktu_status' => 'required',
            'status_periksa' => 'required|numeric',
            'antrian' => 'required|numeric',
            'waktu_antrian' => 'required',
            'diperiksa' => 'required|boolean',*/
        ]);

        $tiket = IdGenerator::generate(['table' => 'kunjungans', 'field' => 'tiket', 'length' => 8, 'prefix' => '#' . date('ym')]);

        $kunjungan = Kunjungan::create([
            'tiket' => $tiket,
            'nik' => $this->nik,
            'nama_pengunjung' => $this->nama_pengunjung,
            'narapidana' => $this->narapidana,
            'barang_bawaan' => $this->barang_bawaan,
            'hubungan' => $this->hubungan,
            'jumlah_pengunjung' => $this->jumlah_pengunjung,
            'tanggal_kunjungan' => $this->tanggal_kunjungan,
            'sesi_kunjungan' => $this->sesi_kunjungan,
            'waktu_status' => now(),
            'status_periksa' => 0,
            'antrian' => 0,
            'waktu_antrian' => now(),
            'diperiksa' => false
        ]);

        session()->flash('message', 'Registrasi berhasil! Silahkan download tiket Anda.');

        return $this->downloadTiket($kunjungan);
    }

    public function downloadTiket($kunjungan)
    {
        $pdf = Pdf::loadView('pdf.tiket', ['kunjungan' => $kunjungan]);
        return response()->streamDownload(
            fn() => print($pdf->stream()),
            'tiket_kunjungan_' . $kunjungan->tiket . '.pdf'
        );
    }
    public function render()
    {
        return view('livewire.register-kunjungan');
    }
}
