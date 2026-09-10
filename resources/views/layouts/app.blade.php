<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Basic SEO --}}
    <title>@yield('title', 'Tokyo Animania | Anime Figures & Japanese Collectibles')</title>

    <meta
        name="description"
        content="@yield('meta_description', 'Tokyo Animania offers anime figures and Japanese collectibles sourced from Tokyo. Explore featured products and contact the seller for price and availability.')"
    >

    <meta
        name="keywords"
        content="Tokyo Animania, anime figures, anime collectibles, Japanese collectibles, figures from Japan, anime merchandise"
    >

    <meta name="author" content="Tokyo Animania">
    <meta name="robots" content="index, follow">

    {{-- Browser Theme --}}
    <meta name="theme-color" content="#f7f1e7">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph / Social Media Preview --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Tokyo Animania | Anime Figures & Japanese Collectibles')">

    <meta
        property="og:description"
        content="@yield('meta_description', 'Discover premium anime figures and Japanese collectibles from Tokyo with Tokyo Animania.')"
    >

    <meta property="og:url" content="{{ url()->current() }}">

    <meta
        property="og:image"
        content="{{ asset('images/tokyo-animania/logo.png') }}"
    >

    <meta property="og:site_name" content="Tokyo Animania">

    {{-- Twitter / Social Preview --}}
    <meta name="twitter:card" content="summary_large_image">

    <meta
        name="twitter:title"
        content="@yield('title', 'Tokyo Animania | Anime Figures & Japanese Collectibles')"
    >

    <meta
        name="twitter:description"
        content="@yield('meta_description', 'Discover premium anime figures and Japanese collectibles from Tokyo with Tokyo Animania.')"
    >

    <meta
        name="twitter:image"
        content="{{ asset('images/tokyo-animania/logo.png') }}"
    >

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Paytone+One&display=swap"
        rel="stylesheet"
    >

    {{-- Laravel Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'DM Sans', sans-serif;
        }

        .display-font {
            font-family: 'Paytone One', sans-serif;
        }
    </style>
</head>

<body class="overflow-x-hidden antialiased">

    @yield('content')

</body>
</html>