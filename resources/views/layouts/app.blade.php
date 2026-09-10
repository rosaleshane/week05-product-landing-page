<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tokyo Animania student landing page project featuring premium anime figures and collectibles from Tokyo.">
    <title>@yield('title', 'Tokyo Animania')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Paytone+One&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'DM Sans', sans-serif; }
        .display-font { font-family: 'Paytone One', sans-serif; }
    </style>
</head>
<body class="overflow-x-hidden antialiased">
    @yield('content')
</body>
</html>
