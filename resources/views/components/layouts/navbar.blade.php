<header class="bg-base-100 shadow-sm top fixed w-full z-99">
    <nav class="container navbar flex items-center justify-between mx-auto max-w-screen px-4 lg:px-16 py-2">
        <div>
            <a href="{{ route('index') }}">
                <img src="/assets/icons/icons.svg" class="w-16 h-16" />
            </a>
        </div>


        <div class="hidden lg:flex items-center gap-8">

            <div class="flex items-center gap-8">
                <a href="{{ route('index') }}">
                    <p>HOME</p>
                </a>
                <a href="{{ route('index') }}">
                    <p>KENALI DISC</p>
                </a>
                <a href="{{ route('show.login') }}">
                    <p>ABOUT</p>
                </a>
            </div>

            @guest
                @if (!in_array(Route::currentRouteName(), ['show.login', 'show.register']))
                    <a href="{{ route('show.login') }}" class="btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                            <path fill="#ff4faa"
                                d="M18.5 21.5a2 2 0 1 1-4 0a2 2 0 0 1 4 0m-2 13a2 2 0 1 0 0-4a2 2 0 0 0 0 4M6 12.25A6.25 6.25 0 0 1 12.25 6h23.5A6.25 6.25 0 0 1 42 12.25v23.5A6.25 6.25 0 0 1 35.75 42h-23.5A6.25 6.25 0 0 1 6 35.75zm15 9.25a4.5 4.5 0 1 0-9 0a4.5 4.5 0 0 0 9 0M16.5 37a4.5 4.5 0 1 0 0-9a4.5 4.5 0 0 0 0 9m-3.25-26a1.25 1.25 0 1 0 0 2.5h21.5a1.25 1.25 0 1 0 0-2.5zM23 21.75c0 .69.56 1.25 1.25 1.25h10.5a1.25 1.25 0 1 0 0-2.5h-10.5c-.69 0-1.25.56-1.25 1.25M24.25 31a1.25 1.25 0 1 0 0 2.5h10.5a1.25 1.25 0 1 0 0-2.5z" />
                        </svg>
                        <p>DIAGNOSA</p>
                    </a>
                @endif
            @endguest

            @auth
                <div class="flex lg:items-center gap-2">
                    <a href="{{ route('show.login') }}" class="btn btn-primary bg-custom-primary border-0 shadow-none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                            <path fill="#fff"
                                d="M18.5 21.5a2 2 0 1 1-4 0a2 2 0 0 1 4 0m-2 13a2 2 0 1 0 0-4a2 2 0 0 0 0 4M6 12.25A6.25 6.25 0 0 1 12.25 6h23.5A6.25 6.25 0 0 1 42 12.25v23.5A6.25 6.25 0 0 1 35.75 42h-23.5A6.25 6.25 0 0 1 6 35.75zm15 9.25a4.5 4.5 0 1 0-9 0a4.5 4.5 0 0 0 9 0M16.5 37a4.5 4.5 0 1 0 0-9a4.5 4.5 0 0 0 0 9m-3.25-26a1.25 1.25 0 1 0 0 2.5h21.5a1.25 1.25 0 1 0 0-2.5zM23 21.75c0 .69.56 1.25 1.25 1.25h10.5a1.25 1.25 0 1 0 0-2.5h-10.5c-.69 0-1.25.56-1.25 1.25M24.25 31a1.25 1.25 0 1 0 0 2.5h10.5a1.25 1.25 0 1 0 0-2.5z" />
                        </svg>
                        <p>DIAGNOSA</p>
                    </a>

                    <details class="dropdown dropdown-end">
                        <summary class="btn m-1">
                            <span class="flex align-content-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <circle cx="12" cy="6" r="4" fill="#ff4faa" />
                                    <path fill="#ff4faa"
                                        d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5" />
                                </svg>
                                <span class="font-bold">{{ Auth::user()->name }}</span>
                            </span>
                        </summary>
                        <div class="menu dropdown-content bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm gap-2">
                            <a class="btn">Dashboard</a>
                            <form action="{{ route('logout') }}" method="POST" class="w-full">
                                @csrf
                                <button class="btn btn-error text-white w-full">Log Out</button>
                            </form>
                        </div>
                    </details>
                </div>

            @endauth

        </div>

        <details class="lg:hidden dropdown dropdown-end">
            <summary class="btn m-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 1024 1024">
                    <path fill="#ff4faa"
                        d="M160 448a32 32 0 0 1-32-32V160.064a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V416a32 32 0 0 1-32 32zm448 0a32 32 0 0 1-32-32V160.064a32 32 0 0 1 32-32h255.936a32 32 0 0 1 32 32V416a32 32 0 0 1-32 32zM160 896a32 32 0 0 1-32-32V608a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32v256a32 32 0 0 1-32 32zm448 0a32 32 0 0 1-32-32V608a32 32 0 0 1 32-32h255.936a32 32 0 0 1 32 32v256a32 32 0 0 1-32 32z" />
                </svg>
            </summary>
            <div class="menu dropdown-content bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm gap-2">
                <div class="flex flex-col gap-2">
                    <a href="{{ route('index') }}" class="btn w-full">
                        <p>HOME</p>
                    </a>
                    <a href="{{ route('index') }}" class="btn w-full">
                        <p>KENALI DISC</p>
                    </a>
                    <a href="{{ route('show.login') }}" class="btn w-full">
                        <p>ABOUT</p>
                    </a>
                </div>

                @guest
                    @if (!in_array(Route::currentRouteName(), ['show.login', 'show.register']))
                        <a href="{{ route('show.login') }}" class="btn w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                                <path fill="#ff4faa"
                                    d="M18.5 21.5a2 2 0 1 1-4 0a2 2 0 0 1 4 0m-2 13a2 2 0 1 0 0-4a2 2 0 0 0 0 4M6 12.25A6.25 6.25 0 0 1 12.25 6h23.5A6.25 6.25 0 0 1 42 12.25v23.5A6.25 6.25 0 0 1 35.75 42h-23.5A6.25 6.25 0 0 1 6 35.75zm15 9.25a4.5 4.5 0 1 0-9 0a4.5 4.5 0 0 0 9 0M16.5 37a4.5 4.5 0 1 0 0-9a4.5 4.5 0 0 0 0 9m-3.25-26a1.25 1.25 0 1 0 0 2.5h21.5a1.25 1.25 0 1 0 0-2.5zM23 21.75c0 .69.56 1.25 1.25 1.25h10.5a1.25 1.25 0 1 0 0-2.5h-10.5c-.69 0-1.25.56-1.25 1.25M24.25 31a1.25 1.25 0 1 0 0 2.5h10.5a1.25 1.25 0 1 0 0-2.5z" />
                            </svg>
                            <p>DIAGNOSA</p>
                        </a>
                    @endif
                @endguest

                @auth
                    <div class="flex flex-col gap-2">
                        <a href="{{ route('show.login') }}" class="btn w-full btn-primary bg-custom-primary border-0 shadow-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48">
                                <path fill="#fff"
                                    d="M18.5 21.5a2 2 0 1 1-4 0a2 2 0 0 1 4 0m-2 13a2 2 0 1 0 0-4a2 2 0 0 0 0 4M6 12.25A6.25 6.25 0 0 1 12.25 6h23.5A6.25 6.25 0 0 1 42 12.25v23.5A6.25 6.25 0 0 1 35.75 42h-23.5A6.25 6.25 0 0 1 6 35.75zm15 9.25a4.5 4.5 0 1 0-9 0a4.5 4.5 0 0 0 9 0M16.5 37a4.5 4.5 0 1 0 0-9a4.5 4.5 0 0 0 0 9m-3.25-26a1.25 1.25 0 1 0 0 2.5h21.5a1.25 1.25 0 1 0 0-2.5zM23 21.75c0 .69.56 1.25 1.25 1.25h10.5a1.25 1.25 0 1 0 0-2.5h-10.5c-.69 0-1.25.56-1.25 1.25M24.25 31a1.25 1.25 0 1 0 0 2.5h10.5a1.25 1.25 0 1 0 0-2.5z" />
                            </svg>
                            <p>DIAGNOSA</p>
                        </a>

                        <details class="dropdown dropdown-end w-full">
                            <summary class="btn w-full">
                                <span class="flex align-content-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <circle cx="12" cy="6" r="4" fill="#ff4faa" />
                                        <path fill="#ff4faa"
                                            d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5" />
                                    </svg>
                                    <span class="font-bold">{{ Auth::user()->name }}</span>
                                </span>
                            </summary>
                            <div class="menu dropdown-content bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm gap-2">
                                <a class="btn">Dashboard</a>
                                <form action="{{ route('logout') }}" method="POST" class="w-full">
                                    @csrf
                                    <button class="btn btn-error text-white w-full">Log Out</button>
                                </form>
                            </div>
                        </details>
                    </div>

                @endauth
            </div>
        </details>
    </nav>
</header>
