<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/flowbite.min.css') }}">
    <link rel="stylesheet" href="css/style.css">
</head>

<body style="background:#F6F5F2">

    {{ $slot }}

    <script src="{{ asset('js/flowbite.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.js') }}"></script>
    <script src="js/chart.js"></script>
</body>

</html>
