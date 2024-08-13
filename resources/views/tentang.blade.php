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
        <div class="items-center max-w-screen-xl gap-8 px-4 py-8 mx-auto xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full dark:hidden" src="{{ asset('image/lapasbanner.png') }}" alt="dashboard image">
            <img class="hidden w-full dark:block" src="{{ asset('image/lapasbanner.png') }}" alt="dashboard image">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">Tentang Sistem Informasi Kunjungan Lapas</h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Mari kita ciptakan lebih banyak alat dan ide yang mempererat hubungan kita. Sistem Informasi Kunjungan Lapas Kelas 2 B Tahuna membantu Anda terhubung dengan teman, keluarga, dan komunitas yang memiliki kepentingan yang sama. Menghubungkan diri dengan orang-orang terdekat Anda serta menemukan yang baru sangatlah mudah dengan fitur-fitur seperti Kelompok Kunjungan.</p>
                <a href="/" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                    Registrasi
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
    </section>

</body>

</html>
