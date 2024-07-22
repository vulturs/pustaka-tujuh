<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="{{ asset('css/flowbite.min.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="css/select2.min.css"> --}}
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body class="font-body">

    {{-- <div class="bg-dash absolute w-full h-50">
    </div> --}}
    <x-sidebar></x-sidebar>
    <div class="ps-2 sm:ml-64">
        <div class=" ml-6 rounded-lg">
            {{ $slot }}
        </div>
    </div>

    <script src="{{ asset('js/flowbite.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.js') }}"></script>
    <script src="js/chart.js"></script>
    <script src="js/jquery.min.js"></script>
</body>

</html>
