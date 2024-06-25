<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background:#F6F5F2">

<x-sidebar></x-sidebar>
<div class="p-4 pl-4 sm:ml-64">
   <div class=" ml-6 rounded-lg">
      <x-dashboard></x-dashboard>
   </div>
</div>

<script src="js/chart.js"></script>
</body>
</html>