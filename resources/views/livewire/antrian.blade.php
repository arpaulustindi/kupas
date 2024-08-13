<div class="overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">Tiket</th>
                <th scope="col" class="px-4 py-3">Sesi Kunjungan</th>
                <th scope="col" class="px-4 py-3">Status Periksa</th>
                <th scope="col" class="px-4 py-3">Antrian</th>
                <th scope="col" class="px-4 py-3">Waktu Antrian</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kunjungans as $kunjungan)
            <tr class="border-b dark:border-gray-700">
                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $kunjungan->tiket }}</th>
                <td class="px-4 py-3">{{ $kunjungan->sesi_kunjungan }}</td>
                <td class="px-4 py-3">
                    @switch($kunjungan->status_periksa)
                        @case(-2) Ditolak @break
                        @case(-1) Diterima Sebagian @break
                        @case(0) Belum Diperiksa @break
                        @case(1) Diterima @break
                        @default Tidak Diketahui
                    @endswitch
                </td>
                <td class="px-4 py-3">
                    @switch($kunjungan->antrian)
                        @case(0) Belum @break
                        @case(1) Antri @break
                        @case(2) Masuk @break
                        @case(3) Selesai @break
                        @default Tidak Diketahui
                    @endswitch
                </td>
                <td class="px-4 py-3">{{ $kunjungan->waktu_antrian }}</td>
                <td class="flex items-center justify-end px-4 py-3">
                    @if($kunjungan->antrian === 0)
                    Antri
                    @elseif($kunjungan->antrian === 1)
                        Masuk
                    @elseif($kunjungan->antrian === 2)
                        Selesai
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
