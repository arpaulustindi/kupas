<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="submit">
        <div class="grid gap-4 mb-4 sm:grid-cols-2">
            <div>
                <label for="nik"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIK</label>
                <input type="text" id="nik" wire:model="nik"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="NIK" required>
            </div>
            <div>
                <label for="nama_pengunjung"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pengunjung</label>
                <input type="text" id="nama_pengunjung" wire:model="nama_pengunjung"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Nama Pengunjung" required>
            </div>
            <div>
                <label for="narapidana"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Narapidana</label>
                <input type="text" id="narapidana" wire:model="narapidana"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Narapidana" required>
            </div>
            <div>
                <label for="barang_bawaan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Barang Bawaan</label>
                <textarea id="barang_bawaan" wire:model="barang_bawaan" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Barang Bawaan" required></textarea>
            </div>
            <div>
                <label for="hubungan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hubungan</label>
                <input type="text" id="hubungan" wire:model="hubungan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Hubungan" required>
            </div>
            <div>
                <label for="jumlah_pengunjung"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Pengunjung</label>
                <input type="number" id="jumlah_pengunjung" wire:model="jumlah_pengunjung"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Jumlah Pengunjung" required>
            </div>
            <div>
                <label for="tanggal_kunjungan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Kunjungan</label>
                <input type="date" id="tanggal_kunjungan" wire:model="tanggal_kunjungan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
            </div>
            <div>
                <label for="sesi_kunjungan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sesi Kunjungan</label>
                <select id="sesi_kunjungan" wire:model="sesi_kunjungan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    required>
                    <option value="1">Sesi 1</option>
                    <option value="2">Sesi 2</option>
                </select>
            </div>

        </div>
        <button
            data-modal-hide="defaultModal"
            type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            <svg class="w-6 h-6 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
            Registrasi Kunjungan
        </button>
    </form>
