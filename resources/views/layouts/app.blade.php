<!doctype html>
<html lang="id">
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <title>@yield('title', 'Laravel Project Ajeng')</title>
</head>
<script src="{{ asset('js/script.js') }}"></script>
<body>
    @include('partials.header')

    <main style="padding: 20px;">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>