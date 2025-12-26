<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @else
            <style>
                /* Minimal CSS Reset */
                *, *::before, *::after { 
                    box-sizing: border-box;
                    margin: 0;
                    padding: 0;
                }
                body { 
                    font-family: "Plus-Jakarta Sans", sans-serif;
                    background: #fafbfc;
                    color:#222;
                    min-height: 100vh;
                    line-height: 1.6;
                }
            </style>
        @endif
    </head>
    <body>
        <h1 class="text-primary">Bootstrap Ready</h1>
        <h2 class="text-secondary">Bootstrap Ready</h2>
        <h3 class="text-info">Bootstrap Ready</h3>
        <h4 class="text-success">Bootstrap Ready</h4>
        <h5 class="text-danger">Bootstrap Ready</h5>
        <h6 class="text-muted">Bootstrap-ready</h6>
    </body>
</html>