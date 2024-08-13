<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kunjungan;
use Illuminate\Support\Carbon;

class Antrian extends Component
{
    public $kunjungans;

    public function mount()
    {
        $this->kunjungans = Kunjungan::query()
            ->whereDate('tanggal_kunjungan', Carbon::today())
            ->get();
    }


    public function render()
    {
        return view('livewire.antrian');
    }
}
