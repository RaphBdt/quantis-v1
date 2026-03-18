<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quantis | @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900">
    <div class="min-h-full">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
            <div class="lg:flex lg:flex-1 justify-start ">
                <a href="{{ route('home') }}" class="text-sm/6 font-semibold text-white">Quantis v1</a>
            </div>
        </nav>

        <div class="py-10">
            <header class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                @if(session('success'))
                    @include('shared.alert', ['message' => session('success')])
                @endif

                <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center">
                    <h1 class="text-3xl font-bold tracking-tight text-white">@yield('title')</h1>
                    <div class="mt-4 lg:mt-0">
                        @yield('header-action')
                    </div>
                </div>
            </header>
            <main>
                <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>
</html>
