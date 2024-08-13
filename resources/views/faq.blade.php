<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kunjungan</title>
    @vite(['resources/css/flowbite.css', 'resources/js/flowbite.js'])
    <link rel="icon" type="image/png" href="{{ url('favicon.png') }}">
</head>

<body>
    @include('part/header')
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
            <h2 class="mb-8 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Frequently Asked Questions</h2>
            <div class="grid pt-8 text-left border-t border-gray-200 md:gap-16 dark:border-gray-700 md:grid-cols-2">
                <div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            Apa saja aturan hukum yang harus dipatuhi selama kunjungan ke lapas?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Pengunjung harus mematuhi aturan seperti tidak membawa barang terlarang, mengikuti prosedur pemeriksaan keamanan, dan mematuhi jadwal kunjungan yang telah ditetapkan. Selain itu, pengunjung harus mengikuti semua petunjuk yang diberikan oleh petugas lapas selama kunjungan.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            Bagaimana prosedur pemeriksaan keamanan dilakukan sebelum kunjungan?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Sebelum masuk ke area lapas, pengunjung akan menjalani pemeriksaan keamanan yang meliputi pemeriksaan barang bawaan, pemeriksaan identitas, dan mungkin pemeriksaan tubuh. Tujuannya adalah untuk mencegah barang-barang terlarang atau berbahaya masuk ke area lapas.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            Apa yang terjadi jika pengunjung melanggar aturan kunjungan?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Jika pengunjung melanggar aturan, mereka bisa dikenakan sanksi seperti pembatalan kunjungan, larangan untuk melakukan kunjungan di masa depan, atau bahkan tindakan hukum sesuai dengan peraturan yang berlaku di lembaga pemasyarakatan.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            Apakah pengunjung diperbolehkan membawa makanan atau minuman selama kunjungan?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Biasanya, pengunjung tidak diperbolehkan membawa makanan atau minuman ke dalam area kunjungan kecuali ada izin khusus dari petugas lapas. Semua barang bawaan akan diperiksa sebelum kunjungan.</p>
                    </div>
                </div>
                <div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            Apa yang harus dilakukan jika pengunjung mengalami masalah hukum selama kunjungan?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Jika terjadi masalah hukum, pengunjung harus segera melaporkan masalah tersebut kepada petugas lapas. Petugas akan mengarahkan pengunjung pada langkah-langkah selanjutnya dan memberikan bantuan sesuai dengan kebijakan dan prosedur yang berlaku.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            Bagaimana cara mengajukan keberatan atau keluhan terkait aturan kunjungan?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Pengunjung dapat mengajukan keberatan atau keluhan melalui saluran resmi yang disediakan oleh lapas, seperti formulir pengaduan atau saluran komunikasi dengan petugas lapas. Proses ini harus mengikuti prosedur yang telah ditetapkan oleh lembaga pemasyarakatan.</p>

                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            Apakah ada batasan waktu untuk kunjungan?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Ya, kunjungan biasanya memiliki batasan waktu yang ditetapkan oleh lapas. Pengunjung harus mematuhi waktu yang ditentukan dan meninggalkan area kunjungan pada waktu yang telah ditetapkan. Melebihi batas waktu dapat mengakibatkan pembatalan kunjungan.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            Apakah ada aturan khusus untuk kunjungan dengan anak-anak atau keluarga?
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">Beberapa lapas mungkin memiliki aturan khusus untuk kunjungan dengan anak-anak atau keluarga, seperti waktu kunjungan khusus, jenis kontak yang diperbolehkan, atau persyaratan tambahan untuk pengunjung muda. Pengunjung diharapkan untuk memeriksa dan mengikuti aturan tersebut sebelum melakukan kunjungan.</p>

                    </div>
                </div>
            </div>
        </div>
      </section>

</body>

</html>
