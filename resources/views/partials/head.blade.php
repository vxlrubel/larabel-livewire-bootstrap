<meta charset="utf-8" />
<meta name="viewport"
    content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? config('app.name') }}</title>

<link rel="icon"
    href="/favicon.ico"
    sizes="any">
<link rel="icon"
    href="/favicon.svg"
    type="image/svg+xml">
<link rel="apple-touch-icon"
    href="/apple-touch-icon.png">

<link rel="preconnect"
    href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600"
    rel="stylesheet" />


    <link rel="stylesheet" href="{{ asset('fontawesome-pro/fontawesome-pro.css') }}">
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

@stack('styles')

@vite(['resources/css/app.scss', 'resources/js/app.js'])

@fluxAppearance
