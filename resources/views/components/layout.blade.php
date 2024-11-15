<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="text-white bg-gray-50">
    <x-navigation />
    {{$slot}}
</body>
</html>
