<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Crud') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('products.index') }}" class="flex justify-center pt-4 sm:justify-start mx-auto w-60 sm:w-70">
                <img src="{{ asset('logo.png') }}" alt="Crud">
            </a>

            <div class="mt-8">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>

</html>