<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YOUR FIT - FITNESS LOW COST 24H 7SU7</title>
    @livewireStyles
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <x-navbar />
    {{$slot}}
    <x-footer />
    @livewireScripts
</body>
</html>