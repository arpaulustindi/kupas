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
            <div class="max-w-screen-sm mx-auto text-center">
                <h2 class="mb-4 text-4xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">Kontak Kami</h2>
                <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Kontak kami melalui whatsapp</p>
                <a href="https://wa.me/0813" target="_blank" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Chat</a>
            </div>
        </div>
    </section>

</body>

</html>
