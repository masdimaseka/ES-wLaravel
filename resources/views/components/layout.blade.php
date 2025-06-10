<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body>
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif

    <header class="bg-base-100 shadow-sm">
        <nav class="container navbar flex items-center justify-between mx-auto max-w-screen px-2 lg:px-16 py-2">
            <div>
                <a href="{{ route('index') }}" class="btn btn-ghost text-xl text-primary font-bold">ES DISC</a>
            </div>


            <div class="flex items-center gap-4">
                @guest
                    <a href="{{ route('show.login') }}" class="btn btn-primary">Login</a>
                @endguest

                @auth
                    <span class="border-r-2 pr-2">
                        Hi, {{ Auth::user()->name }}
                    </span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-error text-white">Log Out</button>
                    </form>
                @endauth

            </div>
            </ul>
        </nav>
    </header>


    <main class="container px-8 lg:px-20 pt-8 pb-24">
        {{ $slot }}
    </main>

</body>

</html>
