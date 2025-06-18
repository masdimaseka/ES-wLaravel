<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/svg+xml" href="/assets/icons/icons.svg" />
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-custom-bg min-h-screen">
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif

    <x-layouts.navbar/>

    <main class="container px-8 lg:px-16 py-28 mx-auto">
        {{ $slot }}
    </main>

</body>

</html>
