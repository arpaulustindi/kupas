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

    <section class="p-3 bg-gray-50 dark:bg-gray-900 sm:p-5">
        <div class="max-w-screen-xl px-4 mx-auto lg:px-12">
            <!-- Start coding here -->
            <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                @livewire('antrian')
            </div>
        </div>
        </section>

</body>

</html>

