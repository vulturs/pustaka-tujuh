<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    <!-- <link rel="stylesheet" href="{{asset('css/flowbite.min.css')}}"> -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background:#F6F5F2">

<x-sidebar></x-sidebar>
<div class="p-4 px-6 sm:ml-64">
   <div class=" ml-6 rounded-lg">
      {{ $slot }}
   </div>
</div>

<script src="{{asset('js/flowbite.min.js')}}"></script>
<script src="{{asset('js/apexcharts.js')}}"></script>
<script src="js/chart.js"></script>
</body>
</html>